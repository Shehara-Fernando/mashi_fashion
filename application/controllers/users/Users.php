<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('users/user');
		$this->load->view('footer');
	}

	public function add_users(){

		$this->form_validation->set_rules('text_field', 'Text Field One', 'required|trim');


		$userdata = array(
           "user_fname" 	=> $this->input->post('user_fname'),
		   "user_lname" 	=> $this->input->post('user_lname'),
			"user_email" 	=> $this->input->post('user_email'),
			"user_tel" 		=> $this->input->post('user_tel'),
			"user_nic" 		=> $this->input->post('user_nic'),
			"role_id" => $this->input->post('role_id'),
			"user_image" => $this->input->post('user_image') ,
			"user_gender" => $this->input->post('user_gender')



		);
		var_dump($userdata);

	}

}

