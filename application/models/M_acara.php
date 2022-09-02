<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class m_acara extends CI_Model
{
    private $_table = "t_agenda";

    function tampil_data($where, $table)
    {
        $this->db->order_by('waktu', 'ASC');

        return $this->db->get_where($table, $where);
    }
}
