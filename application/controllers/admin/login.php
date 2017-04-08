<?php

class Login extends CI_Controller {
    /* Konstructor : wajib ada !!  */

    function __construct() {
        parent::__construct();
        $this->load->model('m_login');
    }
//fungsi yang pertama kali dipanggil (default)
    function index() {
        if ($this->session->userdata('logged_in')) {
            redirect('admin/welcome', 'refresh');
        } else {
            $this->load->helper(array('form'));
            $this->load->view('login');
        }
    }

//fungsi untuk pengecekan data
    function cek_login() {
        if ($this->input->post('username', true) == "" && $this->input->post('password', true) == "") {
            redirect('', 'refresh');
        }

        $username = $this->input->post('username', true);
        $password = $this->input->post('password', true);
        $this->m_login->cek_login($username, $password);
    }

}
