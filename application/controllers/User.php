<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();
        $this->load->model('Profile_model');
        $this->load->library('template');
        $this->load->library('form_validation');
    }


    public function profile($id)
    {
        cek_login();
        $data['admin'] = $this->Profile_model->get_id_admin_admin($id);

        if ($data['admin']) {
            $data['title'] = 'Profile Admin';

            // Load views: header, sidebar, profile, and footer
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('users/profile', $data);
            $this->load->view('templates/footer');
        } else {
            redirect('dashboard', 'refresh');
        }
    }
    public function update_profile()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('new_password', 'New Password', 'trim|min_length[6]');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'matches[new_password]');
        $this->form_validation->set_message('required', '{field} harus diisi');
        $this->form_validation->set_message('min_length', '{field} minimal 6 karakter');
        $this->form_validation->set_message('matches', 'Konfirmasi password tidak sesuai');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

        $id_admin = $this->session->id_admin; // Ganti dengan cara yang sesuai untuk mendapatkan ID admin

        if ($this->form_validation->run() == TRUE) {
            $data = array(
                'username'      => $this->input->post('username'),
                'nama_admin'    => $this->input->post('namaadmin'),
                // 'image_admin' => $this->input->post('image_admin'), // Tidak perlu mencantumkan ini karena biasanya berupa file yang diunggah
            );

            // Cek apakah ada password baru yang diisi
            $new_password = $this->input->post('new_password');
            if (!empty($new_password)) {
                $data['password'] = password_hash($new_password, PASSWORD_DEFAULT);
            }

            // Panggil model untuk memperbarui profil
            $this->Profile_model->update_profile($id_admin, $data);

            $this->session->set_flashdata('message', '<div class="alert alert-info">Data Berhasil Di Update</div>');
            redirect('user/profile/' . $id_admin);
        } else {
            // Handle validation errors if needed
        }
    }

    public function update_image()
    {

        $id_admin = $this->session->id_admin;

        // Handle image upload
        $config['upload_path']   = './uploads/';  // Sesuaikan dengan folder tempat menyimpan gambar
        $config['allowed_types'] = 'gif|jpg|jpeg|png';  // Sesuaikan dengan jenis file yang diizinkan
        $config['max_size']      = 2048;  // Sesuaikan dengan ukuran maksimum file (dalam kilobyte)
        // Add your image upload code here
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image_admin')) {
            $upload_data = $this->upload->data();
            $image_path = './uploads/' . $upload_data['file_name'];
    
            // Update database dengan path gambar yang baru diunggah
            $data = array(
                'image_admin' => $image_path,
            );
    
            $this->Profile_model->update_image($id_admin, $data);
    
            $this->session->set_flashdata('message', '<div class="alert alert-info">Image Berhasil Di Update</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger">' . $this->upload->display_errors() . '</div>');
        }
    
        redirect('user/profile/' . $id_admin);
    }
}