<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Peserta extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Peserta_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Peserta';
        $data['peserta'] = $this->Peserta_model->get_data('tb_magang')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('peserta', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Peserta';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('tambah_peserta');
        $this->load->view('templates/footer');
    }

    public function tambah_aksi()
    {
        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->tambah();
        } else {
            $data = array(
                'magang_nama'    => $this->input->post('magang_nama'),
                'magang_email'   => $this->input->post('magang_email'),
                'magang_telp'    => $this->input->post('magang_telp'),
                'magang_alamat'  => $this->input->post('magang_alamat'),
                'status_nama'    => $this->input->post('status_nama'),
            );
            $this->Peserta_model->insert_data($data, 'tb_magang');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
           <strong>Sukses!</strong> Data berhasil ditambahkan.
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>');
            redirect('peserta');
        }
    }

    public function edit_aksi($id_magang)
    {
        $this->_rules();
    
        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $data = array(
                'id_magang'     => $id_magang,
                'magang_nama'   => $this->input->post('magang_nama'),
                'magang_email'  => $this->input->post('magang_email'),
                'magang_telp'   => $this->input->post('magang_telp'),
                'magang_alamat' => $this->input->post('magang_alamat'),
                'status_nama'   => $this->input->post('status_nama'),
            );
    
            $this->Peserta_model->update_data($data, 'tb_magang');
    
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Sukses!</strong> Data berhasil diubah.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>');
    
            redirect('peserta');
        }
    }
    


    public function _rules()
    {
        $this->form_validation->set_rules('magang_nama', 'Nama Magang', 'required', array(
            'required' => '%s harus diisi !!'
        ));
        $this->form_validation->set_rules('magang_email', 'Email', 'required', array(
            'required' => '%s harus diisi !!'
        ));
        $this->form_validation->set_rules('magang_telp', 'No Telepon', 'required', array(
            'required' => '%s harus diisi !!'
        ));
        $this->form_validation->set_rules('magang_alamat', 'Alamat', 'required', array(
            'required' => '%s harus diisi !!'
        ));
        $this->form_validation->set_rules('status_nama', 'Status', 'required', array(
            'required' => '%s harus diisi !!'
        ));
    }

    public function delete($id){
        $where = array('id_magang' => $id);
    
        $this->Peserta_model->delete($where, 'tb_magang');
    
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Sukses!</strong> Data berhasil dihapus.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>');
    
        redirect('peserta');
    }
    

}
