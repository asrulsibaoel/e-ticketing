<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class users_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get($username)
	{	
		$this->db->where('username',$username);
		$query = $this->db->get('users');
		return $query->row();		
	}

	public function getdata()
	{
		$username = $this->session->userdata('username');
		$this->db->where('username',$username);
		$query = $this->db->get('users');
		return $query->row();
	}

	public function view(){
		return $this->db->get('users')->result();
	}

	public function edit($id,$data){
		$row = $this->db->where('username',$id)->get('users')->row();
		unlink('./assets/img/'.$row->photo);
		$this->db->where('username', $id);
		$this->db->update('users', $data);
	  }

}
