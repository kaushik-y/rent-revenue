<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PackageController extends CI_Controller
{
	function __construct()
	{
        parent::__construct();
		$this->load->model('PackageModel');	
		if(!$this->session->userdata('islogin'))
		{
			redirect(base_url()."/index.php/console/LoginController/index");
		}
		
    }
	public function index()
	{
		$data["packagedata"]=$this->PackageModel->getAll();
		$this->load->view('console/package',$data);
	}
	public function updatepackage($id)
	{
		$data["packagedata"]=$this->PackageModel->getSingleRecord($id);
		$this->load->view('console/updatepackage',$data);
	}
	public function addpackage()
	{
		$this->load->view('console/addpackage');
	}
	public function insertpackage()
	{
		$result=$this->PackageModel->checkDuplication($this->input->post('txtname'));
		if($result<=0)
		{
			$data=array(
				"packagename"=>$this->input->post('txtname'),
				"description"=>$this->input->post('txtdesc'),
				"price"=>$this->input->post('txtprice'),
				"duration"=>$this->input->post('txtduration'),
				"noproperty"=>$this->input->post('txtnoproperty'),
				"isactive"=>$this->input->post('txtisactive')
			);
			$result = $this->PackageModel->insertdata($data);
			$this->session->set_flashdata("msg","true");
		}
		else
		{
			$this->session->set_flashdata("msg","duplicate");
		}
		redirect('console/PackageController/addpackage');
	}
	public function changestatus($id,$status)
	{
		$this->PackageModel->changestatus($id,$status);
		$this->session->set_flashdata("msg","status changed successfully");
		redirect('console/PackageController/index');
	}
	public function deletepackage()
	{
		$id=$this->input->post('hfdelete');
		$this->PackageModel->deleteData($id);
		$this->session->set_flashdata("msg","delete successfully");
		redirect('console/PackageController/index');
	}
	public function updatedata($id)
	{
		$result=$this->PackageModel->checkDuplication($this->input->post('txtname'));
		if($result<=0)
		{
			$data=array(
				"packagename"=>$this->input->post('txtname'),
				"description"=>$this->input->post('txtdesc'),
				"price"=>$this->input->post('txtprice'),
				"duration"=>$this->input->post('txtduration'),
				"noproperty"=>$this->input->post('txtnoproperty'),
				"isactive"=>$this->input->post('txtisactive')
		);
			$result = $this->PackageModel->updateData($data,$id);
			$this->session->set_flashdata("msg","Update successfully");
		}	
		else
		{
			$this->session->set_flashdata("msg","duplicate");
		}
		redirect('console/PackageController/index');
	}
}
?>