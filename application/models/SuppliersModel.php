<?php

// the function to insert data into the db
class SuppliersModel extends CI_Model {

	public  function create($suppliersdata){

		$this->db->insert('suppliers',$suppliersdata);
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


		$this->db->from('suppliers');
		$this->db->order_by('name', 'asd');
		$query = $this->db->get();
		return $query->result();
	}

}
