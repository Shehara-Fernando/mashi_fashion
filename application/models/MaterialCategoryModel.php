<?php


class MaterialCategoryModel extends CI_Model
{
	public function select()
	{
<<<<<<< HEAD
		$this->db->from('material_categorys');
		$this->db->order_by('name', 'asd');
=======
		$this->db->from('material_category');
		$this->db->order_by('mcat_name', 'asd');
>>>>>>> origin/development
		$query = $this->db->get();
		return $query->result();
	}
}
