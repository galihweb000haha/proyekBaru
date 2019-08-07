<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('data_table');
    }
    public function index(){
        $username = $this->session->userdata('username');
        $cookie = get_cookie('remember');

        
        if($username == null){
            redirect('auth');
            die;
        }
        // var_dump($username);
        $data['title'] = "Halaman Dashboard";
        $this->load->view('template-admin/header', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('template-admin/footer', $data);
    }
    public function tables(){
        $this->form_validation->set_rules('nama_barang', 'Nama barang', 'trim|required|max_length[20]');
        $this->form_validation->set_rules('merek_barang', 'Merek barang', 'trim|required|max_length[20]');
        $this->form_validation->set_rules('jumlah_barang', 'Jumlah barang', 'trim|required|numeric');

        if($this->form_validation->run() == FALSE){

            $data['title'] = "Daftar Table";
            $data['barang'] = $this->data_table->getBarang();
            $this->load->view('template-admin/header', $data);
            $this->load->view('admin/tables', $data);
            $this->load->view('template-admin/footer', $data);
        }else{
            $nama_barang = htmlspecialchars($this->input->post('nama_barang', TRUE));
            $merek_barang = htmlspecialchars($this->input->post('merek_barang', TRUE));
            $jumlah_barang = htmlspecialchars($this->input->post('jumlah_barang', TRUE));

            $data = [
                'nama_barang' => $nama_barang,
                'merek_barang' => $merek_barang,
                'jumlah_barang' => $jumlah_barang
            ];
            $this->db->insert('barang', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success mt-3" role="alert">
            Data berhasil ditambahkan!
          </div>');
            redirect('admin/tables');
        }

    }
}