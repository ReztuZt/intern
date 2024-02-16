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

        $data['title'] = 'Kategori & kelas';
        $data['pelatihan'] = $this->Pelatihan_model->get_data('tb_pelatihan')->result();
        $data['tb_pelatihan'] = $this->Pelatihan_model->get_data('tb_pelatihan')->result();
        $data['kelas'] = $this->Pelatihan_model->get_data('tb_kelas')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('pelatihan/pelatihan', $data); // Pass $data to the 'course' view
        $this->load->view('templates/footer');
    }


    public function tambah()
    {
        $data['title'] = 'Tambah Kategori';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('pelatihan/tambah_pelatihan');
        $this->load->view('templates/footer');
    }

    public function tambah_aksi()
    {
        echo "Inside tambah_aksi method";
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {

            $this->tambah();
        } else {
            $data = array(
                'course_nama'      => $this->input->post('course_nama'),
                'pelatihan_ket'     => $this->input->post('pelatihan_ket'),
            );
            $this->Pelatihan_model->insert_data($data, 'tb_pelatihan'); // Assuming course_id is auto-incremented
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
               <strong>Sukses!</strong> Data berhasil ditambahkan.
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button>
             </div>');
            redirect('pelatihan');
        }
    }

    public function tambah_kelas()
    {
        $data['title'] = 'Tambah Kelas';
        $data['tb_pelatihan'] = $this->Pelatihan_model->get_data('tb_pelatihan')->result();

        $this->form_validation->set_rules('kelas_nama', 'Kelas', 'required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('pelatihan/tambah_kelas');
            $this->load->view('templates/footer');
        } else {
            $this->Pelatihan_model->tambahKelas();
            $this->session->set_flashdata('flash', 'DiTambahkan');
            redirect('pelatihan');
        }
    }

    // public function edit_kelas($kelas_id)
    // {
    //     $data['title'] = 'Edit Kelas';
    //     $data['tb_pelatihan'] = $this->Pelatihan_model->get_data('tb_pelatihan')->result();
    //     $data['tb_kelas'] = $this->Pelatihan_model->get_data_by_id($kelas_id);

    //     $this->form_validation->set_rules('kelas_nama', 'Kelas', 'required');


    //     if ($this->form_validation->run() == FALSE) {
    //         $this->load->view('templates/header', $data);
    //         $this->load->view('templates/sidebar', $data);
    //         $this->load->view('pelatihan/edit_kelas');
    //         $this->load->view('templates/footer');
    //     } else {
    //         $this->Pelatihan_model->editKelas();
    //         $this->session->set_flashdata('flash', 'DiEdit');
    //         redirect('pelatihan');
    //     }
    // }

    public function deleteKelas($id)
    {
        $this->Pelatihan_model->hapusDataKelas($id);
        $this->session->set_flashdata('flash', 'Dihabus');
        redirect('pelatihan');
    }

    public function _rules()
    {
        $this->form_validation->set_rules('course_nama', 'Nama Course', 'required', array(
            'required' => '%s harus diisi !!'
        ));
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
                'pelatihan_ket'  => $this->input->post('pelatihan_ket'),
            );

            try {
                $this->Pelatihan_model->update_data($id_pelatihan, $data, 'tb_pelatihan');
                echo 'Update successful'; // Echo a success message if the update is successful
            } catch (Exception $e) {
                echo 'Error: ' . $e->getMessage();
            }

            // Redirect or perform other actions after the update
            redirect('pelatihan');
        }
    }

    public function editkelas_aksi($kelas_id)
    {
        $this->form_validation->set_rules('kelas_nama', 'Nama Kelas', 'required');
        $this->form_validation->set_rules('course_nama', 'Kategori', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['tb_pelatihan'] = $this->Pelatihan_model->getCourseNama();
            $this->index();
        } else {
            // Validasi sukses, update data di database
            $data = array(
                'kelas_id' => $kelas_id,
                'kelas_nama' => $this->input->post('kelas_nama'),
                'course_nama' => $this->input->post('course_nama')
            );
            $this->Pelatihan_model->update_kelas($data, 'tb_kelas');
            redirect('pelatihan'); // Redirect ke halaman pelatihan setelah update
        }
    }
}
