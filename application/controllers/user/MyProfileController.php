<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MyProfileController extends CI_Controller
{
	function __construct()
	{
        parent::__construct();
		$this->load->model('user/MyProfileModel');	
		if(!$this->session->userdata('isloginuser'))
		{
			redirect(base_url()."/index.php/user/LoginController/index");
		}
    }
	public function index()
	{   
	    $data["Profiledata"]=$this->MyProfileModel->getAll();
		$this->load->view('user/myprofile',$data);
	}
	public function updateprofile($id)
	{
		$data["Profiledata"]=$this->MyProfileModel->getSingleRecord($id);
		$this->load->view('user/myprofile',$data);
	}
	
	public function updatedata($id)
	{	
		
			
			//upload
			
				$ext = pathinfo($_FILES["txtuser"]['name'],PATHINFO_EXTENSION);//png
				$imagename = rand(1111,9999).rand(1111,9999).".".$ext;//12543658.png

					$config = array(
						'upload_path' => "./uploads/userprofile/",
						'allowed_types' => "jpg|png|jpeg|JPEG|JPG|PNG",
						'file_name' => $imagename
					);
					$this->load->library('upload', $config);
				//upload
				if($this->upload->do_upload('txtuser'))
				{
					$data=array(
						"name"=>$this->input->post('txtname'),
						"contact"=>$this->input->post('txtphone'),
						"email"=>$this->input->post('txtemail'),
						"userphoto"=>$imagename,
						"adhaarnumber"=>$this->input->post('txtadharnumber'),
						"address"=>$this->input->post('txtaddress')
						
					);
					$result = $this->MyProfileModel->updateData($data,$id);
					$this->session->set_flashdata("msg","Update successfully");
				}
		else
		{
					$data=array(
						"name"=>$this->input->post('txtname'),
						"contact"=>$this->input->post('txtphone'),
						"email"=>$this->input->post('txtemail'),
						"adhaarnumber"=>$this->input->post('txtadharnumber'),
						"address"=>$this->input->post('txtaddress')
						
					);
					$result = $this->MyProfileModel->updateData($data,$id);
					$this->session->set_flashdata("msg","Update successfully");
		
		}
		redirect('user/HomeController/index');
	}	
}
