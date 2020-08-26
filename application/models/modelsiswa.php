<?php

defined('BASEPATH') or exit('No direct script access allowed');

class modelsiswa extends CI_Model
{
	// function untuk get data siswa
	public function get_siswa()
	{
		$data = $this->db->get('data_siswa');
		return $data->result();
	}
}
