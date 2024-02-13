<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Course extends CI_Controller
{


    public function __construct()
    {   
        parent::__construct();
        cek_login();
        $this->load->model('Course_model');
        $this->load->library('form_validation');
    }

    public function index()
    {

        $data['title'] = 'Course';
        $data['course'] = $this->Course_model->get_data('tb_course')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('course/course', $data); // Pass $data to the 'course' view
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Course';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('course/tambah_course');
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
                'course_nama'      => $this->input->post('course_nama'),
                'course_tanggal'   => $this->input->post('course_tanggal'),
                'course_jumlah'    => $this->input->post('course_jumlah'),
                'course_ket'       => $this->input->post('course_ket'),
                'course_deskripsi' => $this->input->post('course_deskripsi'),
                'course_mentor'    => $this->input->post('course_mentor'),
                'course_harga'     => $this->input->post('course_harga'),
            );

            // Panggil model untuk menyimpan data
            $this->Course_model->insert_data($data, 'tb_course'); // Assuming course_id is auto-incremented

            // Set pesan sukses menggunakan session
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
               <strong>Sukses!</strong> Data berhasil ditambahkan.
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button>
             </div>');

            // Redirect ke halaman course setelah menambahkan data
            redirect('course');
        }
    }


    public function _rules()
    {
        $this->form_validation->set_rules('course_nama', 'Nama Course', 'required', array(
            'required' => '%s harus diisi !!'
        ));
        $this->form_validation->set_rules('course_tanggal', 'Tanggal Course', 'required', array(
            'required' => '%s harus diisi !!'
        ));
        $this->form_validation->set_rules('course_jumlah', 'Jumlah Course', 'required', array(
            'required' => '%s harus diisi !!'
        ));
        $this->form_validation->set_rules('course_ket', 'Keterangan', 'required', array(
            'required' => '%s harus diisi !!'
        ));
        $this->form_validation->set_rules('course_deskripsi', 'Deskripsi', 'required', array(
            'required' => '%s harus diisi !!'
        ));
        $this->form_validation->set_rules('course_mentor', 'Mentor', 'required', array(
            'required' => '%s harus diisi !!'
        ));
        $this->form_validation->set_rules('course_harga', 'Harga Course', 'required', array(
            'required' => '%s harus diisi !!'
        ));
    }

    public function edit_aksi($course_id)
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $data = array(
                'course_id'         => $course_id,
                'course_nama'       => $this->input->post('course_nama'),
                'course_tanggal'    => $this->input->post('course_tanggal'),
                'course_jumlah'     => $this->input->post('course_jumlah'),
                'course_ket'        => $this->input->post('course_ket'),
                'course_deskripsi'  => $this->input->post('course_deskripsi'),
                'course_mentor'     => $this->input->post('course_mentor'),
                'course_harga'      => $this->input->post('course_harga'),
            );

            $this->Course_model->update_data($data, 'tb_course');

            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Sukses!</strong> Data berhasil diubah.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>');

            redirect('course');
        }
    }

    public function delete($id)
    {
        $where = array('course_id' => $id);

        $this->Course_model->delete($where, 'tb_course');

        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Sukses!</strong> Data berhasil dihapus.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>');

        redirect('course');
    }
}
