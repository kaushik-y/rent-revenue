<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PackageController extends CI_Controller
{
	function __construct()
	{
        parent::__construct();
		
    }
	public function index()
	{
		$this->load->model('PackageModel');
		$data["packages"]=$this->PackageModel->getActive();
		$this->load->view('user/package',$data);
	}
	
}
