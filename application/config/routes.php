<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'welcome';
$route['home'] = 'welcome/index';
$route['inquiry'] = 'welcome/inquiry';
$route['delete_message/(:num)'] = 'admin/delete_message/$1';
$route['one_message/(:num)'] = 'admin/view_message/$1';
$route['admin'] = 'admin';
$route['admin_login'] = 'admin/login';
$route['dashboard'] = 'admin/dashboard';
$route['categories'] = 'admin/categories';
$route['attractions'] = 'admin/attractions';
$route['messages'] = 'admin/messages';
$route['hr_filter'] = 'admin/hr_filter';
$route['br_filter'] = 'admin/br_filter';
$route['mc_filter'] = 'admin/mc_filter';
$route['add_category'] = 'admin/add_category';
$route['one_category/(:num)'] = 'admin/one_category/$1';
$route['update/(:num)'] = 'admin/update_one_category/$1';
$route['delete/(:num)'] = 'admin/delete_one_category/$1';
$route['logout'] = 'admin/logout';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
