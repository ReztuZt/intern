<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Auth_model'); // Pastikan model sudah dimuat
    }

    public function index()
    {
    }

    //fungsional Login
    public function login()
    {
        $this->load->view('backend/login');
    }

    //fungsional Register
    public function register()
    {
        $this->load->view('backend/register');
    }

    // Fungsionalitas Proses Register - Mengambil data dari View Register
    public function proses_register()
    {
        // Validasi form
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('namaadmin', 'Nama Admin', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|matches[password]');
        // Pesan kesalahan untuk validasi form
        $this->form_validation->set_message('required', '{field} harus diisi');
        // $this->form_validation->set_message('valid_email', '{field} Email anda harus valid');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

        // Jika form valid
        if ($this->form_validation->run() == TRUE) {
            // Data yang akan diinsert ke dalam database
            $data = array(
                'username'    => $this->input->post('username'),
                'nama_admin'  => $this->input->post('namaadmin'),
                'password'    => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
                'status'      => 1,
            );
            
            // Tampilkan data yang akan diinsert (untuk sementara)
            // var_dump($data);
            // Insert data ke dalam database
            $this->Auth_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-info">Data berhasil disimpan</div>');


            // Redirect ke halaman login
            redirect('auth/login', 'refresh');
        } else {
            $data['validation_errors'] = validation_errors('<div class="alert alert-danger">', '</div>');
            // Jika form tidak valid, tampilkan kembali halaman register
            $this->load->view('backend/register');
        }
    }

    public function proses_login()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
    
        // Validasi form
        if ($this->form_validation->run() == TRUE) {
            
            $admin = $this->Auth_model->get_username_admin($this->input->post('username'));
    
            if (!$admin) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger">Username tidak ditemukan</div>');
                redirect('auth/login', 'refresh');
            } elseif ($admin->status == '0') {
                $this->session->set_flashdata('message', '<div class="alert alert-danger">User sudah tidak aktif</div>');
                redirect('auth/login', 'refresh');
            } elseif (!password_verify($this->input->post('password'), $admin->password)) {
                 $this->session->set_flashdata('message', '<div class="alert alert-danger">Password Salah</div>');
                 redirect('auth/login', 'refresh');
            } else {
                // Menyimpan data admin ke dalam session
                $session= array(
                    'id_admin'   => $admin->id_admin,
                    'username'   => $admin->username,
                    'nama_admin' => $admin->nama_admin,
                );
                $this->session->set_userdata($session);
                redirect('dashboard');
            }
        } else {
            $data['title'] = 'Login Page';
            // Form tidak valid, tampilkan kembali halaman login
            $this->load->view('backend/register', $data);
        }
    }
    
}
?>