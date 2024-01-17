<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Status extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Status_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Status';
        $data['status'] = $this->Status_model->getLimitedStatus('tb_magang', 2)->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('status', $data); // Pass $data to the 'status' view
        $this->load->view('templates/footer');
    }

    public function info($status_nama)
    {
        $data['title'] = 'Magang Info';
        $data['magang_nama'] = $this->Status_model->getMagangNamaByStatus('tb_magang', $status_nama)->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('status_info', $data);
        $this->load->view('templates/footer');
    }
}
