<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ser_ctrl extends CI_Controller {

	public function index(){
		$this->load->helper('url');
		$this->load->view('');
	}



	public function reg()
			{
			
				//echo json_encode("hai");

				$user= array();
				$user['vchr_firstname']=$this->input->get_post('fname');
				$user['vchr_lastname']=$this->input->get_post('lname');
				$user['vchr_mobno']=$this->input->get_post('mno');
				$user['vchr_password']=$this->input->get_post('pass');
				$user['vchr_gender']=$this->input->get_post('gender');
				$user['vchr_birthday']=$this->input->get_post('birthday');
		
				$this->load->model('ser_model');
				$result=$this->ser_model->insert($user);

				echo json_encode($user);
			}
			
		function pic_upload()
			{
				$config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 100;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload',$config);
               	if ( ! $this->upload->do_upload('userfile'))
                	{
                		$error=array('error'=>$this->upload->display_errors());
                		//var_dump($error);
                	}
				else
					{
						$data = array('upload_data' => $this->upload->data());
						$data=array();
						$data['filepath']=$this->upload->data('file_name');
					}
				$this->load->model('pic_model');
				$result1=$this->pic_model->insert($data);
					echo "success";
			}

		function verify()
  			{
  				$code=md5(rand());
	   			$user['vchr_code']=$code;
	   
       			$this->load->model('ser_model');
       			$result2=$this->ser_model->verification($data);
      
       			$link='localhost/fbserver/Ser_ctrl.php/verify?id='.$int_id.'&code='.$code.'</a>';
       		}		

		function email()
			{
       
       			$this->load->library('email');
        		$config['protocol'] = 'smtp';
       			$config['smtp_host'] = 'md-1.webhostbox.net';
        		$config['smtp_user'] = 'admin@sibilhussain.com';
        		$config['smtp_pass'] = 'sibilhussain';
        		$config['smtp_port'] = 587;

				$this->email->initialize($config);
        		$this->email->from('admin@sibilhussain.com');
        		$this->email->to('git.gordil@gmail.com');
        		$this->email->subject('Test');
        		$message='Click on this link:'.$link.
      						
      
        		$this->email->message($message);
            	if($this->email->send()) {
            			echo 'Sending....';
        			} 
        		else {
            			echo 'error';
            		 }
       			 $this->email->print_debugger();
			}
}
?>
		
	
	
	