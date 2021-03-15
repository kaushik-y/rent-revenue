<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ChangePasswordController extends CI_Controller
{
	function __construct()
	{
        parent::__construct();
    }
	public function index()
	{
		$this->load->view('agent/changepassword');
	}
	public function changepass()
	{
			
			$current = $this->input->post("txtcurrent");
		    $new = $this->input->post("txtnew");
			$confirm = $this->input->post("txtconfirm");
			
			$this->load->model('agent/MyProfileModel');
			
			$result=$this->MyProfileModel->change($current,$new);
			if($result=="not")
			{
				
			$this->session->set_flashdata("msg","Old Password Not Match");
			}
			else
			{
				
			$this->session->set_flashdata("msg","Password Changed");
			}
			redirect('agent/DashboardController/index');
	}
}
