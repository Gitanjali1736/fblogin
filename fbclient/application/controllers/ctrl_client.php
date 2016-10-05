<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ctrl_client extends CI_Controller{
	public function index()
	{
		$this->load->view('homepage');
	}
	public function register(){

		$user=array();
		$user['fname']=$this->input->get_post('fname');
		$user['lname']=$this->input->get_post('lname');
		$user['mno']=$this->input->get_post('mno');
		$user['pass']=$this->input->get_post('pass');
		$user['gender']=$this->input->get_post('gender');
		$user['birthday']=new DateTime('Now');
		$year=$this->input->get_post('year');
		$month=$this->input->get_post('month');
		$day=$this->input->get_post('day');
		
		$date=$year.'-'.$month.'-'.$day;
		$user['birthday']=$date;

		
				//var_dump($user);
		$url = 'http://localhost/fbserver/index.php/Ser_ctrl/reg';
		$options = array(
    					'http' => array(
        					'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        					'method'  => 'POST',
        					'content' => http_build_query($user),
    						),
    					);
		$context  = stream_context_create($options);
		$result = file_get_contents($url,false,$context);
		$json=json_decode($result,true);
		$user['data']=$json;
		var_dump($json);
		
		$this->load->view('pic_view');


	}}
		/*foreach ($json as $va)
		{
			if($val['ResponseCode']==200)
				$this->load->view('profile',$user);
			else
				$this->load->view('homepage',$user);	
		}
	}
}*/
		

		
		