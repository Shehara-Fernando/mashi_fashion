<?php


class MaterialCategoryModel extends CI_Model
{
	public function select()
	{
		$this->db->from('material_category');
		$this->db->order_by('mcat_name', 'asd');
		$query = $this->db->get();
		return $query->result();
	}
}
