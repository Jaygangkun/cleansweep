<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class ServiceReqModel extends CI_Model{
	
    public function register($data){
        $sql = "INSERT INTO service_reqs (`owner_id`, `first_name`, `last_name`, `req_service`, `cleaning_address`, `cleaning_city`, `cleaning_state`, `cleaning_zipcode`, `check_in_date`, `check_out_date`, `check_out_time`, `day_phone`, `cell_phone`, `email`, `comments`, `added_at`) VALUES('".$data['owner_id']."', '".$data['first_name']."', '".$data['last_name']."', '".$data['req_service']."',  '".$data['cleaning_address']."', '".$data['cleaning_city']."', '".$data['cleaning_state']."', '".$data['cleaning_zipcode']."', '".$data['check_in_date']."', '".$data['check_out_date']."', '".$data['check_out_time']."', '".$data['day_phone']."', '".$data['cell_phone']."', '".$data['email']."', '".$data['comments']."', NOW())";

        $result = $this->db->query($sql);
        
    }

    public function get($owner_id){
        $sql = "SELECT * FROM service_reqs WHERE `owner_id` = '".$owner_id."'";
        $result = $this->db->query($sql);
        $result = $result->result_array();

        return $result;
    }

}  
?>