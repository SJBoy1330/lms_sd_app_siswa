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
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/ujian/tablink_1.js"></script>';

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
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/ujian/tablink_1.js"></script>';

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
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/ujian/tablink_2.js"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('exam', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function exam_multiple()
	{
		// LOAD TITLE
		$mydata['title'] = 'Exam Multiple';

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/ujian/ujian.css') . '">';

		// LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/ujian/tablink_2.js"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('exam_multiple', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function exam_esai()
	{
		// LOAD TITLE
		$mydata['title'] = 'Exam Esai';

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/ujian/ujian.css') . '">';

		// LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/ujian/tablink2.js"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('exam_esai', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function exam_esai_panjang()
	{
		// LOAD TITLE
		$mydata['title'] = 'Exam Esai Panjang';

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/ujian/ujian.css') . '">';

		// LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/ujian/tablink_2.js"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('exam_esai_panjang', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function exam_penjodohan()
	{
		// LOAD TITLE
		$mydata['title'] = 'Exam Penjodohan';

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/ujian/ujian.css') . '">';

		// LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/ujian/tablink_2.js"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('exam_penjodohan', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}
}
