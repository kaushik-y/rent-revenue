<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardController extends CI_Controller
{
	function __construct()
	{
        parent::__construct();
		$this->load->model('UserModel');	
		if(!$this->session->userdata('islogin'))
		{
			redirect(base_url()."/index.php/console/LoginController/index");
		}
		
    }
	public function index()
	{
		$data["userdata"]=$this->UserModel->getUser();
		$this->load->view('console/dashboard',$data);
	}
}
