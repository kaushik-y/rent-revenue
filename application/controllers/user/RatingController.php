<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RatingController extends CI_Controller
{
	function __construct()
	{
        parent::__construct();
		$this->load->model('user/RatingModel');	
		
		
    }
    public function index($id,$bid)
	{
		$data["id"]=$id;
		$data["bid"]=$bid;
		$this->load->view('user/rating',$data);
	}
	public function index1()
	{
		$data["reviewdata"]=$this->ReviewModel->getsingle($id);
		$this->load->view('user/home',$data);
	}

	public function insertdata($id,$bid)
	{
				$this->load->model('user/RatingModel');


			$data=array(
				"propertyid"=>$id,
				"bookingid"=>$bid,
				"userid"=>$this->session->userdata("Userdata")->userid,
				"reviewtext"=>$this->input->post('txtreview'),
				"ranting"=>$this->input->post('txtrating'),
					
			);
			$result = $this->RatingModel->insertData($data);
			$this->session->set_flashdata("msg","insert successfully");
	redirect('user/BookingController/index');
	}
	
}
	
?>