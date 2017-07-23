<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Mahasiswa extends MX_Controller
{

	function index()
	{
		
		$data['mahasiswa'] = 'http://localhost/erporate/mahasiswa_api';

		$this->load->view('mahasiswa',$data);
	}

}

?>