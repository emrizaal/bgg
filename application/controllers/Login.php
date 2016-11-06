<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function login(){
		parent::__construct();

		$this->load->model("m_user");
	}

	public function index()
	{
		$this->load->view('login');
	}

	public function auth(){
		$p = $this->input->post();
		$res = $this->m_user->auth($p);
		if(!empty($res)){
			$data=array(
				'id_user' <= $res['id_user'],
				'username' <= $res['username'],
				'level' <= $res['level']
				);
			
			$this->session->set_userdata($res);
			redirect('admin');
		}else{
			echo "Username/Password tidak cocok";
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
