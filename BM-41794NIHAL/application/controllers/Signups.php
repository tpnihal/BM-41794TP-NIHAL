<?php
//defined('BASEPATH') OR exit('No direct script access allowed');
class Signups extends CI_Controller
{

public function serviceval()
	{
		$msg="";
		if(isset($_REQUEST['fname']) && isset($_REQUEST['sname']) && isset($_REQUEST['email']) && isset($_REQUEST['remail']) && isset($_REQUEST['pword']) && isset($_REQUEST['fileupload']))
		{
			$user['vchr_fname'] =$this->input->get_post('fname');
			$user['vchr_sname'] =$this->input->get_post('sname');
			$user['vchr_email'] =$this->input->get_post('email');
			$user['vchr_remail']=$this->input->get_post('remail');
			$user['vchr_pword'] =$this->input->get_post('pword');
			$user['vchr_fileupload']=$this->input->get_post('fileupload');
			// $yyyy=$this->input->get_post('year');
			// $mm=$this->input->get_post('month');
			// $dd=$this->input->get_post('day');
			// $user['vchr_dob']=$yyyy."-".$mm."-".$mm;
			
			//check fname
			if(!((strlen($user['vchr_fname'])>3)&&(strlen($user['vchr_fname'])<8)))
			 	{
			   	$user['fname_error']="charecters must btwn 3 & 8";
			   	}
			 else if(!preg_match("/^[a-zA-Z ]*$/",$user['vchr_fname'])) 
			   
			   	{
			     $user['fname_error']="Only letters and white space allowed"; 
			    }	

		    //check sname
		    if(!((strlen($user['vchr_sname'])>3)&&(strlen($user['vchr_sname'])<8)))
		 		{
		   		 $user['sname_error']="charecters must btwn 3 & 8";
		   		}
		 	else if(!preg_match("/^[a-zA-Z ]*$/",$user['vchr_sname'])) 
		   
		   		{
		         $user['sname_error']="Only letters and white space allowed"; 
		    	}	


	    			// check if e-mail and re- email address are  well-formed
	    		if($user['vchr_email']==$user['vchr_remail'])
	    		 {  // check if e-mail
	    			if (!filter_var($user['vchr_email'], FILTER_VALIDATE_EMAIL)) 
	    			{
						$user['email_error'] ="Invalid email format";
					}
					else
					{
						$user['email']=$user['vchr_email'];
					}
					// check if re e-mail
					if (!filter_var($user['vchr_remail'], FILTER_VALIDATE_EMAIL)) 
					{
						$user['remail_error'] ="Invalid re-email format";
					}
					else
					{
						$user['remail']=$user['vchr_remail'];
				 	}
				 }
				 else
				 {
				 	$user['email_error']="given email is mismatched";
				 }
			   	 
			   	 if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/',$user['vchr_pword']))
		 		{
		   		 $user['pword_error']="password must btwn 6 & 14";
		   		}

		   		else
		   		 {
			   	 	 $user['vchr_pword']=$user['vchr_pword'];
			   	 }
				 
				 if (!($user['vchr_fileupload']==0))
				 {
				 	$msg['vchr_fileupload']="file uploaded";
				 }
				 else
				 {
				 	$user['fileupload_error']="pls try again";
				 }	
				 // if($yyy=='year' && $mm='month' && $dd='day') 
				 // {
				 // 	$user['dob_error']='inavalid date of birth';
				 // }
				 // else
				 // {
				 // 	$year= date('y');
				 // 	$age=$year-$yyyy;
				 // 	$user['vchr_dob']=$age;

				 // }
		}		

		else
		{
			$user=array("ResponseCode"=>"404","msg"=>"all are rquired feild");
			echo "sorry";
		}
		echo json_encode($user);
	}
	}
	 ?>

