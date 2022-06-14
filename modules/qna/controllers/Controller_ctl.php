<?php defined('BASEPATH') or exit('No direct script access allowed');

class Controller_ctl extends MY_Frontend
{
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

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/chatting/chatting.css') . '">';

		// LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/chatting/chatting.js"></script>';

		// LOAD CONFIG PAGE
		if ($_SERVER['HTTP_REFERER'] == NULL) {
			$link = base_url('home');
		} else {
			$arrLink = explode('/', $_SERVER['HTTP_REFERER']);
			if (in_array('qna', $arrLink)) {
				$link = base_url('home');
			} else {
				$link = $_SERVER['HTTP_REFERER'];
			}
		}

		// LOAD CONFIG PAGE 
		$this->data['button_back'] = $link;
		$this->data['config_hidden']['notifikasi'] = true;
		$this->data['config_hidden']['footer'] = true;
		$this->data['khusus']['qna'] = true;
		$this->data['judul_halaman'] = 'Pesan';

		// LOAD API
		$result = curl_get('pesan/', ['id_sekolah' => $this->id_sekolah, 'id_siswa' => $this->id_siswa]);

		// LOAD MYDATA
		$mydata['result'] = $result->data;
		// var_dump($result->data);
		// die;
		// LOAD VIEW
		$this->data['content'] = $this->load->view('index', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function kontak_personal()
	{
		// LOAD TITLE
		$mydata['title'] = 'Kontak Personal';

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/chatting/chatting.css') . '">';

		// LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/chatting/chatting.js"></script>';

		// LOAD CONFIG PAGE 
		if ($_SERVER['HTTP_REFERER'] == NULL || $_SERVER['HTTP_REFERER'] == base_url('qna/kontak_personal')) {
			$link = base_url('qna');
		} else {
			$link = $_SERVER['HTTP_REFERER'];
		}
		$this->data['button_back'] = $link;
		$this->data['config_hidden']['notifikasi'] = true;
		$this->data['config_hidden']['footer'] = true;
		$this->data['judul_halaman'] = 'Kontak';

		// LOAD API
		$result = curl_get('pesan/kontak/', ['id_sekolah' => $this->id_sekolah, 'id_siswa' => $this->id_siswa]);

		// LOAD MYDATA
		$mydata['result'] = $result->data;
		// LOAD VIEW
		$this->data['content'] = $this->load->view('kontak_personal', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function kontak_grup()
	{
		// LOAD TITLE
		$mydata['title'] = 'Kontak Grup';

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/chatting/chatting.css') . '">';

		// LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/chatting/chatting_2.js"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('kontak_grup', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function chatting($id_diskusi_tanya = NULL)
	{
		if ($id_diskusi_tanya == NULL) {
			redirect('qna');
		}
		// LOAD TITLE
		$mydata['title'] = 'Chatting';

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/style-dewa.css') . '">';

		// LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/chatting/chatting_2.js"></script>';

		// LOAD API 
		$result = curl_get('pesan/display/', ['id_sekolah' => $this->id_sekolah, 'id_siswa' => $this->id_siswa, 'id_diskusi_tanya' => $id_diskusi_tanya]);
		// LOAD CONFIG PAGE 
		$this->data['button_back'] = base_url('qna');
		$this->data['config_hidden']['notifikasi'] = true;
		$this->data['config_hidden']['footer'] = true;
		$this->data['right_button']['chatting'] = true;
		$this->data['foto_staf'] = $result->data->detail->foto;
		$this->data['judul_halaman'] = $result->data->detail->nama;

		// LOAD MYDATA 
		$mydata['id_diskusi_tanya'] = $id_diskusi_tanya;
		$mydata['result'] = $result->data->chat;
		$mydata['pelajaran'] = curl_get('materi/pelajaran', ['id_sekolah' => $this->id_sekolah, 'id_siswa' => $this->id_siswa])->data;
		// LOAD VIEW
		$this->data['content'] = $this->load->view('chatting', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function chatting_grup()
	{
		// LOAD TITLE
		$mydata['title'] = 'Chatting Grup';

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/chatting/chatting.css') . '">';

		// LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/chatting/chatting_2.js"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('chatting_grup', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function create_chat()
	{
		$post = $this->input->post('post');
		$value = $this->input->post('value');

		$post = explode(",", $post);
		$value = explode(",", $value);
		$no = 0;
		$arr = array();
		foreach ($post as $val) {
			$num = $no++;
			if ($val != '') {
				$arr[$val] = $value[$num];
			}
		}

		// LOAD API
		$result = curl_post('pesan/create_chat/', ['id_sekolah' => $this->id_sekolah, 'id_siswa' => $this->id_siswa, 'id_staf' => $arr['id_staf']]);
		$data['status'] = $result->status;
		if ($result->status == 200) {
			$data['redirect'] = base_url('qna/chatting/' . $result->id_diskusi);
		} else {
			$data['alert']['message'] = $result->message;
			$data['alert']['icon'] = 'success';
		}
		// var_dump($result);
		echo json_encode($data);
	}


	public function kirim_pesan()
	{
		$pesan = $this->input->post('pesan');
		$id_materi = $this->input->post('id_materi');
		$id_diskusi_tanya = $this->input->post('id_diskusi_tanya');
		if ($id_materi != NULL) {
			$req['id_materi'] = $id_materi;
		}
		$req['id_sekolah'] = $this->id_sekolah;
		$req['id_siswa'] = $this->id_siswa;
		$req['pesan'] = $pesan;
		$req['id_diskusi_tanya'] = $id_diskusi_tanya;

		// POST API 
		$result = curl_post('pesan/kirim', $req);
	}


	public function get_bab()
	{
		$id_pelajaran = $this->input->post('id_pelajaran');
		$result = curl_get('materi/bab_materi/', ['id_sekolah' => $this->id_sekolah, 'id_pelajaran' => $id_pelajaran]);
		$mydata['result'] = $result->data->result;
		$this->load->view('display/bab', $mydata);
	}

	public function get_materi()
	{
		$id_bab = $this->input->post('id_bab');
		$result = curl_get('materi/', ['id_sekolah' => $this->id_sekolah, 'id_bab' => $id_bab]);
		$mydata['result'] = $result->data;
		$this->load->view('display/materi', $mydata);
	}
}
