<?php


class CategoriesModel extends  CI_Model{
	public function select()
	{
		$this->db->from('categories');
		$this->db->order_by('name', 'asd');
		$query = $this->db->get();
		return $query->result();
	}
}
