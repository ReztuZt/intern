<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller{
    public function index()
    {
       
    }

    function login()
    {
        $this->load->view('backend/login');
    }
    function register()
    {
        $this->load->view('backend/register');
    }
}
?>