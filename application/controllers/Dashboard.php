<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    public function __construct(){
        parent::__construct();
        cek_login();
        $this->load->model('Peserta_model');
        
    }
    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['active_magang_count'] = $this->db->where('status_nama', 'Active')->count_all_results('tb_magang');
        $totalIntern = $this->getTotalIntern();
        $data['dataPeserta'] = $this->Peserta_model->getDataPeserta();

        // Menyimpan hasil query dalam data untuk ditampilkan di view
        $data['totalIntern'] = $totalIntern;
        // $this->load->view('templates/meta');
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('dashboard', $data);
        $this->load->view('templates/footer');
    }

    private function getTotalIntern() {
        $sqlMagang = "SELECT COUNT(DISTINCT magang_nama) as total_intern FROM tb_magang";
        $resultMagang = $this->db->query($sqlMagang);

        // Periksa apakah query berhasil dijalankan
        if (!$resultMagang) {
            die("Query failed: " . $this->db->error());
        }

        // Ambil hasil query
        $rowMagang = $resultMagang->row();
        $totalIntern = $rowMagang->total_intern;

        return $totalIntern;
    }


}
