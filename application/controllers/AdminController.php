<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {

	public function login()
	{
		$this->load->view('admin/login');
	}

	public function owner_management()
	{
		$data = array();
		$data['title'] = 'Admin Owner Management';
		$data['sub_page'] = 'owner_management';

		$this->load->Model('OwnerModel');		
		$data['owners'] = $this->OwnerModel->all();

		$this->load->view('admin/admin_template', $data);
	}

	public function owner_edit($id){
		$data = array();
		$data['title'] = 'Admin Owner Edit';
		$data['sub_page'] = 'owner_edit';

		$this->load->Model('OwnerModel');		
		$data['owner'] = $this->OwnerModel->get($id);

		$this->load->view('admin/admin_template', $data);
	}

	public function owner_service_management()
	{
		$data = array();
		$data['title'] = 'Admin Owner Service Request Management';
		$data['sub_page'] = 'owner_service_management';

		$this->load->Model('OwnerModel');		
		$data['owners'] = $this->OwnerModel->all();

		$this->load->view('admin/admin_template', $data);
	}

	public function owner_service_list($owner_id){
		$data = array();
		$data['title'] = 'Admin Owner Service Request List';
		$data['sub_page'] = 'owner_service_list';

		$this->load->Model('ServiceReqModel');		
		$data['service_reqs'] = $this->ServiceReqModel->get($owner_id);

		$this->load->view('admin/admin_template', $data);
	}

	public function owner_service_edit($service_id){
		$data = array();
		$data['title'] = 'Admin Owner Service Request Edit';
		$data['sub_page'] = 'owner_service_edit';

		$this->load->Model('OwnerModel');		
		$data['owner'] = $this->OwnerModel->get($id);

		$this->load->view('admin/admin_template', $data);
	}
	
	public function do_login(){
		$this->load->Model('UserModel');
		$this->UserModel->check($_POST);
		
		if(!$this->UserModel->check($_POST)){
			echo 'fail';
		}
		else{
			echo 'success';
		}
		
	}

	public function do_owner_update(){
		$this->load->Model('OwnerModel');		
		$this->OwnerModel->update($_POST);

		if($_POST['username'] != $_POST['username_old'] && $_POST['password'] != $_POST['password_old']){
			//sending email
			// AD ADDED sending email
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
		  
			$data = array(
				'username' => $_POST['username'],
				'password' => $_POST['password'],
			);
		  
			$this->email->to('jaygangkun@hotmail.com'); // replace it with receiver mail id
			// $this->email->to($_POST['email']);
			if($_POST['username_old'] == '' || $_POST['password_old'] == ''){
				$this->email->from('jaygangkun@hotmail.com', 'Account Create');
				$this->email->subject("Account Create"); // replace it with relevant subj
			}
			else{
				$this->email->from('jaygangkun@hotmail.com', 'Account Update');
				$this->email->subject("Account Update"); // replace it with relevant subj
			}
			
			$body = $this->load->view('email/create_account.php',$data,TRUE);
		  
			$this->email->message($body); 
			$this->email->send();
		}
	}
}
