<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelatihan extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        cek_login();
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


    public function tambah()
    {
        $data['title'] = 'Tambah Pelatihan';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('tambah_pelatihan');
        $this->load->view('templates/footer');
    }



    // public function info()
    // {
    //     // Ambil NIP magang dari sesi atau dari sumber lainnya
    //     $magang_nip = $this->session->userdata('magang_nip'); // Gantilah dengan cara yang sesuai untuk mendapatkan NIP magang

    //     // Cek apakah NIP magang sudah ada
    //     if ($magang_nip) {
    //         // Data untuk ditampilkan di view
    //         $data['title'] = 'Pelatihan';
    //         $data['pelatihan_info'] = $this->Pelatihan_model->get_data_by_magang_nip('tb_pelatihan', $magang_nip)->result();

    //         // Load view dengan data yang sudah diambil
    //         $this->load->view('templates/header', $data);
    //         $this->load->view('templates/sidebar', $data);
    //         $this->load->view('pelatihan_info', $data);
    //         $this->load->view('templates/footer');
    //     } else {
    //         // Handle jika NIP magang tidak tersedia
    //         echo "NIP magang tidak valid atau tidak ditemukan.";
    //     }
    // }

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
                'course_nama'      => $this->input->post('course_nama'),
                // 'magang_nip'   => $this->input->post('magang_nip'),
                'pelatihan_ket'       => $this->input->post('pelatihan_ket'),
                'course_code'       => $this->input->post('course_code')
            );

            // Panggil model untuk menyimpan data
            $this->Pelatihan_model->insert_data($data, 'tb_pelatihan'); // Assuming course_id is auto-incremented

            // Set pesan sukses menggunakan session
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
               <strong>Sukses!</strong> Data berhasil ditambahkan.
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button>
             </div>');

            // Redirect ke halaman course setelah menambahkan data
            redirect('pelatihan');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('course_nama', 'Nama Course', 'required', array(
            'required' => '%s harus diisi !!'
        ));
        // $this->form_validation->set_rules('magang_nip', 'Magang NIP', 'required', array(
        //     'required' => '%s harus diisi !!'
 //       ));
        $this->form_validation->set_rules('pelatihan_ket', 'Keterangan Course', 'required', array(
            'required' => '%s harus diisi !!'
        ));
    }

    public function delete($id)
    {
        $where = array('pelatihan_id' => $id);

        $this->Pelatihan_model->delete($where, 'tb_pelatihan');

        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Sukses!</strong> Data berhasil dihapus.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>');

        redirect('pelatihan');
    }

    public function edit_aksi($id_pelatihan)
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->edit($id_pelatihan);
        } else {
            $data = array(
                'course_nama'    => $this->input->post('course_nama'),
                'magang_nip'     => $this->input->post('magang_nip'),
                'pelatihan_ket'  => $this->input->post('pelatihan_ket'),
                'course_code'  => $this->input->post('course_code'),
                // Add other columns to be updated
            );

            try {
                $this->Pelatihan_model->update_data($id_pelatihan, $data, 'tb_pelatihan');
                echo 'Update successful'; // Echo a success message if the update is successful
            } catch (Exception $e) {
                // Echo the error message
                echo 'Error: ' . $e->getMessage();
            }

            // Redirect or perform other actions after the update
            redirect('pelatihan');
        }
    }


    // public function info($nip)
    // {
    //     // Load the Pelatihan_model
    //     $this->load->model('Pelatihan_model');

    //     // Get magang data based on NIP
    //     $data['magang_data'] = $this->Pelatihan_model->getMagangByNIP($nip);

    //     // Load the view with the magang data
    //     $this->load->view('pelatihan_info', $data);
    // }

    public function displayMagangByCourse($course_nama)
    {
        $data['magang_nama'] = $this->Pelatihan_model->getMagangNamaByCourse($course_nama);
        $this->load->view('pelatihan_info', $data);
    }


    public function info($course_code)
    {
        // Panggil model untuk mendapatkan data magang berdasarkan course_nama


        $this->load->model('Pelatihan_model');
        $data['magang_by_course'] = $this->Pelatihan_model->getMagangByCourse($course_code);

        // Load view untuk menampilkan data

        $data['title'] = 'Info Pelatihan';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('pelatihan_info', $data);
        $this->load->view('templates/footer');
    }

    public function searchCourse()
    {
        $searchTerm = $this->input->post('searchTerm');

        // Lakukan pencarian data di database
        $result = $this->Pelatihan_model-- > searchCourse($searchTerm);

        // Ubah hasil pencarian menjadi JSON dan kirimkan ke client
        echo json_encode($result);
    }
}
