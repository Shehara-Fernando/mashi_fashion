<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Unitsmeasure extends CI_Controller {
	public function __construct() {
		// to load the models inorder to get the data

		parent::__construct();
		$this->load->model('Unitsmeasuremodel');

	}

	// to load the view pages
	public function index()
	{
		// array to call the functions
		$data = array(
			"units"     =>$this->Unitsmeasuremodel->select(),

		);

		$this->load->view('header');
		$this->load->view('inventory/unitsofmeasure',$data);
		$this->load->view('footer');
	}
	public  function add_units()
	{
		$units = array(
			"name"    => $this->input->post('name'),
			"unit"  =>$this->input->post('unit'),


		);

		// to get the result
		$result = $this->Unitsmeasuremodel->create($units);
		if ($result == true){
			redirect('inventory/Unitsmeasure');

		}

	}




}
