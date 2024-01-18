<?php
// application/controllers/Dashboard.php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load model dan library yang diperlukan
        $this->load->model('Admin_model');
    }

    public function index() {
        // Ambil informasi admin dari database
        $username = $this->session->userdata('username');
        $admin_info = $this->Admin_model->get_admin_info($username);

        // Kirim informasi admin ke view
        $data['admin_name'] = $admin_info['name'];

        // Tampilkan view dengan informasi admin
        $this->load->view('dashboard', $data);
    }
}
?>