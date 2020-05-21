<?php


class CustomersModel extends CI_Model {
	// the function to insert data into the db
	public  function create($customers){

		$this->db->insert('customer',$customers);
		$result = $this->db->affected_rows();
		if($result == 1) {
			return true;
		}
		else {
			return false;
		}

	}


// to get the names in the db table
	public function select() {


		$this->db->from('customer');
		$this->db->order_by('id', 'asd');
		$query = $this->db->get();
		return $query->result();
	}



}
