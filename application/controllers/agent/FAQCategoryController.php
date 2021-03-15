<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FAQCategoryController extends CI_Controller
{
	function __construct()
	{
        parent::__construct();
		$this->load->model('FAQCategoryModel');	
		if(!$this->session->userdata('isagentlogin'))
		{
			redirect(base_url()."/index.php/agent/LoginController/index");
		}
		
    }
	public function index()
	{
		$data["faqcatdata"]=$this->FAQCategoryModel->getCategory();
		$this->load->view('agent/faqcategory',$data);
	}
	
}
?>