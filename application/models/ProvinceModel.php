<?php


class ProvinceModel extends CI_Model {

	// to get the data from db
	public function select()
	{
		$this->db->from('provinces');
		$this->db->order_by('id', 'asd');
		$query = $this->db->get();
		return $query->result();
	}

}
