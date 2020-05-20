<?php


class MaterialTypeModel extends CI_Model
{
	public function select()
	{
<<<<<<< HEAD
		$this->db->from('material_types');
		$this->db->order_by('name', 'asd');
=======
		$this->db->from('material_type');
		$this->db->order_by('mtype_name', 'asd');
>>>>>>> origin/development
		$query = $this->db->get();
		return $query->result();
	}

}
