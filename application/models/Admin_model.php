<?php
// application/models/Admin_model.php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

    public function get_admin_info($username) {
        $this->db->where('username', $username);
        $query = $this->db->get('admin');  // Sesuaikan dengan nama tabel admin

        return $query->row_array();
    }

    // Metode lainnya sesuai kebutuhan
}
?>