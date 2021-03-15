<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StateController extends CI_Controller
{
	function __construct()
	{
        parent::__construct();
		$this->load->model('StateModel');	
		if(!$this->session->userdata('islogin'))
		{
			redirect(base_url()."/index.php/console/LoginController/index");
		}
		
    }
	public function index()
	{
		$data["statedata"]=$this->StateModel->getAll();
		$this->load->view('console/state',$data);
	}
	public function updatestate($id)
	{
		$data["statedata"]=$this->StateModel->getSingleRecord($id);
		$this->load->view('console/updatestate',$data);
	}
	public function addstate()
	{
		$this->load->view('console/addstate');
	}
	public function insertstate()
	{
		$result=$this->StateModel->checkDuplication($this->input->post('txtname'));
		if($result<=0)
		{
			$data=array(
				"statename"=>$this->input->post('txtname')
			);
			$result = $this->StateModel->insertData($data);
			$this->session->set_flashdata("msg","true");
		}
		else
		{
			$this->session->set_flashdata("msg","duplicate");
		}
		redirect('console/StateController/addstate');
	}
	public function deletestate()
	{
		$id=$this->input->post("deleteid");
		$this->StateModel->deleteData($id);
		$this->session->set_flashdata("msg","delete successfully");
		redirect('console/StateController/index');
	}
	public function updatedata($id)
	{
		$result=$this->StateModel->checkDuplication($this->input->post('txtname'));
		if($result<=0)
		{
			$data=array(
				"statename"=>$this->input->post('txtname')
		);
			$result = $this->StateModel->updateData($data,$id);
			$this->session->set_flashdata("msg","true");
		}	
		else
		{
			$this->session->set_flashdata("msg","duplicate");
		}			
			redirect('console/StateController/index');
	}
}
?>