<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AboutusController extends CI_Controller
{
	function __construct()
	{
        parent::__construct();
    }
	public function index()
	{
		$this->load->model('AgentModel');
		$data["agent"]=$this->AgentModel->getAll();
		$this->load->view('user/aboutus',$data);
	}
}
