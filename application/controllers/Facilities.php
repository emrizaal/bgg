<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Facilities extends CI_Controller {

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

    public function facilities(){
        parent::__construct();

        $this->load->model("m_admin");
    }

	public function index()
	{
		$this->load->view('index');
	}

	public function restaurant(){
        $data['restaurant']=$this->m_admin->getFacilitiesById(1);
		$this->load->view('f_restaurant', $data);
	}

	public function locker(){
        $data['locker']=$this->m_admin->getFacilitiesById(2);
		$this->load->view('f_locker', $data);
	}

	public function driving(){
        $data['dr']=$this->m_admin->getFacilitiesById(4);
		$this->load->view('f_driving', $data);
	}

	public function proshop(){
        $data['pr']=$this->m_admin->getFacilitiesById(5);
		$this->load->view('f_proshop', $data);
	}

	public function gym(){
        $data['gym']=$this->m_admin->getFacilitiesById(6);
		$this->load->view('f_gym', $data);
	}
}
