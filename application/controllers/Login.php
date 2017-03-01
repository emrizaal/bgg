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
		$data = array();
		if(!empty($res)){
			$data=array(
				'id_user' => $res['id_user'],
				'username' => $res['username'],
				'nama' => $res['nama'],
				'level' => $res['level'],
				'tanggal_berlaku' => $res['tanggal_berlaku'],
				'tanggal_jatuh_tempo' => $res['tanggal_jatuh_tempo'],
				'tanggal_dibuat' => $res['tanggal_dibuat'],
				'lunas' => $res['lunas'],
				'type' => $res['member_type']
				);
			
			$this->session->set_userdata($data);
			if($data['level']==0){
				redirect('admin');	
			}else{
				redirect('member');
			}
		}else{
			echo "Username/Password tidak cocok";
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
