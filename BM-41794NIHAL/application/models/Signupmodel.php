<?php
/**
* 
*/
class Signupmodel extends CI_Controller
{
	
	function signupdb($userdb)
	{
		foreach(array_keys($userdb) as $i)
				$db[$i]=$this->db->escape($userdb[$i]);
				$values=implode(',',$db);
					$query=$this->db->query("call insertuser({$values})");
					if($query==true)
					{
						$user['ResponseCode']=200;
						
					}
					else
					{
						$user['ResponseCode']=500;
					}
					return $user['ResponseCode'];
	}
}
?>
