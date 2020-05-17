<?php


class CityModel extends CI_Model {

	// to get the data
	public function select()
	{
		$this->db->from('cities');
		$this->db->order_by('id', 'asd');
		$query = $this->db->get();
		return $query->result();
	}

}
