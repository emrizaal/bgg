<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function login(){
		parent::__construct();

		$this->load->model("m_member");
	}

	public function index()
	{
		$this->load->view('login');
	}

	public function auth(){
		$p = $this->input->post();
		$res = $this->m_member->auth($p);
		if(!empty($res)){
			echo "ada";
		}else{
			echo "tidak";
		}
	}
}
