<?php


class ProvinceModel extends CI_Model {

	// to get the data from db
	public function select()
	{
		$this->db->from('provinces');
		$this->db->order_by('id', 'asd');
		$query = $this->db->get();
		return $query->result();
	}


	public function get_province($province_id)
	{

		$this->db->select('districts.*, provinces.name_en as provinces');
		$this->db->from('districts');
		$this->db->join('provinces','provinces.id = districts.province_id' );
		$this->db->where('districts.province_id ', $province_id);
		$this->db->order_by('districts.id', 'asd');
		$query = $this->db->get();
		return $query->result();

	}


}

