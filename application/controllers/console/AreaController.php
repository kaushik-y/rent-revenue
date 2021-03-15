<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AreaController extends CI_Controller
{
	function __construct()
	{
        parent::__construct();
		$this->load->model('AreaModel');
		$this->load->model('CityModel');	
		if(!$this->session->userdata('islogin'))
		{
			redirect(base_url()."/index.php/console/LoginController/index");
		}
		
    }
	public function index()
	{
		$data["areadata"]=$this->AreaModel->getAll();
		$this->load->view('console/area',$data);
	}
	public function updatearea($id)
	{
		$data["citydata"]=$this->CityModel->getAll();
		$data["areadata"]=$this->AreaModel->getSingleRecord($id);
		$this->load->view('console/updatearea',$data);
	}
	public function addarea()
	{
		$data["citydata"]=$this->CityModel->getAll();
		$this->load->view('console/addarea',$data);
	}
	public function insertarea()
	{
		$result=$this->AreaModel->checkDuplication($this->input->post('txtname'),$this->input->post('txtcity'));
		if($result<=0)
		{
			$data=array(
				"cityid" =>$this->input->post('txtcity'),
				"areaname"=>$this->input->post('txtname')
			);
			$result = $this->AreaModel->insertData($data);
			$this->session->set_flashdata("msg","Inserted Successfully");	
		}
		else
		{
			$this->session->set_flashdata("msg","duplicate");	
		}
		redirect('console/AreaController/addarea');
	}
	public function deletearea()
	{
		$id=$this->input->post("deleteid");
		$this->AreaModel->deleteData($id);
		$this->session->set_flashdata("msg","delete successfully");
		redirect('console/AreaController/index');
	}
	public function updatedata($id)
	{
		$result=$this->AreaModel->checkDuplication($this->input->post('txtname'),$this->input->post('txtcity'));
		if($result<=0)
		{
			$data=array(
				"cityid" =>$this->input->post('txtcity'),
				"areaname"=>$this->input->post('txtname')
			);
			$result = $this->AreaModel->updateData($data,$id);
			$this->session->set_flashdata("msg","Update Successfully");
		}
		else
		{
			$this->session->set_flashdata("msg","duplicate");	
		}
		redirect('console/AreaController/index');
	}
}
?>