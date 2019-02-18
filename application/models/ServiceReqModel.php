<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class ServiceReqModel extends CI_Model{
	
    public function register($data){
        $sql = "INSERT INTO service_reqs (`owner_id`, `first_name`, `last_name`, `req_service`, `cleaning_address`, `check_in_date`, `check_out_date`, `day_phone`, `cell_phone`, `email`, `comments`, `added_at`) VALUES('".$data['owner_id']."', '".$data['first_name']."', '".$data['last_name']."', '".$data['req_service']."',  '".$data['cleaning_address']."', '".$data['check_in_date']."', '".$data['check_out_date']."', '".$data['day_phone']."', '".$data['cell_phone']."', '".$data['email']."', '".$data['comments']."', NOW())";

        $result = $this->db->query($sql);
        
    }

    public function getServices($owner_id){
        $sql = "SELECT * FROM service_reqs WHERE `owner_id` = '".$owner_id."' ORDER BY added_at DESC";
        $result = $this->db->query($sql);
        $result = $result->result_array();

        return $result;
    }

    public function getService($service_id){
        $sql = "SELECT * FROM service_reqs WHERE `id` = '".$service_id."'";
        
        $result = $this->db->query($sql);
        $result = $result->result_array();

        return $result[0];
    }

    public function update($data){
        $sql = "UPDATE service_reqs SET `first_name` = '".$data['first_name']."', `last_name` = '".$data['last_name']."', `req_service` = '".$data['req_service']."', `check_in_date` = '".$data['check_in_date']."', `check_out_date` = '".$data['check_out_date']."', `cleaning_address` = '".$data['cleaning_address']."', `day_phone` = '".$data['day_phone']."', `cell_phone` = '".$data['cell_phone']."', `email` = '".$data['email']."', `comments` = '".$data['comments']."' WHERE `id` = '".$data['id']."'";

        $this->db->query($sql);
    }

    public function cancelService($service_id){
        $sql = "UPDATE service_reqs SET status = 0 WHERE `id`='".$service_id."'";
        $this->db->query($sql);
    }

    public function search($username, $property_address, $start_date, $end_date){
        $sql = "SELECT service_reqs.*, owners.username, owners.email as owner_email FROM service_reqs JOIN owners ON service_reqs.owner_id = owners.id";
        $where = '';
        if($username != ''){
            $where = "(owners.first_name LIKE '%".$username."%' OR owners.last_name LIKE '%".$username."%' OR owners.username LIKE '%".$username."%' OR owners.email LIKE '%".$username."%')";
        }

        if($property_address != ''){
            if($where != ''){
                $where = $where." AND ";
            }

            $where = $where."service_reqs.cleaning_address LIKE '%".$property_address."%'";
        }

        if($start_date != ''){
            if($where != ''){
                $where = $where." AND ";
            }

            $where = $where."STR_TO_DATE(service_reqs.check_in_date, '%m/%d/%Y') >= STR_TO_DATE('".$start_date."', '%m/%d/%Y')";
        }

        if($end_date != ''){
            if($where != ''){
                $where = $where." AND ";
            }

            $where = $where."STR_TO_DATE(service_reqs.check_in_date, '%m/%d/%Y') <= STR_TO_DATE('".$end_date."', '%m/%d/%Y')";
        }

        if($where != ''){
            $sql = $sql. " WHERE ".$where;
        }

        $result = $this->db->query($sql);
        $result = $result->result_array();

        return $result;
    }

}  
?>