<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
	public function index()
	{
		if ($this->session->userdata('status') == 'login' ) {
			$this->load->view('v_utama/dashboard');
		} else {
			$this->load->view('v_utama/login');
		}
	}
}
