<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PropertyFacilityController extends CI_Controller
{
	function __construct()
	{
        parent::__construct();
		$this->load->model('PropertyFacilityModel');	
		$this->load->model('PropertyModel');
		$this->load->model('FacilityModel');
		if(!$this->session->userdata('islogin'))
		{
			redirect(base_url()."/index.php/console/LoginController/index");
		}
		
    }
	public function index()
	{
		$data["propertyfacilitydata"]=$this->PropertyFacilityModel->getpropertyfacility();
		$this->load->view('console/propertyfacility',$data);
	}
	public function deletepropertyfacility()
	{
		$id=$this->input->post("deleteid");
		$this->PropertyFacilityModel->deletepropertyfacility($id);
		$this->session->set_flashdata("msg","delete successfully");
		redirect('console/PropertyFacilityController/index');

	}
}
