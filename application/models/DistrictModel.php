<?php


class DistrictModel extends CI_Model {

	// to get the data from db
	public function select()
	{
		$this->db->from('districts');
		$this->db->order_by('id', 'asd');
		$query = $this->db->get();
		return $query->result();
	}

}
