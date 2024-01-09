<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelatihan_model extends CI_Model
{

    public function get_data($table)
    {
        return $this->db->get($table);
    }

    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function update_data($data, $table)
    {
        $this->db->where('pelatihan_id', $data['pelatihan_id']);
        $this->db->update($table, $data);
    }
    
    public function delete($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function get_data_by_magang_nip($table, $magang_nip)
    {
        // Ambil data dari tabel berdasarkan magang_nip
        $this->db->where('magang_nip', $magang_nip);
        return $this->db->get($table);
    }

}
