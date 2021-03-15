<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AgentPackageController extends CI_Controller
{
	function __construct()
	{
        parent::__construct();
		$this->load->model('agent/AgentPackageModel');	
		$this->load->model('AgentModel');	
		$this->load->model('PackageModel');	
		if(!$this->session->userdata('isagentlogin'))
		{
			redirect(base_url()."/index.php/console/LoginController/index");
		}
		
    }
	public function index()
	{
		$data["agentpackagedata"]=$this->AgentPackageModel->getagentpackage();
		$this->load->view('agent/agentpackage',$data);
	}
	public function deleteAgentPackage()
	{
		$id=$this->input->post("deleteid");
		$this->AgentPackageModel->deleteagentpackage($id);
		$this->session->set_flashdata("msg","delete successfully");
		redirect('agent/AgentPackageController/index');

	}
}
