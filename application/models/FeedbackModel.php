<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FeedbackModel extends CI_Model
{
	public function getCategory()
	{
		$this->db->select("*");
		$result=$this->db->get("tbl_feedback");
		return $result->result();
	}
	public function deletefeedback($feedid)
	{

      $this->db->where("feedid",$feedid);
      $this->db->delete("tbl_feedback");   
	}
}
