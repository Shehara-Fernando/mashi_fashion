<?php


class ItemsModel extends CI_Model {

	// to get the data from db
	public function select() {

        $this->db->select('products.*,categories.name as categories,types.name as types,unit_measure.name as unit_measure');
		$this->db->from('products');
		$this->db->join('categories','categories.id = products.category_id');
		$this->db->join('types','types.id = products.type_id');
		$this->db->join('unit_measure','unit_measure.id = products.units_id');
		$this->db->order_by('products.name', 'asd');
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


		$this->db->select('products.*, categories.name as categories');
		$this->db->from('products');
		$this->db->join('categories', 'categories.id = products.category_id');
		$this->db->order_by('products.name','asd');
		$query= $this->db->get();
		return $query->result();


	}

	public function generate_code($category_id){

		$this->db->select('products.*, categories.code as categories');
		$this->db->from('products');
		$this->db->join('categories','categories.id = products.category_id' );
		$this->db->where('category_id', $category_id);
		$this->db->order_by('products.id','desc');
		$this->db->limit(1);
		$query = $this->db->get();
		return $query->result();
	}



}

