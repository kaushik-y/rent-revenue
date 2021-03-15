<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller
{
	function __construct()
	{
        parent::__construct();
		$this->load->model('user/LoginModel');
		
    }
	public function index()
	{
		$this->load->view('user/loginuser');
	}
	public function index1()
	{
		$this->load->view('agent/agentlogin');
	}
	public function forgotPassword()
	{
			$this->load->view('user/forgotpassword');
	}
	public function checklogin()
	{
		$email = $this->input->post("txtemail");
		$password = $this->input->post("txtpassword");
		
		$result = $this->LoginModel->login($email,$password);
		
		if($result<=0)
		{
			$this->session->set_flashdata("msg","Login Failed!");
			$this->session->set_userdata('userdata',$data);
			$this->session->set_userdata('islogin',"true");
			redirect('user/LoginController/index');
		}
		else
		{  
	        $user = $this->LoginModel->logindata($email,$password);
			if($user->email == $email && $user->password == $password)
			{
			
				$this->session->set_userdata('isloginuser',"true");
				$data = $this->LoginModel->logindata($email,$password);
				$this->session->set_userdata("Userdata",$data);
				redirect('user/HomeController/index');
			}
			else
			{
				$this->session->set_flashdata("msg","Login Failed!");
			    $this->session->set_userdata('userdata',$data);
			    redirect('user/LoginController/index');
			}
		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('user/LoginController/index');
	}
	public function checkloginagent()
	{
		$email = $this->input->post("txtemail");
		$password = $this->input->post("txtpassword");
		
		$result = $this->LoginModel->loginagent($email,$password);
		
		if($result<=0)
		{
			$this->session->set_flashdata("msg","Login Failed!");
			$this->session->set_userdata('userdata',$data);
			$this->session->set_userdata('islogin',"true");
			redirect('user/LoginController/index1');
		}
		else
		{  
	        $user = $this->LoginModel->logindataagent($email,$password);
			if($user->email == $email && $user->password == $password)
			{
			
				$this->session->set_userdata('islogin',"true");
				$data = $this->LoginModel->logindataagent($email,$password);
				redirect('user/HomeController/index');
			}
			else
			{
				$this->session->set_flashdata("msg","Login Failed!");
			    $this->session->set_userdata('userdata',$data);
			    redirect('agent/DashboardController/index1');
			}
		}
		
	}
	
}
