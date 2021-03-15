<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FacilityModel extends CI_Model
{
	public $tablename = "tbl_facility";
	public $primarykey = "facilityid";
	
	public function checkDuplication($facilityname)
	{
		$this->db->select("*");
		$this->db->from($this->tablename);
		$this->db->where("facilityname",$facilityname);
		$res=$this->db->get();
		return $res->num_rows();
		//select * from tbl_state where faclity_name=$facilityname
	}
	public function updatecheckDuplication($facilityname,$id)
	{
		$this->db->select("*");
		$this->db->from($this->tablename);
		$this->db->where("facilityname",$facilityname);
		$this->db->where("facilityid!='$id'");
		$res=$this->db->get();
		return $res->num_rows();
		//select * from tbl_state where faclity_name=$facilityname
	}
	public function getAll()
	{
		$this->db->select("*");
		$res=$this->db->get($this->tablename);
		return $res->result();
	}
	public function getSingleRecord($id)
	{
		$this->db->select("*");
		$this->db->from($this->tablename);
		$this->db->where($this->primarykey,$id);
		$res=$this->db->get();
		return $res->result();
	}
	public function insertData($data)
	{
		$this->db->insert($this->tablename,$data);
		return true;
	}
	public function deleteData($facilityid)
	{
      $this->db->where($this->primarykey,$facilityid);
      $this->db->delete($this->tablename); 
	}
	public function updateData($data,$id)
	{
		$this->db->where($this->primarykey,$id);
		$this->db->update($this->tablename,$data);
	}
}
?>