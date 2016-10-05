<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pic_ctrl extends CI_Controller {
	public function index(){
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->view('pic_view');
	}

	function pic_upload(){
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
				$result=$this->pic_model->insert($data);
					echo "success";
	}

}
?>