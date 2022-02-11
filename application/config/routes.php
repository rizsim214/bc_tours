<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'welcome';
$route['home'] = 'welcome/index';
$route['admin'] = 'admin';
$route['admin_login'] = 'admin/login';
$route['dashboard'] = 'admin/dashboard';
$route['categories'] = 'admin/categories';
$route['gallery'] = 'admin/gallery';
$route['messages'] = 'admin/messages';
$route['add_category'] = 'admin/add_category';
$route['logout'] = 'admin/logout';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
