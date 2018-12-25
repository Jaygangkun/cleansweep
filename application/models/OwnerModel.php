<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class OwnerModel extends CI_Model{
	
    public function register($data){
        $sql = "INSERT INTO owners (`first_name`, `last_name`, `address`, `city`, `state`, `zipcode`, `property_address`, `check_in_date`, `check_out_date`, `bedrooms`, `bathrooms`, `hbathrooms`, `bed_conf_count1`, `bed_conf_type1`, `bed_conf_count2`, `bed_conf_type2`, `bed_conf_count3`, `bed_conf_type3`, `bed_conf_count4`, `bed_conf_type4`, `sleeper_sofa_exist`, `sleeper_sofa_size`, `day_phone`, `cell_phone`, `email`, `property_phone`, `billing_purpose`, `exp_date`, `office_cleaning_rate`, `office_caretaking_rate`) VALUES('".$data['first_name']."', '".$data['last_name']."', '".$data['address']."', '".$data['city']."', '".$data['state']."', '".$data['zipcode']."', '".$data['property_address']."', '".$data['check_in_date']."', '".$data['check_out_date']."', '".$data['bedrooms']."', '".$data['bathrooms']."', '".$data['hbathrooms']."', '".$data['bed_conf_count1']."', '".$data['bed_conf_type1']."', '".$data['bed_conf_count2']."', '".$data['bed_conf_type2']."', '".$data['bed_conf_count3']."', '".$data['bed_conf_type3']."', '".$data['bed_conf_count4']."', '".$data['bed_conf_type4']."', '".$data['sleeper_sofa_exist']."', '".$data['sleeper_sofa_size']."', '".$data['day_phone']."', '".$data['cell_phone']."', '".$data['email']."', '".$data['property_phone']."', '".$data['billing_purpose']."', '".$data['exp_date']."', '".$data['office_cleaning_rate']."', '".$data['office_caretaking_rate']."')";

        $result = $this->db->query($sql);
        
    }

    public function update($data){
        $sql = "UPDATE owners SET `first_name` = '".$data['first_name']."', `last_name` = '".$data['last_name']."', `address` = '".$data['address']."', `city` = '".$data['city']."', `state` = '".$data['state']."', `zipcode` = '".$data['zipcode']."', `property_address` = '".$data['property_address']."', `check_in_date` = '".$data['check_in_date']."', `check_out_date` = '".$data['check_out_date']."', `bedrooms` = '".$data['bedrooms']."', `bathrooms` = '".$data['bathrooms']."', `hbathrooms` = '".$data['hbathrooms']."', `bed_conf_count1` = '".$data['bed_conf_count1']."', `bed_conf_type1` = '".$data['bed_conf_type1']."', `bed_conf_count2` = '".$data['bed_conf_count2']."', `bed_conf_type2` = '".$data['bed_conf_type2']."', `bed_conf_count3` = '".$data['bed_conf_count3']."', `bed_conf_type3` = '".$data['bed_conf_type3']."', `bed_conf_count4` = '".$data['bed_conf_count4']."', `bed_conf_type4` = '".$data['bed_conf_type4']."', `sleeper_sofa_exist` = '".$data['sleeper_sofa_exist']."', `sleeper_sofa_size` = '".$data['sleeper_sofa_size']."', `day_phone` = '".$data['day_phone']."', `cell_phone` = '".$data['cell_phone']."', `email` = '".$data['email']."', `property_phone` = '".$data['property_phone']."', `billing_purpose` = '".$data['billing_purpose']."', `exp_date` = '".$data['exp_date']."', `office_cleaning_rate` = '".$data['office_cleaning_rate']."', `office_caretaking_rate` = '".$data['office_caretaking_rate']."', `username` = '".$data['username']."', `password` = '".$data['password']."' WHERE `id` = '".$data['id']."'";

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

}  
?>