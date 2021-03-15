<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NewsController extends CI_Controller
{
	function __construct()
	{
        parent::__construct();
		$this->load->model('NewsModel');	
		if(!$this->session->userdata('isagentlogin'))
		{
			redirect(base_url()."/index.php/agent/LoginController/index");
		}
		
    }
	public function index()
	{
		$data["newsdata"]=$this->NewsModel->getCategory();
		$this->load->view('agent/news',$data);
	}
}
?>	