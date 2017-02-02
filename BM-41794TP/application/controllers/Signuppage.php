<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signuppage extends CI_Controller {

	public function validation()
	{
		$user['fname']=$this->input->get_post('fname');
		$user['sname']=$this->input->get_post('sname');
		$user['email']  =$this->input->get_post('mob');
		$user['remail']=$this->input->get_post('remob');
		$user['pword']=$this->input->get_post('pword');
		$user['fileupload']=$this->input->get_post('fileupload');
		
		
		$url="http://services.trainees.baabtra.com/BM-41794NIHAL/index.php/Signups/serviceval";
		$options = array(
    					'http' => array(
        					'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        					'method'  => 'POST',
        					'content' => http_build_query($user),
    						),
    					);
			// print_r($user);
 
		$context  = stream_context_create($options);
		$result = file_get_contents($url,false, $context);    // used to call the web service
		//print_r($result);
	 
		// echo $result;
		
		$json=json_decode($result,true); //web service returns a json data, convert it to php array using json_decode

		echo $user['ResponseCode']="404";
		if($user['ResponseCode']==404)
		{
			$this->load->view('homepage',$json);
		}


		
	}
	}
	?>