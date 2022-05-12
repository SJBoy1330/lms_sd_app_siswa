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
		$mydata['title'] = 'Home';

		// LOAD DATA SISWA
		$mydata['user'] = $user = curl_get(API_URL() . 'profil/?id_sekolah=' . $this->session->userdata('lms_siswa_id_sekolah') . '&id_siswa=' . $this->session->userdata('lms_siswa_id_siswa'))->data;

		$mydata['result_aktif'] = curl_get(API_URL() . 'jadwal/today?id_sekolah=' . $this->session->userdata('lms_siswa_id_sekolah') . '&hari=' . date('N') . '&aktif=Y&id_kelas=' . $mydata['user'][0]->id_kelas . '&kbm=Y')->data;
		$mydata['result_old'] = curl_get(API_URL() . 'jadwal/today?id_sekolah=' . $this->session->userdata('lms_siswa_id_sekolah') . '&hari=' . date('N') . '&aktif=N&id_kelas=' . $mydata['user'][0]->id_kelas . '&kbm=Y')->data;
		$mydata['pengumuman'] = curl_get(API_URL() . 'pengumuman/?id_sekolah=' . $this->session->userdata('lms_siswa_id_sekolah') . '&limit=3')->data;
		$mydata['berita'] = curl_get(API_URL() . 'berita/?id_sekolah=' . $this->session->userdata('lms_siswa_id_sekolah') . '&limit=5')->data;

		$mydata['presensi_setting'] = curl_get(API_URL() . 'presensi_siswa/setting?id_sekolah=' . $this->session->userdata('lms_siswa_id_sekolah'));
		// LOAD VIEW
		$this->data['content'] = $this->load->view('index', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function list_pengumuman()
	{

		// LOAD TITLE
		$mydata['title'] = 'Pengumuman';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('list_pengumuman', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function detail_pengumuman()
	{

		// LOAD TITLE
		$mydata['title'] = 'Detail Pengumuman';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('detail_pengumuman', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function list_berita()
	{
		// LOAD TITLE
		$mydata['title'] = 'List Berita';

		// LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/berita/listberita.js"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('list_berita', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function detail_berita()
	{
		// LOAD TITLE
		$mydata['title'] = 'Detail Berita';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('detail_berita', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function notifikasi()
	{
		// LOAD TITLE
		$mydata['title'] = 'Notifikasi';

		// LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/notifikasi/notifikasi.js"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('notifikasi', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}
}
