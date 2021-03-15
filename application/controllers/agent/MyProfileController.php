<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MyProfileController extends CI_Controller
{
	function __construct()
	{
        parent::__construct();
		$this->load->model('agent/MyProfileModel');	
		
    }
	public function index()
	{   
	    $data["Profiledata"]=$this->MyProfileModel->getAll();
		$this->load->view('agent/myprofile',$data);
	}
	public function updateprofile($id)
	{
		$data["Profiledata"]=$this->MyProfileModel->getSingleRecord($id);
		$this->load->view('agent/myprofile',$data);
	}
	
	public function updatedata($id)
	{	
		
			
			//upload
			
				$ext = pathinfo($_FILES["txtimage"]['name'],PATHINFO_EXTENSION);//png
				$imagename = rand(1111,9999).rand(1111,9999).".".$ext;//12543658.png

					$config = array(
						'upload_path' => "./uploads/agentprofile/",
						'allowed_types' => "jpg|png|jpeg|JPEG|JPG|PNG",
						'file_name' => $imagename
					);
					$this->load->library('upload', $config);
				//upload
				if($this->upload->do_upload('txtimage'))
				{
					$data=array(
						"agentname"=>$this->input->post('txtname'),
						"contact"=>$this->input->post('txtcontact'),
						"email"=>$this->input->post('txtemail'),
						"profilephoto"=>$imagename,
						"adhaarnumber"=>$this->input->post('txtadhaarnumber'),
						"agentaddress"=>$this->input->post('txtaddress'),
						"pincode"=>$this->input->post('txtpincode')
						
					);
					$result = $this->MyProfileModel->updateData($data,$id);
					$this->session->set_flashdata("msg","Update successfully");
				}
		else
		{
					$data=array(
						"agentname"=>$this->input->post('txtname'),
						"contact"=>$this->input->post('txtcontact'),
						"email"=>$this->input->post('txtemail'),
						"profilephoto"=>$imagename,
						"adhaarnumber"=>$this->input->post('txtadhaarnumber'),
						"agentaddress"=>$this->input->post('txtaddress'),
						"pincode"=>$this->input->post('txtpincode')
					);
					$result = $this->MyProfileModel->updateData($data,$id);
					$this->session->set_flashdata("msg","Update successfully");
		
		}
		redirect('agent/DashboardController/index');
	}	
}
