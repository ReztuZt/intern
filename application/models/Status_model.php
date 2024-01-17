<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Status_model extends CI_Model
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
        $this->db->where('status_id', $data['status_id']);
        $this->db->update($table, $data);
    }

    public function delete($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function getLimitedStatus($table, $limit)
    {
        $this->db->distinct();
        $this->db->select('status_nama');
        $this->db->from($table);
        $this->db->limit($limit);

        $query = $this->db->get();
        return $query;
    }


    public function getMagangNamaByStatus($table, $status_nama)
    {
        $this->db->select('magang_nama');
        $this->db->from($table);
        $this->db->where('status_nama', $status_nama);

        $query = $this->db->get();
        return $query;
    }
}
