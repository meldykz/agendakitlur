<?php
defined('BASEPATH') or exit('No direct script access allowed');

class agenda extends CI_Controller
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
        $data['isi'] = $this->m_agenda->tampil_data()->result();
        $this->load->view('tabel_agenda', $data);
    }


    function add()
    {
        $this->load->view('add_agenda');
    }

    function save()
    {
        $modal = $this->m_agenda;
        $this->form_validation->set_rules('agenda', 'Agenda Kosong', 'required');
        $this->form_validation->set_rules('tgl', 'Tanggal Kosong', 'required');
        $this->form_validation->set_rules('waktu', 'Waktu Kosong', 'required');
        $this->form_validation->set_rules('tempat', 'Tempat Kosong', 'required');
        $this->form_validation->set_rules('pic', 'Pic Kosong', 'required');

        if ($this->form_validation->run() != false) {
            // echo "Form validation oke";
            $modal->simpan();
        } else {
            $this->load->view('add_agenda');
        }
    }

    function peserta($id = null)
    {
        if (!isset($id)) {
            redirect(site_url('agenda'));
        }
        $where = array('id_agenda' => $id);
        $data['judul'] = $this->m_agenda->ubah($where, 't_agenda')->result();
        $data['isi'] = $this->m_agenda->tampil_data_peserta($where, 't_peserta')->result();
        // $data['isi'] = $this->m_agenda->tampil_data_peserta()->result();
        $this->load->view('tabel_peserta', $data);
    }

    function edit($id = null)
    {
        if (!isset($id)) {
            redirect(site_url('agenda'));
        }
        $modal = $this->m_agenda;

        $this->form_validation->set_rules('agenda', 'Agenda Kosong', 'required');
        $this->form_validation->set_rules('tgl', 'Tanggal Kosong', 'required');
        $this->form_validation->set_rules('waktu', 'Waktu Kosong', 'required');
        $this->form_validation->set_rules('tempat', 'Tempat Kosong', 'required');
        $this->form_validation->set_rules('pic', 'Pic Kosong', 'required');

        if ($this->form_validation->run() != false) {
            // echo "Form validation oke";
            $modal->update();
        } else {
            $where = array('id_agenda' => $id);
            $data['isi'] = $this->m_agenda->ubah($where, 't_agenda')->result();
            $this->load->view('edit_agenda', $data);
        }
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->m_agenda->hapus($id)) {
            redirect(site_url('agenda'));
        }
    }

    public function update()
    {
        $modal = $this->m_agenda;
        $this->form_validation->set_rules('agenda', 'Agenda Kosong', 'required');
        $this->form_validation->set_rules('tgl', 'Tanggal Kosong', 'required');
        $this->form_validation->set_rules('waktu', 'Waktu Kosong', 'required');
        $this->form_validation->set_rules('tempat', 'Tempat Kosong', 'required');
        $this->form_validation->set_rules('pic', 'Pic Kosong', 'required');

        if ($this->form_validation->run() != false) {
            // echo "Form validation oke";
            $modal->simpan();
        } else {
            $this->load->view('add_agenda');
        }
    }
}
