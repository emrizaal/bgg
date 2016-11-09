<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function admin(){
		parent::__construct();

		$this->load->model("m_admin");
	}

	public function index()
	{
		$this->load->view('admin/dashboard');
	}

	public function accolades(){
		$data['acc'] = $this->m_admin->getAccolades();
		$this->load->view('admin/accolades',$data);
	}

	public function saveAccolades(){
		$p=$this->input->post();
		$this->m_admin->saveAccolades($p);
		redirect('admin/accolades');
	}

	public function csr(){
		$data['csr'] = $this->m_admin->getCsr();
		$this->load->view('admin/csr',$data);
	}

	public function saveCsr(){
		$p=$this->input->post();
		$this->m_admin->saveCsr($p);
		redirect('admin/csr');
	}

	public function facilities(){
		$data['fac']=$this->m_admin->getAllFacilities();
		$this->load->view('admin/facilities',$data);
	}

	public function addFacilities(){
		$this->load->view('admin/add_facilities');
	}

	public function saveFacilities(){
		$p=$this->input->post();
		$this->m_admin->saveFacilities($p);
		redirect('admin/facilities');
	}

	public function detailFacilities($id){
		$data['data']=$this->m_admin->getFacilitiesById($id);
		$this->load->view('admin/detail_facilities',$data);
	}

	public function editFacilities($id){
		$data['data']=$this->m_admin->getFacilitiesById($id);
		$this->load->view('admin/edit_facilities',$data);
	}

	public function updateFacilities(){
		$p=$this->input->post();
		$this->m_admin->updateFacilities($p);
		redirect('admin/facilities');
	}

	public function deleteFacilities($p){
		$this->m_admin->deleteFacilities($p);
		redirect('admin/facilities');
	}

	public function news(){
		$data['data']=$this->m_admin->getAllNews();
		$this->load->view('admin/news',$data);
	}

	public function addNews(){
		$this->load->view('admin/add_news');
	}

	public function saveNews(){
		$config['upload_path']   =   "admin_assets/img/";
		$config['allowed_types'] =   "gif|jpg|jpeg|png"; 
		$config['max_size']      =   "5000";
		$config['max_width']     =   "1907";
		$config['max_height']    =   "1280";
		$this->load->library('upload',$config);

		if(!$this->upload->do_upload('fupload')){
			echo $this->upload->display_errors();
		}else{
			$finfo=$this->upload->data();
		}

		$p = $this->input->post();
		$p['img'] = $finfo['file_name'];

		$res = $this->m_admin->saveNews($p);
		if($res)redirect("admin/news");
	}

	public function editNews($id){
		$data['data']=$this->m_admin->getNewsById($id);
		$this->load->view("admin/edit_news",$data);
	}

	public function updateNews(){
		$config['upload_path']   =   "admin_assets/img/";
		$config['allowed_types'] =   "gif|jpg|jpeg|png"; 
		$config['max_size']      =   "5000";
		$config['max_width']     =   "1907";
		$config['max_height']    =   "1280";
		$this->load->library('upload',$config);

		if(!$this->upload->do_upload('fupload')){
			echo $this->upload->display_errors();
		}else{
			$finfo=$this->upload->data();
		}

		$p = $this->input->post();
		$p['img'] = $finfo['file_name'];

		$res = $this->m_admin->updateNews($p);
		if($res)redirect("admin/news");
	}

	public function detailNews($id){
		$data['data']=$this->m_admin->getNewsById($id);
		$this->load->view('admin/detail_news',$data);
	}

	public function deleteNews($id){
		$data=$this->m_admin->getNewsById($id);
		$this->m_admin->deleteNews($id);
		unlink("admin_assets/img/".$data['image']);
		redirect("admin/news");
	}

	public function history(){
		$data['data']=$this->m_admin->getHistory();
		$this->load->view('admin/history',$data);
	}

	public function saveHistory(){
		$p=$this->input->post();
		$this->m_admin->saveHistory($p);
		redirect("admin/history");
	}

	public function slider(){
		$data['data']=$this->m_admin->getAllSlider();
		$this->load->view("admin/slider",$data);
	}

	public function saveSlider(){
		$config['upload_path']   =   "admin_assets/img/";
		$config['allowed_types'] =   "gif|jpg|jpeg|png"; 
		$config['max_size']      =   "5000";
		$config['max_width']     =   "1907";
		$config['max_height']    =   "1280";
		$this->load->library('upload',$config);

		if(!$this->upload->do_upload('fupload')){
			echo $this->upload->display_errors();
		}else{
			$finfo=$this->upload->data();
		}

		$p = $this->input->post();
		$p['img'] = $finfo['file_name'];

		$res = $this->m_admin->saveSlider($p);
		if($res)redirect("admin/slider");
	}

	public function deleteSlider($id){
		$data=$this->m_admin->getSliderById($id);
		$this->m_admin->deleteSlider($id);
		unlink("admin_assets/img/".$data['image']);
		redirect("admin/slider");
	}

	public function rates(){
		$data['data']=$this->m_admin->getAllRates();
		$this->load->view("admin/rates",$data);
	}

	public function addRates(){
		$this->load->view("admin/add_rates");
	}

	public function saveRates(){
		$p=$this->input->post();
		$res=$this->m_admin->saveRates($p);
		if($res)redirect("admin/rates");
	}

	public function editRates($id){
		$data['data']=$this->m_admin->getRatesById($id);
		$this->load->view("admin/edit_rates",$data);
	}

	public function updateRates(){
		$p=$this->input->post();
		$res=$this->m_admin->updateRates($p);
		if($res)redirect("admin/rates");
	}

	public function deleteRates($id){
		$res=$this->m_admin->deleteRates($id);
		if($res)redirect("admin/rates");	
	}

	public function rooms(){
		$data['data']=$this->m_admin->getRooms();
		$this->load->view("admin/rooms",$data);
	}

	public function saveRooms(){
		$p=$this->input->post();
		$res=$this->m_admin->saveRooms($p);
		if($res)redirect("admin/rooms");
	}

	public function resortFacilities(){
		$data['data']=$this->m_admin->getResortFacilities();
		$this->load->view("admin/resort_facilities",$data);
	}

	public function addResortFacilities(){
		$this->load->view("admin/add_resort_facilities");
	}

	public function saveResortFacilities(){
		$p=$this->input->post();
		$res=$this->m_admin->saveResortFacilities($p);
		if($res)redirect("admin/resortFacilities");
	}

	public function detailResortFacilities($id){
		$data['data']=$this->m_admin->getResortFacilitiesById($id);
		$this->load->view("admin/detail_resort_facilities",$data);
	}

	public function editResortFacilities($id){
		$data['data']=$this->m_admin->getResortFacilitiesById($id);
		$this->load->view("admin/edit_resort_facilities",$data);
	}

	public function updateResortFacilities(){
		$p=$this->input->post();
		$res=$this->m_admin->updateResortFacilities($p);
		if($res)redirect("admin/resortFacilities");
	}

	public function deleteResortFacilities($id){
		$res=$this->m_admin->deleteResortFacilities($id);
		if($res)redirect("admin/resortFacilities");	
	}

	public function spa(){
		$data['data']=$this->m_admin->getSpa();
		$this->load->view("admin/spa",$data);
	}

	public function saveSpa(){
		$p=$this->input->post();
		$res=$this->m_admin->saveSpa($p);
		if($res)redirect("admin/spa");
	}

	public function promotions(){
		$data['data']=$this->m_admin->getAllPromotions();
		$this->load->view("admin/promotion",$data);
	}

	public function addPromotions(){
		$this->load->view("admin/add_promotion");
	}

	public function savePromotions(){
		$p=$this->input->post();
		$res=$this->m_admin->savePromotions($p);
		if($res)redirect("admin/promotions");
	}

	public function editPromotions($id){
		$data['data']=$this->m_admin->getPromotionsById($id);
		$this->load->view("admin/edit_promotion",$data);
	}

	public function updatePromotions(){
		$p=$this->input->post();
		$res=$this->m_admin->updatePromotions($p);
		if($res)redirect("admin/promotions");
	}

	public function deletePromotions($id){
		$res=$this->m_admin->deletePromotions($id);
		if($res)redirect("admin/promotions");
	}

	public function event(){
		$data['data']=$this->m_admin->getAllEvent();
		$this->load->view("admin/event",$data);
	}

	public function addEvent(){
		$this->load->view("admin/add_event");
	}

	public function saveEvent(){
		$config['upload_path']   =   "admin_assets/img/";
		$config['allowed_types'] =   "gif|jpg|jpeg|png"; 
		$config['max_size']      =   "5000";
		$config['max_width']     =   "1907";
		$config['max_height']    =   "1280";
		$this->load->library('upload',$config);

		if(!$this->upload->do_upload('fupload')){
			echo $this->upload->display_errors();
		}else{
			$finfo=$this->upload->data();
		}

		$p = $this->input->post();
		$p['img'] = $finfo['file_name'];

		$res = $this->m_admin->saveEvent($p);
		if($res)redirect("admin/event");
	}

	public function detailEvent($id){
		$data['data']=$this->m_admin->getEventById($id);
		$this->load->view("admin/detail_event",$data);
	}

	public function editEvent($id){
		$data['data']=$this->m_admin->getEventById($id);
		$this->load->view("admin/edit_event",$data);
	}

	public function updateEvent(){
		$config['upload_path']   =   "admin_assets/img/";
		$config['allowed_types'] =   "gif|jpg|jpeg|png"; 
		$config['max_size']      =   "5000";
		$config['max_width']     =   "1907";
		$config['max_height']    =   "1280";
		$this->load->library('upload',$config);

		if(!$this->upload->do_upload('fupload')){
			echo $this->upload->display_errors();
		}else{
			$finfo=$this->upload->data();
		}

		$p = $this->input->post();
		$p['img'] = $finfo['file_name'];

		$res = $this->m_admin->updateEvent($p);
		if($res)redirect("admin/event");
	}

	public function deleteEvent($id){
		$data=$this->m_admin->getEventById($id);
		$this->m_admin->deleteEvent($id);
		unlink("admin_assets/img/".$data['image']);
		redirect("admin/event");
	}

	public function member(){
		$data['data']=$this->m_admin->getAllMember();
		$this->load->view("admin/member",$data);
	}

	public function addMember(){
		$this->load->view("admin/add_member");
	}

	public function saveMember(){
		$p=$this->input->post();
		$p['username']=$p['no_membership'];
		$p['password']=$this->randomPassword();

		$config = Array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_user' => 'rizalsproject@gmail.com',
			'smtp_pass' => '##pikoemrizal',
			'mailtype' => 'html',
			'charset' => 'iso-8859-1',
			'wordwrap' => TRUE
			);

		$message = '

		Dear '.$p['nama'].',

		Thank you for signing up with us. Your new account has been setup and you can now login to our client area using the details below.

		username: '.$p['username'].'
		Password: '.$p['password'].'

		To login, visit https: xxxxx

		Note : Please do not reply directly to this email, reply to the email address below (signature) if you want to reply this email.

		Best Regards
		';
		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");
		$this->email->from('rizalsproject@gmail.com');
		$this->email->to($p['email']);
		$this->email->subject('[Bandung Giri Gahana Account]');
		$this->email->message($message);
		/*
		if($this->email->send())
		{
			echo 'Email sent.';
		}
		else
		{
			show_error($this->email->print_debugger());
		}
		*/
		$res=$this->m_admin->saveMember($p);
		if($res)redirect("admin/member");
	}

	function randomPassword() {
		$alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
		$pass = array();
		$alphaLength = strlen($alphabet) - 1;
		for ($i = 0; $i < 8; $i++) {
			$n = rand(0, $alphaLength);
			$pass[] = $alphabet[$n];
		}
		return implode($pass);
	}

	function editMember($id){
		$data['data']=$this->m_admin->getMemberById($id);
		$this->load->view("admin/edit_member",$data);
	}

	function deleteMember($id){
		$data['data']=$this->m_admin->deleteMember($id);
		redirect("admin/member");
	}

	function updateMember(){
		$p=$this->input->post();
		$res=$this->m_admin->updateMember($p);
		if($res)redirect("admin/member");
	}

}
