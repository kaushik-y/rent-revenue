<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CityController extends CI_Controller
{
	function __construct()
	{
        parent::__construct();
		$this->load->model('CityModel');
		$this->load->model('StateModel');		
		if(!$this->session->userdata('islogin'))
		{
			redirect(base_url()."/index.php/console/LoginController/index");
		}
				
    }
	public function index()
	{
		$data["citydata"]=$this->CityModel->getAll();
		$this->load->view('console/city',$data);
	}
	public function updatecity($id)
	{
		$data["statedata"]=$this->StateModel->getAll();
		$data["citydata"]=$this->CityModel->getSingleRecord($id);
		$this->load->view('console/updatecity',$data);
	}
	public function addcity()
	{
		$data["statedata"]=$this->StateModel->getAll();
		$this->load->view('console/addcity',$data);
	}
	public function insertcity()
	{
		$result=$this->CityModel->checkDuplication($this->input->post('txtname'),$this->input->post('txtstate'));
		if($result<=0)
		{
			$data=array(
				"stateid" =>$this->input->post('txtstate'),
				"cityname"=>$this->input->post('txtname')
			);
			$result = $this->CityModel->insertData($data);
			$this->session->set_flashdata("msg","insert successfully");
		}
		else
		{
			$this->session->set_flashdata("msg","Duplicate  Record");
		}
		redirect('console/CityController/addcity');
	}
	public function deletecity()
	{
		$id=$this->input->post("deleteid");
		$this->CityModel->deleteData($id);
		$this->session->set_flashdata("msg","delete successfully");
		redirect('console/CityController/index');
	}
	public function updatedata($id)
	{
		$result=$this->CityModel->checkDuplication($this->input->post('txtname'),$this->input->post('txtstate'));
		if($result<=0)
		{
			$data=array(
				"stateid" =>$this->input->post('txtstate'),
				"cityname"=>$this->input->post('txtname')
			);
			$result = $this->CityModel->updateData($data,$id);
			$this->session->set_flashdata("msg","Upadte successfully");
		}
		else
		{
				$this->session->set_flashdata("msg","Duplicate  Record");
		}
		redirect('console/CityController/index');
	}
}
?>