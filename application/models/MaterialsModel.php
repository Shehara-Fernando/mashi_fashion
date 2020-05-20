<?php

<<<<<<< HEAD
// function to insert data into the db
class MaterialsModel extends CI_Model
{
	public function create($materialdata){
		$this->db->insert('materials',$materialdata);
=======

class MaterialsModel extends CI_Model
{
	public function create($materialdata){
		$this->db->insert('pro_material',$materialdata);
>>>>>>> origin/development
		$result = $this->db->affected_rows();
		if($result == 1) {
			return true;
		}
		else {
			return false;
		}

	}
<<<<<<< HEAD

	//function to get the data from db to the page
	public function select()
	{
		$this->db->from('materials');
=======
	public function select()
	{
		$this->db->from('pro_material');
>>>>>>> origin/development
		$this->db->order_by('id', 'asd');
		$query = $this->db->get();
		return $query->result();
	}

}
