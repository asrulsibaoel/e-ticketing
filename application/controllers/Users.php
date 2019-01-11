<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('users_model');
	}

	public function index()
	{
		header("Access-Control-Allow-Origin: *");
		$data['tampil'] = $this->users_model->view();
		
		$this->template->set('title', 'Home');
		$this->template->load('home' , $data);
	}


	/**
	 * TODO: 
	 * Kasih blok try catch.
	 * Tambahin validasi kalo username / password kosong.
	 */
	public function validasi(){
		try{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$row = $this->users_model->get($username);
		if (!empty($row)) {
			if ($row->password == $password){
				$this->session->set_userdata('username',$row->username);
				$this->session->set_userdata('userId',$row->id);
				redirect('users');
			} else {
				$this->session->set_flashdata('message','Data tidak benar');
				redirect('users');
			}	
		} else {
			throw new Error("User not found");
		}
	}catch(Exception $e){
		echo 'Message' .$e->getMessage();
	}
		
	}

	public function logout(){
		$this->session->unset_userdata('username');		
		redirect('users');
	}

	public function editProfile()
	{
		
		header("Access-Control-Allow-Origin: *");
		$data['tampil'] = $this->users_model->getdata();
		$this->template->set('title', 'User Profile');
		$this->template->load('edit_profile' , $data);
	}

	/**
	 * TODO: Kasih blok try catch
	 */
	public function do_upload_edit()
  {
	$data = array(
		"username" => $this->input->post('input_username'),
		"name" => $this->input->post('input_nama'),
		"email" => $this->input->post('input_email'),
		"password" => md5($this->input->post('input_password')),
		"address" => $this->input->post('input_alamat'),
		"phone_number" => $this->input->post('input_telp'),
		"photo" => $_FILES['upload_foto']['name'],
		"role" => $this->input->post('dropdown_role')
	  );
          $config['upload_path']          = './uploads/';
          $config['allowed_types']        = 'gif|jpg|png';
          $config['max_size']             = 400;
          $config['max_width']            = 1024;
          $config['max_height']           = 768;

          $this->load->library('upload', $config);
          $this->upload->initialize($config);

          if ( ! $this->upload->do_upload('upload_foto'))
          {
                  $error = array('error' => $this->upload->display_errors());

                  redirect('users/editprofile',$error);
          }
          else
          {
                  $upload_data = $this->upload->data();
                  $data['photo'] = $upload_data['file_name'];

                  redirect('users/editprofile',$data);
          }
          $this->users_model->edit($data['username'],$data);
  }

  public function ubah($id){
    if($this->input->post('submit')){ 
        $this->do_upload_edit();
        redirect('users/editprofile');
      }
  }
}
