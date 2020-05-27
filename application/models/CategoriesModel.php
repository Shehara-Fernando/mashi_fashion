<?php


class CategoriesModel extends  CI_Model{
// function to get the data
	public function select()
	{
		$this->db->from('categories');
		$this->db->order_by('name', 'asd');
		$query = $this->db->get();
		return $query->result();
	}
	// to insert data into the db
	public  function create($category) {


		$this->db->insert('categories',$category);
		$result = $this->db->affected_rows();
		if($result == 1) {
			return true;
		}
		else {
			return false;
		}

	}
	// function to get the categories related to sell of purchase
	public function get_categories($is_sell)
	{
		$this->db->from('categories');
		$this->db->where('is_sell',$is_sell);
		$this->db->order_by('name', 'asd');
		$query = $this->db->get();
		return $query->result();
	}




}
