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
		$mydata['title'] = 'Jadwal';
		// LOAD DATA
		if ($this->input->get('hari')) {
			$day = $this->input->get('hari');
		} else {
			$day = date('N');
		}
		$mydata['result'] = curl_get('https://sd.klasq.id/api/siswa/jadwal/lengkap?id_sekolah=' . $this->session->userdata('lms_siswa_id_sekolah') . '&hari=' . $day . '&id_kelas=1')->data;
		// LOAD VIEW
		$this->data['content'] = $this->load->view('jadwal', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function detail_kbm()
	{
		// LOAD TITLE
		$mydata['title'] = 'Detail KBM';
		// LOAD VIEW
		$this->data['content'] = $this->load->view('detail_kbm', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function detail_materi()
	{
		// LOAD TITLE
		$mydata['title'] = 'Detail KBM';

		// LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/kbm/detail_materi.js"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('detail_materi', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}
}
