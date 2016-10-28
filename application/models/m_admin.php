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

	function getCsr(){
		$query = $this->db->query("SELECT * from csr")->row_array();
		return $query;
	}

	function saveCsr($p){
		$query = $this->db->query("UPDATE csr set content = '$p[content]'");
		return $query;
	}

	function getAllFacilities(){
		$query = $this->db->query("SELECT * from facilities")->result_array();
		return $query;
	}

	function getFacilitiesById($id){
		$query = $this->db->query("SELECT * from facilities where id_facilities = '$id'")->row_array();
		return $query;
	}

	function saveFacilities($p){
		$query = $this->db->query("INSERT Into facilities(name,content) values('$p[name]','$p[content]')");
		return $query;
	}

	function updateFacilities($p){
		$query = $this->db->query("UPDATE facilities set
			name = '$p[name]',
			content = '$p[content]'
			where id_facilities = '$p[id]'
			");
		return $query;
	}

	function deleteFacilities($id){
		$query = $this->db->query("DELETE from facilities where id_facilities = '$id'");
		return $query;
	}

	function getAllNews(){
		$query = $this->db->query("SELECT * from berita")->result_array();
		return $query;
	}
}

?>