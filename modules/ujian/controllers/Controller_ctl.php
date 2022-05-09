<?php defined('BASEPATH') or exit('No direct script access allowed');

class Controller_ctl extends MY_Frontend
{
	public function __construct()
	{
		// Load the constructer from MY_Controller
		parent::__construct();
		is_logged_in();
	}


	public function index()
	{
		// LOAD TITLE
		$mydata['title'] = 'Materi';

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/ujian/ujian.css') . '">';

		// LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/ujian/ujian.js"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('index', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function detail_ujian()
	{
		// LOAD TITLE
		$mydata['title'] = 'Detail Ujian';

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/ujian/ujian.css') . '">';

		// LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/ujian/ujian.js"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('detail_ujian', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function exam()
	{
		// LOAD TITLE
		$mydata['title'] = 'Exam';

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/ujian/ujian.css') . '">';

		// LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/ujian/ujian.js"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('exam', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}
}