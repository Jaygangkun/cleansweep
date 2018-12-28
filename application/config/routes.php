<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'PageController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//Admin Panel
$route['admin_login'] = "AdminController/login";
$route['owner_management'] = "AdminController/owner_management";
$route['owner_edit/(:num)'] = "AdminController/owner_edit/$1";

$route['owner_service_management'] = "AdminController/owner_service_management";
$route['owner_service_list/(:num)'] = "AdminController/owner_service_list/$1";
$route['owner_service_edit/(:num)'] = "AdminController/owner_service_edit/$1";

$route['admin_do_login'] = "AdminController/do_login";

//owner_edit
$route['do_owner_update'] = "AdminController/do_owner_update";

//owner_service_edit 
$route['do_req_service_update'] = "AdminController/do_req_service_update";

//owner_service_management
$route['do_service_req_search'] = "AdminController/do_service_req_search";
$route['do_service_req_search_print'] = "AdminController/do_service_req_search_print";
$route['do_service_req_search_print_download/(:any)'] = "AdminController/do_service_req_search_print_download/$1";


//owner_management
$route['do_owner_list_print'] = "AdminController/do_owner_list_print";


//Front End page
$route['contact-us'] = "PageController/contact_us";
$route['clean-sweep-services'] = "PageController/clean_sweep_services";
$route['clean-sweep-hhi-faq'] = "PageController/clean_sweep_hhi_faq";
$route['clean-sweep-login-page'] = "PageController/clean_sweep_login_page";

$route['owner_register'] = 'APIController/owner_register';
$route['owner_login'] = 'APIController/owner_login';
$route['owner_service_request'] = 'APIController/owner_service_request';
$route['owner_service_request_update'] = 'APIController/owner_service_request_update';
$route['owner_service_cancel'] = "APIController/owner_service_cancel";
$route['get_req_service_data'] = "APIController/get_req_service_data";



// $route['sale_siteinspection/(:num)'] = "SaleController/siteinspection/$1";
