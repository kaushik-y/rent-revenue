<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginModel extends CI_Model
{
	public function login($email,$password)
	{
		$this->db->select("*");
		$this->db->from("tbl_users");
		$this->db->where("email",$email);
		$this->db->where("password",$password);
		$this->db->where("isblock","N");
		$this->db->where("isverify","Y");
		$result = $this->db->get();
		return $result->num_rows();
	}	
	
	public function logindata($email,$password)
	{
		$this->db->select("*");
		$this->db->from("tbl_users");
		$this->db->where("email",$email);
		$this->db->where("password",$password);
		$result = $this->db->get();
		return $result->row();
	}	
	/*public function loginagent($email,$password)
	{
		$this->db->select("*");
		$this->db->from("tbl_agent");
		$this->db->where("email",$email);
		$this->db->where("password",$password);
		$result = $this->db->get();
		return $result->num_rows();
	}	
	
	public function logindataagent($email,$password)
	{
		$this->db->select("*");
		$this->db->from("tbl_agent");
		$this->db->where("email",$email);
		$this->db->where("password",$password);
		$result = $this->db->get();
		return $result->row();
	}*/	
}
?>