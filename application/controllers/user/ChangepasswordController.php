<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ChangepasswordController extends CI_Controller
{
	function __construct()
	{
        parent::__construct();
    }
	public function index()
	{
		$this->load->view('user/changepassword');
	}
	public function changepass()
	{
			
			$current = $this->input->post("txtcurrent");
		    $new = $this->input->post("txtnew");
			$confirm = $this->input->post("txtconfirm");
			
			$this->load->model('user/MyProfileModel');
			
			$result=$this->MyProfileModel->change($current,$new);
			if($result=="not")
			{
				
			$this->session->set_flashdata("msg","Old Password Not Match");
			}
			else
			{
				
			$this->session->set_flashdata("msg","Password Changed");
			}
			redirect('user/HomeController/index');
	}
}
