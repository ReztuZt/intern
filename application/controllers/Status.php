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
        $data['status'] = $this->Status_model->get_data('tb_status')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('status/status', $data); // Pass $data to the 'course' view
        $this->load->view('templates/footer');
    }


    public function tambah()
    {
        $data['title'] = 'Tambah Status';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('status/tambah_status');
        $this->load->view('templates/footer');
    }

    public function tambah_aksi()
    {
        echo "Inside tambah_aksi method";
        // Validasi form
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            // Jika validasi gagal, kembalikan ke halaman tambah

            $this->tambah();
        } else {
            // Jika validasi berhasil, tambahkan data ke database
            $data = array(
                'status_nama'      => $this->input->post('status_nama'),
                'status_ket'       => $this->input->post('status_ket'),
            );

            // Panggil model untuk menyimpan data
            $this->Status_model->insert_data($data, 'tb_status'); // Assuming course_id is auto-incremented

            // Set pesan sukses menggunakan session
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
               <strong>Sukses!</strong> Data berhasil ditambahkan.
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button>
             </div>');

            // Redirect ke halaman course setelah menambahkan data
            redirect('status');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('status_nama', 'Nama Status', 'required', array(
            'required' => '%s harus diisi !!'
        ));
        $this->form_validation->set_rules('status_ket', 'Keterangan', 'required', array(
            'required' => '%s harus diisi !!'
        ));
    }

    public function delete($id)
    {
        $where = array('status_id' => $id);

        $this->Status_model->delete($where, 'tb_status');

        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Sukses!</strong> Data berhasil dihapus.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>');

        redirect('status');
    }

    public function edit_aksi($id_status)
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->edit($id_status);
        } else {
            $data = array(
                'status_nama'    => $this->input->post('status_nama'),
                'status_ket'  => $this->input->post('status_ket'),
            );

            try {
                $this->Status_model->update_data($id_status, $data, 'tb_status');
                echo 'Update successful'; // Echo a success message if the update is successful
            } catch (Exception $e) {
                // Echo the error message
                echo 'Error: ' . $e->getMessage();
            }

            // Redirect or perform other actions after the update
            redirect('status');
        }
    }

}
