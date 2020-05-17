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

	// to get the categories data from the database

	public function get_product_by_category(){


		$this->db->select('products.*, categorys.name as categorys');
		$this->db->from('products');
		$this->db->join('categorys', 'categorys.id = products.category_id');
		$this->db->order_by('products.name','asd');
		$query= $this->db->get();
		return $query->result();


	}



}

