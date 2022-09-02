<?php
defined('BASEPATH') or exit('No direct script access allowed');

class absen extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        header('Cache-Control: no-cache, must-revalidate, max-age=0');
        header('Cache-Control: post-check=0, pre-check=0', false);
        header('Pragma: no-cache');
        $this->load->model('m_absen');
        $this->load->model('m_agenda');
        $this->load->library('form_validation');
        $this->load->helper('tgl_indo');
    }

    public function index()
    {


        $this->load->view('login');
        // echo "Agenda";
    }

    function acara($id = null)
    {
        // $this->load->view('ttd');
        if (!isset($id)) {
            redirect(site_url(''));
        }

        $where = array('id_agenda' => $id);

        $data['isi'] = $this->m_agenda->ubah($where, 't_agenda')->result();
        $data['org'] = $this->m_agenda->tampil_data_peserta($where, 't_peserta')->result();




        // echo var_dump($data);
        $this->load->view('tabel_absen', $data);
    }


    function sukses($id = null)
    {
        if (!isset($id)) {
            redirect(site_url('agenda'));
        }
        $where = array('id_agenda' => $id);
        $data['isi'] = $this->m_agenda->ubah($where, 't_agenda')->result();
        $this->load->view('sukses', $data);
    }

    function add($id = null)
    {
        if (!isset($id)) {
            redirect(site_url('login'));
        }

        $modal = $this->m_absen;
        $this->form_validation->set_rules('nip', 'NIP', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('hp', 'Nomor HP', 'required|numeric');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('unit', 'Unit', 'required');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
        $this->form_validation->set_rules('signed', 'Tanda Tangan', 'required');

        if ($this->form_validation->run() != false) {
            // echo "Form validation oke";
            $modal->simpan($id);
            redirect(site_url('absen/sukses/' . $id));
        } else {
            $where = array('id_agenda' => $id);

            $data['isi'] = $this->m_agenda->ubah($where, 't_agenda')->result();
            $data['org'] = $this->m_agenda->tampil_data_peserta($where, 't_peserta')->result();


            $this->load->view('tabel_absen', $data);
            // $this->load->view('tabel_absen', $data);
        }
    }
}
