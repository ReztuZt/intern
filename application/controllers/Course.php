<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Course extends CI_Controller
{

    public function index()
    {
        $this->load->model('Course_model'); // Load the Course_model

        $data['title'] = 'Course';
        $data['course'] = $this->Course_model->get_data('tb_course')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('course', $data); // Pass $data to the 'course' view
        $this->load->view('templates/footer');
    }
}
