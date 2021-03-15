<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FeedbackController extends CI_Controller
{
	function __construct()
	{
        parent::__construct();
		$this->load->model('FeedbackModel');	
		if(!$this->session->userdata('islogin'))
		{
			redirect(base_url()."/index.php/console/LoginController/index");
		}
		
    }
	public function index()
	{
		$data["catdata"]=$this->FeedbackModel->getCategory();
		$this->load->view('console/feedback',$data);
	}
	public function deletefeedback()
	{
		$id=$this->input->post("deleteid");
		$this->FeedbackModel->deletefeedback($id);
		$this->session->set_flashdata("msg","delete successfully");
		redirect('console/FeedbackController/index');

	}
}
