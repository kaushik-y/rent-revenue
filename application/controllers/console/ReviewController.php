<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ReviewController extends CI_Controller
{
	function __construct()
	{
        parent::__construct();
		$this->load->model('ReviewModel');	
		$this->load->model('PropertyModel');	
		$this->load->model('UserModel');	
		if(!$this->session->userdata('islogin'))
		{
			redirect(base_url()."/index.php/console/LoginController/index");
		}
    }
	public function index()
	{
		$data["reviewdata"]=$this->ReviewModel->getReview();
		$this->load->view('console/agentreview',$data);
	}
	public function index1()
	{
		$data["reviewdata"]=$this->ReviewModel->getReview();
		$this->load->view('console/userreview',$data);
	}
	public function deletereview()
	{
		$id=$this->input->post("deleteid");
		$this->ReviewModel->deletereview($id);
		$this->session->set_flashdata("msg","delete successfully");
		redirect('console/ReviewController/index');

	}
}
