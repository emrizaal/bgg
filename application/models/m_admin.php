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

	function getAllPublicNews(){
		$query = $this->db->query("SELECT * from berita where is_member = 0")->result_array();
		return $query;
	}

	function getAllMemberNews(){
		$query = $this->db->query("SELECT * from berita where is_member = 1")->result_array();
		return $query;
	}

	function getNewsById($id){
		$query = $this->db->query("SELECT * from berita where id_berita = '$id'")->row_array();
		return $query;
	}

	function saveNews($p){
		$query = $this->db->query("INSERT INTO berita(
			judul_berita,isi_berita,tanggal_berita,active,image,is_member
			)values('$p[title]','$p[content]',NOW(),'$p[active]','$p[img]','$p[member]')");
		return $query;
	}

	function updateNews($p){
		if(!empty($p['img'])){
			$query = $this->db->query("UPDATE berita set
				judul_berita = '$p[title]',
				isi_berita = '$p[content]',
				active = '$p[active]',
				image = '$p[img]',
				is_member = '$p[member]' 
				where id_berita = '$p[id]'
				");	
		}else{
			$query = $this->db->query("UPDATE berita set
				judul_berita = '$p[title]',
				isi_berita = '$p[content]',
				active = '$p[active]',
				is_member = '$p[member]' 
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

	function deleteRates($id){
		$query = $this->db->query("DELETE from rates where id_rates = '$id'");
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

	function getResortFacilities(){
		$query = $this->db->query("SELECT * from resort_facilities")->result_array();	
		return $query;
	}

	function saveResortFacilities($p){
		$query = $this->db->query("INSERT INTO resort_facilities(name,content) values ('$p[name]','$p[content]')");
		return $query;
	}

	function getResortFacilitiesById($id){
		$query = $this->db->query("SELECT * from resort_facilities where id_resort_facilities = '$id'")->row_array();
		return $query;
	}

	function updateResortFacilities($p){
		$query = $this->db->query("UPDATE resort_facilities set
			name = '$p[name]',
			content = '$p[content]'
			where id_resort_facilities = '$p[id]'
			");
		return $query;
	}

	function deleteResortFacilities($id){
		$query = $this->db->query("DELETE from resort_facilities where id_resort_facilities = '$id'");
		return $query;
	}

	function getSpa(){
		$query = $this->db->query("SELECT * from spa")->row_array();
		return $query;
	}

	function saveSpa($p){
		$query = $this->db->query("UPDATE spa set content = '$p[content]'");
		return $query;
	}

	function getAllPromotions(){
		$query = $this->db->query("SELECT * from promotion")->result_array();
		return $query;
	}

	function getAllMemberPromotions(){
		$query = $this->db->query("SELECT * from promotion where is_member = 1")->result_array();
		return $query;
	}

	function getAllPublicPromotions(){
		$query = $this->db->query("SELECT * from promotion where is_member = 0")->result_array();
		return $query;
	}

	function savePromotions($p){
		$query = $this->db->query("INSERT into promotion(name,content,is_member) values('$p[name]','$p[content]','$p[member]')");
		return $query;
	}

	function getPromotionsById($id){
		$query = $this->db->query("SELECT * from promotion where id_promotion = '$id'")->row_array();
		return $query;
	}

	function updatePromotions($p){
		$query = $this->db->query("UPDATE promotion set 
			name = '$p[name]',
			content = '$p[content]',
			is_member = '$p[member]' 
			where id_promotion = '$p[id]'
			");
		return $query;
	}

	function deletePromotions($id){
		$query = $this->db->query("DELETE from promotion where id_promotion = '$id'");
		return $query;
	}

	function getAllEvent(){
		$query = $this->db->query("SELECT * from event")->result_array();
		return $query;
	}

	function getAllMemberEvent(){
		$query = $this->db->query("SELECT * from event where is_member = 1")->result_array();
		return $query;
	}

	function getAllPublicEvent(){
		$query = $this->db->query("SELECT * from event where is_member = 0")->result_array();
		return $query;
	}

	function saveEvent($p){
		$query = $this->db->query("INSERT into event(name,content,start_date,end_date,image,status,is_member) values('$p[name]','$p[content]','$p[start_date]','$p[end_date]','$p[img]','$p[active]','$p[member]')");
		return $query;
	}

	function getEventById($id){
		$query = $this->db->query("SELECT * from event where id_event = '$id'")->row_array();
		return $query;
	}

	function updateEvent($p){
		if(!empty($p['img'])){
			$query = $this->db->query("UPDATE event set
				name = '$p[name]',
				content = '$p[content]',
				start_date = '$p[start_date]',
				end_date = '$p[end_date]',
				image = '$p[img]',
				status = '$p[active]',
				is_member = '$p[member]'
				where id_event = '$p[id]'
				");
		}else{
			$query = $this->db->query("UPDATE event set
				name = '$p[name]',
				content = '$p[content]',
				start_date = '$p[start_date]',
				end_date = '$p[end_date]',
				status = '$p[active]',
				is_member = '$p[member]'
				where id_event = '$p[id]'
				");
		}
		return $query;
	}

	function deleteEvent($id){
		$query = $this->db->query("DELETE from event where id_event = '$id'");
		return $query;
	}

	function getAllMember(){
		$query = $this->db->query("SELECT user.*,member_type.name as type_name from user,member_type where level = 1 AND user.member_type = member_type.id_member_type")->result_array();
		return $query;
	}

	function getMemberById($id){
		$query = $this->db->query("SELECT * from user where id_user = '$id'")->row_array();
		return $query;
	}

	function saveMember($p){
		$query = $this->db->query("INSERT into user(
			username,password,level,nama,tanggal_berlaku,tanggal_jatuh_tempo,no_membership,email,lunas,member_type)
			values('$p[username]',MD5('$p[password]'),'1','$p[nama]','$p[tanggal_berlaku]','$p[tanggal_jatuh_tempo]','$p[no_membership]','$p[email]','$p[lunas]','$p[type]')
			");
		return $query;
	}

	function updateMember($p){
		$query = $this->db->query("UPDATE user set 
			username = '$p[no_membership]',
			nama = '$p[nama]',
			tanggal_berlaku = '$p[tanggal_berlaku]',
			tanggal_jatuh_tempo = '$p[tanggal_jatuh_tempo]',
			email = '$p[email]',
			no_membership = '$p[no_membership]',
			lunas = '$p[lunas]', 
			member_type = '$p[type]' 
			where id_user = '$p[id]'
			");
		return $query;
	}

	function deleteMember($id){
		$query = $this->db->query("DELETE from user where id_user = '$id'");
		return $query;
	}

	function getGeneral(){
		$query = $this->db->query("SELECT * from membership")->row_array();
		return $query;
	}

	function saveGeneral($p){
		$query = $this->db->query("UPDATE membership set content = '$p[content]'");
		return $query;
	}

	function getAnnouncement(){
		$query = $this->db->query("SELECT * from announcement")->row_array();
		return $query;
	}

	function saveAnnouncement($p){
		$query = $this->db->query("UPDATE announcement set content = '$p[content]'");
		return $query;
	}

	function getAllType(){
		$query = $this->db->query("SELECT * from member_type")->result_array();
		return $query;
	}

	function getTypeById($id){
		$query = $this->db->query("SELECT * from member_type where id_member_type = '$id'")->row_array();
		return $query;
	}

	function saveType($p){
		$query = $this->db->query("INSERT into member_type(name,fee) values('$p[name]','$p[fee]')");
		return $query;
	}

	function updateType($p){
		$query = $this->db->query("UPDATE member_type set 
			name = '$p[name]', fee = '$p[fee]' where id_member_type = '$p[id]'
			");
		return $query;
	}

	function deleteType($id){
		$query = $this->db->query("DELETE from member_type where id_member_type = '$id'");
		return $query;
	}

	function getAllCourse(){
		$query = $this->db->query("SELECT * from course")->result_array();
		return $query;
	}

	function getCourseById($id){
		$query = $this->db->query("SELECT * from course where id_course = '$id'")->row_array();
		return $query;
	}

	function saveCourse($p){
		$query = $this->db->query("INSERT into course(
			name,description,black,white,blue,red,par,image
			) values(
			'$p[name]',
			'$p[description]',
			'$p[black]',
			'$p[white]',
			'$p[blue]',
			'$p[red]',
			'$p[par]',
			'$p[img]'
			)");
		return $query;
	}

	function updateCourse($p){
		if(!empty($p['img'])){
			$query = $this->db->query("UPDATE course set 
				name = '$p[name]',
				description = '$p[description]',
				black = '$p[black]',
				white = '$p[white]',
				blue = '$p[blue]',
				red = '$p[red]',
				par = '$p[par]',
				image = '$p[img]' 
				where id_course = '$p[id]'
				");
		}else{
			$query = $this->db->query("UPDATE course set 
				name = '$p[name]',
				description = '$p[description]',
				black = '$p[black]',
				white = '$p[white]',
				blue = '$p[blue]',
				red = '$p[red]',
				par = '$p[par]' 
				where id_course = '$p[id]'
				");
		}
		return $query;
	}

	function deleteCourse($id){
		$query = $this->db->query("DELETE from course where id_course = '$id'");
		return $query;
	}

}

?>