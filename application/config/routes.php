<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['captha_img/(:num)'] = 'pages/captha_img/$1';
$route['captha_reloaded/(:num)'] = 'pages/captha_reloaded/$1';
$route['admin/news/create'] = 'admin/news/create';
$route['admin/save_news/(:num)'] = 'admin/news/save/$1';
$route['admin/news/edit/(:num)'] = 'admin/news/edit/$1';
$route['admin/news/delete/(:num)'] = 'admin/news/delete/$1';
$route['users/delete/(:any)'] = 'admin/users/delete/$1';
$route['admin/(:any)'] = 'admin/$1/index';
$route['admin'] = 'admin/menu/index';
$route['evil_news'] = 'news/index';
$route['evil_news/(:num)'] = 'news/view/$1';
$route['loggin_evil'] = 'auth/login';
$route['create_evil'] = 'auth/create_user';
$route['logout'] = 'auth/logout';
$route['(:any)'] = 'pages/view/$1';
$route['default_controller'] = 'pages/view';


/* End of file routes.php */
/* Location: ./application/config/routes.php */