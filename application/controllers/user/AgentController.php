<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AgentController extends CI_Controller
{
	function __construct()
	{
        parent::__construct();
		
		
    }
	public function index()
	{
		$this->load->model('AgentModel');
		$data["agent"]=$this->AgentModel->getApprove();
		$this->load->view('user/agentlist',$data);
	}
	public function index1($id)
	{
		$this->load->model('AgentModel');
		$data["agent"]=$this->AgentModel->getsingle($id);
		$this->load->model('PropertyModel');
		$data["property"]=$this->PropertyModel->getApprove();
		$this->load->view('user/agentdetails',$data);
	}
}