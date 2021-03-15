<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NewsModel extends CI_Model
{
	public $tablename = "tbl_News";
	public $primarykey = "newsid";
	
	
	
	public function getCategory()
	{
		$this->db->select("*");
		$result=$this->db->get($this->tablename);
		return $result->result();
	}
	
	
	
}
?>