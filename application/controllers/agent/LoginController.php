<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller
{

	function __construct()
	{
        parent::__construct();
		$this->load->model('agent/AgentModel');	
    }
	public function index()
	{
		$this->load->view('agent/agentlogin');
	}

	public function forgotPassword()
	{
			$this->load->view('agent/forgotpassword');
	}
	public function checklogin()
	{
		$email = $this->input->post("txtemail");
		$password = $this->input->post("txtpassword");
		
		$result = $this->AgentModel->login($email,$password);
		
		if($result<=0)
		{
			$this->session->set_flashdata("msg","Invalid username or password ");
		
			redirect('agent/LoginController/index');
		}
		else
		{  
	        $agent = $this->AgentModel->logindata($email,$password);
			if($agent->email == $email && $agent->password == $password)
			{
			
				$this->session->set_userdata('isagentlogin',"true");
				$data = $this->AgentModel->logindata($email,$password);
				$this->session->set_userdata('agentdata',$data);
				redirect('agent/DashboardController/index');
			} else {
				$this->session->set_flashdata("msg","Login Failed!");
			    redirect('agent/LoginController/index');
			}
		}
		
	}
	public function Logout()
	{
		$this->session->sess_destroy();
		redirect('agent/LoginController/index');
	}

}
