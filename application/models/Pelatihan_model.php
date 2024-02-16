<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelatihan_model extends CI_Model
{

    public function get_data($table)
    {
        return $this->db->get($table);
    }

    public function tambahKelas()
    {
        $data = [
            "kelas_nama" => $this->input->post('kelas_nama', true),
            "course_nama" => $this->input->post('course_nama', true),
        ];

        $this->db->insert('tb_kelas', $data);
    }

    public function getCourseNama(){
        $query = $this->db->get('tb_pelatihan');
        return $query->result();
    }

    public function get_data_by_id($kelas_id)
    {
        $this->db->where('kelas_id', $kelas_id);
        return $this->db->get('tb_kelas'); // Mengembalikan hasil kueri sebagai objek CI_DB_result
    }


    public function get_kategori()
    {
        $query = $this->db->get('tb_pelatihan');
        return $query->result();
    }


    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function update_data($id_pelatihan, $data, $table)
    {
        $this->db->where('pelatihan_id', $id_pelatihan);
        $this->db->update($table, $data);
    }

    public function update_kelas($data, $table)
    {
        $this->db->where('kelas_id', $data['kelas_id']);
        $this->db->update($table, $data);
    }

    public function delete($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function hapusDataKelas($id)
    {
        $this->db->where('kelas_id', $id);
        $this->db->delete('tb_kelas');
    }
}
