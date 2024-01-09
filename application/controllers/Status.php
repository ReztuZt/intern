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

        $data['title'] = 'Course';
        $data['course'] = $this->Status_model->get_data('tb_course')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('course', $data); // Pass $data to the 'course' view
        $this->load->view('templates/footer');
    }
    
}
