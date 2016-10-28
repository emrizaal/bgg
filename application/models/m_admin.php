<?php

class m_admin extends CI_Model {

	function m_admin(){
		parent::__construct();
	}

	function getAccolades(){
		$query = $this->db->query("SELECT * from accolades")->row_array();
		return $query;
	}

	function saveAccolades($p){
		$query = $this->db->query("UPDATE accolades set content = '$p[content]'");
		return $query;
	}
}

?>