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
}
