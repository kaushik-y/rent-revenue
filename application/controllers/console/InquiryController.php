<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InquiryController extends CI_Controller
{
	function __construct()
	{
        parent::__construct();
		$this->load->model('InquiryModel');
		$this->load->model('UserModel');		
		$this->load->model('PropertyModel');
		if(!$this->session->userdata('islogin'))
		{
			redirect(base_url()."/index.php/console/LoginController/index");
		}
		
    }
	public function index()
	{
		$data["inquirydata"]=$this->InquiryModel->getInquiry();
		$this->load->view('console/inquiry',$data);
	}
	public function deleteinquiry()
	{
		$id=$this->input->post("deleteid");
		$this->InquiryModel->deleteinquiry($id);
		$this->session->set_flashdata("msg","delete successfully");
		redirect('console/InquiryController/index');

	}
}
