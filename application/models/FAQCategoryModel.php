<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FAQCategoryModel extends CI_Model
{
	public $tablename = "tbl_faqcategory";
	public $primarykey = "faqcategoryid";
	
	
	public function checkDuplication($faqcategoryname)
	{
		$this->db->select("*");
		$this->db->from($this->tablename);
		$this->db->where("faqcategoryname",$faqcategoryname);
		$res=$this->db->get();
		return $res->num_rows();
		
	}

	public function getCategory()
	{
		$this->db->select("*");
		$res=$this->db->get($this->tablename);
		return $res->result();
	}
	public function getSingleFaqCategory($id)
	{
		$this->db->select("*");
		$this->db->from($this->tablename);
		$this->db->where($this->primarykey,$id);
		$res=$this->db->get();
		return $res->result();
	}
	public function insertcat($data)
	{
		$this->db->insert($this->tablename,$data);
		return true;
	}
	public function deletecat($faqcategoryid)
	{
      $this->db->where($this->primarykey,$faqcategoryid);
      $this->db->delete($this->tablename); 
	}
	public function updateData($data,$id)
	{
		$this->db->where($this->primarykey, $id);
		$this->db->update($this->tablename, $data);
	}
}

?>