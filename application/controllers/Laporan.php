<?php
defined('BASEPATH') or exit('No direct script access allowed');

class laporan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        header('Cache-Control: no-cache, must-revalidate, max-age=0');
        header('Cache-Control: post-check=0, pre-check=0', false);
        header('Pragma: no-cache');
        $this->load->model('m_agenda');
        $this->load->library('form_validation');
        $this->load->helper('tgl_indo');
        if ($this->session->userdata("nama") == "") {
            redirect(base_url("login"));
        }
    }
    public function index()
    {
        echo "ini adalah data";
    }

    function peserta($id = null)
    {
        if (!isset($id)) {
            redirect(site_url('agenda'));
        }

        $where = array('id_agenda' => $id);
        $dataj['judul'] = $this->m_agenda->ubah($where, 't_agenda')->result();
        $dataj['isi'] = $this->m_agenda->tampil_data_peserta($where, 't_peserta')->result();

        $this->load->view('lap_peserta', $dataj);
    }
    function agenda($id = null)
    {
        // if (!isset($id)) {
        //     redirect(site_url('agenda'));
        // }

        $data['isi'] = $this->m_agenda->tampil_data()->result();
        $this->load->view('lap_agenda', $data);
    }
}
