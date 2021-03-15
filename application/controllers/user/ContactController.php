<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContactController extends CI_Controller
{
	function __construct()
	{
        parent::__construct();
		$this->load->model('user/ContactModel');	
    }
	public function index()
	{
		$this->load->view('user/contact');
	}
	public function index5()
	{
		$this->load->model('user/profile');
	}
	public function insertdata()
	{
		$this->load->model('user/ContactModel');
			$data=array(
			     
				 "userid"=>$this->session->userdata("Userdata")->userid,
				"name"=>$this->input->post('txtname'),
				"contact"=>$this->input->post('txtphone'),
				"email"=>$this->input->post('txtemail'),
				"feedback"=>$this->input->post('txtmessage'),
				
			);
			$result = $this->ContactModel->insertdata($data);
			$this->session->set_flashdata("msg","Successfully insertdata");
		
		redirect('user/ContactController/index');
		
	}
}
