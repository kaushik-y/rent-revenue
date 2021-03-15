<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RatingModel extends CI_Model
{
	public $tablename = "tbl_rantingreview";
	public $primarykey = "reviewid";
	
	
	
	public function insertData($data)
	{
		$this->db->insert($this->tablename,$data);
		return true;
	}
	public function getsingle($id)
	{
		$this->db->select("*");
		$this->db->from($this->tablename);
		$this->db->where($this->primarykey,$id);
		$res=$this->db->get();
		return $res->result();
	}
	
	
	
}
?>