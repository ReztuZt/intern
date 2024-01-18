<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Payment extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();
        $this->load->model('Payment_model');
        $this->load->library('template');
        $this->load->library('form_validation');
        $this->load->helper('form');
    }

    public function index ()
    {
        $data['title'] = 'Payment';
        $data['payment'] = $this->Payment_model->get_data('tb_payment')->result();
        

            // Load views: header, sidebar, profile, and footer
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('payment', $data);
            $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Pembayaran';
        $data['tb_magang'] = $this->Payment_model->get_data('tb_magang')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('tambah_payment');
        $this->load->view('templates/footer');
    }

    public function tambah_aksi()
    {
        echo "Inside tambah_aksi method";
        // Validasi form
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            // Jika validasi gagal, kembalikan ke halaman tambah
            $data['tb_magang'] = $this->Payment_model->getMagangNip(); // Mengambil NIP dari model
            $this->load->view('tambah_payment', $data); // Ganti 'nama_view' dengan nama view yang sesuai

            $this->tambah();
        } else {
            // Jika validasi berhasil, tambahkan data ke database
            $data = array(
                'magang_nip'        => $this->input->post('magang_nip'),
                'payment_metode'    => $this->input->post('payment_metode'),
                'payment_status'    => $this->input->post('payment_status'),
                'payment_catatan'   => $this->input->post('payment_catatan'),
                'payment_date'      => $this->input->post('payment_date'),
                'payment_file'      => $this->input->post('payment_file'),
            );

            // Panggil model untuk menyimpan data
            $this->Payment_model->insert_data($data, 'tb_payment'); // Assuming course_id is auto-incremented

            // Set pesan sukses menggunakan session
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
               <strong>Sukses!</strong> Data berhasil ditambahkan.
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button>
             </div>');

            // Redirect ke halaman course setelah menambahkan data
            redirect('payment');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('magang_nip', 'Nip', 'required', array(
            'required' => '%s harus diisi !!'
        ));
        $this->form_validation->set_rules('payment_metode', 'Metode Pembayaran', 'required', array(
            'required' => '%s harus diisi !!'
        ));
        $this->form_validation->set_rules('payment_status', 'Status Pembayaran', 'required', array(
            'required' => '%s harus diisi !!'
        ));
        $this->form_validation->set_rules('payment_catatan', 'Catatan', 'required', array(
            'required' => '%s harus diisi !!'
        ));
        $this->form_validation->set_rules('payment_date', 'Tanggal', 'required', array(
            'required' => '%s harus diisi !!'
        ));
        $this->form_validation->set_rules('payment_file', 'File', 'required', array(
            'required' => '%s harus diisi !!'
        ));
    }

    public function edit_aksi($payment_id)
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $data = array(
                'payment_id'         => $payment_id,
                'magang_nip'         => $this->input->post('magang_nip'),
                'payment_metode'     => $this->input->post('payment_metode'),
                'payment_status'     => $this->input->post('payment_status'),
                'payment_catatan'    => $this->input->post('payment_catatan'),
                'payment_date'       => $this->input->post('payment_date'),
                'payment_file'       => $this->input->post('payment_file'),
            );

            $this->Payment_model->update_data($data, 'tb_payment');

            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Sukses!</strong> Data berhasil diubah.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>');

            redirect('payment');
        }
    }
    public function delete($id)
    {
        $where = array('payment_id' => $id);

        $this->Payment_model->delete($where, 'tb_payment');

        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Sukses!</strong> Data berhasil dihapus.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>');

        redirect('payment');
    }
    public function upload_image($payment_id) {
        // Konfigurasi upload gambar
        $config['upload_path'] = '../uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 2048; // 2MB

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('image_upload')) {
            // Jika upload gagal, tampilkan pesan error
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('payment', $error);
        } else {
            // Jika upload berhasil, simpan nama file ke database
            $data = array('upload_data' => $this->upload->data());
            $file_name = $data['upload_data']['file_name'];
            $this->Payment_model->update_payment_file($payment_id, $file_name);

            // Redirect ke halaman utama
            redirect('payment');
        }
    }

    public function payment_detail($payment_id)
    {
        $data['payment_detail'] = $this->Payment_model->get_payment_detail($payment_id);
        // Tambahkan data lain yang diperlukan untuk halaman detail

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('payment_detail', $data); // Gantilah 'payment_detail' dengan nama view Anda
        $this->load->view('templates/footer');
    }
    // application/controllers/Payment.php

    public function upload_payment() {
        // Set rules untuk validasi form
        $this->form_validation->set_rules('payment_file', 'File', 'required');

        if ($this->form_validation->run() == FALSE) {
            // Validasi gagal, tampilkan kembali formulir dengan pesan error
            $this->load->view('tambah_payment');
        } else {
            // Validasi berhasil, proses upload gambar
            $config['upload_path'] = './uploads/';  // Ubah sesuai dengan folder tempat menyimpan gambar
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 2048;  // Maksimum ukuran file dalam kilobita
            $config['encrypt_name'] = TRUE;  // Enkripsi nama file

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('payment_file')) {
                // Upload berhasil, ambil nama file
                $file_data = $this->upload->data();
                $file_name = $file_data['file_name'];

                // Simpan nama file ke dalam tabel tb_payment
                $this->load->model('Payment_model');  // Sesuaikan dengan model Anda
                $this->Payment_model->save_payment($file_name);

                // Tampilkan pesan sukses atau redirect ke halaman lain
                echo "File berhasil diupload!";
            } else {
                // Upload gagal, tampilkan pesan error
                echo $this->upload->display_errors();
            }
        }
    }

}

?>