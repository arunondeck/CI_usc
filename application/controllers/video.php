<?php
class Video extends CI_Controller
{
	public function _construct()
	{
		parent::__construct();
		//$this->load->model('video_model');
		$this->load->library('image_lib');
	}
	public function index()
	{
		redirect('/video/view');
	}
	public function view($category=null)
	{
		$this->load->model('video_model');
		if($_POST)
			$filter = str_replace("_"," ",$_POST['filter']);
		else
			$filter = 'date';
		$efpos = strpos($_SERVER['REQUEST_URI'], '?_escaped_fragment_=');
		//echo "efpos : ".$efpos."<BR>";
		if($efpos>-1)
		{
			//crawler code
			if(strpos($_SERVER['REQUEST_URI'],'videopcode'>-1))
			{
				//crawler video url under testing
			}
			else
			{
				$arr = explode('?_escaped_fragment_=', $_SERVER['REQUEST_URI']);

				$arr[1] = str_replace("_"," ",$arr[1]);
				
				$this->load->view('header');
				$data['category'] = $this->video_model->get_newest();
				$this->load->view('slider',$data);
				$this->load->view('nav_panel');
				$data['category'] = $this->video_model->show_video($arr[1],$filter);
				if(!empty($data['category']))
				{
					$data['page_title'] = $arr[1];
					$this->load->view('categoryView',$data);
				}
			}
			$this->load->view('index');
			return;
		}
			
		//echo "<BR>.category :".$category."<BR>";
		if(!empty($category))
		{
			$category = str_replace("_"," ",$category);
			$data['category'] = $this->video_model->show_video($category,$filter);
			if(!empty($data['category']))
				$this->load->view('categoryView',$data);
			else
				echo "No Videos for selected category : ".$category;
		}
		else
		{
			$data['category'] = $this->video_model->get_newest();
			$this->load->view('header');
			$this->load->view('slider',$data);
			$this->load->view('nav_panel');
			$this->load->view('categoryView',$data);
			$this->load->view('index');
		}
	}
	public function category($category = "all")
	{
		echo"hello category".$category;
	}
	public function showvideo($videoCode)
	{
		$this->load->model('video_model');
		$data['videoCode']=$_POST['embedcode'];
		$this->video_model->updateWatched($data['videoCode']);
		//$this->video_model->putPlayer($videoCode);
		$this->load->view('showVideo',$data);
	}
	public function homevideo($videoCode)
	{
		$this->load->model('video_model');
		$data['videoCode']=$_POST['embedcode'];
		//$data['videoCode']=$videoCode;
		$data['video'] = $this->video_model->getVideo($data['videoCode']);
		$this->video_model->updateWatched($data['videoCode']);
		$this->load->view('homeVideo',$data);
	}
	public function add()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		$data['title'] = 'Add a New Video';
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('text', 'text', 'required');
		
		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('header', $data);	
			$this->load->view('add');
			//$this->load->view('add2');
			$this->load->view('index');
			
		}
		else
		{
			$this->news_model->set_news();
			$this->load->view('success');
		}
	}
	public function getthumb($imgSrc)
	{
		$this->load->model('video_model');
		if(empty($imgSrc))
			$imgSrc='hycXB4MjogVLg5Pk5K7BSNEfTrdBzZ4o';
		$data['img_url'] = $this->video_model->thumbnail($imgSrc);
		$this->load->view('getimage',$data);
	}
	public function makeThumbs()
	{
		$this->load->model('video_model');
		$this->video_model->updateThumbs();
	}
	public function search($sTerm=null)
	{
		$this->load->model('video_model');
		if(isset($sTerm))
		{
			$sTerm = str_replace("_"," ",$sTerm);
			$result=$this->video_model->search($sTerm);
			$data['category']=$result;
			//echo"<PRE>";
			//print_r($data);
			//echo"</PRE>";
			//$this->load->view('header');
			//$this->load->view('slider',$data);
			//$this->load->view('nav_panel');
			$this->load->view('categoryView',$data);
			//$this->load->view('index');
		}
		else 
			echo "unset";
	}
}