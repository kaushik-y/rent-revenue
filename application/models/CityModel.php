<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CityModel extends CI_Model
{
	public $tablename = "tbl_city";
	public $primarykey = "cityid";
	
	public function checkDuplication($cityname,$stateid)
	{
		$this->db->select("*");
		$this->db->from($this->tablename);
		$this->db->where("cityname",$cityname);
		$this->db->where("stateid",$stateid);
		$res=$this->db->get();
		return $res->num_rows();
		
	}
	public function getAll()
	{
		$this->db->select("*");
		$this->db->join("tbl_state","tbl_state.stateid=tbl_city.stateid");
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
	public function deleteData($cityid)
	{

      $this->db->where($this->primarykey,$cityid);
      $this->db->delete($this->tablename); 
	}
	public function updateData($data,$id)
	{
		$this->db->where($this->primarykey, $id);
		$this->db->update($this->tablename, $data);
	}
}
?>