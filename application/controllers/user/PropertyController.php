<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PropertyController extends CI_Controller
{
	function __construct()
	{
        parent::__construct();
		$this->load->model('user/UserPropertyModel');
		$this->load->model('user/CategoryModel');
		$this->load->model('user/AreaModel');
		$this->load->model('FacilityModel');
    }
	
	public function index()
	{
		$this->load->model('user/PropertyModel');
		$data["property"]=$this->PropertyModel->getActive();
		
		$this->load->view('user/propertylist',$data);
	}
	
	public function index1($id)
	{
		$this->load->model('AgentModel');
		$data["id"]=$id;
		$data["agent"]=$this->AgentModel->getsingle($id);
		$this->load->model('user/PropertyModel');
		$data["property"]=$this->PropertyModel->getsingle($id);
		
		$this->load->view('user/propertydetails',$data);
	}
	public function index2()
	{
		$this->load->model('PropertyModel');
		$data["property"]=$this->PropertyModel->getApprove();
		$this->load->view('user/mypropertylist',$data);
	}
	public function index3($id)
	{
		$this->load->model('user/PropertyModel');
		$data["property"]=$this->PropertyModel->getDetails($id);
		$this->load->view('user/mypropertydetails',$data);
		
	}
	public function index4()
	{
		$data["catdata"]=$this->CategoryModel->getAll();
		$data["areadata"]=$this->AreaModel->getAll();
		$data["facility"]=$this->FacilityModel->getAll();
		$this->load->view('user/submitproperty',$data);
	}
	public function index5()
	{
		$this->load->model('PropertyModel');
		$data["property"]=$this->UserPropertyModel->getAll();
		$this->load->view('user/myproperty',$data);
	}
	public function insertproperty()
	{
		$result=$this->UserPropertyModel->checkDuplication($this->input->post('txttitle'));
		if($result<=0)
		{
			$data=array(
				"userid"=>$this->session->userdata("Userdata")->userid,
				"title"=>$this->input->post('txttitle'),
				"description"=>$this->input->post('txtdescription'),
				"categoryid"=>$this->input->post('txtcategory'),
				"registrationtype"=>$this->input->post('txtRegistrationType'),
				"dayrent"=>$this->input->post('txtdayrent'),
				"sell"=>$this->input->post('txtsell'),
				"fullrent"=>$this->input->post('txtfullrent'),
				"isapprove"=>'N',
				"address"=>$this->input->post('txtaddress'),
				"pincode"=>$this->input->post('txtpincode'),
				"lattitude"=>$this->input->post('txtlatitude'),
				"longtitude"=>$this->input->post('txtlogtitude'),
				"landmark"=>$this->input->post('txtlandmark'),
				"overlooking"=>$this->input->post('txtoverlooking'),
				"areaid"=>$this->input->post('txtarea'),
				"hall"=>$this->input->post('txthall'),
				"kitchen"=>$this->input->post('txtkitchen'),
				"balcony"=>$this->input->post('txtbalcony'),
				"bathroom"=>$this->input->post('txtbathroom'),
				"rooms"=>$this->input->post('txtroom'),
				"otherroom"=>$this->input->post('txtroom'),
				"totalfloor"=>$this->input->post('txtfloor'),
				"propertyonfloor"=>$this->input->post('txtonfloor'),
				"possessionby"=>$this->input->post('txtpossessionby'),
				"squarefit"=>$this->input->post('txtsqrtfit'),
				"noofguest"=>$this->input->post('txtnoofguest'),
				"furniture"=>$this->input->post('txtfurniture'),
				"watersource"=>$this->input->post('txtWaterSource')
			);
			$result = $this->UserPropertyModel->insertdata($data);
			
			if($result["status"]=="true")
			{
				$pid=$result["id"];
				$facility=$this->input->post('txtFeatures');
				
				for($i=0;$i < count($facility); $i++)
				{
					$this->db->query("insert into tbl_propertyfacility (propertyid,facilityid) values('".$pid."','".$facility[$i]."')");
				}	
				if($this->input->post('txtVideo')!=NULL){
					$this->db->query("insert into tbl_gallary (propertyid,mediaurl,type) values ('".$pid."','".$this->input->post('txtVideo')."','Video')");
				}

				if(!empty($_FILES['userfile']['name']))
				{
					
					    $this->load->library('upload');
						$dataInfo = array();
						$files = $_FILES;
						$cpt = count($_FILES['userfile']['name']);
						for($i=0; $i<$cpt; $i++)
						{           
							$_FILES['userfile']['name']= $files['userfile']['name'][$i];
							$_FILES['userfile']['type']= $files['userfile']['type'][$i];
							$_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
							$_FILES['userfile']['error']= $files['userfile']['error'][$i];
							$_FILES['userfile']['size']= $files['userfile']['size'][$i];    

							$this->upload->initialize($this->set_upload_options());
							$this->upload->do_upload();
							$dataInfo[] = $this->upload->data();
							
							$this->db->query("insert into tbl_gallary (propertyid,mediaurl,type) values ('".$pid."','".$dataInfo[$i]['file_name']."','Image')");
						}
						
				}
				
			}
			$this->session->set_flashdata("msg","Insert Successfully");
		}
		else
		{
			$this->session->set_flashdata("msg","duplicate");
		}
		redirect('user/PropertyController/index4');
	}
	
	private function set_upload_options()
{   
    //upload an image options
    $config = array();
    $config['upload_path'] = './uploads/property/';
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size']      = '0';
    $config['overwrite']     = FALSE;

    return $config;
}
}
