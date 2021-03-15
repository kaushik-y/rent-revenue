<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FAQModel extends CI_Model
{
	public $tablename = "tbl_faq";
	public $primarykey = "faqid";
	
	
	public function getCategory()
	{
		$this->db->select("*");
		$this->db->join("tbl_faqcategory","tbl_faqcategory.faqcategoryid=tbl_faq.faqcategoryid");
		$res=$this->db->get($this->tablename);
		return $res->result();
	}
	
}

?>