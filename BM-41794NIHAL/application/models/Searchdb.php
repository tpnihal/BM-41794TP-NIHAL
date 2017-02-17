<?php
class Searchdb extends CI_Model
{
	
	public function peopledb($name)
	{
		$result= $this->db->select('vchr_fname')
						  ->from("userdetails")
		// ->where('vchr_fname',$name)
						  ->like('vchr_fname',$name)
						  ->get();

		return $result->result_array();
	}
}
?>