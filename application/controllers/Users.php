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
		$id = $this->session->userdata('userId');
		header("Access-Control-Allow-Origin: *");
		$data['tampil'] = $this->users_model->getdata();
		$this->template->set('title', 'User Profile');
		$this->template->load('edit_profile' , $data);
	}

	public function do_upload_add(){
		try{
			$defaultRole ='';
			$dataRole = $defaultRole ;
			if(empty($datarole)){
				$defaultRole = 'user';
			}
			$data = array(
				"username" => $this->input->post('usernameInput'),
				"name" => $this->input->post('nameInput'),
				"email" => $this->input->post('emailInput'),
				"password" => md5($this->input->post('passwordInput')),
				"phone_number" => $this->input->post('phoneInput'),
				"role" => $defaultRole
			);
				
				$this->users_model->save($data);
		  }catch(Exception $e){
			echo 'Message' .$e->getMessage();
		}
	}
	/**
	 * TODO: Kasih blok try catch
	 */
	public function do_upload_edit(){
		try{
			$user = $this->users_model->getdata();
			$imagepath = $user->photo ;
			$datafoto = $_FILES['upload_foto']['name'];
			if(!empty($datafoto)){
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
						$imagepath = $upload_data['file_name'];

						redirect('users/editprofile',$data);
				}
			}
			$data = array(
				"username" => $this->input->post('username'),
				"name" => $this->input->post('nama'),
				"email" => $this->input->post('email'),
				"password" => md5($this->input->post('password')),
				"address" => $this->input->post('alamat'),
				"phone_number" => $this->input->post('notelp'),
				"photo" => $imagepath,
				"role" => $this->input->post('role')
			);
				
				$this->users_model->edit($data['username'],$data);
		}catch(Exception $e){
			echo 'Message' .$e->getMessage();
		}
	}

	public function tambah(){
		if($this->input->post('submitRegister')){
			$this->do_upload_add();
			echo "<script>alert('Berhasil mendaftar');window.location = '".base_url('users/index')."';</script>";
			// redirect('users/index');
		}
	}

  public function ubah(){
    if($this->input->post('submit')){
        $this->do_upload_edit();
        redirect('users/editprofile');
      }else {
		header("Access-Control-Allow-Origin: *");
		$data['tampil'] = $this->users_model->getdata();
		$this->template->set('title', 'User Profile');
		$this->template->load('edit_profile' , $data);  
	  }
  }
}
