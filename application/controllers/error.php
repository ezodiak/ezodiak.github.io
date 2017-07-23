<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Error extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
	}

	public function index(){

		$this->load->view('blog/header');
	
		$this->load->view('blog/home');
	
		$this->load->view('blog/footer');

	}



}

?>
