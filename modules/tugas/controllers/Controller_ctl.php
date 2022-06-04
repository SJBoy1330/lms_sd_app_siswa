<?php defined('BASEPATH') or exit('No direct script access allowed');

class Controller_ctl extends MY_Frontend
{
	public function __construct()
	{
		// Load the constructer from MY_Controller
		parent::__construct();
	}


	public function index()
	{
		// LOAD TITLE
		$mydata['title'] = 'Tugas';

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/tugas/tugas.css') . '">';

		// LOAD CONFIG PAGE
		if ($_SERVER['HTTP_REFERER'] == NULL || $_SERVER['HTTP_REFERER'] == base_url('tugas')) {
			$link = base_url('home');
		} else {
			$link = $_SERVER['HTTP_REFERER'];
		}

		// LOAD CONFIG HALAMAN
		$this->data['button_back'] = $link;
		$this->data['config_hidden']['notifikasi'] = true;
		$this->data['config_hidden']['footer'] = true;
		$this->data['judul_halaman'] = "Tugas Sekolah";
		// LOAD VIEW
		$this->data['content'] = $this->load->view('index', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function detail_tugas()
	{
		// LOAD TITLE
		$mydata['title'] = 'Detail Tugas';

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/tugas/detail_tugas.css') . '">';

		// LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/tugas/detail_tugas.js"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('detail_tugas', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}
}
