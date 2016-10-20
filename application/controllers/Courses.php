<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Courses extends CI_Controller {

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

	public function course(){
		$this->load->view('course');
	}

	public function layout(){
		$this->load->view('course_layout');
	}

	public function condition(){
		$this->load->view('course_conditions');
	}

	public function scorecard(){
		$this->load->view('course_scorecard');
	}

	public function detail(){
		$this->load->view('course_detail');
	}
}
