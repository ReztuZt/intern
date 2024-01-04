<?php
defined('BASEPATH') or exit('No direct script access allowed');

class peserta extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Peserta_model');
    }

    public function index()
    {
        $data['title'] = 'Peserta';
        $data['peserta'] = $this->Peserta_model->get_data('tb_magang')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('peserta', $data);
        $this->load->view('templates/footer');
    }
    public function tambah()
    {
        $data['title'] = 'tambah peserta';
    
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('tambah_peserta'); // Penambahan single quote yang hilang pada 'tambah_peserta'
        $this->load->view('templates/footer');
    }
    
public function tambah_aksi()
{

}

public function rules()
{
    $this->form_validation->set_rules('magang_nama','Nama Magang','required', array(
        'required' => '%$harus diisi !!'
    ))
}

}
