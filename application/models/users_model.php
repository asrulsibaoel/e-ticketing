<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class users_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function getAll(){
		$data = $this->db->get('users');
		return $data->result();
	}

	public function get($id) {
		$query = $this->db->get_where("users", [ "id" => $id ])->row();
		return $query;
	}
}
