<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class m_agenda extends CI_Model
{
    private $_table = "t_agenda";

    function tampil_data()
    {
        $this->db->limit(200);
        $this->db->order_by('tgl_plak', 'DESC');
        return $this->db->get('t_agenda');
    }

    function tampil_data_peserta($where, $table)
    {
        $this->db->order_by('waktu', 'DESC');    
        return $this->db->get_where($table, $where);
    }

    function simpan()
    {
        $post = $this->input->post();
        $id_agenda = uniqid();
        $this->id_agenda = $id_agenda;
        $this->agenda = $post["agenda"];
        $this->tgl_plak = $post["tgl"];
        $this->waktu = $post["waktu"];
        $this->tempat = $post["tempat"];
        $this->pic = $post["pic"];
        $this->input = $this->session->userdata("nama");
        $this->tgl_buat = date('Y-m-d H:i:s');
        $this->db->insert($this->_table, $this);
        // echo "Signature Uploaded Successfully.";
        redirect(site_url('agenda'));
    }

    function hapus($id)
    {
        return $this->db->delete($this->_table, array("id_agenda" => $id));
    }

    function ubah($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    function update()
    {
        $post = $this->input->post();
        $this->agenda = $post["agenda"];
        $this->tgl_plak = $post["tgl"];
        $this->waktu = $post["waktu"];
        $this->tempat = $post["tempat"];
        $this->pic = $post["pic"];
        $this->input = $this->session->userdata("nama");
        $this->tgl_buat = date('Y-m-d H:i:s');

        $this->db->update($this->_table, $this, array('id_agenda' => $post['id_agenda']));

        redirect(site_url('agenda'));
    }
}
