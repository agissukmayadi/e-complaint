<?php
class M_admin extends CI_model
{
    public function count_pengaduanproses()
    {
        $this->db->WHERE('status', 'proses');
        $this->db->FROM('tb_pengaduan');
        return $this->db->count_all_results();
    }
    public function count_pengaduan()
    {
        $this->db->FROM('tb_pengaduan');
        return $this->db->count_all_results();
    }
    public function count_pengaduanselesai()
    {
        $this->db->WHERE('status', 'selesai');
        $this->db->FROM('tb_pengaduan');
        return $this->db->count_all_results();
    }
    public function count_user()
    {
        $this->db->WHERE('status', '1');
        $this->db->FROM('tb_user');
        return $this->db->get();
    }
    public function count_petugas()
    {
        $this->db->WHERE('level', 'petugas');
        $this->db->FROM('tb_petugas');
        return $this->db->count_all_results();
    }
    public function get_faq()
    {
        return $this->db->get('tb_faq')->result_array();
    }

    public function tambah_faq($data)
    {
        return $this->db->insert('tb_faq', $data);
    }
    public function hapus_faq($id_faq)
    {
        $this->db->where('id_faq', $id_faq);
        return $this->db->delete('tb_faq');
    }
    public function hapus_petugas($id_petugas)
    {
        $this->db->where('id_petugas', $id_petugas);
        return $this->db->delete('tb_petugas');
    }
    public function get_faq_id($id_faq)
    {
        $this->db->where('id_faq', $id_faq);
        return $this->db->get('tb_faq')->row_array();
    }
    public function edit_faq($data, $id_faq)
    {
        $this->db->where('id_faq', $id_faq);
        return $this->db->update('tb_faq', $data);
    }
    public function get_user()
    {
        return $this->db->get('tb_user')->result_array();
    }
    public function get_user_id($nik)
    {
        $this->db->where('nik', $nik);
        return $this->db->get('tb_user')->row_array();
    }
    public function get_petugas()
    {
        $this->db->where('level', 'petugas');
        return $this->db->get('tb_petugas')->result_array();
    }
    public function tambah_petugas($data)
    {
        return $this->db->insert('tb_petugas', $data);
    }
    public function get_pengaduan()
    {
        $this->db->select('*');
        $this->db->FROM('tb_pengaduan');
        $this->db->JOIN('tb_subject', 'tb_subject.id_subject = tb_pengaduan.id_subject');
        return $this->db->get()->result_array();
    }
    public function get_pengaduan_id($id_pengaduan)
    {
        $this->db->select('*');
        $this->db->FROM('tb_pengaduan');
        $this->db->WHERE('id_pengaduan', $id_pengaduan);
        $this->db->JOIN('tb_subject', 'tb_subject.id_subject = tb_pengaduan.id_subject');
        return $this->db->get()->result_array();
    }
    public function get_pengaduan_user($nik)
    {
        $this->db->select('*');
        $this->db->FROM('tb_pengaduan');
        $this->db->WHERE('nik', $nik);
        $this->db->JOIN('tb_subject', 'tb_subject.id_subject = tb_pengaduan.id_subject');
        return $this->db->get()->result_array();
    }
    public function get_subject()
    {
        return $this->db->get('tb_subject')->result_array();
    }
    public function get_contact()
    {
        return $this->db->get('tb_contact')->result_array();
    }
    public function get_contact_id($id_contact)
    {
        $this->db->WHERE('id_contact', $id_contact);
        return $this->db->get('tb_contact')->row_array();
    }
    public function edit_contact($id_contact, $data)
    {
        $this->db->WHERE('id_contact', $id_contact);
        return $this->db->UPDATE('tb_contact', $data);
    }
    public function get_profile()
    {
        return $this->db->get('tb_profile')->result_array();
    }
    public function get_profile_id($id_profile)
    {
        $this->db->WHERE('id_profile', $id_profile);
        return $this->db->get('tb_profile')->row_array();
    }
    public function edit_profile($id_profile, $data)
    {
        $this->db->WHERE('id_profile', $id_profile);
        return $this->db->UPDATE('tb_profile', $data);
    }
    public function tambah_subject($data)
    {
        return $this->db->insert('tb_subject', $data);
    }
    public function hapus_subject($id_subject)
    {
        $this->db->where('id_subject', $id_subject);
        return $this->db->delete('tb_subject');
    }
    public function get_subject_id($id_subject)
    {
        $this->db->where('id_subject', $id_subject);
        return $this->db->get('tb_subject')->row_array();
    }
    public function edit_subject($data, $id_subject)
    {
        $this->db->where('id_subject', $id_subject);
        return $this->db->update('tb_subject', $data);
    }
}
