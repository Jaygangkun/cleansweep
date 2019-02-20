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

		// $this->load->Model('ServiceReqModel');		
		// $data['service_reqs'] = $this->ServiceReqModel->search('', '', '', '');

		$this->load->view('admin/admin_template', $data);
	}

	public function owner_service_list($owner_id){
		$data = array();
		$data['title'] = 'Admin Owner Service Request List';
		$data['sub_page'] = 'owner_service_list';

		$this->load->Model('ServiceReqModel');		
		$data['service_reqs'] = $this->ServiceReqModel->getServices($owner_id);
		$data['owner_id'] = $owner_id;

		$this->load->view('admin/admin_template', $data);
	}

	public function owner_service_create($owner_id){
		$data = array();
		$data['title'] = 'Admin Owner Service Request Create';
		$data['sub_page'] = 'owner_service_create';

		$data['owner_id'] = $owner_id;
		$this->load->Model('OwnerModel');
		$data['owner'] = $this->OwnerModel->get($owner_id);

		$this->load->view('admin/admin_template', $data);
	}

	public function owner_service_edit($service_id){
		$data = array();
		$data['title'] = 'Admin Owner Service Request Edit';
		$data['sub_page'] = 'owner_service_edit';

		$this->load->Model('ServiceReqModel');		
		$data['req_service'] = $this->ServiceReqModel->getService($service_id);

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

		// if($_POST['username'] != $_POST['username_old'] && $_POST['password'] != $_POST['password_old'] && $_POST['status'] == 'active'){
		// 	//sending email
		// 	// AD ADDED sending email
		// 	$config = Array(    
		// 		'protocol' => 'sendmail',
		// 		'smtp_host' => 'relay-hosting.secureserver.net',
		// 		'smtp_port' => 25,
		// 		'smtp_user' => '',
		// 		'smtp_pass' => '',
		// 		'mailtype' => 'html',
		// 		'charset' => 'utf-8'
		// 	);
	
		// 	$this->load->library('email', $config);
	
		// 	$this->email->set_newline("\r\n");      
		  
		// 	$data = array(
		// 		'username' => $_POST['username'],
		// 		'password' => $_POST['password'],
		// 	);
		  
		// 	$this->email->to('jaygangkun@hotmail.com'); // replace it with receiver mail id
		// 	// $this->email->to('info@cleansweephhi.com'); // replace it with receiver mail id

		// 	if($_POST['username_old'] == '' || $_POST['password_old'] == ''){
		// 		$this->email->from('info@cleansweephhi.com', 'Account Create');
		// 		$this->email->subject("Account Create"); // replace it with relevant subj
		// 	}
		// 	else{
		// 		$this->email->from('info@cleansweephhi.com', 'Account Update');
		// 		$this->email->subject("Account Update"); // replace it with relevant subj
		// 	}
			
		// 	$body = $this->load->view('email/create_account.php',$data,TRUE);
		  
		// 	$this->email->message($body); 
		// 	$this->email->send();
		// }
	}

	public function do_req_service_update(){
		$this->load->Model('ServiceReqModel');		
		$this->ServiceReqModel->update($_POST);
	}

	public function do_owner_list_print(){
		$filename = "Owner List.csv";
		ini_set('max_execution_time', 6000); //increase max_execution_time to 10 min if data set is very large
		$headerRow = array("First Name", "Last Name", "Actual Owner's Address", "City", "State", "Zipcode", "Hilton Head Property Address", "# of Bedrooms", "# of Bathrooms", "# of ½ Bathrooms", "Bed Configurations", "Sleeper Sofa?", "Size", "Owner's Day Phone", "Owner's Cell Phone", "Owner's Email Address", "User Name", "Password");

		$data = [];
		$this->load->Model('OwnerModel');
		$rows = $this->OwnerModel->all();

		foreach ($rows as $k => $r) {
			$data[] = array(
			'"'.$r['first_name'].'"', 
			'"'.$r['last_name'].'"', 
			'"'.$r['address'].'"', 
			'"'.$r['city'].'"', 
			'"'.$r['state'].'"', 
			'"'.$r['zipcode'].'"', 
			'"'.$r['property_address'].'"', 
			'"'.$r['bedrooms'].'"', 
			'"'.$r['bathrooms'].'"', 
			'"'.$r['hbathrooms'].'"', 
			'"'.$r['bed_conf_count1'].'"', 
			'"'.$r['sleeper_sofa_exist'].'"', 
			'"'.$r['sleeper_sofa_size'].'"', 
			'"'.$r['day_phone'].'"', 
			'"'.$r['cell_phone'].'"', 
			'"'.$r['email'].'"', 
			'"'.$r['username'].'"', 
			'"'.$r['password'].'"');
		}
		
		$result = $data;

        $fileContent = '"' . implode('","', $headerRow) . '"' . "\n";
        foreach ($data as $result) {
            $fileContent .= implode(",", $result) . "\n";
        }

        // header('Content-type: application/ms-excel');
        header('Content-type: text/csv; charset=utf-8');
        header("Content-Disposition: attachment; filename=\"" . $filename . "\"");
        echo $fileContent;
        exit;
	}

	public function do_service_req_search(){
		$this->load->Model('ServiceReqModel');		
		$service_reqs = $this->ServiceReqModel->search($_POST['username'], $_POST['property_address'], $_POST['start_date'], $_POST['end_date']);

		echo json_encode($service_reqs);
	}

	public function do_service_req_search_print(){
		$this->load->Model('ServiceReqModel');		
		$service_reqs = $this->ServiceReqModel->search($_POST['username'], $_POST['property_address'], $_POST['start_date'], $_POST['end_date']);

		$filename = "request_report_".$_POST['username']."_".$_POST['property_address']."_".str_replace('/', '_', $_POST['start_date'])."___".str_replace('/', '_', $_POST['end_date']).".csv";
		$filepath = 'reports/'.$filename;

		$output = fopen($filepath, 'w');
		fputcsv($output, array('Email', 'UserName', 'Property Address', 'Requested Service', 'Check In Date', 'Check Out Date', 'Requestd Date', 'Status'));

		foreach($service_reqs as $row){
			$email = $row['owner_email'];
			$username = $row['username'];
			$property_address = $row['cleaning_address'];
			$req_service = $row['req_service'];
			$check_in_date = $row['check_in_date'];
			$check_out_date = $row['check_out_date'];
			$requested_date = $row['added_at'];

			if($row['status'] == '0'){
				$status = 'Request Cancelled';
			}
			else{
				$status = '';
			}

			fputcsv($output, array($email, $username, $property_address, $req_service, $check_in_date, $check_out_date, $requested_date, $status));
		}

		fclose($output);

		echo $filename;
	}

	function do_service_req_search_print_download($filename){
		header('Content-Type: application/octet-stream');
		header("Content-Transfer-Encoding: Binary");
		header("Content-disposition: attachment; filename=\"" . $filename . "\"");
		$filepath = 'reports/'.$filename;
        readfile($filepath);
	}

	function owner_info_management_page(){
		$data = array();
		$data['title'] = 'Owner Info Management';
		$data['sub_page'] = 'owner_info_management_page';

		$this->load->Model('OwnerModel');		
		$data['owners'] = $this->OwnerModel->all();

		$this->load->view('admin/admin_template', $data);
	}

	function user_account_management_page(){
		$data = array();
		$data['title'] = 'User Management';
		$data['sub_page'] = 'user_account_management_page';

		$this->load->Model('OwnerModel');		
		$data['owners'] = $this->OwnerModel->all();

		$this->load->view('admin/admin_template', $data);
	}

	function add_request_page(){
		$data = array();
		$data['title'] = 'Request Management';
		$data['sub_page'] = 'add_request_page';

		$this->load->Model('OwnerModel');		
		$data['owners'] = $this->OwnerModel->all();

		$this->load->view('admin/admin_template', $data);
	}

	function request_report_page(){
		$data = array();
		$data['title'] = 'Request Report';
		$data['sub_page'] = 'request_report_page';

		$this->load->view('admin/admin_template', $data);
	}

	public function account_edit($id){
		$data = array();
		$data['title'] = 'Owner Account Edit';
		$data['sub_page'] = 'account_edit';

		$this->load->Model('OwnerModel');		
		$data['owner'] = $this->OwnerModel->get($id);

		$this->load->view('admin/admin_template', $data);
	}

	public function do_account_update(){
		$this->load->Model('OwnerModel');		
		$this->OwnerModel->update_account($_POST);

		if($_POST['username'] != $_POST['username_old'] || $_POST['password'] != $_POST['password_old'] || $_POST['status'] == $_POST['status_old']){
			//sending email
			// AD ADDED sending email
			$config = Array(    
				'protocol' => 'sendmail',
				'smtp_host' => 'relay-hosting.secureserver.net',
				'smtp_port' => 25,
				'smtp_user' => '',
				'smtp_pass' => '',
				'mailtype' => 'html',
				'charset' => 'utf-8'
			);
	
			$this->load->library('email', $config);
	
			$this->email->set_newline("\r\n");      
		  
			$data = array(
				'username' => $_POST['username'],
				'password' => $_POST['password'],
			);
		  
			$this->email->to('jaygangkun@hotmail.com'); // replace it with receiver mail id
			// $this->email->to('info@cleansweephhi.com'); // replace it with receiver mail id

			if($_POST['status'] == 'delete' || $_POST['status'] == 'suspend'){
				$this->email->from('info@cleansweephhi.com', 'Account Delete');
				$this->email->subject("Account Delete"); // replace it with relevant subj
			}
			else if($_POST['username_old'] == '' || $_POST['password_old'] == ''){
				$this->email->from('info@cleansweephhi.com', 'Account Create');
				$this->email->subject("Account Create"); // replace it with relevant subj
			}
			else{
				$this->email->from('info@cleansweephhi.com', 'Account Update');
				$this->email->subject("Account Update"); // replace it with relevant subj
			}
			
			$body = $this->load->view('email/create_account.php',$data,TRUE);
		  
			$this->email->message($body); 
			$this->email->send();
		}
	}

	function do_account_search(){
		$this->load->Model('OwnerModel');		
		$accounts = $this->OwnerModel->search_account($_POST['username'], $_POST['property_address']);

		echo json_encode($accounts);
	}

	function do_owner_search(){
		$this->load->Model('OwnerModel');		
		$owners = $this->OwnerModel->search_owner($_POST['name'], $_POST['address'], $_POST['phone'], $_POST['property']);

		echo json_encode($owners);
	}
}
