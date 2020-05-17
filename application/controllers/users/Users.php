<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
	public function __construct() {
		// loading models inorder to ge the data from the model
		parent::__construct();
		$this->load->model('UsersModel');
		$this->load->model('RolesModel');
	}

	public function index()	{
		// call the function in the model inorder to get the data

		$data = array(
			'users' => $this->UsersModel->select(),
			'roles' => $this->RolesModel->select(),
		);
		// loading the view pages
		$this->load->view('header');
		$this->load->view('users/user', $data);
		$this->load->view('footer');
	}

	public function add_users() {

		// define upload image configurations
		$config['upload_path'] = 'assets/images/user_images/';
		$config['allowed_types'] = 'jpg|png';
		$config['max_size'] = 2000;
		$config['max_width'] = 1500;
		$config['max_height'] = 1500;

		// load upload library
		$this->load->library('upload', $config);

		// get upload image attributes
		$this->upload->do_upload('user_image');
		$image_data = $this->upload->data();

		// assigning the names of the form to the db tables

		$user_data = array(
           "first_name" 	=> $this->input->post('user_fname'),
		   "last_name" 	    => $this->input->post('user_lname'),
		   "email" 	        => $this->input->post('user_email'),
		  "telephone_number"=> $this->input->post('user_tel'),
		  "nic" 		    => $this->input->post('user_nic'),
		  "role_id"         => $this->input->post('role_id'),
		  "image"           => $image_data['file_name'],
		  "gender"          => $this->input->post('user_gender'),
		"create_date"	    => date("Y-m-d"),
		);
        // get the data  from the model
		$result = $this->UsersModel->create($user_data);

        //Redirect to the user page
		if($result == true) {
			redirect('users/users');
		}



	}

}

