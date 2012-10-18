<?php
Class admin_model extends CI_Model
{
	function login($username, $password)
	{
		$this -> db -> select('id, username, password');
		$this -> db -> from('users');
		$this -> db -> where('username = ' . "'" . $username . "'"); 
		$this -> db -> where('password = ' . "'" . MD5($password) . "'"); 
		$this -> db -> limit(1);

		$query = $this -> db -> get();

		if($query -> num_rows() == 1)
		{
			return $query->result();
		}
		else
		{
			return false;
		}

	}
	public function validate_video($url)
	{
		//echo"<BR> url in validate: ".$url."<BR>";
		if (@simplexml_load_file($url))
		{
			//echo"<BR> validate_video true<BR>";
			return true;
		}
		else 
		{
			//echo"<BR> validate_video false <BR>";
			return false;
		}
	}
	
	public function get_thumbnail($imgSrc)
	{
		//echo $imgSrc;
		$ooyala_pcode = 'g5OGk6CcUnFlUY7eFGtaeO6R5M37';
		$ooyala_scode = '7h3vtZe82xTXX--zSTg5tnYOoHGO31s6S2_yrNnv';
		$string_to_sign = $ooyala_scode;
		$urlBase = 'http://api.ooyala.com/partner/thumbnails';
		$url = $urlBase.'?pcode='.$ooyala_pcode;
		$params = array('range' => '0-20','resolution'=>'960x540',);
		$params['expires'] = time() + 900;
		$params['embedCode'] = $imgSrc;
		$keys = array_keys($params);
		sort($keys);
		foreach ($keys as $key) 
		{
			$string_to_sign .= $key.'='.$params[$key];
			$url.= '&'.rawurlencode($key).'='.rawurlencode($params[$key]);
		}
		$digest = hash('sha256', $string_to_sign, true);
		$signature = preg_replace('#=+$#', '', trim(base64_encode($digest)));
		$url.= '&signature='.rawurlencode($signature);

		$img_url=null;
		$img_url_list = null;
		//echo"<BR> img URL:".$url."<BR>";
		if ($this->validate_video($url))
		{
			$xml = simplexml_load_file($url);		
			foreach($xml->children() as $child)
			{
				if($child->getName()=='thumbnail' || $child->getName()=='promoThumbnail')
				{
					if($img_url==null)
						$img_url=$child;
					else
						$img_url = $img_url.','.$child;
				}
			}
			return $img_url;
		}
		else
		{
			return "Invalid Video Id";
		}
	}

	function add_video($data)
	{
		$formData = $data['formData'];
		if(!array_key_exists('editorpick',$formData))
			$formData['editorpick'] = 0;
		else if($formData['editorpick'] == 'on')
			$formData['editorpick'] = 1;
		$thumbnail_url = $this->get_thumbnail($formData['url']);
		if($thumbnail_url == "Invalid Video Id")
		{
			//echo "error";
			return false;
		}
		else
		{
			//$imageName = $thumbnail_url;
			$imageName = "videothumbs/".str_replace("%","",rawurlencode($formData['title'])).".jpg";
			//echo "STRPOS ".strpos($thumbnail_url,',')."<BR>";
			//echo "SUB ".substr($thumbnail_url,0,strpos($thumbnail_url,','));
			$image = file_get_contents(substr($thumbnail_url,0,strpos($thumbnail_url,',')));
			file_put_contents($imageName, $image);
			$formData['thumbnail'] = $imageName;	
			$this->db->insert('video',$formData);
			return $thumbnail_url;
		}
	}
	function video_details()
	{
		$this->db->select('id, title, description, category, thumbnail, url');
		$this->db->order_by('position','ASC');
		$query = $this->db->get('video');
		//echo "<BR>";
		//foreach($query ->result_array() as $row)
		//	echo $row['title']."<BR>";
		return $query ->result_array();
	}
	function edit_video($updateData)
	{
		//echo "<pre>";
		//print_r($updateData);
		//echo "</pre>";
		
		$this->db->where('id', $updateData['id']);
		unset($updateData['id']);
		$this->db->update('video', $updateData); 

		//$this->db->where('id', $id);
		//$this->db->update('mytable', $data); 
		//return $query->row_array() ;
		return true;
	}
	function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('video');
	}
	function add_thumb($formData)
	{
		$image = file_get_contents($formData['thumb']);
		$this->db->select('thumbnail');
		$this->db->where('title',$formData['title']);
		$query = $this->db->get('video');
		$imgName = $query->row_array();
		//echo "<PRE>";
		//print_r($imgName);
		//echo "</PRE>";
		file_put_contents($imgName['thumbnail'], $image);
		return $imgName['thumbnail'];
	}
	function getTitle($url)
	{
		$this->db->select('title');
		$this->db->where('url',$url);
		$query = $this->db->get('video');
		$result = $query->row_array();
		return $result['title'];
	}
	function upload_video($data)
	{
		$formData=$data['formData'];
		$embedCode = $this->publish($data);
		$formData['url']=$embedCode['0'];
		$data['formData']= $formData;		
		return $this->add_uploadVideo($formData);
	}
	
	function changePassword($newPassword)
	{
		$data = array('password'=>MD5($newPassword));
		$this->db->where('username','admin');
		$this->db->update('users',$data);
	}
	
	function videoSort($position)
	{
		$positions = explode(';',$position);
		foreach ($positions as $videoPosition)
		{
			$video_changes=explode('=',$videoPosition);
			
			if(empty($video_changes[0]))
				break;
			$data = array('position'=>$video_changes[1]);
			$this->db->where('id',$video_changes[0]);
			$this->db->update('video',$data);
		}
	}
	
	function add_uploadVideo($formData)
	{
		$tempImage = "videothumbs/error-960x540.JPG";
		$imageName = "videothumbs/".str_replace("%","",rawurlencode($formData['title'])).".jpg";
		//echo "STRPOS ".strpos($thumbnail_url,',')."<BR>";
		//echo "SUB ".substr($thumbnail_url,0,strpos($thumbnail_url,','));
		$image = file_get_contents($tempImage);
		file_put_contents($imageName, $image);
		$formData['thumbnail'] = $imageName;
			
		$formData['thumbnail'] = $imageName;	
		unset($formData['file']);
		//echo"<pre>";
		//print_r($formData);
		//echo"<PRE>";
		$this->db->insert('video',$formData);
		return $imageName;
	}
	
	function publish($data)
	{
		// this kicks off the massive publish functions
		$formData=$data['formData'];
		$uploadedFile = $data['uploadedFile'];
		$labels = $formData['title'];
		$file = realpath($uploadedFile);
		$dir = $file;
		$name = explode("\\", $dir );
		$name = array_reverse($name );//this get just the name of the file and not
		//the whole path for the name and title of the video
		$nameforshow = $name[0];
		$label = '/'.$labels;
		$filesize = filesize($dir);
		$expires = time() + 900;
		$upload = $this->upload(array('expires' => $expires,
												 'file_size' => $filesize,
												 'file_name' => $name[0],
												 'title' => $name[0]),$dir,$label);
												//send this to the upload function
		return $upload;
	}

	function upload($params,$dir,$label)
	{
		//this passes to the send request function
										//for the first time
		return $this->send_request('create_video', $params,$dir,$label,'');
	}

	function upload_complete($params,$label2)
	{
		//this gets hit after posting the video to ooyala
		$label3 = $label2;
		$dir ='';
		$label = '';
		return $this->send_request('upload_complete', $params,'','',$label3);
		//goes back to send request for the second time
	}

	function assign_label($params)
	{
		//this starts creating and assigning labels
		return $this->send_request2('labels', $params);//this kicks off send request 2
	}

	function send_request($request_type, $params,$dir,$label,$label3)
	{
		// first time through this hits the create video url and returns a url
		//to post the video to. second time through we hit the upload complete url
		$ooyala_pcode = 'g5OGk6CcUnFlUY7eFGtaeO6R5M37';
		$ooyala_scode = '7h3vtZe82xTXX--zSTg5tnYOoHGO31s6S2_yrNnv';
		if (!array_key_exists('expires', $params)) {
			$params['expires'] = time() + 900;
		}
		$string_to_sign = $ooyala_scode;
		$url = 'http://api.ooyala.com/ingestion/'.$request_type.'?pcode='.$ooyala_pcode;
		$keys = array_keys($params);
		sort($keys);
		foreach ($keys as $key) {
			$string_to_sign .= $key.'='.$params[$key];
			$url .= '&'.rawurlencode($key).'='.rawurlencode($params[$key]);
		}
		$digest = hash('sha256', $string_to_sign, true);
		$signature = ereg_replace('=+$', '', trim(base64_encode($digest)));
		$url .= '&signature='.rawurlencode($signature);
		//echo "<BR>".$url."<BR>";
		if ($request_type == 'create_video') 
		{
			// if type is create video then
			//parse the returned xml for the post url
			$xml = simplexml_load_file($url);
			foreach($xml->children() as $child)
			{
				if($child->getName()=='embedCode')
				{
					$embed_code = $child;
				}
				if($child->getname()=='urls')
				{
					//echo '<BR>'.'in urls'.'<BR>'.'<BR>';
					$upload_url = $child->children();
					$file= $dir;
					$label2 = $label;
					$ch = curl_init($upload_url);
					curl_setopt($ch, CURLOPT_POSTFIELDS, array('file'=>"@$file"));
					//post the file
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
					$postResult = curl_exec($ch);
					curl_close($ch);
					if ($postResult != '')
					{
						$upload_complete = $this->upload_complete(array('embed_code' => $embed_code),$label2);
						//after posting you have to hit the upload complete url
						//to get ooyala to process the video.
						//so kick this up to the upload complete function
						return (array)$embed_code;
					}
				}
			}
		}
		else
		{
			if ($request_type == 'upload_complete') 
			{
				// hit the upload complete url
				$ch = curl_init($url);
				$postResult2 = curl_exec($ch);
				curl_close($ch);
				$add_label = $this->assign_label(array('embedCodes' => $params['embed_code'], 'labels' => $label3,
				'mode'=>'assignLabels'));
				// this kicks back up to assign label function to add a label
				//to the video
				//echo '<BR>'.'upload complete'.'<BR>'.$params['embed_code'].'<BR>';
			}
		}
	}

	function send_request2($request_type, $params)
	{
		// this creates the url to hit to add a label to the last uploaded video
		$ooyala_pcode = 'g5OGk6CcUnFlUY7eFGtaeO6R5M37';
		$ooyala_scode = '7h3vtZe82xTXX--zSTg5tnYOoHGO31s6S2_yrNnv';
		//Add an expire time of 15 minutes unless otherwise specified
		if (!array_key_exists('expires', $params)) {
			$params['expires'] = time() + 900;
		}
		$string_to_sign = $ooyala_scode;
		$url = 'http://api.ooyala.com/partner/'.$request_type.'?pcode='.$ooyala_pcode;
		$keys = array_keys($params);
		sort($keys);
		foreach ($keys as $key) {
			$string_to_sign .= $key.'='.$params[$key];
			$url .= '&'.rawurlencode($key).'='.rawurlencode($params[$key]);
		}
		$digest = hash('sha256', $string_to_sign, true);
		$signature = ereg_replace('=+$', '', trim(base64_encode($digest)));
		$url .= '&signature='.rawurlencode($signature);
		$ch = curl_init($url);
		$postResult3 = curl_exec($ch);
		curl_close($ch);//now the video is done and uploaded to ooyala
	}
}
?>