<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FAQModel extends CI_Model
{
	public $tablename = "tbl_faq";
	public $primarykey = "faqid";
	
	public function checkDuplication($faqquestion,$faqcategoryid)
	{
		$this->db->select("*");
		$this->db->from($this->tablename);
		$this->db->where("faqquestion",$faqquestion);
		$this->db->where("faqcategoryid",$faqcategoryid);
		$res=$this->db->get();
		return $res->num_rows();
		
	}
	public function getCategory()
	{
		$this->db->select("*");
		$this->db->join("tbl_faqcategory","tbl_faqcategory.faqcategoryid=tbl_faq.faqcategoryid");
		$res=$this->db->get($this->tablename);
		return $res->result();
	}
	public function getSingleFAQ($id)
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
		public function deletefaq($faqid)
	{

      $this->db->where($this->primarykey,$faqid);
      $this->db->delete($this->tablename); 
	}
	public function updateData($data,$id)
	{
		$this->db->where($this->primarykey, $id);
		$this->db->update($this->tablename, $data);
	}
}

?>