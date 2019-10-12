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
$route['default_controller'] = 'User';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['admin'] = 'admin/Overview';
$route['admin/login'] = 'admin/login';
$route['admin/login/aksi_login'] = 'admin/login/aksi_login';
$route['admin/logout'] = 'admin/login/logout';

$route['admin/forgot-password'] = 'admin/login/forgotpassword';

$route['admin/accountsetting'] = 'admin/myprofile';
$route['admin/accountsetting/edit/(:any)'] = 'admin/myprofile/edit/$1';

$route['admin/admin'] = 'admin/admin';
$route['admin/admin/add'] = 'admin/admin/add';
$route['admin/admin/edit/(:any)'] = 'admin/admin/edit/$1';
$route['admin/admin/delete/(:any)'] = 'admin/admin/delete/$1';

$route['admin/post'] = 'admin/info';
$route['admin/post/add'] = 'admin/info/add';
$route['admin/post/edit/(:any)'] = 'admin/info/edit/$1';
$route['admin/post/delete()/(:any)'] = 'admin/info/delete/$1';

$route['admin/member'] = 'admin/member';
$route['admin/member/add'] = 'admin/member/add';
$route['admin/member/edit/(:any)'] = 'admin/member/edit/$1';
$route['admin/member/delete()/(:any)'] = 'admin/member/delete/$1';

$route['admin/donatur/add'] = 'admin/donatur/add';
$route['admin/donatur/edit/(:any)'] = 'admin/donatur/edit/$1';
$route['admin/donatur/delete()/(:any)'] = 'admin/donatur/delete/$1';
$route['admin/donasi'] = 'admin/donasi';
$route['admin/donasi/add'] = 'admin/donasi/add';
$route['admin/donasi/edit/(:any)'] = 'admin/donasi/edit/$1';
$route['admin/donasi/delete()/(:any)'] = 'admin/donasi/delete/$1';

$route['admin/penggalang/add'] = 'admin/penggalang/add';
$route['admin/penggalang/edit/(:any)'] = 'admin/penggalang/edit/$1';
$route['admin/penggalang/delete()/(:any)'] = 'admin/penggalang/delete/$1';
$route['admin/kampanye'] = 'admin/kampanye';
$route['admin/kampanye/add'] = 'admin/kampanye/add';
$route['admin/kampanye/edit/(:any)'] = 'admin/kampanye/edit/$1';
$route['admin/kampanye/delete()/(:any)'] = 'admin/kampanye/delete/$1';

$route['kirimdl'] = 'User/kirimdl/';
$route['kirimdl2'] = 'User/kirimdl2/';
$route['kirimdl3'] = 'User/kirimdl3/';
$route['kesehatan'] = 'User/kesehatan/';
$route['pendidikan'] = 'User/pendidikan/';
$route['donasi'] = 'User/donasi/';
$route['register'] = 'User/register/';
$route['login'] = 'User/login/';
$route['detail'] = 'User/detail/';
$route['profil'] = 'User/profilpem/';
$route['editprofil'] = 'User/editprofil/';
$route['notifikasi'] = 'User/notif/';
$route['galangdana'] = 'User/galangdana/';
$route['galangdana2'] = 'User/galangdana2/';
$route['laporan1-1'] = 'User/retensi11/';
$route['laporan1-2'] = 'User/retensi12/';
$route['laporan1-3'] = 'User/retensi13/';
$route['laporan1-4'] = 'User/retensi14/';
$route['laporan1-5'] = 'User/retensi15/';
$route['laporan2-1'] = 'User/retensi21/';
$route['laporan2-2'] = 'User/retensi22/';
$route['laporan2-3'] = 'User/retensi23/';
$route['laporan2-4'] = 'User/retensi24/';
$route['laporan2-5'] = 'User/retensi25/';
$route['laporan3-1'] = 'User/retensi31/';
$route['laporan3-2'] = 'User/retensi32/';
$route['laporan3-3'] = 'User/retensi33/';
$route['laporan3-4'] = 'User/retensi34/';
$route['laporan3-5'] = 'User/retensi35/';





