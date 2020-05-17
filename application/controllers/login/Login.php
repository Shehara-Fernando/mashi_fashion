<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		//loading the models

		parent::__construct();
		$this->load->model('UsersModel');
	}

	public function index()	{
		//loading the view page
		$this->load->view('login/login');
	}

	public function login_user(){
		//passing the data in the form to the model
		$login_data = array(
			'email'   => $this->input->post('user_email'),
			'password' => sha1($this->input->post('user_password'))
		);
		//getting the result form the model

		$result = $this->UsersModel->login($login_data);
        // if the success keyword is true create a session by creating an array to get data and redirect dashboard
		if($result['success'] == true) {
			$this->session->set_userdata('name', $result['data'][0]['first_name']." ".$result['data'][1]['last_name']);
			redirect('dashboard');
		}
		else {
			redirect('login/login');
		}
	}
	public function logout(){
		redirect("login/Login");
	}

}
