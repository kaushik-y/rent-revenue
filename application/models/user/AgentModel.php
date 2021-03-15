<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AgentModel extends CI_Model
{
	public $tablename = "tbl_agent";
	public $primarykey = "agentid";
	
	public function changestatus($id,$status)
	{
		$newstatus="";
		if($status=='Y')
		{
			$newstatus='N';
		}
		else
		{
			$newstatus='Y';
		}
		$this->db->set("isblock",$newstatus);
		$this->db->where($this->primarykey,$id);
		$this->db->update($this->tablename);
		//update tbl_news set status='N' where newsid=$id
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
		$this->db->join("tbl_city","tbl_city.cityid=tbl_agent.cityid");
		$this->db->from($this->tablename);
		$this->db->where($this->primarykey,$id);
		$res=$this->db->get();
		return $res->result();
	}

	public function deleteData($agentid)
	{

      $this->db->where($this->primarykey,$agentid);
      $this->db->delete($this->tablename); 
	}
}
?>