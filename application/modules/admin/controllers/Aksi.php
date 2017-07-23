<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Aksi extends MX_Controller
{
	
	function __construct()
	{
		parent::__construct();
		
		$this->load->model('M_aksi');
	}

	public function LoginAdmin(){

		$username = $this->input->post('username');

		$password = $this->input->post('password');

		$where = array('username' => trim($username), 'password' => md5(trim($password)));

		$data['cek'] = $this->M_aksi->M_login_Admin('user',$where)->result();

		foreach ($data['cek'] as $a) {

			$DataSession = array('nama' => $username, 'keterangan' => $a->keterangan);

			$this->session->set_userdata($DataSession);			

		}

		if (($a->keterangan)=='administrator') {
			$this->load->view('header');
			$this->load->view('home');
			$this->load->view('footer');
		}
	}

	public function Logout(){

		$this->session->sess_destroy();

		redirect(base_url());

	}

}