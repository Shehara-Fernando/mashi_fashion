<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Suppliers extends CI_Controller {


	// to load the model in to the controller
	public function __construct() {

		parent::__construct();
		$this->load->model('SuppliersModel');
		$this->load->model('DistrictModel');
		$this->load->model('ProvinceModel');
	}


   // to load the view pages
	public function index()	{
		// to call the function in the model
		$data = array(
		  "suppliers" => $this->SuppliersModel->select(),
		   "districts"=> $this->DistrictModel->select(),
		   "provinces"=> $this->ProvinceModel->select(),
			//"cities"  => $this->CityModel->select(),

		);
		// to load the view page

		$this->load->view('header');
		$this->load->view('suppliers/suppliers',$data);
		$this->load->view('footer');
	}

	public  function  add_supplier(){
		//$this->form_validation->set_rules('sup_name', 'Supplier Name', 'required|trim');
		//$this->form_validation->set_rules('sup_email', 'Supplier Email', 'required|valid_email');
		//$this->form_validation->set_rules('sup_tel', 'Telephone Number', 'required|max_length[10]');
		//$this->form_validation->set_rules('sup_address', 'Address', 'required|trim');
		//$this->form_validation->set_rules('pro_id', 'Province', 'required');
		//$this->form_validation->set_rules('city_id', 'City', 'required');
		//$this->form_validation->set_rules('country_id', 'Country', 'required');


		// to post the form data to the db
		$suppliersdata = array(

		          "name" => $this->input->post('sup_name'),
			      "email"=> $this->input->post('sup_email'),
			  "telephone"=> $this->input->post('sup_telephone') ,
			// "address1"  => $this->input->post('sup_address1'),
			//"address2"   => $this->input->post('sup_address2'),
			"province_id"=> $this->input->post('province_id'),
			"district_id"=> $this->input->post('district_id'),
         	"city_id"    => $this->input->post('city_id'),

		);

		// to get the result
		$result = $this->SuppliersModel->create($suppliersdata);
		if ($result == true){
			redirect('suppliers/Suppliers');

		}


	}
}
