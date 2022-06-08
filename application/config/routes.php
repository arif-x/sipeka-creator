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
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


// ======================================================================= Admin
// Admin Auth
$route['admin/login'] = 'auth/admin/login';

// Event
$route['admin/informasi'] = 'admin/informasi/index';
$route['admin/informasi/store'] = 'admin/informasi/store';
$route['admin/informasi/show/(:num)'] = 'admin/informasi/show/$1';
$route['admin/informasi/update'] = 'admin/informasi/update';
$route['admin/informasi/destroy'] = 'admin/informasi/destroy';

// Event
$route['admin/event'] = 'admin/event/index';
$route['admin/event/store'] = 'admin/event/store';
$route['admin/event/show/(:num)'] = 'admin/event/show/$1';
$route['admin/event/update'] = 'admin/event/update';
$route['admin/event/destroy'] = 'admin/event/destroy';

// Kategori Event
$route['admin/kategori/event'] = 'admin/kategorievent/index';
$route['admin/kategori/event/store'] = 'admin/kategorievent/store';
$route['admin/kategori/event/show/(:num)'] = 'admin/kategorievent/show/$1';
$route['admin/kategori/event/update'] = 'admin/kategorievent/update';
$route['admin/kategori/event/destroy'] = 'admin/kategorievent/destroy';

// Kategori Informasi
$route['admin/kategori/informasi'] = 'admin/kategoriinformasi/index';
$route['admin/kategori/informasi/store'] = 'admin/kategoriinformasi/store';
$route['admin/kategori/informasi/show/(:num)'] = 'admin/kategoriinformasi/show/$1';
$route['admin/kategori/informasi/update'] = 'admin/kategoriinformasi/update';
$route['admin/kategori/informasi/destroy'] = 'admin/kategoriinformasi/destroy';

// Kategori Wisata
$route['admin/kategori/wisata'] = 'admin/kategoriwisata/index';
$route['admin/kategori/wisata/store'] = 'admin/kategoriwisata/store';
$route['admin/kategori/wisata/show/(:num)'] = 'admin/kategoriwisata/show/$1';
$route['admin/kategori/wisata/update'] = 'admin/kategoriwisata/update';
$route['admin/kategori/wisata/destroy'] = 'admin/kategoriwisata/destroy';

// Wilayah
$route['admin/wilayah/provinsi'] = 'admin/wilayah/get_province';
$route['admin/wilayah/kota-kab/(:num)'] = 'admin/wilayah/get_regency/$1';
$route['admin/wilayah/kecamatan/(:num)'] = 'admin/wilayah/get_district/$1';
$route['admin/wilayah/desa-kelurahan/(:num)'] = 'admin/wilayah/get_village/$1';

// Kategori Wisata
$route['admin/wisata'] = 'admin/wisata/index';
$route['admin/wisata/store'] = 'admin/wisata/store';
$route['admin/wisata/show/(:num)'] = 'admin/wisata/show/$1';
$route['admin/wisata/update'] = 'admin/wisata/update';
$route['admin/wisata/destroy'] = 'admin/wisata/destroy';

// Config
$route['admin/config'] = 'admin/config/index';
$route['admin/config/update'] = 'admin/config/update';
$route['admin/config/show-provinsi'] = 'admin/config/show_provinsi';


// ======================================================================= User
// User Auth
$route['login'] = 'auth/user/login';
$route['register']['post'] = 'auth/user/register';
$route['register']['get'] = 'auth/user/daftar';

