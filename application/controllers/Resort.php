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

    public function resort(){
        parent::__construct();

        $this->load->model("m_admin");
    }

	public function index()
	{
		$this->load->view('resort');
	}

	public function luxurious(){
        $data['lux']=$this->m_admin->getRooms();
		$this->load->view('r_luxurious', $data);
	}

	public function punction(){
        $data['data']=$this->m_admin->getResortFacilities();
		$this->load->view('r_facilities', $data);
	}

    public function facilities(){
        $data['data']=$this->m_admin->getResortFacilities();
        $this->load->view('r_facilities', $data);
    }

    public function detailResortFacilities($id){
        $data['data']=$this->m_admin->getResortFacilitiesById($id);

        $this->load->view("detail_resort_facilities",$data);
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
