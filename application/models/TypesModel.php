<?php


class TypesModel extends CI_Model{
	public function select()
	{
		$this->db->from('types');
		$this->db->order_by('name', 'asd');
		$query = $this->db->get();
		return $query->result();
	}

}
