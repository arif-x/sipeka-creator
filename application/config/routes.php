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

$route['about'] = 'guest/about/index';
$route['kontak'] = 'guest/kontak/index';

// ======================================================================= Admin
// Admin Auth
$route['admin/login'] = 'auth/admin/login';
$route['admin/logout'] = 'auth/admin/logout';

// Informasi
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

// Slider Text
$route['admin/slider-text'] = 'admin/slidertext/index';
$route['admin/slider-text/store'] = 'admin/slidertext/store';
$route['admin/slider-text/show/(:num)'] = 'admin/slidertext/show/$1';
$route['admin/slider-text/update'] = 'admin/slidertext/update';
$route['admin/slider-text/destroy'] = 'admin/slidertext/destroy';

// Slider
$route['admin/slider'] = 'admin/slider/index';
$route['admin/slider/show/(:num)'] = 'admin/slider/show/$1';
$route['admin/slider/update'] = 'admin/slider/update';

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

// Pelaku Ekraf
$route['admin/pelaku-ekraf'] = 'admin/pelakuekraf/index';
$route['admin/pelaku-ekraf/store'] = 'admin/pelakuekraf/store';
$route['admin/pelaku-ekraf/show/(:num)'] = 'admin/pelakuekraf/show/$1';
$route['admin/pelaku-ekraf/update'] = 'admin/pelakuekraf/update';
$route['admin/pelaku-ekraf/destroy'] = 'admin/pelakuekraf/destroy';

// Event
$route['admin/event-ekraf'] = 'admin/eventekraf/index';
$route['admin/event-ekraf/store'] = 'admin/eventekraf/store';
$route['admin/event-ekraf/show/(:num)'] = 'admin/eventekraf/show/$1';
$route['admin/event-ekraf/update'] = 'admin/eventekraf/update';
$route['admin/event-ekraf/destroy'] = 'admin/eventekraf/destroy';


// ======================================================================= User
// User Auth
// $route['login'] = 'auth/user/login';
// $route['register']['post'] = 'auth/user/register';
// $route['register']['get'] = 'auth/user/daftar';

// ======================================================================= Guest
// Event
$route['event-wisata'] = 'guest/event/index';
$route['event-wisata/(:num)'] = 'guest/event/index/$1';
$route['event-wisata/(:any)'] = 'guest/event/show/$1';

// Event Ekraf
$route['event-ekraf'] = 'guest/eventekraf/index';
$route['event-ekraf/(:num)'] = 'guest/eventekraf/index/$1';
$route['event-ekraf/(:any)'] = 'guest/eventekraf/show/$1';

// Informasi
$route['informasi'] = 'guest/informasi/index';
$route['informasi/(:num)'] = 'guest/informasi/index/$1';
$route['informasi/(:any)'] = 'guest/informasi/show/$1';

// Informasi
$route['daftar-wisata'] = 'guest/wisata/index';
$route['daftar-wisata/(:num)'] = 'guest/wisata/index/$1';
$route['daftar-wisata/(:any)'] = 'guest/wisata/show/$1';

// Pelaku
$route['pelaku-ekraf'] = 'guest/pelaku/index';
$route['pelaku-ekraf/(:num)'] = 'guest/pelaku/index/$1';
$route['pelaku-ekraf/detail/(:any)'] = 'guest/pelaku/show/$1';

// Maps
$route['maps-wisata'] = 'guest/maps/index';