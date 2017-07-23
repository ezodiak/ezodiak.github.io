<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Prodi extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();

		$this->load->model('M_Prodi');
		
	}

	public function Lihat(){

		$data['prodi'] = $this->M_Prodi->M_Lihat()->result();

		$this->load->view('header');
		$this->load->view('Prodi',$data);
		$this->load->view('footer');

	}

}