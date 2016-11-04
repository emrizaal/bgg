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

    public function club(){
        parent::__construct();

        $this->load->model("m_admin");
    }

	public function index()
	{
		$this->load->view('index');
	}

	public function history(){

        $data['history']=$this->m_admin->getHistory();

        $data['slider']=$this->m_admin->getAllSlider();

		$this->load->view('club_history',$data);
	}

	public function accolades(){

        $data['acc'] = $this->m_admin->getAccolades();

		$this->load->view('club_accolades',$data);
	}

	public function facilities(){
		$this->load->view('club_facilities');
	}

	public function csr(){
        $data['csr'] = $this->m_admin->getCsr();
		$this->load->view('club_csr', $data);
	}

	public function news(){
        $data['news']=$this->m_admin->getAllNews();
		$this->load->view('club_news', $data);
	}
}
