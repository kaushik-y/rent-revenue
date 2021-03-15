<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class PackageModel extends CI_Model
{
	public $tablename = "tbl_package";
	public $primarykey = "packageid";
	
	
	
	public function getAll($id)
	{
		$this->db->select("*");
		$res=$this->db->get($this->tablename);
		return $res->result();
	}
	public function getsingle($id)
	{
		$this->db->select("*");
		$this->db->from($this->tablename);
		$this->db->where($this->primarykey,$id);
		$res=$this->db->get();
		return $res->result();
	}
	public function insertData($data)
	{
		$this->db->insert("tbl_agentpackage",$data);
		return true;
	}
	
	
}
?>