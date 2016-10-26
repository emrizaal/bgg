<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resort extends CI_Controller {

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
		$this->load->view('resort');
	}

	public function luxurious(){
		$this->load->view('r_luxurious');
	}

	public function punction(){
		$this->load->view('r_punction');
	}

	public function vip(){
		$this->load->view('r_vip');
	}

	public function swimming(){
		$this->load->view('r_swimming');
	}

	public function billiard(){
		$this->load->view('r_billiard');
	}

	public function tennis(){
		$this->load->view('r_tennis');
	}

	public function court(){
		$this->load->view('r_court');
	}

	public function etc(){
		$this->load->view('r_etc');
	}
}
