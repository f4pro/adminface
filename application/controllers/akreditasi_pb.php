<?php
defined('BASEPATH') or exit('No direct script access allowed');

class akreditasi_pb extends CI_Controller
{
    public function index(){
    // {
    //     $data['title'] = 'Login ';
        $this->load->view('pub/header/header_pb');
        $this->load->view('/pub/akreditasi/akreditasi');
        $this->load->view('pub/footer/footer_pb');
    }
}