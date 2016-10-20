<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Club extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('index');
	}

	public function history(){
		$this->load->view('club_history');
	}

	public function accolades(){
		$this->load->view('club_accolades');
	}

	public function facilities(){
		$this->load->view('club_facilities');
	}

	public function csr(){
		$this->load->view('club_csr');
	}

	public function news(){
		$this->load->view('club_news');
	}
}
