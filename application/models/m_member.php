<?php

class m_member extends CI_Model {

	function m_member(){
		parent::__construct();
	}

	function auth($p){
		$query = $this->db->query("SELECT * from member where username='$p[username]' AND password = MD5('$p[password]')")->row_array();
		return $query;
	}
}

?>