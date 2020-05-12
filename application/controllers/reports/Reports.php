<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reports extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('reports/reports');
		$this->load->view('footer');
	}
}
