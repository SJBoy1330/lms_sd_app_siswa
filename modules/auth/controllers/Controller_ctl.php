<?php defined('BASEPATH') or exit('No direct script access allowed');

class Controller_ctl extends MY_Welcome
{
	public function __construct()
	{
		// Load the constructer from MY_Controller
		parent::__construct();
	}


	public function index()
	{
		// LOAD TITLE
		$mydata['title'] = 'Splash';

		// LOAD JS
		$this->data['js_add'][] = '<script type="text/javascript">$(document).ready(function() {
        $("body").addClass("d-flex flex-column h-100");setTimeout(function () {window.location.replace("' . base_url('auth/login') . '");}, 4000)} );</script>';
		// LOAD VIEW
		$this->data['content'] = $this->load->view('index', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function login()
	{
		// LOAD TITLE
		$mydata['title'] = 'Login';
		// LOAD VIEW
		$this->data['content'] = $this->load->view('login', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function send_email()
	{
		// LOAD TITLE
		$mydata['title'] = 'send email';
		// LOAD VIEW
		$this->data['content'] = $this->load->view('send_email', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function otp()
	{
		// LOAD TITLE
		$mydata['title'] = 'Verif OTP';
		// LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/auth/otp.js"></script>';
		// LOAD VIEW
		$this->data['content'] = $this->load->view('otp', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function reset_sandi()
	{
		// LOAD TITLE
		$mydata['title'] = 'Verif OTP';
		// LOAD VIEW
		$this->data['content'] = $this->load->view('reset_sandi', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}
}
