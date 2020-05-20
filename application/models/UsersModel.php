<?php


class UsersModel extends CI_Model {
 //login data
	public function login($logindata){
		$condition = array(
			"email" => $logindata['email'],
			"password" => $logindata['password']
		);
		//to check the login details
		$query = $this->db->select("*")->from('users')->where($condition);
		$result = $query->get()->result_array();

		if (count($result) ==1 ){
			return array(
				'success' => true,
				'data' => $result
			);

		}else{
			return array(
				'success' => false,
				'data' => null
			);
		}
	}
 // to check whether the user email and nic is existing
	public function create($userdata) {
		$query = $this->db->select('*')->from('users')->where('user_nic',$userdata['user_nic']);
		$nic = $query->get()->result_array();

		$query = $this->db->select('*')->from('users')->where('user_email',$userdata['user_email']);
		$email = $query->get()->result_array();

		if (count($nic) >= 1 || count($email) >= 1) {
			return false;
		}
		else {
			$this->db->insert('users', $userdata);
			$result = $this->db->affected_rows();
			if($result == 1) {
				return true;
			}
			else {
				return false;
			}
		}

	}
 // to ge the role names related to the role id from roles table
	public function select(){
<<<<<<< HEAD

=======
		// to get the roles name from roles table
>>>>>>> origin/development

		$this->db->select('users.*, roles.name as roles');
		$this->db->from('users');
		$this->db->join('roles', 'roles.id = users.roles_id');
		$this->db->order_by('users.first_name','asd');
		$query= $this->db->get();
		return $query->result();


	}


}

