<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ReviewModel extends CI_Model
{
	public function getReview()
	{
		$this->db->select("*");
		$this->db->from("tbl_rantingreview");
		$this->db->join("tbl_property","tbl_property.propertyid=tbl_rantingreview.propertyid");
		$this->db->join("tbl_users","tbl_users.userid=tbl_rantingreview.userid");
		$result=$this->db->get();
		return $result->result();
	}
	public function deletereview($reviewid)
	{
      $this->db->where("reviewid",$reviewid);
      $this->db->delete("tbl_rantingreview");   
	}
	public function getAll()
	{
		$this->db->select("*");
		$res=$this->db->get("tbl_rantingreview");
		return $res->result();
	}
}