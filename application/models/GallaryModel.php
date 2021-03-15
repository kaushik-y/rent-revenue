<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GallaryModel extends CI_Model
{
	public function getgallary()
	{
		$this->db->select("*");
		$result=$this->db->get("tbl_gallary");
		return $result->result();
	}
	public function deletegallary($gallrayid)
	{

      $this->db->where("gallrayid",$gallrayid);
      $this->db->delete("tbl_gallary");   
	}
}
