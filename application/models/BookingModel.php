<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BookingModel extends CI_Model
{
	public $tablename = "tbl_booking";
	public $primarykey = "bookingid";
	
	public function approvebooking($id,$status)
	{
		$this->db->set("isapprove",$status);
		$this->db->where($this->primarykey,$id);
		$this->db->update($this->tablename);
	}	
	public function getuserbookingsview($id)	
	{
		$this->db->select("*");
		$this->db->join("tbl_property","tbl_property.propertyid=tbl_booking.propertyid");
		$this->db->where("tbl_booking.propertyid",$id);
		$result=$this->db->get($this->tablename);
		return $result->result();
	}
	public function getuserbookings($id)	
	{
		$this->db->select("*");
		$this->db->join("tbl_property","tbl_property.propertyid=tbl_booking.propertyid");
		$this->db->where("tbl_booking.userid",$id);
		$result=$this->db->get($this->tablename);
		return $result->result();
	}
	public function getBooking()	
	{
		$this->db->select("*");
		$this->db->join("tbl_users","tbl_users.userid=tbl_booking.userid");
		$this->db->join("tbl_property","tbl_property.propertyid=tbl_booking.propertyid");
		$result=$this->db->get($this->tablename);
		return $result->result();
	}
	public function getBookingsingle($id)
	{
		$this->db->select("*");
		$this->db->join("tbl_users","tbl_users.userid=tbl_booking.userid");
		$this->db->join("tbl_property","tbl_property.propertyid=tbl_booking.propertyid");
		
		$this->db->where('tbl_booking.bookingid',$id);
		$result=$this->db->get($this->tablename);
		return $result->result();
	}
	public function getuserpenddingBooking()
	{
		$this->db->select("*,tbl_booking.isapprove as approve");
		$this->db->join("tbl_users","tbl_users.userid=tbl_booking.userid");
		$this->db->join("tbl_property","tbl_property.propertyid=tbl_booking.propertyid");
		$this->db->join("tbl_users as bu","bu.userid=tbl_property.userid");
		$this->db->where('tbl_booking.isapprove',"N");
		$result=$this->db->get($this->tablename);
		return $result->result();
	}
	public function getuserapproveBooking()
	{
		$this->db->select("*,tbl_booking.isapprove as approve");
		$this->db->join("tbl_users","tbl_users.userid=tbl_booking.userid");
		$this->db->join("tbl_property","tbl_property.propertyid=tbl_booking.propertyid");
		$this->db->join("tbl_users as bu","bu.userid=tbl_property.userid");
		$this->db->where('tbl_booking.isapprove',"Y");
		$result=$this->db->get($this->tablename);
		return $result->result();
	}
	public function getuserrejectBooking()
	{
		$this->db->select("*,tbl_booking.isapprove as approve");
		$this->db->join("tbl_users","tbl_users.userid=tbl_booking.userid");
		$this->db->join("tbl_property","tbl_property.propertyid=tbl_booking.propertyid");
		$this->db->join("tbl_users as bu","bu.userid=tbl_property.userid");
		$this->db->where('tbl_booking.isapprove',"R");
		$result=$this->db->get($this->tablename);
		return $result->result();
	}
	public function getusercancelBooking()
	{
		$this->db->select("*,tbl_booking.isapprove as approve");
		$this->db->join("tbl_users","tbl_users.userid=tbl_booking.userid");
		$this->db->join("tbl_property","tbl_property.propertyid=tbl_booking.propertyid");
		$this->db->join("tbl_users as bu","bu.userid=tbl_property.userid");
		$this->db->where('tbl_booking.isapprove',"C");
		$result=$this->db->get($this->tablename);
		return $result->result();
	}
	public function getagentpenddingBooking()
	{
		$this->db->select("*,tbl_booking.isapprove as approve");
		$this->db->join("tbl_property","tbl_property.propertyid=tbl_booking.propertyid");
		$this->db->join("tbl_agent","tbl_agent.agentid=tbl_property.agentid");
		$this->db->join("tbl_users","tbl_users.userid=tbl_booking.userid");
		$this->db->join("tbl_agent as bu","bu.agentid=tbl_property.agentid");
		$this->db->where('tbl_booking.isapprove',"N");
		$result=$this->db->get($this->tablename);
		return $result->result();
	}
	public function getagentapproveBooking()
	{
		$this->db->select("*,tbl_booking.isapprove as approve");
		$this->db->join("tbl_property","tbl_property.propertyid=tbl_booking.propertyid");
		$this->db->join("tbl_agent","tbl_agent.agentid=tbl_property.agentid");
		$this->db->join("tbl_users","tbl_users.userid=tbl_booking.userid");
		$this->db->join("tbl_agent as bu","bu.agentid=tbl_property.agentid");
		$this->db->where('tbl_booking.isapprove',"Y");
		$result=$this->db->get($this->tablename);
		return $result->result();
	}
	public function getagentrejectBooking()
	{
		$this->db->select("*,tbl_booking.isapprove as approve");
		$this->db->join("tbl_property","tbl_property.propertyid=tbl_booking.propertyid");
		$this->db->join("tbl_agent","tbl_agent.agentid=tbl_property.agentid");
		$this->db->join("tbl_users","tbl_users.userid=tbl_booking.userid");
		$this->db->join("tbl_agent as bu","bu.agentid=tbl_property.agentid");
		$this->db->where('tbl_booking.isapprove',"R");
		$result=$this->db->get($this->tablename);
		return $result->result();
	}
	public function getagentcancelBooking()
	{
		$this->db->select("*,tbl_booking.isapprove as approve");
		$this->db->join("tbl_property","tbl_property.propertyid=tbl_booking.propertyid");
		$this->db->join("tbl_agent","tbl_agent.agentid=tbl_property.agentid");
		$this->db->join("tbl_users","tbl_users.userid=tbl_booking.userid");
		$this->db->join("tbl_agent as bu","bu.agentid=tbl_property.agentid");
		$this->db->where('tbl_booking.isapprove',"C");
		$result=$this->db->get($this->tablename);
		return $result->result();
	}
	public function deletebooking($bookingid)
	{
      $this->db->where($this->primarykey,$bookingid);
      $this->db->delete($this->tablename); 
	}
}
