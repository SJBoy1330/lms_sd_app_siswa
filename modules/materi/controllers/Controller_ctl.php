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
		$mydata['title'] = 'Materi';
		// LOAD CONFIG PAGE
		$this->data['button_back'] = base_url('home');
		$this->data['judul_halaman'] = 'Materi Pelajaran';
		$this->data['config_hidden']['notifikasi'] = true;
		$this->data['config_hidden']['footer'] = true;
		// LOAD VIEW
		$this->data['content'] = $this->load->view('index', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function detail_bab()
	{
		// LOAD TITLE
		$mydata['title'] = 'Detail Bab';
		// LOAD VIEW
		$this->data['content'] = $this->load->view('detail_bab', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}
}
