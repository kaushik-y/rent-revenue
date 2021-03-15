	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PropertyModel extends CI_Model
{
	public $primarykey="propertyid";
	public $tablename="tbl_property";
	
	
	public function checkDuplication($title)
	{
		$this->db->select("*");
		$this->db->from($this->tablename);
		$this->db->where("title",$title);
		$res=$this->db->get();
		return $res->num_rows();
		//select * from tbl_state where category_name=$categoryname
	}
	public function getagentnewproperty()
	{
		$this->db->select("*,tbl_property.isapprove as approve");
		$this->db->join("tbl_agent","tbl_agent.agentid=tbl_property.agentid");
		$this->db->join("tbl_category","tbl_category.categoryid=tbl_property.categoryid");
		$this->db->where('tbl_property.isapprove',"N");
		$this->db->where("tbl_property.agentid",$this->session->userdata("agentdata")->agentid);
		$result=$this->db->get("tbl_property");
		return $result->result();
	}
	public function getagentapproveproperty()
	{
		$this->db->select("*,tbl_property.isapprove as approve");
		$this->db->join("tbl_agent","tbl_agent.agentid=tbl_property.agentid");
		$this->db->join("tbl_category","tbl_category.categoryid=tbl_property.categoryid");
		$this->db->where('tbl_property.isapprove',"Y");
		$this->db->where("tbl_property.agentid",$this->session->userdata("agentdata")->agentid);
		$result=$this->db->get("tbl_property");
		return $result->result();
	}
	public function getagentrejectproperty()
	{
		$this->db->select("*,tbl_property.isapprove as approve");
		$this->db->join("tbl_agent","tbl_agent.agentid=tbl_property.agentid");
		$this->db->join("tbl_category","tbl_category.categoryid=tbl_property.categoryid");
		$this->db->where('tbl_property.isapprove',"R");
		$this->db->where("tbl_property.agentid",$this->session->userdata("agentdata")->agentid);
		$result=$this->db->get("tbl_property");
		return $result->result();
	}
	public function getproperty()
	{
		$this->db->select("*,tbl_property.isapprove as papprove");
		$this->db->join("tbl_category","tbl_category.categoryid=tbl_property.categoryid");
		$this->db->join("tbl_area","tbl_area.areaid=tbl_property.areaid");
		$result=$this->db->get("tbl_property");
		return $result->result();
	}
	public function getpropertysingle($id)
	{
		$this->db->select("*,tbl_property.isapprove as papprove");
		$this->db->join("tbl_category","tbl_category.categoryid=tbl_property.categoryid");
		$this->db->join("tbl_area","tbl_area.areaid=tbl_property.areaid");
		$this->db->where('tbl_property.propertyid',$id);
		$result=$this->db->get("tbl_property");
		return $result->result();
	}
	public function deleteproperty($propertyid)
	{
      $this->db->where("propertyid",$propertyid);
      $this->db->delete("tbl_property");   
	}
	public function insertdata($data)
	{
		$this->db->insert($this->tablename,$data);
		$id= $this->db->insert_id();
		$status=($this->db->affected_rows() > 0)  ? "true" :  "false";
		
		return array(
		"id"=>$id,
		"status"=>$status
		);
	}
	public function updateData($data,$id)
	{
		$this->db->where($this->primarykey, $id);
		$this->db->update($this->tablename, $data);
	}
}
