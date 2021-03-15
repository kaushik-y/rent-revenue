<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller
{

	function __construct()
	{
        parent::__construct();
		$this->load->model('AdminModel');	
		
    }
	public function index()
	{
		$this->load->view('console/login');
	}

	public function forgotPassword()
	{
			$this->load->view('console/forgotpassword');
	}
	public function checklogin()
	{
		$email = $this->input->post("txtemail");
		$password = $this->input->post("txtpassword");
		
		$result = $this->AdminModel->login($email,$password);
		
		if($result<=0)
		{
			$this->session->set_flashdata("msg","Login Failed!");
			$this->session->set_userdata('userdata',$data);
			$this->session->set_userdata('islogin',"true");
			redirect('console/LoginController/index');
		}
		else
		{  
	        $user = $this->AdminModel->logindata($email,$password);
			if($user->email == $email && $user->password == $password)
			{
			
				$this->session->set_userdata('islogin',"true");
				$data = $this->AdminModel->logindata($email,$password);
				redirect('console/DashboardController/index');
			} else {
				$this->session->set_flashdata("msg","Login Failed!");
			    $this->session->set_userdata('userdata',$data);
			    redirect('console/LoginController/index');
			}
		}
		
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('console/LoginController/index');
	}

}
