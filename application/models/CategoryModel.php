<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CategoryModel extends CI_Model
{
	public $tablename = "tbl_category";
	public $primarykey = "categoryid";

	public function checkDuplication($categoryname)
	{
		$this->db->select("*");
		$this->db->from($this->tablename);
		$this->db->where("categoryname",$categoryname);
		$res=$this->db->get();
		return $res->num_rows();
		//select * from tbl_state where category_name=$categoryname
	}
	public function updatecheckDuplication($categoryname,$id)
	{
		$this->db->select("*");
		$this->db->from($this->tablename);
		$this->db->where("categoryname",$categoryname);
		$this->db->where("categoryid!='$id'");
		$res=$this->db->get();
		return $res->num_rows();
		//select * from tbl_state where category_name=$categoryname
	}
	public function getAll()
	{
		$this->db->select("*");
		$res=$this->db->get($this->tablename);
		return $res->result();
	}
	public function getSingleRecord($id)
	{
		$this->db->select("*");
		$this->db->from($this->tablename);
		$this->db->where($this->primarykey,$id);
		$res=$this->db->get();
		return $res->result();
	}
	public function insertData($data)
	{
		$this->db->insert($this->tablename,$data);
		return true;
	}
	public function deleteData($categoryid)
	{

      $this->db->where($this->primarykey,$categoryid);
      $this->db->delete($this->tablename); 
	}
	public function updateData($data,$id)
	{
		$this->db->where($this->primarykey, $id);
		$this->db->update($this->tablename, $data);
	}
}
?>