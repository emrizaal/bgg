<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

    public function member(){
        parent::__construct();

        $this->load->model("m_admin");
    }

    public function index()
    {
        $this->load->view('member/dashboard');
    }

    public function eventcalendar()
    {
        $this->load->view('member/event_calendar');
    }
    public function news()
    {
        $data['data']=$this->m_admin->getAllNews();
        $this->load->view('member/news', $data);
    }

    public function detailNews($id){
        $data['data']=$this->m_admin->getNewsById($id);
        $this->load->view('member/detail_news',$data);
    }

    public function detailEvent($id){
        $data['data']=$this->m_admin->getEventById($id);
        $this->load->view("member/detail_event",$data);
    }

    public function calendardata(){

//        $data['cal'] = $this->m_admin->getAllEvent();

        $result = $this->m_admin->getAllPublicEvent();
        $events = array();
        foreach($result as $row){
            $events[] = array(
                "title" => $row['name'],
                "start" => $row['start_date'],
                "end" => $row['end_date'],
                "url" => base_url()."member/detailEvent/". $row['id_event']
            );
        }
        echo json_encode($events);

//        $this->load->view('event_calendar');
    }


}