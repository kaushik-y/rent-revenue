<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ReportController extends CI_Controller
{
	function __construct()
	{
        parent::__construct();
		if(!$this->session->userdata('islogin'))
		{
			redirect(base_url()."/index.php/console/LoginController/index");
		}
		
	
    }
	public function index1()
	{
		$this->load->view('console/propertycategoryreport');
	}
	public function index2()
	{
		$this->load->view('console/bookingpropertyreport');
	}
	public function index3()
	{
		$this->load->view('console/agentpackagereport');
	}
	public function index4()
	{
		$this->load->view('console/bookinguserreport');
	}
	public function index5()
	{
		$this->load->view('console/registeruserreport');
	}
	public function index6()
	{
		$this->load->view('console/registeragentreport');
	}
}

