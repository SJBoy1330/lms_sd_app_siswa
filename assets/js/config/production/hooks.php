<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	https://codeigniter.com/user_guide/general/hooks.html
|
*/
/*** 
 * pre_system => dijalankan sebelum sistem dieksekusi, jadi sebelum script CI jalan.
 * pre_controller => sebelum script controller dipanggil, maka akan dijalankan dulu.
 * post_controller_constructo => dijalankan saat controller jalan, sebelum method apapun dieksekusi
 * post_controller => setelah controller selesai dieksekusi, maka script akan dieksekusi
 * display_override => akan mengirim sinyal setelah script selesai dieksekusi
 * cache_override => akan memperbolehkan memanggil function di class output
 * post_system => akan dijalankan setelah seluruh script dijalankan setelah sistem selesai dieksekusi oleh CI
 */

// $hook['pre_controller'] = array(
//     'class' => 'Exm',
//     'function' => 'update_db',
//     'filename' => 'Exm.php',
//     'filepath' => 'hooks'
// );
