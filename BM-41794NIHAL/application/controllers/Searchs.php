<?php
header('Access-Control-Allow-Origin:*');
class Searchs extends CI_Controller
{
	
	public function people()
	{
		if(isset($_REQUEST['search']))
		{
			$name=$this->input->get_post('search');
			$this->load->model('Searchdb');
			$result=$this->Searchdb->peopledb($name);
			// print_r($result);
			// $msg[]=$result;

		}
		else
		{
			$result=array("ResponseCode"=>"404", "msg"=>"try again");
		}
		echo json_encode($result);

	}
}
?>
