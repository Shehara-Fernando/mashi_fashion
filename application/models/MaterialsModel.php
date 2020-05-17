<?php

// function to insert data into the db
class MaterialsModel extends CI_Model
{
	public function create($materialdata){
		$this->db->insert('materials',$materialdata);
		$result = $this->db->affected_rows();
		if($result == 1) {
			return true;
		}
		else {
			return false;
		}

	}

	//function to get the data from db to the page
	public function select()
	{
		$this->db->from('materials');
		$this->db->order_by('id', 'asd');
		$query = $this->db->get();
		return $query->result();
	}

}
