<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NewsModel extends CI_Model
{
	public $tablename = "tbl_News";
	public $primarykey = "newsid";
	
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
	
	public function checkDuplication($title)
	{
		$this->db->select("*");
		$this->db->from($this->tablename);
		$this->db->where("title",$title);
		$res=$this->db->get();
		return $res->num_rows();
		
	}
	public function updatecheckDuplication($title,$id)
	{
		$this->db->select("*");
		$this->db->from($this->tablename);
		$this->db->where("title",$title);
		$this->db->where("newsid",$id);
		$res=$this->db->get();
		return $res->num_rows();	
	}
	public function getCategory()
	{
		$this->db->select("*");
		$result=$this->db->get($this->tablename);
		return $result->result();
	}
	public function getSingleNews($id)
	{
		$this->db->select("*");
		$this->db->from($this->tablename);
		$this->db->where($this->primarykey,$id);
		$res=$this->db->get();
		return $res->result();
	}
	public function insertnews($data)
	{
		$this->db->insert($this->tablename,$data);
		return true;
	}
	public function deletenews($newsid)
	{
      $this->db->where("newsid",$newsid);
      $this->db->delete($this->tablename); 
	}
	public function updateData($data,$id)
	{
		$this->db->where($this->primarykey, $id);
		$this->db->update($this->tablename, $data);
	}
}
?>