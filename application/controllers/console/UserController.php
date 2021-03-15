<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller
{
	function __construct()
	{
        parent::__construct();
		$this->load->model('UserModel');
		$this->load->model('BookingModel');		
		if(!$this->session->userdata('islogin'))
		{
			redirect(base_url()."/index.php/console/LoginController/index");
		}
	}
	public function index()
	{
		$data["userdata"]=$this->UserModel->getUser();
		$this->load->view('console/user',$data);
	}
	public function userdetail($id)
	{
		$data["userdata"]=$this->UserModel->getUserSingle($id);
		$this->load->view('console/userview',$data);
	}
	public function userbookingdetailsview($id)
	{
		$data["bookingdata"]=$this->BookingModel->getuserbookingsview($id);
		$this->load->view('console/userbookingdetailsview',$data);
	}
	public function bookingdetails($id)
	{
		$data["bookingdata"]=$this->BookingModel->getuserbookings($id);
		$this->load->view('console/userbookingdetails',$data);
	}
	public function changestatus($id,$status)
	{
		$this->UserModel->changestatus($id,$status);
		$this->session->set_flashdata("msg","status changed successfully");
		redirect('console/UserController/index');
	}
	public function changestatus1($id,$status)
	{
		$this->UserModel->changestatus1($id,$status);
		$this->session->set_flashdata("msg","status changed successfully");
		redirect('console/UserController/index');
	}
	public function deleteuser()
	{
		$id=$this->input->post("deleteid");
		$this->UserModel->deleteuser($id);
		$this->session->set_flashdata("msg","delete successfully");
		redirect('console/UserController/index');
	}
}
