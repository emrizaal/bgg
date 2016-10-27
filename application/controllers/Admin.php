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

	public function Accolades(){
		$data['acc'] = $this->m_admin->getAccolades();
		$this->load->view('admin/accolades',$data);
	}

	public function saveAccolades(){
		$p=$this->input->post();
		$this->m_admin->saveAccolades($p);
		redirect('admin/accolades');
	}
}
