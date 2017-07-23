<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_Prodi extends CI_Model
{
	
	public function M_Lihat(){

		return $this->db->get('prodi');

	}
}