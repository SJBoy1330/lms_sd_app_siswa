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
		$mydata['nama'] = curl_get('https://sd.klasq.id/api/siswa/profil/?id_sekolah=' . $this->session->userdata('lms_siswa_id_sekolah') . '&id_siswa=' . $this->session->userdata('lms_siswa_id_siswa'))->data->nama;
		$mydata['jadwal'] = curl_get('https://sd.klasq.id/api/siswa/jadwal/today?id_sekolah=1&hari=3&aktif=N&id_kelas=1&kbm=Y');

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
