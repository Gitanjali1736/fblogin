<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class loginmodel extends CI_Model {
	public function search($data)
	{
		$query=$this->db->get_where('tbl_login',$data);
		if($query->num_rows()==1)
			$data['Response_code']=200;
		else
			$data['Response_code']=500;
		return $data;
}
}