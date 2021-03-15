<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NewsController extends CI_Controller
{
	function __construct()
	{
        parent::__construct();
		$this->load->model('NewsModel');	
		if(!$this->session->userdata('islogin'))
		{
			redirect(base_url()."/index.php/console/LoginController/index");
		}
		
    }
	public function index()
	{
		$data["newsdata"]=$this->NewsModel->getCategory();
		$this->load->view('console/news',$data);
	}
	public function updatenews($id)
	{
		$data["newsdata"]=$this->NewsModel->getSingleNews($id);
		$this->load->view('console/updatenews',$data);
	}
	public function addnews()
	{
		$this->load->view('console/addnews');
	}
	public function insertdata()
	{
		$result=$this->NewsModel->updatecheckDuplication($this->input->post('txttitle'),$id);
		if($result<=0)
		{
			if(empty($_FILES["txtimage"]['name']))
			{
					$data=array(
					"title"=>$this->input->post('txttitle'),
					"image"=>$imagename,
					"description"=>$this->input->post('txtdesc'),
					"isactive"=>$this->input->post('txtisactive')

			);
				$result = $this->NewsModel->insertnews($data);
				$this->session->set_flashdata("msg","true");
			}	
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
					"title"=>$this->input->post('txttitle'),
					"image"=>$imagename,
					"description"=>$this->input->post('txtdesc'),
					"isactive"=>$this->input->post('txtisactive')

				);
				$result = $this->NewsModel->insertnews($data);
				$this->session->set_flashdata("msg","true");
			}
			else
			{
				$this->session->set_flashdata("msg","image not uploaded");
			}
		}
		else
		{
			$this->session->set_flashdata("msg","duplicate");
		}
		redirect('console/NewsController/addnews');
	}
	public function changestatus($id,$status)
	{
		$this->NewsModel->changestatus($id,$status);
		$this->session->set_flashdata("msg","status changed successfully");
		redirect('console/NewsController/index');
	}
	public function deletenews()
	{
		$id=$this->input->post("deleteid");
		$this->NewsModel->deletenews($id);
		$this->session->set_flashdata("msg","delete successfully");
		redirect('console/NewsController/index');
	}
	public function update($id)
	{
		$result=$this->NewsModel->checkDuplication($this->input->post('txttitle'));
		if($result<=0)
		
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
				"title"=>$this->input->post('txttitle'),
				"image"=>$imagename,
				"description"=>$this->input->post('txtdesc'),
				"isactive"=>$this->input->post('txtisactive')

			);
			$result = $this->NewsModel->updateData($data,$id);
			$this->session->set_flashdata("msg","Update successfully");
		}
		else
		{
			$this->session->set_flashdata("msg","duplicate");
		}
		redirect('console/NewsController/index');
		
	}	

}
?>
