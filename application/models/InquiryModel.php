<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InquiryModel extends CI_Model
{
	public function getInquiry()
	{
		$this->db->select("*");
		$this->db->join("tbl_users","tbl_users.userid=tbl_inquiry.userid");
		$this->db->join("tbl_property","tbl_property.propertyid=tbl_inquiry.propertyid");
		$result=$this->db->get("tbl_inquiry");
		return $result->result();
	}
	public function deleteinquiry($inquiryid)
	{
      $this->db->where("inquiryid",$inquiryid);
      $this->db->delete("tbl_inquiry");   
	}
}
