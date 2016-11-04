<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rates extends CI_Controller {

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

    public function rates(){
        parent::__construct();

        $this->load->model("m_admin");
    }

	public function index()
	{
		$this->load->view('index');
	}

	public function golf(){
        $data['data']=$this->m_admin->getAllRates();
		$this->load->view('rates_golf', $data);
	}

	public function sport(){
		$this->load->view('rates_sport');
	}

	public function terms(){
		$this->load->view('terms');
	}

	public function promotion(){
		$this->load->view('promotion');
	}
}
