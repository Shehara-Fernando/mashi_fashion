<?php


class UsersModel extends CI_Model {

	public function login($logindata){
		$condition = array(
			"user_email" => $logindata['email'],
			"user_pwd" => $logindata['password']
		);
		$query = $this->db->select("*")->from('login')->where($condition);
		$result = $query->get()->result_array();

		if (count($result) ==1 ){
			return true;

		}else{
			return false;
		}
	}


}

