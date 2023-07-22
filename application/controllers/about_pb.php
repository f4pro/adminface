<?php
defined('BASEPATH') or exit('No direct script access allowed');

class about_pb extends CI_Controller
{
    public function index(){
    // {
    //     $data['title'] = 'Login ';
        // $this->load->view('templates/auth_header', $data);
        $this->load->view('/pub/about/about');
        // $this->load->view('templates/auth_footer');
    }
}