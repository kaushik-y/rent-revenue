<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminModel extends CI_Model
{
	public function login($email,$password)
	{
		$this->db->select("*");
		$this->db->from("tbl_admin");
		$this->db->where("email",$email);
		$this->db->where("password",$password);
		$result = $this->db->get();
		return $result->num_rows();
	}	
	
	public function logindata($email,$password)
	{
		$this->db->select("*");
		$this->db->from("tbl_admin");
		$this->db->where("email",$email);
		$this->db->where("password",$password);
		$result = $this->db->get();
		return $result->row();
	}	
}
?>