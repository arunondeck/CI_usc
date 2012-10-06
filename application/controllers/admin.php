<?php

class admin extends CI_Controller 
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
		$this->load->library('form_validation');
	}

	function index()
	{
		$this->load->view('header_admin');
		$this->load->helper(array('form', 'url'));
		$this->load->view('admin_login');
	}
	function verfiylogin()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('header_admin');
			$this->load->view('admin_login');
		}
		else
		{
			redirect('admin/home', 'refresh');
		}
	
	}
	function check_database($password)
	{
		$username = $this->input->post('username');
		$result = $this->admin_model->login($username, $password);

		if($result)
		{
			$sess_array = array();
			foreach($result as $row)
			{
				$sess_array = array('id' => $row->id,'username' => $row->username);
				$this->session->set_userdata('logged_in', $sess_array);
			}
			return TRUE;
		}
		else
		{
			$this->form_validation->set_message('check_database', 'Invalid username or password');
			return false;
		}
	}
	
	function delete($id=null)
	{
		if(!$this->session->userdata('logged_in'))
			redirect('admin','refresh');
		if(isset($id))
		{
			$this->admin_model->delete($id);
			redirect('admin/home', 'refresh');
		}
		
	
	}
	
	function home()
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			//echo "<pre>";
			//print_r($session_data);
			//echo "</pre>";
			$data['username'] = $session_data['username'];
			$this->load->view('header_admin');
			$data['results'] = $this->admin_model->video_details();
			$this->load->view('admin_home', $data);
			//$this->load->view('edit_home',$data);
			$this->load->view('index_admin');
		}
		else
		{
			redirect('admin', 'refresh');
		}
	}
	
	function logout()
	{
		$this->session->unset_userdata('logged_in');
		//$this->session->sess_destroy();
		session_destroy();
		redirect('/video/view', 'refresh');
	}
	function add()
	{
		if(!$this->session->userdata('logged_in'))
			redirect('admin','refresh');
		$this->load->view('add_video');
		$this->load->view('index_admin');
	}
		
	function upload()
	{
		if(!$this->session->userdata('logged_in'))
			redirect('admin','refresh');
		$this->load->view('header_admin');
		$this->load->view('upload_form', array('error' => ' ' ));
		$this->load->view('index_admin');
	}
	
	function validateAdd()
	{
		if(!$this->session->userdata('logged_in'))
			redirect('admin','refresh');
		$categorylist = null;
		if(array_key_exists('category',$_POST))
			$categorylist = implode(',',$_POST['category']);
		$_POST['category'] = $categorylist;
		$this->load->library('form_validation');
		$this->form_validation->set_rules('title', 'Title', 'trim|required|max_length[30]|xss_clean');
		$this->form_validation->set_rules('description', 'Description', 'trim|required|max_length[135]|xss_clean');
		$this->form_validation->set_rules('category', 'Category', 'trim|required|xss_clean');
		$this->form_validation->set_rules('url', 'Ooyala Video Id', 'trim|required|xss_clean');
		if($this->form_validation->run() == FALSE)
		{
			
			$this->load->view('add_video');
			$this->load->view('index_admin');
		}
		else
		{
			$data['formData'] = $_POST;
			$data['imagePath'] = $this->admin_model->add_video($data);
			if($data['imagePath'])
			{
				$data['dest']='admin/add_success';
				$data['imagePath'] = explode(',',$data['imagePath']);
				$this->load->view('header_admin');
				$this->load->view('thumbSelect',$data);
				$this->load->view('index_admin');
			}
			else
			{
				$this->load->view('header_admin');
				$this->load->view('upload_error.php',$data);
				$this->load->view('index_admin');
			}
		}
	}
	
	function validateUpload()
	{
		if(!$this->session->userdata('logged_in'))
			redirect('admin','refresh');
		$categorylist = null;
		if(array_key_exists('category',$_POST))
			$categorylist = implode(',',$_POST['category']);
		$_POST['category'] = $categorylist;
		/*echo 'files<br><PRE>';
		print_r($_FILES);
		echo 'post<br><PRE>';
		echo '<PRE>';
		print_r($_POST);
		echo '<PRE>';
		*/
		
		$this->load->library('form_validation');
		$this->form_validation->set_rules('title', 'Title', 'trim|required|max_length[30]|xss_clean');
		$this->form_validation->set_rules('description', 'Description', 'trim|required|max_length[135]|xss_clean');
		$this->form_validation->set_rules('category', 'Category', 'trim|required|xss_clean');
		
		
		$allowed_filetypes = array('.flv','.mp4','.mov','.avi','.mpg','.wmv','.mpeg'); 
		$filename = $_FILES['file']['name']; 
		$ext = substr($filename, strpos($filename,'.'), strlen($filename)-1);
		//echo "<BR>filename: ".$filename."<BR>";
		//echo "<BR>ext: ".$ext."<BR>";

		if(!in_array($ext,$allowed_filetypes) || $this->form_validation->run() == FALSE)
		{
			$data['file_error']='Invalid file uploaded';
			$this->load->view('header_admin');
			$this->load->view('upload_form',$data);
			$this->load->view('index_admin');
		}
		else
		{
			$data['formData'] = $_POST;
			$uploadedFile = "uploads/" . $_FILES["file"]["name"];
			$data['uploadedFile']= $uploadedFile;
			move_uploaded_file($_FILES["file"]["tmp_name"],$uploadedFile);
			$data['imagePath'] = $this->admin_model->upload_video($data);
			if($data['imagePath'])
			{
				$this->load->view('header_admin');
				$this->load->view('upload_success',$data);
				$this->load->view('index_admin');
			}
			else
			{
				$this->load->view('header_admin');
				$this->load->view('upload_error.php',$data);
				$this->load->view('index_admin');
			}
		}//*/
	}
	
	function add_success()
	{
		if(!$this->session->userdata('logged_in'))
			redirect('admin','refresh');
		$data['formData'] = $_POST;
		$data['imagePath'] = $this->admin_model->add_thumb($data['formData']);
		$this->load->view('header_admin');
		$this->load->view('add_success',$data);
		$this->load->view('index_admin');
	}
	function edit($video_id=null)
	{
		if(!$this->session->userdata('logged_in'))
			redirect('admin','refresh');
		//echo 'edit this video';
		/*if($video_id != null)
		{
			$data['video_result'] = $this->admin_model->edit_video($video_id);	
			$this->load->view('edit_video',$data);
		}
		else
		{*/
			$data['results'] = $this->admin_model->video_details();
			$this->load->view('header_admin.php');
			$this->load->view('edit_home',$data);
		//}
	}
	function edit_video()
	{
		if(!$this->session->userdata('logged_in'))
			redirect('admin','refresh');
		//echo "<PRE>";
		//	print_r($_POST);
		//echo "</PRE>";
		$categorylist = null;
		if(array_key_exists('category',$_POST))
			$categorylist = implode(',',$_POST['category']);
		//echo $categorylist;
		$_POST['category'] = $categorylist;
		
		$this->load->library('form_validation');
		$this->form_validation->set_rules('title', 'Title', 'trim|required|max_length[30]|xss_clean');
		$this->form_validation->set_rules('description', 'Description', 'trim|required|max_length[135]|xss_clean');
		$this->form_validation->set_rules('category', 'Category', 'trim|required|xss_clean');
		if($this->form_validation->run() == FALSE)
		{
			redirect('admin/home');
		}
		else
		{
			$formData = $_POST;
			$this->admin_model->edit_video($formData);
			$data['message'] = "Video ".$formData['title']." successfully edited.";
			$data['results'] = $this->admin_model->video_details();
			//$this->load->view('header_admin.php');
			//$this->load->view('edit_home',$data);
			
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$this->load->view('header_admin');
			$data['results'] = $this->admin_model->video_details();
			$this->load->view('admin_home', $data);
			$this->load->view('index_admin');
		}
		
	}
	
	function thumbEdit($url=null)
	{
		if(!$this->session->userdata('logged_in') || !isset($url))
			redirect('admin','refresh');
		$thumbnail = $this->admin_model->get_thumbnail($url);
		$formData['title']=$this->admin_model->getTitle($url);
		$data['imagePath'] = explode(',',$thumbnail);
		$data['formData']=$formData;
		$data['dest']='admin/edit_success';
		$this->load->view('header_admin');
		$this->load->view('thumbSelect',$data);
		$this->load->view('index_admin');
	}
	
	function edit_success()
	{
		if(!$this->session->userdata('logged_in'))
			redirect('admin','refresh');
		if($_POST==null)
			redirect('admin/home','refresh');
		$data['formData'] = $_POST;
		$data['imagePath'] = $this->admin_model->add_thumb($data['formData']);
		$this->load->view('header_admin');
		$this->load->view('edit_success',$data);
		$this->load->view('index_admin');
	}

}

?>