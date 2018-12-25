<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ApiController extends CI_Controller {

	public function owner_register()
	{
		$this->load->Model('OwnerModel');
		$this->OwnerModel->register($_POST);
		
		echo 'ok';
	}

	public function owner_login(){
		$this->load->Model('OwnerModel');
		$owner_id = $this->OwnerModel->checkUser($_POST['username'], $_POST['password']);
		if($owner_id != 0){
			echo 'success';
			$_SESSION['owner_id'] = $owner_id;
		}
		else{
			echo 'fail';
			$_SESSION['owner_id'] = 0;
		}
	}

	public function owner_service_request(){
		$this->load->Model('ServiceReqModel');
		$owner_id = $this->ServiceReqModel->register($_POST);
		echo 'ok';
	}
	
}
