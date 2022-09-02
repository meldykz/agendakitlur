<?php
defined('BASEPATH') or exit('No direct script access allowed');

class login extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        header('Cache-Control: no-cache, must-revalidate, max-age=0');
        header('Cache-Control: post-check=0, pre-check=0', false);
        header('Pragma: no-cache');
        $this->load->model('m_login');


        // if ($this->session->userdata("nama") == "") {
        //     redirect(base_url("login"));
        // } else {
        //     redirect(base_url("agenda"));
        // }
    }
    public function index()
    {
        $this->load->view('login');
    }

    function aksi_login()
    {
        $username = strtoupper($this->input->post('username'));
        $password = $this->input->post('password');
        $where = array(
            'user' => $username,
            'password' => md5($password)
        );
        $cek = $this->m_login->cek_login("t_user", $where)->num_rows();

        if ($cek > 0) {

            $data_session = array(
                'nama' => $username,
                'status' => "login"
            );

            $this->session->set_userdata($data_session);

            redirect(base_url("agenda"));
        } else {
            // echo "Username dan password salah !";
            redirect(base_url("login"));
        }
    }

    function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
}
