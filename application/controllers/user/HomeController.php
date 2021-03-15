<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller
{
	function __construct()
	{
        parent::__construct();
    }
	public function index()
	{
		$this->load->model('ReviewModel');
		$data["reviewdata"]=$this->ReviewModel->getReview();
		$this->load->model('AgentModel');
		$data["agent"]=$this->AgentModel->getAll();
		$this->load->model('PropertyModel');
		$data["property"]=$this->PropertyModel->getActive();
		$this->load->view('user/home',$data);
	}
}
