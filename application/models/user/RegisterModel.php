<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegisterModel extends CI_Model
{
	public $tablename = "tbl_users";
	public $primarykey = "userid";
	public $tablename1 = "tbl_agent";
	public $primarykey1 = "agentid";
	
	public function checkDuplication($email)
	{
		$this->db->select("*");
		$this->db->from($this->tablename);
		$this->db->where("email",$email);
		$res=$this->db->get();
		return $res->num_rows();
		//select * from tbl_package where package_name=$packagename
	}
	public function checkDuplicationagent($email)
	{
		$this->db->select("*");
		$this->db->from($this->tablename1);
		$this->db->where("email",$email);
		$res=$this->db->get();
		return $res->num_rows();
		//select * from tbl_package where package_name=$packagename
	}
	public function getAll()
	{
		$this->db->select("*");
		$this->db->join("tbl_city","tbl_city.cityid=tbl_users.cityid");
		$res=$this->db->get($this->tablename);
		return $res->result();
	}
	public function getAll1()
	{
		$this->db->select("*");
		$this->db->join("tbl_city","tbl_city.cityid=tbl_agent.cityid");
		$res=$this->db->get($this->tablename1);
		return $res->result();
	}
	public function insertData($data)
	{
		$this->db->insert($this->tablename,$data);
		return true;
	}
	public function insertagent($data)
	{
		$this->db->insert($this->tablename1,$data);
		return true;
	}
	
}
?>	