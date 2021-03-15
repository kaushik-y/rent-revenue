<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FAQCategoryModel extends CI_Model
{
	public $tablename = "tbl_faqcategory";
	public $primarykey = "faqcategoryid";
	

	public function getCategory()
	{
		$this->db->select("*");
		$res=$this->db->get($this->tablename);
		return $res->result();
	}
	
}

?>