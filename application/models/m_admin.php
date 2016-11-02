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

	function getNewsById($id){
		$query = $this->db->query("SELECT * from berita where id_berita = '$id'")->row_array();
		return $query;
	}

	function saveNews($p){
		$query = $this->db->query("INSERT INTO berita(
			judul_berita,isi_berita,tanggal_berita,active,image
			)values('$p[title]','$p[content]',NOW(),'$p[active]','$p[img]')");
		return $query;
	}

	function updateNews($p){
		if(!empty($p['img'])){
			$query = $this->db->query("UPDATE berita set
			judul_berita = '$p[title]',
			isi_berita = '$p[content]',
			active = '$p[active]',
			image = '$p[img]' 
			where id_berita = '$p[id]'
			");	
		}else{
			$query = $this->db->query("UPDATE berita set
			judul_berita = '$p[title]',
			isi_berita = '$p[content]',
			active = '$p[active]'
			where id_berita = '$p[id]'
			");	
		}
		return $query;
	}

	function deleteNews($id){
		$query = $this->db->query("DELETE from berita where id_berita = '$id'");
		return $query;
	}

	function getHistory(){
		$query = $this->db->query("SELECT * from history")->row_array();
		return $query;
	}

	function saveHistory($p){
		$query = $this->db->query("UPDATE history set content = '$p[content]'");
		return $query;
	}

	function getAllSlider(){
		$query = $this->db->query("SELECT * from slider")->result_array();
		return $query;
	}

	function saveSlider($p){
		$query = $this->db->query("INSERT into slider(image,aktif) values('$p[img]','$p[active]')");
		return $query;
	}

	function getSliderById($id){
		$query = $this->db->query("SELECT * from slider where id_slider = '$id'")->row_array();
		return $query;
	}

	function deleteSlider($p){
		$query = $this->db->query("DELETE from slider where id_slider = '$p[id]'");
		return $query;
	}

	function getAllRates(){
		$query = $this->db->query("SELECT * from rates")->result_array();
		return $query;
	}

	function saveRates($p){
		$query = $this->db->query("INSERT into rates(name,price) values('$p[name]','$p[price]')");
		return $query;
	}

	function getRatesById($id){
		$query = $this->db->query("SELECT * from rates where id_rates = '$id'")->row_array();
		return $query;
	}

	function updateRates($p){
		$query = $this->db->query("UPDATE rates set
			name = '$p[name]',
			price = '$p[price]' where id_rates = '$p[id]'
		");
		return $query;
	}

	function getRooms(){
		$query = $this->db->query("SELECT * from rooms")->row_array();
		return $query;
	}

	function saveRooms($p){
		$query = $this->db->query("UPDATE rooms set content = '$p[content]'");
		return $query;
	}
}

?>