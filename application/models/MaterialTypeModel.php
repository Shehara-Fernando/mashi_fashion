<?php


class MaterialTypeModel extends CI_Model
{
	public function select()
	{
		$this->db->from('material_type');
		$this->db->order_by('mtype_name', 'asd');
		$query = $this->db->get();
		return $query->result();
	}

}
