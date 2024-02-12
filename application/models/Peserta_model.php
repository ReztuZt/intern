<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Peserta_model extends CI_Model
{

    public function get_data($table)
    {
        return $this->db->get($table);
    }

    public function getStatusNama(){
        $query = $this->db->get('tb_status');
        return $query->result();
    }

    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function update_data($data, $table)
    {
        $this->db->where('id_magang', $data['id_magang']);
        $this->db->update($table, $data);
    }
    
    public function delete($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }
    


}
