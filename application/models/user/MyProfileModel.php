<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MyProfileModel extends CI_Model
{
	public $tablename = "tbl_users";
	public $primarykey = "userid";

	public function change($current,$new)
	{
		$result=$this->db->query("select * from tbl_users where userid='".$this->session->userdata("Userdata")->userid."' and password='".$current."'");
		if($result->num_rows($result)<=0)
		{
			return "not";
		}
		else
		{
			$this->db->query("update tbl_users set password='".$new."' where userid='".$this->session->userdata("Userdata")->userid."'");
			return "yes";
		}
	}
	
	public function updatecheckDuplication($email,$id)
	{
		$this->db->select("*");
		$this->db->from($this->tablename);
		$this->db->where("email",$email);
		$this->db->where("userid",$id);
		$res=$this->db->get();
		return $res->num_rows();	
	}
	public function getAll()
	{
		$this->db->select("*");
		$this->db->from($this->tablename);
        $this->db->where("userid",$this->session->userdata("Userdata")->userid);
		$res=$this->db->get();
		
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
	public function updateData($data,$id)
	{
		$this->db->where($this->primarykey, $id);
		$this->db->update($this->tablename, $data);
	}
}
?>