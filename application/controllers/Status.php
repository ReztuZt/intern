<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Status extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        cek_login();
        $this->load->model('Status_model');
        $this->load->library('form_validation');
    }

    public function index()
    {

        $data['title'] = 'Status';
        $data['course'] = $this->Status_model->get_data('tb_status')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('status', $data); // Pass $data to the 'course' view
        $this->load->view('templates/footer');
    }
    
}
