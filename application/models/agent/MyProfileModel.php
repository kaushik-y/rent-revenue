<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MyProfileModel extends CI_Model
{
	public $tablename = "tbl_agent";
	public $primarykey = "agentid";

	public function change($current,$new)
	{
		$result=$this->db->query("select * from tbl_agent where agentid='".$this->session->userdata("agentdata")->agentid."' and password='".$current."'");
		if($result->num_rows($result)<=0)
		{
			return "not";
		}
		else
		{
			$this->db->query("update tbl_agent set password='".$new."' where agentid='".$this->session->userdata("agentdata")->agentid."'");
			return "yes";
		}
	}
	
	public function updatecheckDuplication($email,$id)
	{
		$this->db->select("*");
		$this->db->from($this->tablename);
		$this->db->where("email",$email);
		$this->db->where("agentid",$id);
		$res=$this->db->get();
		return $res->num_rows();	
	}
	public function getAll()
	{
		$this->db->select("*");
		$this->db->from($this->tablename);
        $this->db->where("agentid",$this->session->userdata("agentdata")->agentid);
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