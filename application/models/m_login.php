<?php
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class m_login extends CI_Model {

    //untuk login admin dan menyimpan sesi untuk admin
    function cek_login($username, $password) {
        $query = $this->db->query("SELECT * FROM user WHERE username='$username' AND password='$password'");
        if ($query->num_rows() > 0) {
            $sess_array = array();
            $row = $query->row();
            $sess_array = array('username' => $row->username, 'logged_in' => true);
            $this->session->set_userdata($sess_array);
            $status = array('status' => true);
        }

        redirect('admin/welcome');
    }
}
