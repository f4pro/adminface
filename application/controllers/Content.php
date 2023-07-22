<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Content extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('ModelKategori', 'kategori');
        $this->load->model('ModelBerita', 'berita');
    }

    public function berita()
    {
        $data['title'] = 'List Berita';
        $data['berita'] = $this->berita->get();
        $data['kategori'] = $this->kategori->get();
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('content/berita', $data);
        $this->load->view('templates/footer');
    }

    public function newberita()
    {
        $data['title'] = 'Tambah Berita';
        $data['berita'] = $this->berita->get();
        $data['kategori'] = $this->kategori->get();
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('content/berita_add', $data);
        $this->load->view('templates/footer');
    }

    public function uploadberita()
    {
        $data = [
            'kategori' => $this->input->post('kategori'),
            'judul' => $this->input->post('judul'),
            'isi_berita' => $this->input->post('isi_berita'),
            'author' => 'Admin',
        ];
        $this->berita->insert($data);
        redirect('content/berita');
    }

    public function updateberita()
    {
        $data = [
            'kategori' => $this->input->post('kategori'),
            'judul' => $this->input->post('judul'),
            'isi_berita' => $this->input->post('isi_berita'),
            'author' => 'Admin',
        ];
        $id = $this->input->post('id_berita');
        $this->berita->update(['id_berita' => $id], $data);
        redirect('content/berita');
    }

    public function editberita($id)
    {
        $data['title'] = 'Edit Berita';
        $data['berita'] = $this->berita->getById($id);
        $data['kategori'] = $this->kategori->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('content/berita_edit', $data);
        $this->load->view('templates/footer');
    }

    public function hapusberita($id)
    {
        $this->berita->delete($id);
        $error = $this->db->error();
        redirect('content/berita');
    }

    public function kategori()
    {
        $data['title'] = 'Kategori';
        $data['kategori'] = $this->kategori->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('kategori', 'Kategori', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('content/kategori', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'kategori' => $this->input->post('kategori')
            ];
            $this->kategori->insert($data);
            redirect('content/kategori');
        }
    }

    public function edit_kategori()
    {
        $data['kategori'] = $this->kategori->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('kategori', 'Kategori', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('content/kategori', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'kategori' => $this->input->post('kategori'),
            ];
            $id = $this->input->post('id');
            $this->kategori->update(['id' => $id], $data);
            redirect('content/kategori');
        }
    }

    public function hapusKategori($id)
    {
        $this->kategori->delete($id);
        $error = $this->db->error();
        redirect('content/kategori');
    }
}
