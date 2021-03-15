<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FacilityController extends CI_Controller
{
	function __construct()
	{
        parent::__construct();
		$this->load->model('FacilityModel');	
		if(!$this->session->userdata('islogin'))
		{
			redirect(base_url()."/index.php/console/LoginController/index");
		}
		
    }
	public function index()
	{
		$data["facilitydata"]=$this->FacilityModel->getAll();
		$this->load->view('console/facility',$data);
	}
	public function updatefacility($id)
	{
		$data["facilitydata"]=$this->FacilityModel->getSingleRecord($id);
		$this->load->view('console/updatefacility',$data);
	}
	public function addfacility()
	{
		$this->load->view('console/addfacility');
	}
	public function insertfacility()
	{
		$result=$this->FacilityModel->checkDuplication($this->input->post('txtname'));
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
					"facilityname"=>$this->input->post('txtname'),
					"isactive"=>$this->input->post('txtisactive'),
					"image"=>$imagename,
				);
				$result = $this->FacilityModel->insertData($data);
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
		redirect('console/FacilityController/addfacility');
	}
	public function deletefacility()
	{
		$id=$this->input->post("deleteid");
		$this->FacilityModel->deleteData($id);
		$this->session->set_flashdata("msg","delete successfully");
		redirect('console/FacilityController/index');
	}
	public function updatedata($id)
	{
		$result=$this->FacilityModel->updatecheckDuplication($this->input->post('txtname'),$id);
		
		if($result<=0)
		{
			if(empty($_FILES["txtimage"]['name']))
			{
				$data=array(
				"facilityname"=>$this->input->post('txtname'),
				"isactive"=>$this->input->post('txtisactive'),
				
			);
			$result = $this->FacilityModel->updateData($data,$id);
			$this->session->set_flashdata("msg","Image Update successfully");
			}	
			else
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
						"facilityname"=>$this->input->post('txtname'),
						"isactive"=>$this->input->post('txtisactive'),
						"image"=>$imagename,
					);
					$result = $this->FacilityModel->updateData($data,$id);
					$this->session->set_flashdata("msg","Image Update successfully");
				}
			
			}
		}
		else
		{
			$this->session->set_flashdata("msg","Duplicate Record");
		}
	redirect('console/FacilityController/index');
			
	}
}
?>