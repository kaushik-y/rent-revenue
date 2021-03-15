<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PropertyController extends CI_Controller
{
	function __construct()
	{
        parent::__construct();
		$this->load->model('agent/PropertyModel');	
		
		$this->load->model('AgentModel');
		$this->load->model('CategoryModel');
		$this->load->model('AreaModel');
        $this->load->model('FacilityModel');		
		if(!$this->session->userdata('isagentlogin'))
		{
			redirect(base_url()."/index.php/console/LoginController/index");
		}
		
    }
	
	public function index()
	{
		$data["propertydata"]=$this->PropertyModel->getagentnewproperty();
		$this->load->view('agent/newproperty',$data);
	}
	public function index1()
	{
		$data["propertydata"]=$this->PropertyModel->getagentapproveproperty();
		$this->load->view('agent/approveproperty',$data);
	}
	public function index2()
	{
		$data["propertydata"]=$this->PropertyModel->getagentrejectproperty();
		$this->load->view('agent/rejectproperty',$data);
	}
	public function propertyview($id)
	{
		$data["propertydata"]=$this->PropertyModel->getpropertysingle($id);
		$this->load->view('agent/newpropertyview',$data);
	}
	public function updateproperty($id)
	{
		$data["catdata"]=$this->CategoryModel->getAll();
		$data["areadata"]=$this->AreaModel->getAll();
		$data["propertydata"]=$this->PropertyModel->getpropertysingle($id);
		$this->load->view('agent/updateproperty',$data);
	}
	public function deleteproperty()
	{
		$id=$this->input->post("deleteid");
		$this->PropertyModel->deleteproperty($id);
		$this->session->set_flashdata("msg","delete successfully");
		redirect('agent/PropertyController/index');
	}
	public function addproperty()
	{
		
		
		$sql=$this->db->query("select * from tbl_property where agentid='".$this->session->userdata("agentdata")->agentid."'");
		$agentp=$sql->num_rows();
		
		$pkg=$this->db->query("select * from tbl_package where 	packageid=(select packageid from tbl_agentpackage where agentid='".$this->session->userdata("agentdata")->agentid."' order by agentpackageid desc limit 1)");
		
		if($pkg->num_rows($pkg)<=0)
		{
			echo "Errorsss";
		}
		else
		{
			foreach($pkg->result() as $row)
			{
				if($row->noproperty>$agentp)
				{
						$data["categorydata"]=$this->CategoryModel->getAll();
						$data["areadata"]=$this->AreaModel->getAll();	
						$data["facility"]=$this->FacilityModel->getAll();
						
						$this->load->view('agent/addproperty',$data);
				}
				else
				{
					echo $agentp;
					echo $row->noproperty;
					redirect('agent/ErrorController/index');
				}
			}
		}
		
	
	}
	public function insertproperty()
	{
		$result=$this->PropertyModel->checkDuplication($this->input->post('txttitle'));
		if($result<=0)
		{
			$data=array(
			     "agentid"=>$this->session->userdata("agentdata")->agentid,
			
				"categoryid"=>$this->input->post('txtcategory'),
				"areaid"=>$this->input->post('txtarea'),
				"title"=>$this->input->post('txttitle'),
				"description"=>$this->input->post('txtdesc'),
				"squarefit"=>$this->input->post('txtsquarefeet'),
				"dayrent"=>$this->input->post('txtdayrent'),
				"fullrent"=>$this->input->post('txtfullrent'),
				"sell"=>$this->input->post('txtsell'),
				"isapprove" =>'N',
				"rooms"=>$this->input->post('txtbedroom'),
				"hall"=>$this->input->post('txthall'),
				"kitchen"=>$this->input->post('txtkitchen'),
				"address"=>$this->input->post('txtaddress'),
				"landmark"=>$this->input->post('txtlandmark'),
				"pincode"=>$this->input->post('txtpincode'),
				"lattitude"=>$this->input->post('txtlatitude'),
				"longtitude"=>$this->input->post('txtlongtitude'),
				"registrationtype"=>$this->input->post('txtregi'),
				"bathroom"=>$this->input->post('txtbathroom'),
				"balcony"=>$this->input->post('txtbalcony'),
				"otherroom"=>$this->input->post('txtotherroom'),
				"furniture"=>$this->input->post('txtfurniture'),
				"totalfloor"=>$this->input->post('txttotalfloor'),
				"propertyonfloor"=>$this->input->post('txtpropertyonfloor'),
				"possessionby"=>$this->input->post('txtpossessionby'),
				"watersource"=>$this->input->post('txtwater'),
				"overlooking"=>$this->input->post('txtoverlooking'),
				"noofguest"=>$this->input->post('txtnoofguest')
				
				
			);
			$result = $this->PropertyModel->insertdata($data);
			
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
			$this->session->set_flashdata("msg","Insert SuccessFully");
		}
		else
		{
			$this->session->set_flashdata("msg","duplicate");
		}
		redirect('agent/PropertyController/index');
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
	public function updtedata($id)
	{
		$data=array(
				"categoryid"=>$this->input->post('txtcategory'),
				"areaid"=>$this->input->post('txtarea'),
				"title"=>$this->input->post('txttitle'),
				"description"=>$this->input->post('txtdesc'),
				"squarefit"=>$this->input->post('txtsquarefeet'),
				"dayrent"=>$this->input->post('txtdayrent'),
				"fullrent"=>$this->input->post('txtfullrent'),
				"sell"=>$this->input->post('txtsell'),
				"rooms"=>$this->input->post('txtbedroom'),
				"hall"=>$this->input->post('txthall'),
				"kitchen"=>$this->input->post('txtkitchen'),
				"address"=>$this->input->post('txtaddress'),
				"landmark"=>$this->input->post('txtlandmark'),
				"pincode"=>$this->input->post('txtpincode'),
				"lattitude"=>$this->input->post('txtlatitude'),
				"longtitude"=>$this->input->post('txtlongtitude'),
				"isapprove"=>'N',
				"registrationtype"=>$this->input->post('txtregi'),
				"bathroom"=>$this->input->post('txtbathroom'),
				"balcony"=>$this->input->post('txtbalcony'),
				"otherroom"=>$this->input->post('txtotherroom'),
				"furniture"=>$this->input->post('txtfurniture'),
				"totalfloor"=>$this->input->post('txttotalfloor'),
				"propertyonfloor"=>$this->input->post('txtpropertyonfloor'),
				"possessionby"=>$this->input->post('txtpossessionby'),
				"watersource"=>$this->input->post('txtwater'),
				"overlooking"=>$this->input->post('txtoverlooking'),
				"noofguest"=>$this->input->post('txtnoofguest')

				);
		$this->PropertyModel->updateData($data,$id);
		redirect('agent/PropertyController/index');
	}
}
