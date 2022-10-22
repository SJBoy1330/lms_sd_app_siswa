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
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['default_controller'] = 'auth/Auth/login';

// ! ------------------------------------------------------------------------

// Start::Auth
$route['login'] = 'auth/Auth/login';
$route['verify'] = 'auth/Auth/verify';
$route['lupa-password'] = 'auth/Auth/lupa_password';
$route['reset-password'] = 'auth/Auth/reset_password';
$route['logout'] = 'auth/Auth/logout';
// End::Auth

// ! ------------------------------------------------------------------------

// Start::Karyawan
$route['grup-karyawan'] = 'grup_karyawan';
$route['grup-karyawan/(:any)'] = 'grup_karyawan/$1';
$route['grup-karyawan/(:any)/(:any)'] = 'grup_karyawan/$1/$2';
// End::Karyawan

// ! ------------------------------------------------------------------------

// Start::Jadwal Kerja
$route['pola-kerja'] = 'pola_kerja';
$route['pola-kerja/(:any)'] = 'pola_kerja/$1';
$route['pola-kerja/(:any)/(:any)'] = 'pola_kerja/$1/$2';

$route['izin-kerja'] = 'izin_kerja';
$route['izin-kerja/(:any)'] = 'izin_kerja/$1';
$route['izin-kerja/(:any)/(:any)'] = 'izin_kerja/$1/$2';

$route['tukar-shift'] = 'tukar_shift';
$route['tukar-shift/(:any)'] = 'tukar_shift/$1';
$route['tukar-shift/(:any)/(:any)'] = 'tukar_shift/$1/$2';

$route['hari-libur'] = 'hari_libur';
$route['hari-libur/(:any)'] = 'hari_libur/$1';
$route['hari-libur/(:any)/(:any)'] = 'hari_libur/$1/$2';

$route['tukar-shift'] = 'tukar_shift';
$route['tukar-shift/(:any)'] = 'tukar_shift/$1';
$route['tukar-shift/(:any)/(:any)'] = 'tukar_shift/$1/$2';

// End::Jadwal Kerja

// ! ------------------------------------------------------------------------

// Start::Reimbursement
$route['kategori-reimbursement'] = 'kategori_reimbursement';
$route['kategori-reimbursement/(:any)'] = 'kategori_reimbursement/$1';
$route['kategori-reimbursement/(:any)/(:any)'] = 'kategori_reimbursement/$1/$2';
// End::Reimbursement

// ! ------------------------------------------------------------------------

// Start::Kunjungan
$route['kunjungan-client'] = 'kunjungan_client';
$route['kunjungan-client/(:any)'] = 'kunjungan_client/$1';
$route['kunjungan-client/(:any)/(:any)'] = 'kunjungan_client/$1/$2';
// End::Kunjungan

// ! ------------------------------------------------------------------------

// ! ------------------------------------------------------------------------

// Start::Perusahaan
$route['lokasi-presensi'] = 'lokasi_presensi';
$route['lokasi-presensi/(:any)'] = 'lokasi_presensi/$1';
$route['lokasi-presensi/(:any)/(:any)'] = 'lokasi_presensi/$1/$2';
// End::Perusahaan

// Start::Perusahaan
$route['informasi'] = 'pengumuman';
$route['informasi/(:any)'] = 'pengumuman/$1';
$route['informasi/(:any)/(:any)'] = 'pengumuman/$1/$2';
// End::Perusahaan

// ! ------------------------------------------------------------------------

// ! ------------------------------------------------------------------------

// Start::Supermanager
$route['manager-perusahaan'] = 'manager/perusahaan';
$route['manager-perusahaan/(:any)'] = 'manager/perusahaan/$1';
$route['manager-perusahaan/(:any)/(:any)'] = 'manager/perusahaan/$1/$2';

$route['manager-bantuan'] = 'manager/bantuan';
$route['manager-bantuan/(:any)'] = 'manager/bantuan/$1';
$route['manager-bantuan/(:any)/(:any)'] = 'manager/bantuan/$1/$2';

$route['manager-user'] = 'manager/user';
$route['manager-user/(:any)'] = 'manager/user/$1';
$route['manager-user/(:any)/(:any)'] = 'manager/user/$1/$2';

$route['manager-profil'] = 'manager/profil';
$route['manager-profil/(:any)'] = 'manager/profil/$1';
$route['manager-profil/(:any)/(:any)'] = 'manager/profil/$1/$2';

$route['manager-voucher'] = 'manager/voucher';
$route['manager-voucher/(:any)'] = 'manager/voucher/$1';
$route['manager-voucher/(:any)/(:any)'] = 'manager/voucher/$1/$2';

$route['manager-tagihan'] = 'manager/tagihan';
$route['manager-tagihan/(:any)'] = 'manager/tagihan/$1';
$route['manager-tagihan/(:any)/(:any)'] = 'manager/tagihan/$1/$2';

$route['manager-cms'] = 'manager/cms';
$route['manager-cms/(:any)'] = 'manager/cms/$1';
$route['manager-cms/(:any)/(:any)'] = 'manager/cms/$1/$2';

$route['manager-faq'] = 'manager/faq';
$route['manager-faq/(:any)'] = 'manager/faq/$1';
$route['manager-faq/(:any)/(:any)'] = 'manager/faq/$1/$2';

$route['manager-klien'] = 'manager/klien';
$route['manager-klien/(:any)'] = 'manager/klien/$1';
$route['manager-klien/(:any)/(:any)'] = 'manager/klien/$1/$2';

$route['manager-kontak'] = 'manager/kontak';
$route['manager-kontak/(:any)'] = 'manager/kontak/$1';
$route['manager-kontak/(:any)/(:any)'] = 'manager/kontak/$1/$2';

$route['manager-konten'] = 'manager/konten';
$route['manager-konten/(:any)'] = 'manager/konten/$1';
$route['manager-konten/(:any)/(:any)'] = 'manager/konten/$1/$2';

$route['manager-konten-kategori'] = 'manager/konten_kategori';
$route['manager-konten-kategori/(:any)'] = 'manager/konten_kategori/$1';
$route['manager-konten-kategori/(:any)/(:any)'] = 'manager/konten_kategori/$1/$2';

$route['manager-langganan'] = 'manager/langganan';
$route['manager-langganan/(:any)'] = 'manager/langganan/$1';
$route['manager-langganan/(:any)/(:any)'] = 'manager/langganan/$1/$2';

$route['manager-testimonial'] = 'manager/testimonial';
$route['manager-testimonial/(:any)'] = 'manager/testimonial/$1';
$route['manager-testimonial/(:any)/(:any)'] = 'manager/testimonial/$1/$2';
// End::Supermanager

// ! ------------------------------------------------------------------------