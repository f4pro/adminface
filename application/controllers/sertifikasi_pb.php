<?php
defined('BASEPATH') or exit('No direct script access allowed');

class sertifikasi_pb extends CI_Controller
{
    public function index(){
    // {
    //     $data['title'] = 'Login ';
        // $this->load->view('templates/auth_header', $data);
        $this->load->view('/pub/sertifikasi/sertifikasi');
        // $this->load->view('templates/auth_footer');
    }
}