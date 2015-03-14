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

$route['default_controller'] = "home";

// Admin Functions
$route['new_player'] = "home/new_player";
$route['edit_player/(:num)'] = "home/edit_player/$1";
$route['delete_player/(:num)'] = "home/delete_player/$1";
$route['new_user'] = "home/new_user";
$route['master_reset'] = "home/master_reset";
$route['login'] = "auth/login";
$route['logout'] = "auth/logout";

// Scoring Functions
$route['add_played/(:num)'] = "home/add_played/$1";
$route['subtract_played/(:num)'] = "home/subtract_played/$1";

$route['add_match/(:num)'] = "home/add_match/$1";
$route['subtract_match/(:num)'] = "home/subtract_match/$1";

$route['add_leg/(:num)'] = "home/add_leg/$1";
$route['subtract_leg/(:num)'] = "home/subtract_leg/$1";

$route['add_ton/(:num)'] = "home/add_ton/$1";
$route['subtract_ton/(:num)'] = "home/subtract_ton/$1";

$route['add_one_eighty/(:num)'] = "home/add_one_eighty/$1";
$route['subtract_one_eighty/(:num)'] = "home/subtract_one_eighty/$1";

$route['404_override'] = '';


/* End of file routes.php */
/* Location: ./application/config/routes.php */