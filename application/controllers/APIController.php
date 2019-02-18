<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ApiController extends CI_Controller {

	public function testemail(){
		// $config = Array(    
        //     'protocol' => 'smtp',
        //     'smtp_host' => 'ssl://smtp.googlemail.com',
        //     'smtp_port' => 465,
        //     'smtp_user' => 'infocshhi@gmail.com',
        //     'smtp_pass' => 'Clean2018#',
        //     // 'smtp_timeout' => '4',
        //     'mailtype' => 'html',
        //     //'charset' => 'iso-8859-1'
        //     'charset' => 'utf-8'
        // );

		// $this->load->library('email', $config);

		// $this->email->set_newline("\r\n");      
			
		// $this->email->to('jaygangkun@hotmail.com'); // replace it with receiver mail id
		// // $this->email->to('info@cleansweephhi.com'); // replace it with receiver mail id
		// $this->email->from('infocshhi@gmail.com', 'Owner Information Submitted');
		// $this->email->subject("Owner Information Submitted"); // replace it with relevant subj
		
		// $body = $this->load->view('email/create_owner.php',array(),TRUE);
	  
		// $this->email->message($body); 
		// echo $this->email->send();
		// echo $this->email->print_debugger();

		$this->sendemail('create_owner', array(), 'Owner Information Submitted', 'Owner Information Submitted');

	}

	public function sendemail($template, $data, $from_title = '', $subject = ''){
		return;
		$config = Array(    
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'infocshhi@gmail.com',
            'smtp_pass' => 'Clean2018#',
            // 'smtp_timeout' => '4',
            'mailtype' => 'html',
            //'charset' => 'iso-8859-1'
            'charset' => 'utf-8'
        );

		$this->load->library('email', $config);

		$this->email->set_newline("\r\n");      
			
		$this->email->to('jaygangkun@hotmail.com'); // replace it with receiver mail id
		// $this->email->to('info@cleansweephhi.com'); // replace it with receiver mail id
		$this->email->from('infocshhi@gmail.com', $from_title);
		$this->email->subject($subject); // replace it with relevant subj
		
		$body = $this->load->view('email/'.$template.'.php',$data,TRUE);
	  
		$this->email->message($body); 
		echo $this->email->send();
		echo $this->email->print_debugger();
	}

	public function owner_register()
	{
		$this->load->Model('OwnerModel');
		
		if($this->OwnerModel->checkEmail($_POST['email'])){
			echo "email exist";
			return;
		}
		$this->OwnerModel->register($_POST);
		
		$this->sendemail('create_owner', array(), 'Owner Information Submitted', 'Owner Information Submitted');

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

	public function owner_logout(){
		$_SESSION['owner_id'] = 0;
	}

	public function owner_service_request(){
		$this->load->Model('ServiceReqModel');
		$owner_id = $this->ServiceReqModel->register($_POST);

		$this->sendemail('owner_service_request_create', array(), 'Owner Information Submitted', 'Owner Information Submitted');
		echo 'ok';
	}

	public function owner_service_request_update(){
		$this->load->Model('ServiceReqModel');
		$owner_id = $this->ServiceReqModel->update($_POST);

		$this->sendemail('owner_service_request_update', array(), 'Owner Service Request Submitted', 'Owner Service Request Submitted');
		
		echo 'ok';
	}

	public function owner_service_cancel(){
		$this->load->Model('ServiceReqModel');		
		$this->ServiceReqModel->cancelService($_POST['service_id']);

		$this->sendemail('owner_service_request_cancel', array(), 'Service Request Cancelled', 'Service Request Cancelled');

	}

	public function get_req_service_data(){
		$this->load->Model('ServiceReqModel');		
		$service = $this->ServiceReqModel->getService($_POST['service_id']);
		echo json_encode($service);
	}
	
}
