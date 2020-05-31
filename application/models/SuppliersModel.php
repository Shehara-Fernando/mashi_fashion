<?php


class SuppliersModel extends CI_Model {

// the function to insert data into the db
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
	public function get_province($province_id)
	{

		$this->db->from('Districts');
		$this->db->where('province_id',$province_id);
		$this->db->order_by('name_en', 'asd');
		$query = $this->db->get();
		return $query->result();
	}


// to get the names in the db table
	public function select() {


		$this->db->from('suppliers');
		$this->db->order_by('name', 'asd');
		$query = $this->db->get();
		return $query->result();
	}

}
