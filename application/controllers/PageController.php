<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PageController extends CI_Controller {

	public function index()
	{
		$data = array();
		$data['page_name'] = 'home';

		$data['title'] = 'Clean Sweep HHI';
		$data['og_url'] = '';

		$this->load->view('page-template', $data);	
	}

	public function contact_us()
	{
		$data['page_name'] = 'contact_us';

		$data['title'] = 'Contact Us | Clean Sweep HHI';
		$data['og_url'] = 'contact-us';

		$this->load->view('page-template', $data);
	}
	
	public function clean_sweep_services()
	{
		$data['page_name'] = 'clean_sweep_services';

		$data['title'] = 'Clean Sweep Services | Clean Sweep HHI';
		$data['og_url'] = 'clean-sweep-services';

		$this->load->view('page-template', $data);
	}

	public function clean_sweep_hhi_faq()
	{
		$data['page_name'] = 'clean_sweep_hhi_faq';

		$data['title'] = 'Clean Sweep HHI FAQ | Clean Sweep HHI';
		$data['og_url'] = 'clean-sweep-hhi-faq';

		$this->load->view('page-template', $data);
	}
	
	public function clean_sweep_login_page()
	{
		$data['page_name'] = 'clean_sweep_login_page';

		$data['title'] = 'Clean Sweep HHI Login Page | Clean Sweep HHI';
		$data['og_url'] = 'clean-sweep-login-page';

		if(isset($_SESSION['owner_id']) && $_SESSION['owner_id'] != 0){
			$this->load->Model('OwnerModel');
			$owner = $this->OwnerModel->get($_SESSION['owner_id']);
			$data['owner'] = $owner;

			$this->load->Model('ServiceReqModel');		
			$data['service_reqs'] = $this->ServiceReqModel->getServices($_SESSION['owner_id']);
		}

		$this->load->view('page-template', $data);
	}
	
}
