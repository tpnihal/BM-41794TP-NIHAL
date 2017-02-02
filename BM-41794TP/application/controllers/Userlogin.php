<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userlogin extends CI_Controller 
{

		public function index()
			{
				$this->load->view('homepage');
			}
	public function authUser() 
	{
			$user['username']=$this->input->get_post('username'); 
			$user['password']=$this->input->get_post('password'); 

			$url="http://services.trainees.baabtra.com/BM-41794NIHAL/index.php/Loginservice/service";

			$options = array(
    					'http' => array(
        					'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        					'method'  => 'POST',
        					'content' => http_build_query($user),
    						),
    					);
			$context  = stream_context_create($options);
			$result = file_get_contents($url,false, $context);
			$json=json_decode($result,true);
			$result1['data']=$json;

			if($json[0]['ResponseCode']==200)	//checks the value of responsecode returned from the service
			 	$this->load->view("loginsuccess",$result1);  //loads a view from views folder
			 
			else if($json[0]['ResponseCode']==500)
				$this->load->view("wrngpassw",$result1);

			else if($json[0]['ResponseCode']==404)
				$this->load->view("wrngemail");
	}	
} ?>		