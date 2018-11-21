<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('users_model');
	}

	public function index()
	{
		$temp['m'] = $this->users_model->getAll();
		$this->load->view('mhs/tabel_mhs',$temp);
	}

	public function show($arg1 = '0', $arg2 = '')
	{
		$temp['nrp'] = $arg1;
		$temp['nama'] = $arg2;
		$temp['kelas'] = $arg2;
	
		$this->load->view('mhs/detil_mhs', $temp);
	}

	public function showData($id) {
		$data['user'] = $this->users_model->get($id);

		$this->load->view("users/show", $data);
	}
}
