<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notifications extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('notifications/notification');
		$this->load->view('footer');
	}
}
