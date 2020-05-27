<?php


class Unitsmeasuremodel extends CI_Model
{
	// function to get the data
	public function select()
	{
		$this->db->from('unit_measure');
		$this->db->order_by('name', 'asd');
		$query = $this->db->get();
		return $query->result();
	}
	// to insert data into the db
	public  function create($units) {


		$this->db->insert('unit_measure',$units);
		$result = $this->db->affected_rows();
		if($result == 1) {
			return true;
		}
		else {
			return false;
		}

	}

}
