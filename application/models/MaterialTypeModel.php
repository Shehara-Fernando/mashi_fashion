<?php


class MaterialTypeModel extends CI_Model
{
	public function select()
	{
		$this->db->from('material_types');
		$this->db->order_by('name', 'asd');
		$query = $this->db->get();
		return $query->result();
	}

}
