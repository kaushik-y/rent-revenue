<?php
defined('BASEPATH') OR exit('No direct script access allowed');

 
class PackageController extends CI_Controller
{
	function __construct()
	{
        parent::__construct();	
		if(!$this->session->userdata('isagentlogin'))
		{
			redirect(base_url()."/index.php/console/LoginController/index");
		}
		
    }
	
	
	public function index()
	{
		$this->load->model('PackageModel');
		$data["packages"]=$this->PackageModel->getAll();
		$this->load->view('agent/package',$data);
	}
	public function index1($id)
	{
		$this->load->model('agent/PackageModel');
		$data["id"]=$id;
		$data["packages"]=$this->PackageModel->getsingle($id);
		$this->load->view('agent/bypackage',$data);
	}
	public function insertdata()
	{
				$this->load->model('agent/PackageModel');

               $days=$this->input->post('txtdays');
               $start=date('Y-m-d',strtotime($this->input->post('txtdate')));
               $endate=date('Y-m-d',strtotime($this->input->post('txtdate'). ' + '.$days.' days'));

			$data=array(
				"purchasedate"=>$start,
				"packageid"=>$this->input->post('txtid'),
				"agentid"=>$this->session->userdata("agentdata")->agentid,
				"paytype"=>"online",
				 "expiredate"=>$endate
				
			);
			$result = $this->PackageModel->insertData($data);
			
	        redirect('agent/PackageController/index');
			$this->session->set_flashdata("msg","insert successfully");
	}
	
	
}
?>