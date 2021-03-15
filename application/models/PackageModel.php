<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PackageModel extends CI_Model
{
	public $tablename = "tbl_package";
	public $primarykey = "packageid";
	
	
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
		$this->db->set("isactive",$newstatus);
		$this->db->where($this->primarykey,$id);
		$this->db->update($this->tablename);
		//update tbl_news set status='N' where newsid=$id
	}
	public function checkDuplication($packagename)
	{
		$this->db->select("*");
		$this->db->from($this->tablename);
		$this->db->where("packagename",$packagename);
		$res=$this->db->get();
		return $res->num_rows();
		//select * from tbl_package where package_name=$packagename
	}
	public function getAll()
	{
		$this->db->select("*");
		$res=$this->db->get($this->tablename);
		return $res->result();
	}
	public function getActive()
	{
		$this->db->select("*");
		$this->db->from($this->tablename);
		$this->db->where("isactive","Y");
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
	public function insertData($data)
	{
		$this->db->insert($this->tablename,$data);
		return true;
	}
	public function deleteData($packageid)
	{
      $this->db->where($this->primarykey,$packageid);
      $this->db->delete($this->tablename); 
	}
	public function updateData($data,$id)
	{
		$this->db->where($this->primarykey, $id);
		$this->db->update($this->tablename, $data);
	}
}
?>