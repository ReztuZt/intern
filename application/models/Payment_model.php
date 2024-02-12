<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Payment_model extends CI_Model
{
    public function get_data($table)
    {
        return $this->db->get($table);
    }

    public function getMagangNip()
    {
        $query = $this->db->get('tb_magang');
        return $query->result();
    }
    
    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function update_data($data, $table)
    {
        $this->db->where('payment_id', $data['payment_id']);
        $this->db->update($table, $data);
    }

    public function delete($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function update_payment_image($payment_id, $file_name)
    {
        $data = array('file_payment' => $file_name);
        $this->db->where('payment_id', $payment_id);
        $this->db->update('tb_payment', $data);
    }

    // Get payment detail by payment_id
    public function get_payment_detail($payment_id)
    {
        $this->db->where('payment_id', $payment_id);
        return $this->db->get('tb_payment')->row();
    }

    public function update_payment_file($payment_id, $file_name) {
        // Update nama file pada record pembayaran dengan ID tertentu
        $data = array('payment_file' => $file_name);
        $this->db->where('payment_id', $payment_id);
        $this->db->update('tb_payment', $data);
    }

    public function save_payment($file_name) {
        // Simpan nama file ke dalam tabel tb_payment
        $data = array(
            'payment_file' => $file_name,
            // Tambahkan kolom-kolom lainnya sesuai kebutuhan
        );

        $this->db->insert('tb_payment', $data);

        // Jika perlu, Anda juga dapat mengembalikan ID yang baru saja diinsert
        return $this->db->insert_id();
    }
}