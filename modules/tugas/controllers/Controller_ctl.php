<?php defined('BASEPATH') or exit('No direct script access allowed');

class Controller_ctl extends MY_Frontend
{
	protected $id_sekolah = '';
	protected $id_siswa = '';
	public function __construct()
	{
		// Load the constructer from MY_Controller
		parent::__construct();
		$this->id_sekolah = $this->session->userdata('lms_siswa_id_sekolah');
		$this->id_siswa = $this->session->userdata('lms_siswa_id_siswa');
	}
	public function index()
	{
		// LOAD TITLE
		$mydata['title'] = 'Tugas';

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/tugas/tugas.css') . '">';

		// LOAD CONFIG PAGE
		if ($_SERVER['HTTP_REFERER'] == NULL) {
			$link = base_url('home');
		} else {
			$arrLink = explode('/', $_SERVER['HTTP_REFERER']);
			if (in_array('tugas', $arrLink)) {
				$link = base_url('home');
			} else {
				$link = $_SERVER['HTTP_REFERER'];
			}
		}

		// LOAD CONFIG HALAMAN
		$this->data['button_back'] = $link;
		$this->data['config_hidden']['notifikasi'] = true;
		$this->data['config_hidden']['footer'] = true;
		$this->data['judul_halaman'] = "Tugas Sekolah";

		// LOAD API
		$result = curl_get('tugas', ['id_sekolah' => $this->id_sekolah, 'id_siswa' => $this->id_siswa]);
		// LOAD MYDATA
		$mydata['result'] = $result->data;
		// LOAD VIEW
		// LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/tugas/tugas.js"></script>';
		$this->data['content'] = $this->load->view('index', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function detail_tugas($id_tugas = NULL)
	{
		if ($id_tugas == NULL) {
			redirect('tugas');
		}
		// LOAD TITLE
		$mydata['title'] = 'Detail Tugas';

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/tugas/detail_tugas.css') . '">';

		// LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/tugas/detail_tugas.js"></script>';

		// LOAD CONFIG PAGE
		if ($_SERVER['HTTP_REFERER'] == NULL || $_SERVER['HTTP_REFERER'] == base_url('tugas/detail_tugas/' . $id_tugas)) {
			$link = base_url('tugas');
		} else {
			$link = $_SERVER['HTTP_REFERER'];
		}
		// LOAD CONFIG HALAMAN
		$this->data['button_back'] = $link;
		$this->data['config_hidden']['notifikasi'] = true;
		$this->data['config_hidden']['footer'] = true;
		$this->data['judul_halaman'] = "Detail Tugas Sekolah";

		// LOAD API 
		$result = curl_get('tugas/single/', ['id_sekolah' => $this->id_sekolah, 'id_siswa' => $this->id_siswa, 'id_tugas' => $id_tugas]);

		$mydata['result'] = $result->data;
		// LOAD VIEW
		$this->data['content'] = $this->load->view('detail_tugas', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}
}
