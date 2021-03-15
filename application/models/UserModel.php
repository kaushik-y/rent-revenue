<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model
{
	public $primarykey="userid";
	public $tablename="tbl_users";
	public function changestatus($id,$status)
	{
		$newstatus="";
		
		if($status=='Y')
		{
			$newstatus='N';
		}
		else
		{
			$newstatus='Y';
		}
		
		$this->db->set("isblock",$newstatus);
		$this->db->where($this->primarykey,$id);
		$this->db->update($this->tablename);
		//update tbl_user set status='N' where userid=$id
	}
	public function changestatus1($id,$status)
	{
		$newstatus="";
		
		if($status=='Y')
		{
			$newstatus='N';
		}
		else
		{
			$newstatus='Y';
		}
		
		$this->db->set("isverify",$newstatus);
		$this->db->where($this->primarykey,$id);
		$this->db->update($this->tablename);
		//update tbl_user set status='N' where userid=$id
	}
	public function getUser()
	{
		$this->db->select("*");
		$result=$this->db->get("tbl_users");
		return $result->result();
	}
	public function getUserSingle($id)
	{
		$this->db->select("*");
		$this->db->join("tbl_city","tbl_city.cityid=tbl_users.cityid");
		$this->db->from("tbl_users");
		$this->db->where($this->primarykey,$id);
		$result=$this->db->get();
		return $result->result();
	}
	public function deleteuser($userid)
	{
		
	  $this->db->query("delete from tbl_propertyfacility where propertyid in (select propertyid from tbl_property where userid='".$userid."')");
	  $this->db->query("delete from tbl_gallary` where propertyid in (select propertyid from tbl_property where userid='".$userid."')");
	   $this->db->query("delete from tbl_property` where propertyid in (select propertyid from tbl_property where userid='".$userid."')");
	  
	  $this->db->where("userid",$userid);
      $this->db->delete("tbl_property"); 
     
 	  $this->db->where($this->primarykey,$userid);
      $this->db->delete($this->tablename); 

    
   
        
	}
}
