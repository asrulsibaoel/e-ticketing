<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Flight_Schedules_Model extends CI_Model {

    private $dbName;

	public function __construct()
	{
		parent::__construct();
        $this->load->database();
        $this->dbName = "flight_Schedules";
	}
	public function findAll($where = []){
		$data = $this->db->get_where($this->dbName, $where);
		return $data->result();
	}

	public function get($id) {
		$query = $this->db->get_where($this->dbName, [ "id" => $id ])->row();
		return $query;
	}
}
