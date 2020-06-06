<?php


class CityModel extends CI_Model {

	// to get the data
	public function select()
	{
		$this->db->from('cities');
		$this->db->order_by('name_en', 'asd');
		$query = $this->db->get();
		return $query->result();
	}
	public function generate_postcode($city_id){

		$this->db->select('*');
		$this->db->from('cities');
		$this->db->where('id', $city_id);
		$this->db->order_by('id','desc');
		$query = $this->db->get();
		return $query->result();
	}

}
