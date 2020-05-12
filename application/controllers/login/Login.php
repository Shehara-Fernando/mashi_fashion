<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('UsersModel');
	}

	public function index()
	{
		$this->load->view('login/login');
	}

	public function login_user(){
		$logindata = array(
			"email" => $this->input->post('user_email'),
			"password" => sha1($this->input->post('user_password'))
		);

		$result = $this->UsersModel->login($logindata);
		if ($result == true ){
			redirect("dashboard");
		}else{

			redirect("login/login");
		}

	}

}
