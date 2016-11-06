<?php

class m_user extends CI_Model {

	function m_user(){
		parent::__construct();
	}

	function auth($p){
		$query = $this->db->query("SELECT * from user where username='$p[username]' AND password = MD5('$p[password]')")->row_array();
		return $query;
	}
}

?>