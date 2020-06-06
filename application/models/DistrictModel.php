<?php


class DistrictModel extends CI_Model {

	// to get the data from db
	public function select()
	{
		$this->db->from('districts');
		$this->db->order_by('id', 'asd');
		$query = $this->db->get();
		return $query->result();
	}
	public function get_district($city_id)
	{

		$this->db->select('cities.*, districts.name_en as districts');
		$this->db->from('cities');
		$this->db->join('districts','districts.id = cities.district_id' );
		$this->db->where('cities.id ', $city_id);
		$this->db->order_by('cities.id', 'asd');
		$query = $this->db->get();
		return $query->result();

	}

}
