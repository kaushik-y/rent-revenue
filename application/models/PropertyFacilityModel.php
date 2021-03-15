<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PropertyFacilityModel extends CI_Model
{
	public function getpropertyfacility()
	{
		$this->db->select("*");
		$this->db->join("tbl_property","tbl_property.propertyid=tbl_propertyfacility.propertyid");
		$this->db->join("tbl_facility","tbl_facility.facilityid=tbl_propertyfacility.facilityid");
		$result=$this->db->get("tbl_propertyfacility");
		return $result->result();
	}
	public function deletepropertyfacility($propertyfacilityid)
	{

      $this->db->where("propertyfacilityid",$propertyfacilityid);
      $this->db->delete("tbl_propertyfacility");   
	}
}
