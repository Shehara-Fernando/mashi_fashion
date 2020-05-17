<?php


class RolesModel extends CI_Model {
	// to get the role data from db
	public function select()
	{
		$this->db->from('roles');
		$this->db->order_by('name', 'asd');
		$query = $this->db->get();
		return $query->result();
	}
}

