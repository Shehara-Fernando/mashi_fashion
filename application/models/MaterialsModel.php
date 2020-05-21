<?php

class MaterialsModel extends CI_Model {

	// the function to add data into the db
	public function create($materialdata){
		$this->db->insert('pro_material',$materialdata);
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
		$this->db->from('pro_material');

		$this->db->order_by('id', 'asd');
		$query = $this->db->get();
		return $query->result();
	}




}



