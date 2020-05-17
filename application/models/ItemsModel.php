<?php


class ItemsModel extends CI_Model {

	// to get the data from db
	public function select() {


		$this->db->from('products');
		$this->db->order_by('id', 'asd');
		$query = $this->db->get();
		return $query->result();
	}


	// to insert data into the db
	public  function create($items) {


		$this->db->insert('products',$items);
		$result = $this->db->affected_rows();
		if($result == 1) {
			return true;
		}
		else {
			return false;
		}

	}



}

