<?php
defined('BASEPATH') or exit('No direct script access allowed');

class acara extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        header('Cache-Control: no-cache, must-revalidate, max-age=0');
        header('Cache-Control: post-check=0, pre-check=0', false);
        header('Pragma: no-cache');
        $this->load->model('m_acara');
        $this->load->model('m_agenda');
        $this->load->helper('tgl_indo');
    }
    public function index()
    {
        // $data['user'] = $this->m_driver->edit_data($where, 't_driver')->result();
        $tgl = date('Y-m-d');
        $where = array('tgl_plak' => $tgl);

        $data['isi'] = $this->m_acara->tampil_data($where, 't_agenda')->result();

        $this->load->view('list_acara', $data);
    }
}
