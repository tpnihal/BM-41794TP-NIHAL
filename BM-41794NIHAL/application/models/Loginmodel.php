<?php
class Loginmodel extends CI_Model
{
	public function userdb($user)
	{
	  $result=$this->db->select('*')
				->from('userdt')
				->where($user)
				->get();

				if  ($result->num_rows()==1 )
					{
					$row=$result->result_array();
					$row['ResponseCode']="200";
					$row["msg"]="success";
					}

				else
					{
						$result=$this->db->select('vchar_email,profpic,chr_fname,char_lname')
								->from('userdt')
								->where('vchar_email',$user['vchar_email'])
								->get();

								if($result->num_rows()==1)
								  {
								  	$row=$result->result_array();
								  	$row['ResponseCode']="500";
								  	$row["msg"]="password error";
								  }
								  else
								  {
								  	$row=array("ResponseCode"=>"404","msg"=>"not found");
								  }
								 

					}
					return $row;
	}
}?>