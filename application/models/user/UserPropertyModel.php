<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserPropertyModel extends CI_Model
{
	public $tablename = "tbl_property";
	public $primarykey = "propertyid";
	
	public function checkDuplication($title)
	{
		$this->db->select("*");
		$this->db->from($this->tablename);
		$this->db->where("title",$title);
		$res=$this->db->get();
		return $res->num_rows();
		
	}
	public function getAll()
	{
		$this->db->select("*");
		$this->db->join("tbl_category","tbl_category.categoryid=tbl_property.categoryid");
		$this->db->join("tbl_area","tbl_area.areaid=tbl_property.areaid");
		$this->db->where("userid",$this->session->userdata("Userdata")->userid);
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
		$id= $this->db->insert_id();
		$status=($this->db->affected_rows() > 0)  ? "true" :  "false";
		
		return array(
		"id"=>$id,
		"status"=>$status
		);
	}
}
?>