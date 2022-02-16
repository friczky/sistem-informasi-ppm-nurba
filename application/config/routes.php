<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] 			= 'welcome';
// frontend
$route['home']							= 'frontend/home';
$route['admin']							= 'backend/dashboard';
$route['dashboard']						= 'backend/dashboard';

// berita
$route['dashboard/berita']				= 'backend/berita';
$route['dashboard/berita/tambah']		= 'backend/berita/tambah';
$route['dashboard/berita/kategori']		= 'backend/berita/kategori';
$route['dashboard/berita/edit/(:any)']	= 'backend/berita/edit/$1';

// santri
$route['dashboard/santri']				= 'backend/santri';
$route['dashboard/santri/tambah']		= 'backend/santri/tambah';
$route['dashboard/santri/edit/(:any)']	= 'backend/santri/edit/$1';

// ustadz
$route['dashboard/ustadz']				= 'backend/ustadz';
$route['dashboard/ustadz/tambah']		= 'backend/ustadz/tambah';
$route['dashboard/ustadz/edit/(:any)']	= 'backend/ustadz/edit/$1';

// kajian
$route['dashboard/kajian']				= 'backend/kajian';
$route['dashboard/kajian/tambah']		= 'backend/kajian/tambah';
$route['dashboard/kajian/edit/(:any)']	= 'backend/kajian/edit/$1';

// pengguna
$route['dashboard/pengguna']				= 'backend/pengguna';
$route['dashboard/pengguna/tambah']			= 'backend/pengguna/tambah';
$route['dashboard/pengguna/role']			= 'backend/pengguna/role';
$route['dashboard/pengguna/edit/(:any)']	= 'backend/pengguna/edit/$1';

// pendaftaran
$route['dashboard/pendaftaran']						= 'backend/pendaftaran';
$route['dashboard/pendaftaran/status/(:any)']		= 'backend/pendaftaran/status/$1';
$route['dashboard/pendaftaran/tambah']				= 'backend/pendaftaran/tambah';
$route['dashboard/pendaftaran/pengaturan']			= 'backend/pendaftaran/pengaturan';
$route['dashboard/pendaftaran/edit/(:any)']			= 'backend/pendaftaran/edit/$1';

// Profile
$route['dashboard/profile']					= 'backend/profile';
$route['dashboard/pendaftaran/tambah']		= 'backend/pendaftaran/tambah';
$route['dashboard/pendaftaran/pengaturan']	= 'backend/pendaftaran/pengaturan';
$route['dashboard/pendaftaran/edit/(:any)']	= 'backend/pendaftaran/edit/$1';

$route['sitemap\.xml']			= 'sitemap';
$route['404_override'] 			= '';
$route['translate_uri_dashes'] 	= FALSE;
