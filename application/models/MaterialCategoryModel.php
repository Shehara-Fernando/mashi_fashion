<?php


class MaterialCategoryModel extends CI_Model
{
	//function to get the data of all categpories
	public function select()
	{

		$this->db->from('material_categorys');
		$this->db->order_by('name', 'asd');
		$query = $this->db->get();
		return $query->result();
	}
}
