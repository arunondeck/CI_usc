<?php
class video_model extends CI_model
{
	function _construct()
	{
		//$this->load->database();
	}
	public function putPlayer($videoCode)
	{	
		echo '
		<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" id="ooyalaPlayer_3ntns_gzjue3ys" width="640" height="360" codebase="http://fpdownload.macromedia.com/get/flashplayer/current/swflash.cab">
		<param name="movie" value="http://player.ooyala.com/player.swf?embedCode='.$videoCode.'&version=2" />
		<param name="bgcolor" value="#000000" />
		<param name="allowScriptAccess" value="always" />
		<param name="allowFullScreen" value="true" />
		<param name="flashvars" value="embedType=noscriptObjectTag&embedCode='.$videoCode.'&videoPcode=g5OGk6CcUnFlUY7eFGtaeO6R5M37" />
		<embed src="http://player.ooyala.com/player.swf?embedCode='.$videoCode.'&version=2" bgcolor="#000000" width="640" height="360" name="ooyalaPlayer_3ntns_gzjue3ys" align="middle" play="true" loop="false" allowscriptaccess="always" allowfullscreen="true" type="application/x-shockwave-flash" flashvars="&embedCode='.$videoCode.'&videoPcode=g5OGk6CcUnFlUY7eFGtaeO6R5M37" pluginspage="http://www.adobe.com/go/getflashplayer">
		</embed>
	</object>';
	}
	public function getVideo($videoCode)
	{
		$this->db->select('id,title,description,category,date,thumbnail');
		$this->db->where('url',$videoCode);
		$query=$this->db->get('video');
		return $query->row_array();
	}
	public function rateVideo()
	{
	}
	public function thumbnail($imgSrc)
	{
		//echo $imgSrc;
		$ooyala_pcode = 'g5OGk6CcUnFlUY7eFGtaeO6R5M37';
		$ooyala_scode = '7h3vtZe82xTXX--zSTg5tnYOoHGO31s6S2_yrNnv';
		$string_to_sign = $ooyala_scode;
		$urlBase = 'http://api.ooyala.com/partner/thumbnails';
		$url = $urlBase.'?pcode='.$ooyala_pcode;
		$params = array('range' => '10-10','resolution'=>'960x540',);
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
		//echo $url;
		$img_url=null;

		$xml = simplexml_load_file($url);
        foreach($xml->children() as $child)
		{
            if($child->getName()=='thumbnail')
			{
                $img_url = $child;
				//echo $img_url;
            }
			else if($child->getName()=='promoThumbnail')
			{
                $img_url = $child;
				//echo $img_url;
            }
		}
		return $img_url;
	}

	public function updateThumbs()
	{
		$this->db->select('id, url, thumbnail');
		$query = $this->db->get('video');
		$result;
		
		//echo"<pre>";
		//print_r($query->result_array());
		//echo"</pre><br>";
		
		
		foreach($query->result_array() as $row)
		{
			//echo $row['url']."<BR>";
			$result[$row['id']] = $this->thumbnail($row['url']);
		}
		
		//echo"<pre>";
		//print_r($result);
		//echo"</pre><br>";
	}
	public function get_newest()
	{
		$sql = "SELECT id, title, description, category, thumbnail, url, DATE_FORMAT( date, '%m.%d.%y' ) AS date FROM video ORDER BY date DESC LIMIT 9";
		$query = $this->db->query($sql);
		
		//echo "start ".$query->result_array();
		//foreach($query->result_array() as $row)
		//{
		//	echo"<pre>";
		//	print_r($row);
		//	echo"</pre><br>";
		//}
		//echo"end .<BR>";
				
		return $query->result_array();
	}
	
	public function get_list()
	{
		$sql = "SELECT id, title, description, category, thumbnail, url, DATE_FORMAT( date, '%m.%d.%y' ) AS date FROM video ORDER BY position ASC LIMIT 9";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	
	public function show_video($category,$filter='date')
	{
		//echo" attained nirvana ".$category." ".$filter;

		if(strtolower($filter)=="newest")
			$filter='date';
		else if(strtolower($filter)=="most watched")
			$filter='watched';
		else if(strtolower($filter)=="highest rated")
			$filter='rating';
		
		if(strtolower($filter)=="editor's picks")
		{
			$this->db->where('editorpick','1');
			if(strtolower($category)!='all videos')
			{	
				//echo "in loop editor ".$category;
				$this->db->like('category', $category);
			}
			$query = $this->db->get('video');
		}
		else
		{
			$this->db->order_by($filter,"desc");
			$this->db->order_by("id","desc");
			if(strtolower($category)=='all videos')
			{
				//echo "<BR> in loop1 <br>";
				$query = $this->db->get('video');
				//echo "start ".$query->result_array();
				//foreach($query->result_array() as $row)
				//{
				//	echo"<pre>";
				//	print_r($row);
				//	echo"</pre><br>";
				//}
				//echo"end .<BR>";
			}
			else
			{
				//echo "<BR> in loop2 <br>";
				$this->db->select($filter);
				//$where = "category = '".$category."' OR category2 = '".$category."'";
				$this->db->like('category', $category);
				//$where = "category = 'news' OR category2 = 'news'";
				$this->db->select('id, title, description, thumbnail, category, url')->from('video');
				$query = $this->db->get();
				//foreach($query->result_array() as $row)
				//{
				//	echo"<pre>";
				//	print_r($row);
				//	echo"</pre><br>";
				//}
				//echo"end .<BR>";
			}
		}
		return $query->result_array();
	}
	function updateWatched($videoCode)
	{
		$this->db->where('url',$videoCode);
		$this->db->select('watched');
		$query = $this->db->get('video');
		$value = $query->row_array();
		//echo "<PRE>";
		//print_r($value);
		//echo "<PRE>";
		$this->db->where('url',$videoCode);
		$this->db->update('video',array('watched' => $value['watched']+1));
	}
	function search($sTerm)
	{
		$this->db->like('title',$sTerm);
		$query = $this->db->get('video');
		//echo "<PRE>";
		//print_r($query->row_array());
		//echo "<PRE>";
		return $query->result_array();
	}
}
?>