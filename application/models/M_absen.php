<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class m_absen extends CI_Model
{
    private $_table = "t_peserta";

    public function simpan($id = null)
    {
        $post = $this->input->post();
        $kodeunik = uniqid();
        $kode_id = $post["id"];
        $this->id_peserta = $kodeunik;
        $this->id_agenda = $kode_id;
        $this->nip = strtoupper($post["nip"]);
        $this->nama = strtoupper($post["nama"]);
        $this->nohp = $post["hp"];
        $this->email = $post["email"];
        $this->unit = strtoupper($post["unit"]);
        $this->jabatan = strtoupper($post["jabatan"]);
        $this->waktu = date('Y-m-d H:i:s');

        $folderPath = "upload/";

        $image_parts = explode(";base64,", $_POST['signed']);

        $image_type_aux = explode("image/", $image_parts[0]);

        $image_type = $image_type_aux[1];

        $image_base64 = base64_decode($image_parts[1]);

        $file = $folderPath . $kodeunik . '.' . $image_type;

        file_put_contents($file, $image_base64);
        $this->db->insert($this->_table, $this);

        // echo "sukses";

    }
}
