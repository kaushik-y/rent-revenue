<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AgentController extends CI_Controller
{
	function __construct()
	{
        parent::__construct();
		$this->load->model('AgentModel');	
		if(!$this->session->userdata('islogin'))
		{
			redirect(base_url()."/index.php/console/LoginController/index");
		}
		
    }
	public function index()
	{
		$data["agentdata"]=$this->AgentModel->getAll();
		$this->load->view('console/agent',$data);
	}
	public function agentmore($id)
	{
		$data["agentdata"]=$this->AgentModel->getSingleRecord($id);
		$this->load->view('console/agentmore',$data);
	}
	public function updateagent($id)
	{
		$data["agentdata"]=$this->AgentModel->getSingleRecord($id);
		$this->load->view('console/updateagent',$data);
	}
	public function addagent()
	{
		$this->load->view('console/addagent');
	}
	public function insertagent()
	{
		
		//upload profile
		$ext = pathinfo($_FILES["txtprofilephoto"]['name'],PATHINFO_EXTENSION);//png
		$imagename = rand(1111,9999).rand(1111,9999).".".$ext;//12543658.png

			$config = array(
				'upload_path' => "./uploads/",
				'allowed_types' => "jpg|png|jpeg|JPEG|JPG|PNG",
				'file_name' => $imagename
			);
			$this->load->library('upload', $config);
		//upload profile
		
		//upload profile
		$ext1 = pathinfo($_FILES["txtadhaarphoto"]['name'],PATHINFO_EXTENSION);//png
		$imagename1 = rand(1111,9999).rand(1111,9999).".".$ext1;//12543658.png

			$config1 = array(
				'upload_path' => "./uploads/",
				'allowed_types' => "jpg|png|jpeg|JPEG|JPG|PNG",
				'file_name' => $imagename
			);
			$this->load->library('upload', $config1);
		//upload profile
		
		//upload profile
		$ext2 = pathinfo($_FILES["txtaddressproof"]['name'],PATHINFO_EXTENSION);//png
		$imagename2 = rand(1111,9999).rand(1111,9999).".".$ext2;//12543658.png

			$config2 = array(
				'upload_path' => "./uploads/",
				'allowed_types' => "jpg|png|jpeg|JPEG|JPG|PNG",
				'file_name' => $imagename
			);
			$this->load->library('upload', $config2);
		//upload profile

		
		if($this->upload->do_upload('txtprofilephoto') && $this->upload->do_upload('txtadhaarphoto') && $this->upload->do_upload('txtaddressproof'))
		{
			$data=array(
				"agentname"=>$this->input->post('txtname'),
				"contact"=>$this->input->post('txtcontact'),
				"email"=>$this->input->post('txtemail'),
				"profilephoto"=>$imagename,
				"password"=>$this->input->post('txtpassword'),
				"isblock"=>$this->input->post('txtisblock'),
				"isapprove"=>$this->input->post('txtisapprove'),
				"adhaarnumber"=>$this->input->post('txtadhaarnumber'),
				"adhaarphoto"=>$imagename1,
				"aboutagent"=>$this->input->post('txtaboutagent'),
				"dob"=>$this->input->post('txtdate'),
				"agentaddress"=>$this->input->post('txtaddress'),
				"landmark"=>$this->input->post('txtlandmark'),
				"pincode"=>$this->input->post('txtpincode'),
				"addressproof"=>$imagename2
				
			);
			$result = $this->AgentModel->insertData($data);
			$this->session->set_flashdata("msg","insert successfully");
		}
		else
		{
			$this->session->set_flashdata("msg","image not uploaded");
		}
		redirect('console/AgentController/addagent');
	}
	public function changestatus($id,$status)
	{
		$this->AgentModel->changestatus($id,$status);
		$this->session->set_flashdata("msg","Status Changed Successfully");
		redirect('console/AgentController/index');
	}
	public function deleteagent()
	{
		$id=$this->input->post("deleteid");
		$this->AgentModel->deleteData($id);
		$this->session->set_flashdata("msg","Delete Successfully");
		redirect('console/AgentController/index');
	}
	public function updatedata($id)
	{
		if(empty($_FILES["txtprofilephoto"]['name']))
		{	
			$data=array(
				"agentname"=>$this->input->post('txtname'),
				"contact"=>$this->input->post('txtcontact'),
				"email"=>$this->input->post('txtemail'),
				"password"=>$this->input->post('txtpassword'),
				"isblock"=>$this->input->post('txtisblock'),
				"isapprove"=>$this->input->post('txtisapprove'),
				"adhaarnumber"=>$this->input->post('txtadhaarnumber'),
				"aboutagent"=>$this->input->post('txtaboutagent'),
				"dob"=>$this->input->post('txtdate'),
				"agentaddress"=>$this->input->post('txtaddress'),
				"landmark"=>$this->input->post('txtlandmark'),
				"pincode"=>$this->input->post('txtpincode')
			);
			$this->AgentModel->updateData($data,$id);
		}
		else
		{
			//upload
		$ext = pathinfo($_FILES["txtprofilephoto"]['name'],PATHINFO_EXTENSION);//png
		$imagename = rand(1111,9999).rand(1111,9999).".".$ext;//12543658.png

			$config = array(
				'upload_path' => "./uploads/",
				'allowed_types' => "jpg|png|jpeg|JPEG|JPG|PNG",
				'file_name' => $imagename
			);
			$this->load->library('upload', $config);
		//upload
		
		if( $this->upload->do_upload('txtprofilephoto') && $this->upload->do_upload('txtadhaarphoto') && $this->upload->do_upload('txtaddressproof'))
		{
			$data=array(
				"agentname"=>$this->input->post('txtname'),
				"contact"=>$this->input->post('txtcontact'),
				"email"=>$this->input->post('txtemail'),
				"profilephoto"=>$imagename,
				"password"=>$this->input->post('txtpassword'),
				"isblock"=>$this->input->post('txtisblock'),
				"isapprove"=>$this->input->post('txtisapprove'),
				"adhaarnumber"=>$this->input->post('txtadhaarnumber'),
				"adhaarphoto"=>$imagename1,
				"aboutagent"=>$this->input->post('txtaboutagent'),
				"dob"=>$this->input->post('txtdate'),
				"agentaddress"=>$this->input->post('txtaddress'),
				"landmark"=>$this->input->post('txtlandmark'),
				"pincode"=>$this->input->post('txtpincode'),
				"addressproof"=>$imagename2
				
			);
			$result = $this->AgentModel->updateData($data,$id);
			$this->session->set_flashdata("msg","update successfully");
		}
		else
		{
			$this->session->set_flashdata("msg","image not uploaded");
		}
	}
		redirect('console/AgentController/index');
	}
}
?>