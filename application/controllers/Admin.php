<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function admin(){
		parent::__construct();

		//$this->load->model("m_member");
	}

	public function index()
	{
		$this->load->view('admin/dashboard');
	}
}
