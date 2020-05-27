<?php


class TypesModel extends CI_Model{
	// function to get data from db
	public function select()
	{
		$this->db->select('types.*,categories.name as categories');
		$this->db->from('types');
		$this->db->join('categories','categories.id = types.category_id');
		$this->db->order_by('types.name', 'asd');
		$query = $this->db->get();
		return $query->result();
	}

	// to insert data into the db
	public  function create($types) {


		$this->db->insert('types',$types);
		$result = $this->db->affected_rows();
		if($result == 1) {
			return true;
		}
		else {
			return false;
		}

	}

}
