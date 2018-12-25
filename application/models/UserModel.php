<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class UserModel extends CI_Model{
	
    public function check($data){
        $sql = "SELECT * FROM users WHERE `username`='".$data['email']."' AND `password`='".$data['password']."'";

        $result = $this->db->query($sql);
        $result = $result->result_array();
        
        if(count($result) == 0){
            return false;
        }
        else{
            return true;
        }
    }

}  
?>