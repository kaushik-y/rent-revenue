<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BookingModel extends CI_Model
{
	public $tablename = "tbl_booking";
	public $primarykey = "bookingid";
	
	public function insertdata($data)
	{
		$this->db->insert($this->tablename,$data);
		return true;
	}
	public function check($startdate,$enddate,$pid)
	{
		$falg=0;
		$sql=$this->db->query("select * from tbl_booking where propertyid='".$pid."' and startdate between '".date('Y-m-d',strtotime($startdate))."' and '".date('Y-m-d',strtotime($enddate))."' and  enddate between '".date('Y-m-d',strtotime($startdate))."' and '".date('Y-m-d',strtotime($enddate))."'");
		if($sql->num_rows()<=0)
		{
			return false;
		}
		else
		{
			return true;
		}
	}
	public function checkperson($pid)
	{
		$sql=$this->db->query("select * from tbl_property where propertyid='".$pid."'");
		foreach($sql->result() as $row)
		{
			return $row->noofguest;
		}
	}
	public function getbookingproperty()
	{
	
		
		$this->db->select("*");
		$this->db->from($this->tablename);
	   $this->db->where('tbl_booking.isapprove',"Y");
		$this->db->join("tbl_property","tbl_property.propertyid=tbl_booking.propertyid");
		$this->db->where("tbl_booking.userid",$this->session->userdata("Userdata")->userid);
		$res=$this->db->get();
		return $res->result();
	}
	
	
}	
?>