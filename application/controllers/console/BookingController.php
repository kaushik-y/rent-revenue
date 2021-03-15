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
		if(!$this->session->userdata('islogin'))
		{
			redirect(base_url()."/index.php/console/LoginController/index");
		}
		
    }
	public function approvebookinguser($id,$status)
	{
		$this->BookingModel->approvebooking($id,$status);
		$this->session->set_flashdata("msg","status changed successfully");
		redirect('console/BookingController/index0');
	}
	public function approvebookingusersingle($id,$status)
	{
		$this->BookingModel->approvebooking($id,$status);
		$this->session->set_flashdata("msg","status changed successfully");
		redirect('console/BookingController/index1');
	}
	public function rejectbookingusersingle($id,$status)
	{
		$this->BookingModel->approvebooking($id,$status);
		$this->session->set_flashdata("msg","status changed successfully");
		redirect('console/BookingController/index2');
	}
	public function approvebookingagent($id,$status)
	{
		$this->BookingModel->approvebooking($id,$status);
		$this->session->set_flashdata("msg","status changed successfully");
		redirect('console/BookingController/index4');
	}
	public function approvebookingagentsingle($id,$status)
	{
		$this->BookingModel->approvebooking($id,$status);
		$this->session->set_flashdata("msg","status changed successfully");
		redirect('console/BookingController/index5');
	}
	public function rejectbookingagentsingle($id,$status)
	{
		$this->BookingModel->approvebooking($id,$status);
		$this->session->set_flashdata("msg","status changed successfully");
		redirect('console/BookingController/index6');
	}
	public function index0()
	{
		$data["bookingdata"]=$this->BookingModel->getuserpenddingbooking();
		$this->load->view('console/userpenddingbooking',$data);
	}
	public function index1()
	{
		$data["bookingdata"]=$this->BookingModel->getuserapprovebooking();
		$this->load->view('console/userapprovebooking',$data);
	}
	public function index2()
	{
		$data["bookingdata"]=$this->BookingModel->getuserrejectbooking();
		$this->load->view('console/userrejectbooking',$data);
	}
	public function index3()
	{
		$data["bookingdata"]=$this->BookingModel->getusercancelbooking();
		$this->load->view('console/usercancelbooking',$data);
	}
	public function userpenddingbookingview($id)
	{
		$data["bookingdata"]=$this->BookingModel->getbookingsingle($id);
		$this->load->view('console/userpenddingbookingview',$data);
	}
	public function userapprovebookingview($id)
	{
		$data["bookingdata"]=$this->BookingModel->getbookingsingle($id);
		$this->load->view('console/userapprovebookingview',$data);
	}
	public function userrejectbookingview($id)
	{
		$data["bookingdata"]=$this->BookingModel->getbookingsingle($id);
		$this->load->view('console/userrejectbookingview',$data);
	}
	public function usercancelbookingview($id)
	{
		$data["bookingdata"]=$this->BookingModel->getbookingsingle($id);
		$this->load->view('console/usercancelbookingview',$data);
	}
	public function index4()
	{
		$data["bookingdata"]=$this->BookingModel->getagentpenddingbooking();
		$this->load->view('console/agentpenddingbooking',$data);
	}
	public function index5()
	{
		$data["bookingdata"]=$this->BookingModel->getagentapprovebooking();
		$this->load->view('console/agentapprovebooking',$data);
	}
	public function index6()
	{
		$data["bookingdata"]=$this->BookingModel->getagentrejectbooking();
		$this->load->view('console/agentrejectbooking',$data);
	}
	public function index7()
	{
		$data["bookingdata"]=$this->BookingModel->getagentcancelbooking();
		$this->load->view('console/agentcancelbooking',$data);
	}
	public function agentpanddingbookingview($id)
	{
		$data["bookingdata"]=$this->BookingModel->getbookingsingle($id);
		$this->load->view('console/agentpanddingbookingview',$data);
	}
	public function agentapprovebookingview($id)
	{
		$data["bookingdata"]=$this->BookingModel->getbookingsingle($id);
		$this->load->view('console/agentapprovebookingview',$data);
	}
	public function agentrejectbookingview($id)
	{
		$data["bookingdata"]=$this->BookingModel->getbookingsingle($id);
		$this->load->view('console/agentrejectbookingview',$data);
	}
	public function agentcancelbookingview($id)
	{
		$data["bookingdata"]=$this->BookingModel->getbookingsingle($id);
		$this->load->view('console/agentcancelbookingview',$data);
	}
	public function deletebooking()
	{
		$id=$this->input->post("deleteid");
		$this->BookingModel->deletebooking($id);
		$this->session->set_flashdata("msg","delete successfully");
		redirect('console/BookingController/index');

	}
	
}
