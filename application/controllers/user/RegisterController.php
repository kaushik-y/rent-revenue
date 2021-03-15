<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegisterController extends CI_Controller
{
	function __construct()
	{
        parent::__construct();
		$this->load->model('user/RegisterModel');
		$this->load->model('user/CityModel');
    }
	public function index()
	{
		$data["citydata"]=$this->CityModel->getAll();
		$this->load->view('user/registeruser',$data);
	}
	public function index1()
	{
		$data["citydata"]=$this->CityModel->getAll();
		$this->load->view('user/registeragent',$data);
	}
	
	public function registeruser()
	{
		$result=$this->RegisterModel->checkDuplication($this->input->post('txtemail'));
		if($result<=0)
		{
			 
				//upload
			if(!empty($_FILES["txtuserphoto"]['name']))
			{
			$ext = pathinfo($_FILES["txtuserphoto"]['name'],PATHINFO_EXTENSION);//png
			$imagename = rand(1111,9999).rand(1111,9999).".".$ext;//12543658.png

				$config = array(
					'upload_path' => "./uploads/userprofile/",
					'allowed_types' => "jpg|png|jpeg|JPEG|JPG|PNG",
					'file_name' => $imagename
				);
				$this->load->library('upload', $config);
			}
			if(!empty($_FILES["txtadhaarphoto"]['name']))
			{
			$ext1 = pathinfo($_FILES["txtadhaarphoto"]['name'],PATHINFO_EXTENSION);//png
			$adhaarphoto = rand(1111,9999).rand(1111,9999).".".$ext1;//12543658.png

				$config = array(
					'upload_path' => "./uploads/profile/",
					'allowed_types' => "jpg|png|jpeg|JPEG|JPG|PNG",
					'file_name' => $adhaarphoto
				);
				$this->load->library('upload', $config);
			}
			
			//upload
			if($this->upload->do_upload('txtuserphoto') && $this->upload->do_upload('txtadhaarphoto'))
			{
			$data=array(
				"name"=>$this->input->post('txtname'),
				"contact"=>$this->input->post('txtcontact'),
				"email"=>$this->input->post('txtemail'),
				"password"=>$this->input->post('txtpassword'),
				"address"=>$this->input->post('txtaddress'),
				"cityid" =>$this->input->post('txtcity'),
				"gender"=>$this->input->post('txtgender'),
				"isblock"=>'N',
				"isverify"=>'Y',
				"userphoto"=>$imagename,
				"adhaarphoto"=>$adhaarphoto,
				"adhaarnumber"=>$this->input->post('txtnumber')
			);
			$result=$this->RegisterModel->insertdata($data);
			$this->session->set_flashdata("msg","insert succsesfuly");
			}
			else
			{
				
				$this->session->set_flashdata("msg","image not uploaded");
			}
		}
		else
		{
			$this->session->set_flashdata("msg","Duplicate Record");
		}
		redirect('user/RegisterController/index');
	}
	public function registeragent()
	{
		$result=$this->RegisterModel->checkDuplicationagent($this->input->post('txtemail'));
		if($result<=0)
		{
			
			if(!empty($_FILES["txtagentphoto"]['name']))
			{
			$ext = pathinfo($_FILES["txtagentphoto"]['name'],PATHINFO_EXTENSION);//png
			$imagename = rand(1111,9999).rand(1111,9999).".".$ext;//12543658.png

				$config = array(
					'upload_path' => "./uploads/agentprofile/",
					'allowed_types' => "jpg|png|jpeg|JPEG|JPG|PNG",
					'file_name' => $imagename
				);
				$this->load->library('upload', $config);
			}	
		    if(!empty($_FILES["txtadhaarphoto"]['name']))
			{
			$ext1 = pathinfo($_FILES["txtadhaarphoto"]['name'],PATHINFO_EXTENSION);//png
			$adhaarphoto = rand(1111,9999).rand(1111,9999).".".$ext1;//12543658.png

				$config = array(
					'upload_path' => "./uploads/",
					'allowed_types' => "jpg|png|jpeg|JPEG|JPG|PNG",
					'file_name' => $adhaarphoto
				);
				$this->load->library('upload', $config);
			}
			
			//upload
			if($this->upload->do_upload('txtagentphoto')&& $this->upload->do_upload('txtadhaarphoto'))
			{
			$data=array(
				"agentname"=>$this->input->post('txtagentname'),
				"contact"=>$this->input->post('txtcontact'),
				"email"=>$this->input->post('txtemail'),
				"password"=>$this->input->post('txtpassword'),
				"agentaddress"=>$this->input->post('txtaddress'),
				"cityid" =>$this->input->post('txtcity'),
				"gender"=>$this->input->post('txtgender'),
				"isblock"=>'N',
				"isapprove"=>'Y',
				"profilephoto"=>$imagename,
				"adhaarphoto"=>$adhaarphoto,
				"aboutagent"=>$this->input->post('txtaboutagent'),
				"adhaarnumber"=>$this->input->post('txtadhaarnumber'),
				"dob"=>$this->input->post('txtdob'),
				"landmark"=>$this->input->post('txtlandmark'),
				"pincode"=>$this->input->post('txtpincode')
			);
			$result=$this->RegisterModel->insertagent($data);
			$this->session->set_flashdata("msg","insert succsesfuly");
	        }	
			else
			{
				
				$this->session->set_flashdata("msg","image not uploaded");
			}
		}
		else
		{
			$this->session->set_flashdata("msg","Duplicate Record");
		}
		redirect('user/RegisterController/index1');
	}
}
