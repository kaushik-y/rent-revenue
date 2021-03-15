<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AreaModel extends CI_Model
{
	public $tablename = "tbl_area";
	public $primarykey = "areaid";
	
	public function checkDuplication($areaname,$cityid)
	{
		$this->db->select("*");
		$this->db->from($this->tablename);
		$this->db->where("areaname",$areaname);
		$this->db->where("cityid",$cityid);
		$res=$this->db->get();
		return $res->num_rows();
		
	}
	public function getAll()
	{
		$this->db->select("*");
		$this->db->join("tbl_city","tbl_city.cityid=tbl_area.cityid");
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
	public function deleteData($areaid)
	{
      $this->db->where($this->primarykey,$areaid);
      $this->db->delete($this->tablename); 
	}
	public function updateData($data,$id)
	{
		$this->db->where($this->primarykey, $id);
		$this->db->update($this->tablename, $data);
	}
}
?>