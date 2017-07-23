<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_aksi extends CI_Model
{

	function M_login_Admin($table,$where){		

		return $this->db->get_where($table,$where);

	}	
}