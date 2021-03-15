 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PropertyController extends CI_Controller
{
	function __construct()
	{
        parent::__construct();
		$this->load->model('PropertyModel');	
		$this->load->model('UserModel');
		$this->load->model('AgentModel');
		$this->load->model('CategoryModel');	
		if(!$this->session->userdata('islogin'))
		{
			redirect(base_url()."/index.php/console/LoginController/index");
		}
		
		
    }
	/*public function changestatus($id,$status)
	{
		$this->PropertyModel->changestatus($id,$status);
		$this->session->set_flashdata("msg","status changed successfully");
		redirect('console/PropertyController/index');
	}*/
	public function approvepropertyuser($id,$status)
	{
		$this->PropertyModel->approveproperty($id,$status);
		$this->session->set_flashdata("msg","status changed successfully");
		redirect('console/PropertyController/index3');
	}
	public function approvepropertyusersingle($id,$status)
	{
		$this->PropertyModel->approveproperty($id,$status);
		$this->session->set_flashdata("msg","status changed successfully");
		redirect('console/PropertyController/index4');
	}
	public function rejectpropertyusersingle($id,$status)
	{
		$this->PropertyModel->approveproperty($id,$status);
		$this->session->set_flashdata("msg","status changed successfully");
		redirect('console/PropertyController/index5');
	}
	public function approvepropertyagent($id,$status)
	{
		$this->PropertyModel->approveproperty($id,$status);
		$this->session->set_flashdata("msg","status changed successfully");
		redirect('console/PropertyController/index');
	}
	public function approvepropertyagentsingle($id,$status)
	{
		$this->PropertyModel->approveproperty($id,$status);
		$this->session->set_flashdata("msg","status changed successfully");
		redirect('console/PropertyController/index1');
	}
	public function rejectpropertyagentsingle($id,$status)
	{
		$this->PropertyModel->approveproperty($id,$status);
		$this->session->set_flashdata("msg","status changed successfully");
		redirect('console/PropertyController/index2');
	}
	public function index()
	{
		$data["propertydata"]=$this->PropertyModel->getagentnewproperty();
		$this->load->view('console/newproperty',$data);
	}
	public function index1()
	{
		$data["propertydata"]=$this->PropertyModel->getagentapproveproperty();
		$this->load->view('console/approveproperty',$data);
	}
	public function index2()
	{
		$data["propertydata"]=$this->PropertyModel->getagentrejectproperty();
		$this->load->view('console/rejectproperty',$data);
	}
	public function newpropertyview($id)
	{
		$data["propertydata"]=$this->PropertyModel->getpropertyagentsingle($id);
		$this->load->view('console/newpropertyview',$data);
	}
	public function approvepropertyview($id)
	{
		$data["propertydata"]=$this->PropertyModel->getpropertyagentsingle($id);
		$this->load->view('console/approvepropertyview',$data);
	}
	public function rejectpropertyview($id)
	{
		$data["propertydata"]=$this->PropertyModel->getpropertyagentsingle($id);
		$this->load->view('console/rejectpropertyview',$data);
	}
	public function index3()
	{
		$data["propertydata"]=$this->PropertyModel->getusernewproperty();
		$this->load->view('console/usernewproperty',$data);
	}
	public function index4()
	{
		$data["propertydata"]=$this->PropertyModel->getuserapproveproperty();
		$this->load->view('console/userapproveproperty',$data);
	}
	public function index5()
	{
		$data["propertydata"]=$this->PropertyModel->getuserrejectproperty();
		$this->load->view('console/userrejectproperty',$data);
	}
	public function usernewpropertyview($id)
	{
		$data["propertydata"]=$this->PropertyModel->getpropertysingle($id);
		$this->load->view('console/usernewpropertyview',$data);
	}
	public function userapprovepropertyview($id)
	{
		$data["propertydata"]=$this->PropertyModel->getpropertysingle($id);
		$this->load->view('console/userapprovepropertyview',$data);
	}
	public function userrejectpropertyview($id)
	{
		$data["propertydata"]=$this->PropertyModel->getpropertysingle($id);
		$this->load->view('console/userrejectpropertyview',$data);
	}
	public function deleteproperty()
	{
		$id=$this->input->post("deleteid");
		$this->PropertyModel->deleteproperty($id);
		$this->session->set_flashdata("msg","delete successfully");
		redirect('console/PropertyController/index');

	}
}
