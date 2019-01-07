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

	public function validasi(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		
		$row = $this->users_model->get($username);
		if ($row->password == $password){						
			$this->session->set_userdata('username',$row->username);			
			redirect('users');
		} else {
			$this->session->set_flashdata('message','Data tidak benar');
			redirect('users');
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

	public function do_upload_edit()
  {
          $data = array(
            "username" => $this->input->post('username'),
            "name" => $this->input->post('nama'),
            "email" => $this->input->post('email'),
            "password" => md5($this->input->post('password')),
            "address" => $this->input->post('alamat'),
            "phone_number" => $this->input->post('notelp'),
			"photo" => $_FILES['upload_foto']['name'],
			"role" => $this->input->post('role')
          );
          $config['upload_path']          = './assets/img/';
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
    if($this->input->post('submitedit')){ 
        $this->do_upload_edit();
        redirect('users/editprofile');
      }
  }
}
