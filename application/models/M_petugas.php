<?php
class M_petugas extends CI_model
{
    public function count_pengaduan()
    {
        $this->db->FROM('tb_pengaduan');
        return $this->db->count_all_results();
    }
    public function count_user()
    {
        $this->db->FROM('tb_user');
        return $this->db->count_all_results();
    }
    public function count_pengaduanproses()
    {
        $this->db->WHERE('status', 'proses');
        $this->db->FROM('tb_pengaduan');
        return $this->db->count_all_results();
    }
    public function count_pengaduanselesai()
    {
        $this->db->WHERE('status', 'selesai');
        $this->db->FROM('tb_pengaduan');
        return $this->db->count_all_results();
    }
    public function count_user0()
    {
        $this->db->WHERE('status', '0');
        $this->db->FROM('tb_user');
        return $this->db->count_all_results();
    }
    public function count_user1()
    {
        $this->db->WHERE('status', '1');
        $this->db->FROM('tb_user');
        return $this->db->count_all_results();
    }
    public function get_user_status()
    {
        $this->db->WHERE('status', '1');
        $this->db->OR_WHERE('status', '2');
        $this->db->OR_WHERE('status', '3');
        $this->db->order_by('date_created', 'DESC');
        return $this->db->get('tb_user')->result_array();
    }
    public function get_user_id($nik)
    {
        $this->db->where('nik', $nik);
        return $this->db->get('tb_user')->row_array();
    }
    public function get_user_verifikasi()
    {
        $this->db->WHERE('status', '0');
        $this->db->order_by('date_created', 'DESC');
        return $this->db->get('tb_user')->result_array();
    }
    public function verifikasi_aksi($nik, $data)
    {
        $this->db->where('nik', $nik);
        return $this->db->update('tb_user', $data);
    }
    public function get_pengaduan()
    {
        $this->db->select('*');
        $this->db->from('tb_pengaduan');
        $this->db->WHERE('status !=', '0');
        $this->db->JOIN('tb_subject', 'tb_subject.id_subject = tb_pengaduan.id_subject');
        return $this->db->get()->result_array();
    }
    public function get_pengaduan_verifikasi()
    {
        $this->db->select('*');
        $this->db->from('tb_pengaduan');
        $this->db->WHERE('status', '0');
        $this->db->JOIN('tb_subject', 'tb_subject.id_subject = tb_pengaduan.id_subject');
        return $this->db->get()->result_array();
    }
    public function verifikasi_pengaduan($id_pengaduan, $data)
    {
        $this->db->where('id_pengaduan', $id_pengaduan);
        return $this->db->update('tb_pengaduan', $data);
    }
    public function get_pengaduan_id($id_pengaduan)
    {
        $this->db->select('*');
        $this->db->FROM('tb_pengaduan');
        $this->db->WHERE('id_pengaduan', $id_pengaduan);
        $this->db->JOIN('tb_subject', 'tb_subject.id_subject = tb_pengaduan.id_subject');
        return $this->db->get()->result_array();
    }
    public function update_pengaduan($id_pengaduan)
    {
        $data = [
            'status' => "selesai"
        ];
        $this->db->Where('id_pengaduan', $id_pengaduan);
        return $this->db->UPDATE('tb_pengaduan', $data);
    }
    public function tanggapi_pengaduan($data)
    {
        return $this->db->insert('tb_tanggapan', $data);
    }
    public function get_subject()
    {
        return $this->db->get('tb_subject')->result_array();
    }
}
