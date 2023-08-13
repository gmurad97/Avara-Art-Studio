<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
|	https://codeigniter.com/userguide3/general/routing.html
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


//USER
$route['default_controller']            = 'UserController/index';
$route['home']                          = 'UserController/index';
$route['statement']                     = 'UserController/statement';
$route['archive']                       = 'UserController/archive';
$route['contact']                       = 'UserController/contact';



//ADMIN
$route["admin_x567"]                    = "AdminController/avara_login";
$route["admin_x567_action"]             = "AdminController/avara_login_action";
$route["dashboard"]                     = "AdminController/avara_dashboard";

//Admin content
$route["statement_create"]              = "AdminController/avara_statement_create";
$route["statement_create_action"]       = "AdminController/avara_statement_create_action";
$route["statement_edit"]                = "AdminController/avara_statement_edit";
$route["statement_edit_action"]         = "AdminController/avara_statement_edit_action";

//Admin content
$route["gallery_create"]                = "AdminController/avara_gallery_create";
$route["gallery_create_action"]         = "AdminController/avara_gallery_create_action";
$route["gallery_list"]                  = "AdminController/avara_gallery_list";
$route["gallery_delete/(.*)"]           = "AdminController/avara_gallery_delete/$1";

//Admin content
$route["slider_create"]                = "AdminController/avara_slider_create";
$route["slider_create_action"]         = "AdminController/avara_slider_create_action";
$route["slider_list"]                  = "AdminController/avara_slider_list";
$route["slider_delete/(.*)"]           = "AdminController/avara_slider_delete/$1";

//Admin content
$route["contact_create"]              = "AdminController/avara_contact_create";
$route["contact_create_action"]       = "AdminController/avara_contact_create_action";
$route["contact_edit"]                = "AdminController/avara_contact_edit";
$route["contact_edit_action"]         = "AdminController/avara_contact_edit_action";


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
