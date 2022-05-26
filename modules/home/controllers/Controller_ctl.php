<?php defined('BASEPATH') or exit('No direct script access allowed');

class Controller_ctl extends MY_Frontend
{
	protected $id_sekolah = '';
	protected $id_siswa = '';
	public function __construct()
	{
		// Load the constructer from MY_Controller
		parent::__construct();
		is_logged_in();
		$this->id_sekolah = $this->session->userdata('lms_siswa_id_sekolah');
		$this->id_siswa = $this->session->userdata('lms_siswa_id_siswa');
	}


	public function index()
	{
		// LOAD TITLE
		$mydata['title'] = 'Home';

		// LOAD DATA SISWA
		$mydata['user'] = $user = curl_get('profil', array('id_sekolah' => $this->id_sekolah, 'id_siswa' => $this->id_siswa))->data;

		$mydata['result_aktif'] = curl_get('jadwal/today', array('id_sekolah' => $this->id_sekolah, 'hari' => date('N'), 'aktif' => 'Y', 'id_kelas' =>  $mydata['user'][0]->id_kelas, 'kbm' => 'Y'))->data;
		$mydata['result_old'] = curl_get('jadwal/today', array('id_sekolah' => $this->id_sekolah, 'hari' => date('N'), 'aktif' => 'N', 'id_kelas' =>  $mydata['user'][0]->id_kelas, 'kbm' => 'Y'))->data;
		$mydata['pengumuman'] = curl_get('pengumuman', array('id_sekolah' => $this->id_sekolah, 'limit' => 3))->data;
		$mydata['berita'] = curl_get('berita', array('id_sekolah' => $this->id_sekolah, 'limit' => 5))->data;

		$mydata['presensi_setting'] = curl_get('presensi/setting', array('id_sekolah' => $this->id_sekolah));
		// LOAD VIEW
		$this->data['content'] = $this->load->view('index', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function list_pengumuman()
	{

		// LOAD TITLE
		$mydata['title'] = 'Pengumuman';

		// LOAD DATA
		$mydata['result'] = curl_get('pengumuman/all', array('id_sekolah' => $this->id_sekolah))->data;
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
