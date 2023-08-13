<?php
defined('BASEPATH') or exit('No direct script access allowed');

//============================== USER CONTROLLER ==============================

//USER CONTROLLER - PAGES
$route['default_controller']            = 'UserController/index';
$route['home']                          = 'UserController/index';
$route['statement']                     = 'UserController/statement';
$route['archive']                       = 'UserController/archive';
$route['contact']                       = 'UserController/contact';

//============================== ADMIN CONTROLLER ==============================

//ADMIN CONTROLLER - LOGIN & LOGOUT & DASHBOARD
$route["admin_x567"]                    = "AdminController/avara_login";
$route["admin_x567_action"]             = "AdminController/avara_login_action";
$route["admin_logout"]                  = "AdminController/avara_logout";
$route["dashboard"]                     = "AdminController/avara_dashboard";

//ADMIN CONTROLLER - STATEMENT PAGES
$route["statement_create"]              = "AdminController/avara_statement_create";
$route["statement_create_action"]       = "AdminController/avara_statement_create_action";
$route["statement_edit"]                = "AdminController/avara_statement_edit";
$route["statement_edit_action"]         = "AdminController/avara_statement_edit_action";

//ADMIN CONTROLLER - GALLERY PAGES
$route["gallery_create"]                = "AdminController/avara_gallery_create";
$route["gallery_create_action"]         = "AdminController/avara_gallery_create_action";
$route["gallery_list"]                  = "AdminController/avara_gallery_list";
$route["gallery_delete/(.*)"]           = "AdminController/avara_gallery_delete/$1";

//ADMIN CONTROLLER - SLIDER PAGES
$route["slider_create"]                 = "AdminController/avara_slider_create";
$route["slider_create_action"]          = "AdminController/avara_slider_create_action";
$route["slider_list"]                   = "AdminController/avara_slider_list";
$route["slider_delete/(.*)"]            = "AdminController/avara_slider_delete/$1";

//ADMIN CONTROLLER - CONTACT PAGES
$route["contact_create"]                = "AdminController/avara_contact_create";
$route["contact_create_action"]         = "AdminController/avara_contact_create_action";
$route["contact_edit"]                  = "AdminController/avara_contact_edit";
$route["contact_edit_action"]           = "AdminController/avara_contact_edit_action";

//============================== OTHER PAGES ==============================

//OTHER - PAGES
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
