<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile_model extends CI_Model
{
    public function get_id_admin_admin($id_admin) {
        $this->db->where('id_admin', $id_admin);
        return $this->db->get('admin')->row_array();
    }

    // Fungsi untuk memperbarui profil admin
    public function update_profile($id_admin, $data) {
        $this->db->where('id_admin', $id_admin);
        $this->db->update('admin', $data);
    }
    
    public function update_image($id_admin, $data) {
        $this->db->where('id_admin', $id_admin);
        $this->db->update('admin', $data);
    }


}
?>
