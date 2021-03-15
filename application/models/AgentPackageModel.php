<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AgentPackageModel extends CI_Model
{
	public function getagentpackage()
	{
		$this->db->select("*");
		$this->db->join("tbl_agent","tbl_agent.agentid=tbl_agentpackage.agentid");
		$this->db->join("tbl_package","tbl_package.packageid=tbl_agentpackage.packageid");
		$result=$this->db->get("tbl_agentpackage");
		return $result->result();
	}
	public function deleteagentpackage($agentpackageid)
	{

      $this->db->where("agentpackageid",$agentpackageid);
      $this->db->delete("tbl_agentpackage");   
	}
}
