<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function index()
    {
        $this->load->view('template/auth_header');

        $this->load->view('auth/index');
        $this->load->view('template/auth_footer');
    }
}
