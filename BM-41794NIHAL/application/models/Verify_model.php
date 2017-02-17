<?php
/**
* 
*/
class Verify_model extends CI_Model
{
	public function verify($hashid)
		{
			$result=$this->db->select('vchr_status')
			->from('userdetails')
			->where('vchr_hash',$hashid)
			->get();
	
			if($result->row('vchr_status')==0)
			{
				$value = array('vchr_status'=>1);		//changing the value for check already verified
				$this->db->where('vchr_hash',$hashid);  // update query in php
				$this->db->update('userdetails',$value); // update query in php
				echo "your account is verified succesfully";
			}

			else
			{
				echo "sorry your account was already verified";
			}
		
		}
}
?>