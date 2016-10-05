<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class pic_model extends CI_Model {
	public function insert($data){
		$this->load->database();

		if($this->db->insert('img_tbl',$data))
			{
				return true;
			} 
		}
	}