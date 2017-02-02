<?php
//defined('BASEPATH') OR exit('No direct script access allowed');
class Loginservice extends CI_Controller
{

	public function service()
	{
		if(isset($_REQUEST['username']) && isset($_REQUEST['password']))
		{
			$user['vchar_email']  =$this->input->get_post('username');
			$user['vchr_password']=$this->input->get_post('password');
			//print_r($user);
			$this->load->model('Loginmodel');
			$result1=$this->Loginmodel->userdb($user);
			$msg[]=$result1;
		}
		else
		{
			$msg=array("ResponseCode"=>"404","msg"=>"no data");
		}
		echo json_encode($msg);
	}

};
		