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

}
