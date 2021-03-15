	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PropertyModel extends CI_Model
{
	public $primarykey="propertyid";
	public $tablename="tbl_property";
	
	public function approveproperty($id,$status)
	{
		$this->db->set("isapprove",$status);
		$this->db->where($this->primarykey,$id);
		$this->db->update($this->tablename);
	}
	public function getActive()
	{
		$res=$this->db->query("select * from tbl_property where isapprove='Y' and (agentid IS NULL or agentid not in (select agentid from tbl_agentpackage where expiredate<='".date('Y-m-d')."'))");
		return $res->result();
	}
	public function getbooking($id)
	{
		$this->db->select("*");
		$this->db->from($this->tablename);
		$this->db->where("propertyid",$id);
		$res=$this->db->get();
		return $res->result();
	}
	public function getsingle($id)
	{
		$this->db->select("*");
		$this->db->from($this->tablename);
		$this->db->join("tbl_category","tbl_category.categoryid=tbl_property.categoryid");
		$this->db->join("tbl_area","tbl_area.areaid=tbl_property.areaid");
		
		$this->db->where("propertyid",$id);
		$res=$this->db->get();
		return $res->result();
	}
	public function getprice($id)
	{
		$this->db->select("*");
		$this->db->from("tbl_price");
		$this->db->where("propertyid",$id);
		$res=$this->db->get();
		return $res->result();
	}
	public function getApprove()
	{
		$this->db->select("*");
		$this->db->from($this->tablename);
		$this->db->where("isapprove","Y");
		$res=$this->db->get();
		return $res->result();
	}
	public function getDetails($id)
	{
		$this->db->select("*");
		$this->db->from($this->tablename);
		$this->db->join("tbl_category","tbl_category.categoryid=tbl_property.categoryid");
		$this->db->join("tbl_area","tbl_area.areaid=tbl_property.areaid");
		$this->db->where("propertyid",$id);
		$res=$this->db->get();
		return $res->result();
	}
	/*public function changestatus($id,$status)
	{
		$newstatus="";
		if($status=='Y')
		{
			$newstatus='N';
		}
		else
		{
			$newstatus='Y';
		}
		
		$this->db->set("isapprove",$newstatus);
		$this->db->where($this->primarykey,$id);
		$this->db->update($this->tablename);
		//update tbl_user set status='N' where userid=$id
	}*/
	public function getagentnewproperty()
	{
		$this->db->select("*,tbl_property.isapprove as approve");
		$this->db->join("tbl_agent","tbl_agent.agentid=tbl_property.agentid");
		$this->db->join("tbl_category","tbl_category.categoryid=tbl_property.categoryid");
		$this->db->where('tbl_property.isapprove',"N");
		$result=$this->db->get("tbl_property");
		return $result->result();
	}
	public function getagentapproveproperty()
	{
		$this->db->select("*,tbl_property.isapprove as approve");
		$this->db->join("tbl_agent","tbl_agent.agentid=tbl_property.agentid");
		$this->db->join("tbl_category","tbl_category.categoryid=tbl_property.categoryid");
		$this->db->where('tbl_property.isapprove',"Y");
		$result=$this->db->get("tbl_property");
		return $result->result();
	}
	public function getagentrejectproperty()
	{
		$this->db->select("*,tbl_property.isapprove as approve");
		$this->db->join("tbl_agent","tbl_agent.agentid=tbl_property.agentid");
		$this->db->join("tbl_category","tbl_category.categoryid=tbl_property.categoryid");
		$this->db->where('tbl_property.isapprove',"R");
		$result=$this->db->get("tbl_property");
		return $result->result();
	}
	public function getusernewproperty()
	{
		$this->db->select("*,tbl_property.isapprove as approve");
		$this->db->join("tbl_users","tbl_users.userid=tbl_property.userid");
		$this->db->join("tbl_category","tbl_category.categoryid=tbl_property.categoryid");
		$this->db->where('tbl_property.isapprove',"N");
		$result=$this->db->get("tbl_property");
		return $result->result();
	}
	public function getuserapproveproperty()
	{
		$this->db->select("*,tbl_property.isapprove as approve");
		$this->db->join("tbl_users","tbl_users.userid=tbl_property.userid");
		$this->db->join("tbl_category","tbl_category.categoryid=tbl_property.categoryid");
		$this->db->where('tbl_property.isapprove',"Y");
		$result=$this->db->get("tbl_property");
		return $result->result();
	}
	public function getuserrejectproperty()
	{
		$this->db->select("*,tbl_property.isapprove as approve");
		$this->db->join("tbl_users","tbl_users.userid=tbl_property.userid");
		$this->db->join("tbl_category","tbl_category.categoryid=tbl_property.categoryid");
		$this->db->where('tbl_property.isapprove',"R");
		$result=$this->db->get("tbl_property");
		return $result->result();
	}
	public function getpropertysingle($id)
	{
		$this->db->select("*,tbl_property.isapprove as approve");
		$this->db->join("tbl_users","tbl_users.userid=tbl_property.userid");
		$this->db->join("tbl_area","tbl_area.areaid=tbl_property.areaid");
		$this->db->join("tbl_category","tbl_category.categoryid=tbl_property.categoryid");
		$this->db->where('tbl_property.propertyid',$id);
		$result=$this->db->get("tbl_property");
		return $result->result();
	}
	public function getpropertyagentsingle($id)
	{
		$this->db->select("*,tbl_property.isapprove as approve");
		$this->db->join("tbl_agent","tbl_agent.agentid=tbl_property.agentid");
		$this->db->join("tbl_area","tbl_area.areaid=tbl_property.areaid");
		$this->db->join("tbl_category","tbl_category.categoryid=tbl_property.categoryid");
		$this->db->where('tbl_property.propertyid',$id);
		$result=$this->db->get("tbl_property");
		return $result->result();
	}
	public function deleteproperty($propertyid)
	{
      $this->db->where("propertyid",$propertyid);
      $this->db->delete("tbl_property");   
	}
}
