<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ApiController extends CI_Controller {

	public function owner_register()
	{
		$this->load->Model('OwnerModel');
		
		// if($this->OwnerModel->checkEmail($_POST['email'])){
		// 	echo "email exist";
		// 	return;
		// }
		// $this->OwnerModel->register($_POST);
		
		$config = Array(    
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://Secureserver.net',
			'smtp_port' => 80,
			'smtp_user' => 'Info@cleansweephhi.com',
			'smtp_pass' => 'Cleansweep999!',
			// 'smtp_timeout' => '4',
			'mailtype' => 'html',
			//'charset' => 'iso-8859-1'
			'charset' => 'utf-8'
		);

		$this->load->library('email', $config);

		$this->email->set_newline("\r\n");      
			
		$this->email->to('jaygangkun@hotmail.com'); // replace it with receiver mail id
		// $this->email->to('info@cleansweephhi.com'); // replace it with receiver mail id
		$this->email->from('info@cleansweephhi.com', 'Owner Information Submitted');
		$this->email->subject("Owner Information Submitted"); // replace it with relevant subj
		
		$body = $this->load->view('email/create_owner.php',array(),TRUE);
	  
		$this->email->message($body); 
		// $this->email->send();

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
		// $owner_id = $this->ServiceReqModel->register($_POST);

		$config = Array(    
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_user' => 'Ecouenergy@gmail.com',
			'smtp_pass' => 'EnergyAsrin!@',
			// 'smtp_timeout' => '4',
			'mailtype' => 'html',
			//'charset' => 'iso-8859-1'
			'charset' => 'utf-8'
		);

		$this->load->library('email', $config);

		$this->email->set_newline("\r\n");      
			
		$this->email->to('jaygangkun@hotmail.com'); // replace it with receiver mail id
		//$this->email->to('info@cleansweephhi.com'); // replace it with receiver mail id
		$this->email->from('info@cleansweephhi.com', 'Owner Service Request Submitted');
		$this->email->subject("Owner Service Request Submitted"); // replace it with relevant subj
		
		$data = array();
		$body = $this->load->view('email/owner_service_request_create.php',$data,TRUE);
	  
		$this->email->message($body); 
		// $this->email->send();

		echo 'ok';
	}

	public function owner_service_request_update(){
		$this->load->Model('ServiceReqModel');
		$owner_id = $this->ServiceReqModel->update($_POST);

		$config = Array(    
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_user' => 'Ecouenergy@gmail.com',
			'smtp_pass' => 'EnergyAsrin!@',
			// 'smtp_timeout' => '4',
			'mailtype' => 'html',
			//'charset' => 'iso-8859-1'
			'charset' => 'utf-8'
		);

		$this->load->library('email', $config);

		$this->email->set_newline("\r\n");      
			
		// $this->email->to('jaygangkun@hotmail.com'); // replace it with receiver mail id
		$this->email->to('info@cleansweephhi.com'); // replace it with receiver mail id
		
		$this->email->from('info@cleansweephhi.com', 'Owner Service Request Submitted');
		$this->email->subject("Owner Service Request Submitted"); // replace it with relevant subj
		
		$data = array();
		$body = $this->load->view('email/owner_service_request_update.php',$data,TRUE);
	  
		$this->email->message($body); 
		// $this->email->send();

		echo 'ok';
	}

	public function owner_service_cancel(){
		$this->load->Model('ServiceReqModel');		
		$this->ServiceReqModel->cancelService($_POST['service_id']);

		$config = Array(    
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_user' => 'Ecouenergy@gmail.com',
			'smtp_pass' => 'EnergyAsrin!@',
			// 'smtp_timeout' => '4',
			'mailtype' => 'html',
			//'charset' => 'iso-8859-1'
			'charset' => 'utf-8'
		);

		$this->load->library('email', $config);

		$this->email->set_newline("\r\n");      
	  	  
		// $this->email->to('jaygangkun@hotmail.com'); // replace it with receiver mail id
		$this->email->to('info@cleansweephhi.com'); // replace it with receiver mail id

		$this->email->from('info@cleansweephhi.com', 'Service Request Cancelled');
		$this->email->subject("Service Request Cancelled"); // replace it with relevant subj
		
		$data = array();
		$body = $this->load->view('email/owner_service_request_cancel.php',$data,TRUE);
	  
		$this->email->message($body); 
		// $this->email->send();

	}

	public function get_req_service_data(){
		$this->load->Model('ServiceReqModel');		
		$service = $this->ServiceReqModel->getService($_POST['service_id']);
		echo json_encode($service);
	}
	
}
