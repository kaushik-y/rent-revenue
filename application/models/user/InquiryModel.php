<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InquiryModel extends CI_Model
{
	public $tablename = "tbl_inquiry";
	public $primarykey = "inquiryid";
	
	public function insertdata($data)
	{
		$this->db->insert($this->tablename,$data);
		return true;
	}

	
	
	
}	
?>