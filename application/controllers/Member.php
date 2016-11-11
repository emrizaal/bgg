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
}