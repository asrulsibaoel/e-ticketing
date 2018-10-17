<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	private $urlHelper;

	public function __construct() {
		parent::__construct();
		$this->urlHelper = $this->load->helper("url");
	}

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function login()
	{
		// 
		$this->load->view("auth/login");
	}
}
