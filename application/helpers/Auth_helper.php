<?php 
    defined('BASEPATH') or exit ('No direct script access allowed');

    function cek_login(){
        $CI = &get_instance();
        $username = $CI->session->username;

        if($username == NULL){
            $CI->session->set_flashdata('message', '<div class="alert alert-danger"> Anda Harus Login</div>');

            redirect('auth/login');
        }

    }
?>