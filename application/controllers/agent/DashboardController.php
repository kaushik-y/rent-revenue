<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardController extends CI_Controller
{
	function __construct()
	{
        parent::__construct();
		if(!$this->session->userdata('isagentlogin'))
		{
			redirect(base_url()."/index.php/console/LoginController/index");
		}	
    }
	public function index()
	{
		$this->load->view('agent/dashboard');
	}
}
