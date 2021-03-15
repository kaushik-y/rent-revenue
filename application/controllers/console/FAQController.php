<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FAQController extends CI_Controller
{
	function __construct()
	{
        parent::__construct();
		$this->load->model('FAQModel');	
		$this->load->model('FAQCategoryModel');
		if(!$this->session->userdata('islogin'))
		{
			redirect(base_url()."/index.php/console/LoginController/index");
		}
		
    }
	public function index()
	{
		$data["faqdata"]=$this->FAQModel->getCategory();
		$this->load->view('console/faq',$data);
	}
	public function updatefaq($id)
	{
		$data["faqcatdata"]=$this->FAQCategoryModel->getCategory();
		$data["faqdata"]=$this->FAQModel->getSingleFAQ($id);
		$this->load->view('console/updatefaq',$data);
	}
	public function addfaq()
	{
		$data["faqcatdata"]=$this->FAQCategoryModel->getCategory();
		$this->load->view('console/addfaq',$data);
	}
	public function insertcat()
	{
		$result=$this->FAQModel->checkDuplication($this->input->post('txtque'),$this->input->post('txtfaq'));
		if($result<=0)
		{
			$data=array(
				"faqcategoryid" =>$this->input->post('txtfaq'),
				"faqquestion"=>$this->input->post('txtque'),
				"faqanswer"=>$this->input->post('txtans'),
			);
			$result = $this->FAQModel->insertcat($data);
			$this->session->set_flashdata("msg","insert successfully");
		}
		else
		{
			$this->session->set_flashdata("msg","Duplicate Record");
		}
		redirect('console/FAQController/addfaq');
	}
	public function deletefaq()
	{
		$id=$this->input->post("deleteid");
		$this->FAQModel->deletefaq($id);
		$this->session->set_flashdata("msg","delete successfully");
		redirect('console/FAQController/index');
	}
	public function update($id)
	{
		$result=$this->FAQModel->checkDuplication($this->input->post('txtque'),$this->input->post('txtfaq'));
		if($result<=0)
		{
			$data=array(
				"faqcategoryid" =>$this->input->post('txtfaq'),
				"faqquestion"=>$this->input->post('txtque'),
				"faqanswer"=>$this->input->post('txtans'),
		);
			$result = $this->FAQModel->updateData($data,$id);
			$this->session->set_flashdata("msg","Update successfully");
		}
		else
		{
			$this->session->set_flashdata("msg","Duplicate Record");
		}
		redirect('console/FAQController/index');
	}
}
?>