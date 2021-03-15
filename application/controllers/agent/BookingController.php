<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BookingController extends CI_Controller
{
	function __construct()
	{
        parent::__construct();
		$this->load->model('BookingModel');	
		$this->load->model('PropertyModel');	
		$this->load->model('UserModel');
		if(!$this->session->userdata('isagentlogin'))
		{
			redirect(base_url()."/index.php/console/LoginController/index");
		}
		
    }
	public function approvebookingagentsingle($id,$status)
	{
		$this->BookingModel->approvebooking($id,$status);
		$this->session->set_flashdata("msg","status changed successfully");
		redirect('agent/BookingController/index1');
	}
	public function rejectbookingagentsingle($id,$status)
	{
		$this->BookingModel->approvebooking($id,$status);
		$this->session->set_flashdata("msg","status changed successfully");
		redirect('agent/BookingController/index2');
	}
	public function index1()
	{
		$data["bookingdata"]=$this->BookingModel->getagentapprovebooking();
		$this->load->view('agent/approvebooking',$data);
	}
	/*public function index2()
	{
		$data["bookingdata"]=$this->BookingModel->getagentrejectbooking();
		$this->load->view('agent/rejectbooking',$data);
	}
	public function index3()
	{
		$data["bookingdata"]=$this->BookingModel->getagentcancelbooking();
		$this->load->view('agent/cancelbooking',$data);
	}*/
	public function agentapprovebookingview($id)
	{
		$data["bookingdata"]=$this->BookingModel->getbookingsingle($id);
		$this->load->view('agent/approvebookingview',$data);
	}
	/*public function agentrejectbookingview($id)
	{
		$data["bookingdata"]=$this->BookingModel->getbookingsingle($id);
		$this->load->view('agent/rejectbookingview',$data);
	}
	public function agentcancelbookingview($id)
	{	
		$data["bookingdata"]=$this->BookingModel->getbookingsingle($id);
		$this->load->view('agent/cancelbookingview',$data);
	}
	public function deletebooking()
	{
		$id=$this->input->post("deleteid");
		$this->BookingModel->deletebooking($id);
		$this->session->set_flashdata("msg","delete successfully");
		redirect('agent/BookingController/index');

	}*/
}
