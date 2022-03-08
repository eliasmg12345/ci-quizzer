<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Quiz extends CI_Controller
{
    public function index()
    {
        $data['subview']='index';
        $this->load->view('_quiz_layout',$data);
    }

    public function question()
    {
        $data['subview']='question';
        $this->load->view('_quiz_layout',$data);
    }

    public function final()
    {
        $data['subview']='final';
        $this->load->view('_quiz_layout',$data);
    }
    

}
