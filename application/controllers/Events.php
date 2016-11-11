<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends CI_Controller {

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

    public function events(){
        parent::__construct();

        $this->load->model("m_admin");
    }

	public function index()
	{
		$this->load->view('index');
	}

	public function calendar(){


		$this->load->view('event_calendar');
	}

    public function calendardata(){

//        $data['cal'] = $this->m_admin->getAllEvent();
        
        $result = $this->m_admin->getAllPublicEvent();
        $events = array();
        foreach($result as $row){
            $events[] = array(
                "title" => $row['name'],
                "start" => $row['start_date'],
                "end" => $row['end_date']
            );
        }
        echo json_encode($events);

//        $this->load->view('event_calendar');
    }

	public function orderofmerit(){
		$this->load->view('event_orderofmerit');
	}

	public function results(){
		$this->load->view('event_results');
	}
}
