<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContactModel extends CI_Model
{
	public $tablename = "tbl_feedback";
	public $primarykey = "feedid";
	
	
	
	public function insertdata($data)
	{
		$this->db->insert($this->tablename,$data);
		return true;
	}
	public function getAll()
	{
		$this->db->select("*");
		$res=$this->db->get($this->tablename);
		return $res->result();
	}
	
}
?>