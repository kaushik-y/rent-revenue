<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CategoryController extends CI_Controller
{
	function __construct()
	{
        parent::__construct();
		$this->load->model('CategoryModel');	
		if(!$this->session->userdata('islogin'))
		{
			redirect(base_url()."/index.php/console/LoginController/index");
		}
		
    }
	public function index()
	{
		$data["catdata"]=$this->CategoryModel->getAll();
		$this->load->view('console/category',$data);
	}
	public function updatecat($id)
	{
		$data["catdata"]=$this->CategoryModel->getSingleRecord($id);
		$this->load->view('console/updatecategory',$data);
	}
	public function addcategory()
	{
		$this->load->view('console/addcategory');
	}
	public function insertcat()
	{
		$result=$this->CategoryModel->checkDuplication($this->input->post('txtname'));
		if($result<=0)
		{
				//upload
			$ext = pathinfo($_FILES["txtimage"]['name'],PATHINFO_EXTENSION);//png
			$imagename = rand(1111,9999).rand(1111,9999).".".$ext;//12543658.png

				$config = array(
					'upload_path' => "./uploads/",
					'allowed_types' => "jpg|png|jpeg|JPEG|JPG|PNG",
					'file_name' => $imagename
				);
				$this->load->library('upload', $config);
			//upload
			if($this->upload->do_upload('txtimage'))
			{
				$data=array(
					"categoryname"=>$this->input->post('txtname'),
					"image"=>$imagename,
					"description"=>$this->input->post('txtdesc'),
					"isactive"=>$this->input->post('txtisactive')
				);
				$result = $this->CategoryModel->insertData($data);
				$this->session->set_flashdata("msg","insert successfully");
			}
			else
			{
				$this->session->set_flashdata("msg","image not uploaded");
			}
		}
		else
		{
			$this->session->set_flashdata("msg","Duplicate Record");
		}
		redirect('console/CategoryController/addcategory');
	}
	
	public function deletecat()
	{
		$id=$this->input->post("deleteid");
		$this->CategoryModel->deleteData($id);
		$this->session->set_flashdata("msg","delete successfully");
		redirect('console/CategoryController/index');
	}
	public function updatedata($id)
	{	
		$result=$this->CategoryModel->updatecheckDuplication($this->input->post('txtname'),$id);
		if($result<=0)
		{	
			
			//upload
			if(empty($_FILES["txtimage"]['name']))
			{
				$data=array(
					"categoryname"=>$this->input->post('txtname'),
					"description"=>$this->input->post('txtdesc'),
					"isactive"=>$this->input->post('txtisactive')
				);
				$result = $this->CategoryModel->updateData($data,$id);
				$this->session->set_flashdata("msg","Update successfully");
			}
			else
			{
				$ext = pathinfo($_FILES["txtimage"]['name'],PATHINFO_EXTENSION);//png
				$imagename = rand(1111,9999).rand(1111,9999).".".$ext;//12543658.png

					$config = array(
						'upload_path' => "./uploads/",
						'allowed_types' => "jpg|png|jpeg|JPEG|JPG|PNG",
						'file_name' => $imagename
					);
					$this->load->library('upload', $config);
				//upload
				if($this->upload->do_upload('txtimage'))
				{
					$data=array(
						"categoryname"=>$this->input->post('txtname'),
						"image"=>$imagename,
						"description"=>$this->input->post('txtdesc'),
						"isactive"=>$this->input->post('txtisactive')
					);
					$result = $this->CategoryModel->updateData($data,$id);
					$this->session->set_flashdata("msg","Update successfully");
				}
			}
	
		}	
		else
		{
			$this->session->set_flashdata("msg","Duplicate Record");
		}
		redirect('console/CategoryController/index');
	}
}
?>