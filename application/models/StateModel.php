<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StateModel extends CI_Model
{
	public $tablename = "tbl_state";
	public $primarykey = "stateid";
	
	
	public function checkDuplication($statename)
	{
		$this->db->select("*");
		$this->db->from($this->tablename);
		$this->db->where("statename",$statename);
		$res=$this->db->get();
		return $res->num_rows();
		//select * from tbl_state where state_name=$stetname
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
	public function deleteData($stateid)
	{

      $this->db->where($this->primarykey,$stateid);
      $this->db->delete($this->tablename); 
	}
	public function updateData($data,$id)
	{
		$this->db->where($this->primarykey, $id);
		$this->db->update($this->tablename, $data);
	}
}
?>