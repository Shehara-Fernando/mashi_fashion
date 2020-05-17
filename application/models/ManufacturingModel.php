<?php


class ManufacturingModel extends CI_Model
{
	public  function create($mo){
		$this->db->insert('manufacturing',$mo);
		$result = $this->db->affected_rows();
		if($result == 1) {
			return true;
		}
		else {
			return false;
		}

	}
	public function select()
	{
		$this->db->from('manufacturing');
		$this->db->order_by('id', 'asd');
		$query = $this->db->get();
		return $query->result();
	}
}
