<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FAQCategoryController extends CI_Controller
{
	function __construct()
	{
        parent::__construct();
		$this->load->model('FAQCategoryModel');	
		if(!$this->session->userdata('islogin'))
		{
			redirect(base_url()."/index.php/console/LoginController/index");
		}
		
    }
	public function index()
	{
		$data["faqcatdata"]=$this->FAQCategoryModel->getCategory();
		$this->load->view('console/faqcategory',$data);
	}
	public function updatefaqcategory($id)
	{
		$data["faqcatdata"]=$this->FAQCategoryModel->getSingleFaqCategory($id);
		$this->load->view('console/updatefaqcategory',$data);
	}
	public function addfaqcategory()
	{
		$this->load->view('console/addfaqcategory');
	}
	public function insertcat()
	{
		$result=$this->FAQCategoryModel->checkDuplication($this->input->post('txtfaqname'));
		if($result<=0)
		{
			$data=array(
				"faqcategoryname"=>$this->input->post('txtfaqname'),
			);
			$result = $this->FAQCategoryModel->insertcat($data);
			$this->session->set_flashdata("msg","insert successfully");
		}
		else
		{
			$this->session->set_flashdata("msg","Duplicate record");
		}
		redirect('console/FAQCategoryController/addfaqcategory');
	}
	public function deletefaqcat($id)
	{
		$id=$this->input->post("deleteid");
		$this->FAQCategoryModel->deletecat($id);
		$this->session->set_flashdata("msg","delete successfully");
		redirect('console/FAQCategoryController/index');
	}
	public function update($id)
	{
		$result=$this->FAQCategoryModel->checkDuplication($this->input->post('txtfaqname'));
		if($result<=0)
		{
			$data=array(
				"faqcategoryname"=>$this->input->post('txtfaqname')
			);
			$result = $this->FAQCategoryModel->updateData($data,$id);
			$this->session->set_flashdata("msg","Update successfully");
		}
		else
		{
			$this->session->set_flashdata("msg","Duplicate record");
		}	
		redirect('console/FAQCategoryController/index');
	}
}
?>