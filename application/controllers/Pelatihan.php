<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelatihan extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pelatihan_model');
        $this->load->library('form_validation');
    }

    public function index()
    {

        $data['title'] = 'Pelatihan';
        $data['pelatihan'] = $this->Pelatihan_model->get_data('tb_pelatihan')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('pelatihan', $data); // Pass $data to the 'course' view
        $this->load->view('templates/footer');
    }
}