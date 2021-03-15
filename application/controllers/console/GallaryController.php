<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GallaryController extends CI_Controller
{
	function __construct()
	{
        parent::__construct();
		$this->load->model('GallaryModel');	
		if(!$this->session->userdata('islogin'))
		{
			redirect(base_url()."/index.php/console/LoginController/index");
		}
		
    }
	public function index()
	{
		$data["gallarydata"]=$this->GallaryModel->getgallary();
		$this->load->view('console/Gallary',$data);
	}
	public function deletegallary($id)
	{
		$this->GallaryModel->deletegallary($id);
		$this->session->set_flashdata("msg","delete successfully");
		redirect('console/GallaryController/index');

	}
}
