<?php
class M_user extends CI_model
{
    public function register_act($data)
    {
        return $this->db->insert('tb_user', $data);
    }
    public function count_pengaduanproses($user)
    {
        $this->db->WHERE('status', 'proses');
        $this->db->WHERE('nik', $user['nik']);
        $this->db->FROM('tb_pengaduan');
        return $this->db->count_all_results();
    }
    public function count_pengaduanselesai($user)
    {
        $this->db->WHERE('status', 'selesai');
        $this->db->WHERE('nik', $user['nik']);
        $this->db->FROM('tb_pengaduan');
        return $this->db->count_all_results();
    }
    public function count_pengaduantolak($user)
    {
        $this->db->WHERE('status', 'tolak');
        $this->db->WHERE('nik', $user['nik']);
        $this->db->FROM('tb_pengaduan');
        return $this->db->count_all_results();
    }
    public function count_pengaduanverifikasi($user)
    {
        $this->db->WHERE('status', '0');
        $this->db->WHERE('nik', $user['nik']);
        $this->db->FROM('tb_pengaduan');
        return $this->db->count_all_results();
    }
    public function get_pengaduan($user)
    {
        $this->db->select('*');
        $this->db->WHERE('nik', $user['nik']);
        $this->db->from('tb_pengaduan');
        $this->db->join('tb_subject', 'tb_subject.id_subject = tb_pengaduan.id_subject');
        $this->db->order_by('id_pengaduan', 'ASC');
        return $query = $this->db->get()->result_array();
    }
    public function get_pengaduan_id($id_pengaduan)
    {
        $this->db->select('*');
        $this->db->from('tb_pengaduan');
        $this->db->WHERE('id_pengaduan', $id_pengaduan);
        $this->db->join('tb_subject', 'tb_subject.id_subject = tb_pengaduan.id_subject');
        return $query = $this->db->get()->result_array();
    }
    public function edit_pengaduan($id_pengaduan)
    {
        $this->db->select('*');
        $this->db->WHERE('id_pengaduan', $id_pengaduan);
        $this->db->from('tb_pengaduan');
        $this->db->join('tb_subject', 'tb_subject.id_subject = tb_pengaduan.id_subject');
        return $query = $this->db->get()->result_array();
    }
    public function edit_pengaduan_aksi($id_pengaduan, $data)
    {
        $this->db->where('id_pengaduan', $id_pengaduan);
        return $this->db->update('tb_pengaduan', $data);
    }
    public function hapus_pengaduan($id_pengaduan)
    {
        $this->db->WHERE('id_pengaduan', $id_pengaduan);
        return $this->db->delete('tb_pengaduan');
    }
    public function tambah_pengaduan($data)
    {
        return $this->db->insert('tb_pengaduan', $data);
    }
    public function edit_profile($nik, $data)
    {
        $this->db->where('nik', $nik);
        return $this->db->update('tb_user', $data);
    }
    public function edit_pass($nik, $data)
    {
        $this->db->where('nik', $nik);
        return $this->db->update('tb_user', $data);
    }
    public function forgot_pass_aksi($data, $email)
    {
        $this->db->where('email', $email);
        return $this->db->update('tb_user', $data);
    }
}
