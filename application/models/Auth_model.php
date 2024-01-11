<?php

defined('BASEPATH') or exit('No direct script access allowed');

// Model untuk operasi terkait authentikasi dan manajemen pengguna.
class Auth_model extends CI_Model
{
    public $id = 'id_admin';

    // Memasukkan data pengguna baru ke dalam tabel 'admin'.
    public function insert($data)
    {
        // Melakukan operasi insert ke dalam tabel 'admin' dengan menggunakan data yang diberikan.
        $this->db->insert('admin', $data);
    }

    // Mendapatkan data admin berdasarkan username.
    public function get_username_admin($username)
    {
        $this->db->where('username', $username);
        return $this->db->get('admin')->row();
    }
}
?>
