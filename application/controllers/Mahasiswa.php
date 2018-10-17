<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function index()
	{
		$this->load->model('mhs_model');
		$temp['m'] = $this->mhs_model->getAll();
		$this->load->view('mhs/tabel_mhs',$temp);
	}

	public function show($arg1 = '0', $arg2 = '')
	{
		$temp['nrp'] = $arg1;
		$temp['nama'] = $arg2;
	
		$this->load->view('mhs/detil_mhs', $temp);
	}
	

	// Cara memanggilnya: localhost/NamaController/namaFungsi/parameter1/parameter2/parameterN
	//contoh http://localhost/Mahasiswa/hitung/10/5
	public function hitung($arg1 = 0, $arg2 = 0) {
		$data = $arg1 * $arg2;
		echo $data;
	}
}
