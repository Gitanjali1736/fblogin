<?php
class ser_model extends CI_Model
{
	public function insert($data)
        {
		
        $result=$this->db->insert('reg_client',$data);
		if($result->num_rows()==1)
			 $user['ResponseCode']=200;

		else
			$user['ResponseCode']=500;
	   }

    public function insert_pic($data)
        {
            $this->load->database();
            if($this->db->insert("tbl_img",$data))
            {
                $result1=$this->db->get_where("tbl_img",$data);
            }
        }





 	public	function verifcation($user){
 		$this->load->database();
        $query=$this->db->select('int_id,vchr_mno')
                ->from('reg_client')
                ->where('vchr_code',$user)
                ->get();
        if($query->num_rows()==1)
        {
   
        foreach ($query->result() as $row)
         {
        	$int_id = $row->int_id;
        	$vchr_mno = $row->vchr_mno;
         }   
         	$this->db->set('vchr_status','true');
         	$this->db->where('int_id',$int_id);
        	$this->db->update('reg_client');
        	$response  = array('msg' =>'verified','code'=>'404','email'=>$vchr_mno);
		}
        else
        {
             $response  = array('msg' =>'Not verified','code'=>'303');
        }
     return $response;
	}
}
?>
}