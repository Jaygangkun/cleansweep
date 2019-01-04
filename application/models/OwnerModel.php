<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class OwnerModel extends CI_Model{
	
    public function register($data){

        if(!isset($data['co_owners_data'])) {
            $data['co_owners_data'] = '';
        }

        if(!isset($data['additional_props_data'])) {
            $data['additional_props_data'] = '';
        }

        $sql = "INSERT INTO owners (`first_name`, `last_name`, `address`, `city`, `state`, `zipcode`, `day_phone`, `cell_phone`, `email`, `add_co_owner_chbox`, `co_owners_data`, `add_additional_prop_chbox`, `additional_props_data`) VALUES('".$data['first_name']."', '".$data['last_name']."', '".$data['address']."', '".$data['city']."', '".$data['state']."', '".$data['zipcode']."', '".$data['day_phone']."', '".$data['cell_phone']."', '".$data['email']."', '".$data['add_co_owner_chbox']."', '".json_encode($data['co_owners_data'])."', '".$data['add_additional_prop_chbox']."', '".json_encode($data['additional_props_data'])."')";

        $result = $this->db->query($sql);
        
    }

    public function update($data){
        $sql = "UPDATE owners SET `first_name` = '".$data['first_name']."', `last_name` = '".$data['last_name']."', `address` = '".$data['address']."', `city` = '".$data['city']."', `state` = '".$data['state']."', `zipcode` = '".$data['zipcode']."', `day_phone` = '".$data['day_phone']."', `cell_phone` = '".$data['cell_phone']."', `email` = '".$data['email']."', `username` = '".$data['username']."', `password` = '".$data['password']."', `status` = '".$data['status']."', `add_co_owner_chbox` = '".$data['add_co_owner_chbox']."', `co_owners_data` = '".json_encode($data['co_owners_data'])."', `add_additional_prop_chbox` = '".$data['add_additional_prop_chbox']."', `additional_props_data` = '".json_encode($data['additional_props_data'])."' WHERE `id` = '".$data['id']."'";

        $result = $this->db->query($sql);
        
    }

    public function get($id){
        $sql = "SELECT * FROM owners WHERE `id`='".$id."'";
        $result = $this->db->query($sql);
        $result = $result->result_array();

        return $result[0];
    }

    public function all(){
        $sql = "SELECT * FROM owners";
        $result = $this->db->query($sql);
        $result = $result->result_array();

        return $result;
    }

    public function checkUser($username, $password){
        $sql = "SELECT * FROM owners WHERE `username`='".$username."' AND `password`='".$password."'";
        $result = $this->db->query($sql);
        $result = $result->result_array();

        if(count($result) > 0){
            return $result[0]['id'];
        }
        
        return 0;
    }

    public function checkEmail($email){
        $sql = "SELECT * FROM owners WHERE `email`='".$email."'";
        $result = $this->db->query($sql);
        $result = $result->result_array();

        if(count($result) > 0){
            return true;
        }
        
        return false;
    }

}  
?>