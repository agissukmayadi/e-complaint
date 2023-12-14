<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_admin');
        $petugas = $this->db->get_where('tb_petugas', ['username' => $this->session->userdata('username'), 'level' => 'admin'])->row_array();
        if (!$petugas) {
            $this->session->set_flashdata('failed_msg', '
            toastr.info("Silahkan login terlebih dahulu")');
            redirect('Auth_petugas');
        }
    }
    public function index()
    {
        $data['admin'] = $this->db->get_where('tb_petugas', ['username' => $this->session->userdata('username'), 'level' => 'admin'])->row_array();
        $data['count_pengaduan'] = $this->M_admin->count_pengaduan();
        $data['count_pengaduanproses'] = $this->M_admin->count_pengaduanproses();
        $data['count_pengaduanselesai'] = $this->M_admin->count_pengaduanselesai();
        $data['count_user'] = $this->M_admin->count_user();
        $data['count_petugas'] = $this->M_admin->count_petugas();
        $data['title'] = "Dashboard";
        $this->load->view('admin/header', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('admin/footer', $data);
    }
    public function data_faq()
    {
        $data['admin'] = $this->db->get_where('tb_petugas', ['username' => $this->session->userdata('username'), 'level' => 'admin'])->row_array();
        $data['data_faq'] = $this->M_admin->get_faq();
        $data['title'] = "FAQ";
        $this->load->view('admin/header', $data);
        $this->load->view('admin/data_faq', $data);
        $this->load->view('admin/footer', $data);
    }
    public function tambah_faq()
    {
        $data['admin'] = $this->db->get_where('tb_petugas', ['username' => $this->session->userdata('username'), 'level' => 'admin'])->row_array();
        $data['title'] = "FAQ";
        $this->load->view('admin/header', $data);
        $this->load->view('admin/tambah_faq', $data);
        $this->load->view('admin/footer', $data);
    }
    public function tambah_faq_aksi()
    {
        $this->form_validation->set_rules('question', 'question', 'required|trim', [
            'required' => 'Pertanyaan belum di isi!'
        ]);
        $this->form_validation->set_rules('answer', 'Answer', 'required|trim', [
            'required' => 'Jawaban belum di isi!'
        ]);
        if (!$this->form_validation->run()) {
            $data['admin'] = $this->db->get_where('tb_petugas', ['username' => $this->session->userdata('username'), 'level' => 'admin'])->row_array();
            $data['title'] = "FAQ";
            $this->load->view('admin/header', $data);
            $this->load->view('admin/tambah_faq', $data);
            $this->load->view('admin/footer', $data);
        } else {
            $data = [
                'question' => $this->input->POST('question'),
                'answer' => $this->input->POST('answer'),
                'date_created' => time()
            ];
            $this->M_admin->tambah_faq($data);
            $this->session->set_flashdata('success_msg', '
            toastr.success("Data FAQ berhasil di tambahkan")');
            redirect('Admin/data_faq');
        }
    }
    public function hapus_faq($id_faq)
    {
        $this->M_admin->hapus_faq($id_faq);
        $this->session->set_flashdata('success_msg', '
        toastr.success("Data FAQ berhasil di hapus")');
        redirect('Admin/data_faq');
    }
    public function hapus_petugas($id_petugas)
    {
        $this->M_admin->hapus_petugas($id_petugas);
        $this->session->set_flashdata('success_msg', '
        toastr.success("Data Petugas berhasil di hapus")');
        redirect('Admin/data_petugas');
    }
    public function edit_faq($id_faq)
    {
        $data['admin'] = $this->db->get_where('tb_petugas', ['username' => $this->session->userdata('username'), 'level' => 'admin'])->row_array();
        $data['data_faq'] = $this->M_admin->get_faq_id($id_faq);
        $data['title'] = "FAQ";
        $this->load->view('admin/header', $data);
        $this->load->view('admin/edit_faq', $data);
        $this->load->view('admin/footer', $data);
    }
    public function edit_faq_aksi($id_faq)
    {
        $this->form_validation->set_rules('question', 'question', 'required|trim', [
            'required' => 'Pertanyaan belum di isi!'
        ]);
        $this->form_validation->set_rules('answer', 'Answer', 'required|trim', [
            'required' => 'Jawaban belum di isi!'
        ]);
        if (!$this->form_validation->run()) {
            $data['admin'] = $this->db->get_where('tb_petugas', ['username' => $this->session->userdata('username'), 'level' => 'admin'])->row_array();
            $data['data_faq'] = $this->M_admin->get_faq_id($id_faq);
            $data['title'] = "FAQ";
            $this->load->view('admin/header', $data);
            $this->load->view('admin/edit_faq', $data);
            $this->load->view('admin/footer', $data);
        } else {
            $data = [
                'question' => $this->input->POST('question'),
                'answer' => $this->input->POST('answer'),
                'date_created' => time()
            ];
            $this->M_admin->edit_faq($data, $id_faq);
            $this->session->set_flashdata('success_msg', '
            toastr.success("Data FAQ berhasil di simpan")');
            redirect('Admin/data_faq');
        }
    }
    public function data_user()
    {
        $data['admin'] = $this->db->get_where('tb_petugas', ['username' => $this->session->userdata('username'), 'level' => 'admin'])->row_array();
        $data['data_user'] = $this->M_admin->get_user();
        $data['title'] = "User";
        $this->load->view('admin/header', $data);
        $this->load->view('admin/data_user', $data);
        $this->load->view('admin/footer', $data);
    }
    public function detail_user($nik)
    {
        $data['admin'] = $this->db->get_where('tb_petugas', ['username' => $this->session->userdata('username'), 'level' => 'admin'])->row_array();
        $data['detail_user'] = $this->M_admin->get_user_id($nik);
        $data['pengaduan_user'] = $this->M_admin->get_pengaduan_user($nik);
        $data['title'] = "User";
        $this->load->view('admin/header', $data);
        $this->load->view('admin/detail_user', $data);
        $this->load->view('admin/footer', $data);
    }
    public function data_petugas()
    {
        $data['admin'] = $this->db->get_where('tb_petugas', ['username' => $this->session->userdata('username'), 'level' => 'admin'])->row_array();
        $data['data_petugas'] = $this->M_admin->get_petugas();
        $data['title'] = "Petugas";
        $this->load->view('admin/header', $data);
        $this->load->view('admin/data_petugas', $data);
        $this->load->view('admin/footer', $data);
    }
    public function tambah_petugas()
    {
        $data['admin'] = $this->db->get_where('tb_petugas', ['username' => $this->session->userdata('username'), 'level' => 'admin'])->row_array();
        $data['title'] = "Petugas";
        $this->load->view('admin/header', $data);
        $this->load->view('admin/tambah_petugas', $data);
        $this->load->view('admin/footer', $data);
    }
    public function tambah_petugas_aksi()
    {
        $this->form_validation->set_rules('nama_petugas', 'Nama_petugas', 'required|trim', [
            'required' => 'Nama Petugas tidak boleh kosong!'
        ]);
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[tb_petugas.username]|min_length[5]|alpha_dash', [
            'required' => 'Username tidak boleh kosong!',
            'is_unique' => 'Username sudah digunakan!',
            'min_length' => 'Username terlalu pendek!',
            'alpha_dash' => 'Username tidak valid!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[5]|matches[password1]', [
            'required' => 'Password tidak boleh kosong!',
            'matches' => 'Password tidak cocok!',
            'min_length' => 'Password terlalu pendek!'
        ]);
        $this->form_validation->set_rules('password1', 'Password1', 'required|trim|matches[password]', [
            'required' => 'Password tidak boleh kosong!',
            'matches' => 'Password tidak cocok!'
        ]);
        $this->form_validation->set_rules('telp', 'Telp', 'required|trim|is_unique[tb_petugas.telp]|min_length[10]|max_length[13]', [
            'required' => 'Nomor telepon tidak boleh kosong!',
            'is_unique' => 'Nomor telepon sudah digunakan!',
            'min_length' => 'Nomor telepon terlalu pendek!',
            'max_length' => 'Nomor telepon terlalu panjang!'
        ]);

        if (!$this->form_validation->run()) {
            $data['admin'] = $this->db->get_where('tb_petugas', ['username' => $this->session->userdata('username'), 'level' => 'admin'])->row_array();
            $data['title'] = "Petugas";
            $this->load->view('admin/header', $data);
            $this->load->view('admin/tambah_petugas', $data);
            $this->load->view('admin/footer', $data);
        } else {
            $data = [
                'nama_petugas' => htmlspecialchars($this->input->POST('nama_petugas', true)),
                'username' => strtolower($this->input->POST('username', true)),
                'password' => password_hash($this->input->POST('password'), PASSWORD_DEFAULT),
                'telp' => htmlspecialchars($this->input->POST('telp', true)),
                'level' => 'petugas',
                'date_created' => time()
            ];
            $this->M_admin->tambah_petugas($data);
            $this->session->set_flashdata('success_msg', '
            toastr.success("Data Petugas berhasil di tambahkan")');
            redirect('Admin/data_petugas');
        }
    }
    public function data_pengaduan()
    {
        $data['admin'] = $this->db->get_where('tb_petugas', ['username' => $this->session->userdata('username'), 'level' => 'admin'])->row_array();
        $data['title'] = "Pengaduan";
        $data['data_pengaduan'] = $this->M_admin->get_pengaduan();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/data_pengaduan', $data);
        $this->load->view('admin/footer', $data);
    }
    public function detail_pengaduan($id_pengaduan)
    {
        $data['admin'] = $this->db->get_where('tb_petugas', ['username' => $this->session->userdata('username'), 'level' => 'admin'])->row_array();
        $data['title'] = "Pengaduan";
        $data['detail_pengaduan'] = $this->M_admin->get_pengaduan_id($id_pengaduan);
        $this->load->view('admin/header', $data);
        $this->load->view('admin/detail_pengaduan', $data);
        $this->load->view('admin/footer', $data);
    }
    public function data_subject()
    {
        $data['admin'] = $this->db->get_where('tb_petugas', ['username' => $this->session->userdata('username'), 'level' => 'admin'])->row_array();
        $data['data_subject'] = $this->M_admin->get_subject();
        $data['title'] = "Subject";
        $this->load->view('admin/header', $data);
        $this->load->view('admin/data_subject', $data);
        $this->load->view('admin/footer', $data);
    }
    public function tambah_subject()
    {
        $data['admin'] = $this->db->get_where('tb_petugas', ['username' => $this->session->userdata('username'), 'level' => 'admin'])->row_array();
        $data['title'] = "Subject";
        $this->load->view('admin/header', $data);
        $this->load->view('admin/tambah_subject', $data);
        $this->load->view('admin/footer', $data);
    }
    public function tambah_subject_aksi()
    {
        $this->form_validation->set_rules('subject', 'subject', 'required|trim', [
            'required' => 'Subject belum di isi!'
        ]);
        if (!$this->form_validation->run()) {
            $data['admin'] = $this->db->get_where('tb_petugas', ['username' => $this->session->userdata('username'), 'level' => 'admin'])->row_array();
            $data['title'] = "Subject";
            $this->load->view('admin/header', $data);
            $this->load->view('admin/tambah_subject', $data);
            $this->load->view('admin/footer', $data);
        } else {
            $data = [
                'subject' => $this->input->POST('subject')
            ];
            $this->M_admin->tambah_subject($data);
            $this->session->set_flashdata('success_msg', '
            toastr.success("Data Subject berhasil di tambahkan")');
            redirect('Admin/data_subject');
        }
    }
    public function hapus_subject($id_subject)
    {
        $this->M_admin->hapus_subject($id_subject);
        $this->session->set_flashdata('success_msg', '
        toastr.success("Data Subject berhasil di hapus")');
        redirect('Admin/data_subject');
    }
    public function edit_subject($id_subject)
    {
        $data['admin'] = $this->db->get_where('tb_petugas', ['username' => $this->session->userdata('username'), 'level' => 'admin'])->row_array();
        $data['data_subject'] = $this->M_admin->get_subject_id($id_subject);
        $data['title'] = "Subject";
        $this->load->view('admin/header', $data);
        $this->load->view('admin/edit_subject', $data);
        $this->load->view('admin/footer', $data);
    }
    public function edit_subject_aksi($id_subject)
    {
        $this->form_validation->set_rules('subject', 'subject', 'required|trim', [
            'required' => 'Subject belum di isi!'
        ]);
        if (!$this->form_validation->run()) {
            $data['admin'] = $this->db->get_where('tb_petugas', ['username' => $this->session->userdata('username'), 'level' => 'admin'])->row_array();
            $data['data_subject'] = $this->M_admin->get_subject_id($id_subject);
            $data['title'] = "Subject";
            $this->load->view('admin/header', $data);
            $this->load->view('admin/edit_subject', $data);
            $this->load->view('admin/footer', $data);
        } else {
            $data = [
                'subject' => $this->input->POST('subject')
            ];
            $this->M_admin->edit_subject($data, $id_subject);
            $this->session->set_flashdata('success_msg', '
            toastr.success("Data Subject berhasil di hapus")');
            redirect('Admin/data_subject');
        }
    }
    public function data_contact()
    {
        $data['admin'] = $this->db->get_where('tb_petugas', ['username' => $this->session->userdata('username'), 'level' => 'admin'])->row_array();
        $data['data_contact'] = $this->M_admin->get_contact();
        $data['title'] = "Contact";
        $this->load->view('admin/header', $data);
        $this->load->view('admin/data_contact', $data);
        $this->load->view('admin/footer', $data);
    }
    public function edit_contact($id_contact)
    {
        $data['admin'] = $this->db->get_where('tb_petugas', ['username' => $this->session->userdata('username'), 'level' => 'admin'])->row_array();
        $data['data_contact'] = $this->M_admin->get_contact_id($id_contact);
        $data['title'] = "Contact";
        $this->load->view('admin/header', $data);
        $this->load->view('admin/edit_contact', $data);
        $this->load->view('admin/footer', $data);
    }
    public function edit_contact_aksi($id_contact)
    {
        $this->form_validation->set_rules('location', 'Location', 'required|trim', [
            'required' => 'Location belum di isi!'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', [
            'required' => 'Email belum di isi!'
        ]);
        $this->form_validation->set_rules('telp', 'Telp', 'required|trim', [
            'required' => 'Nomor Telepon belum di isi!'
        ]);
        if (!$this->form_validation->run()) {
            $data['admin'] = $this->db->get_where('tb_petugas', ['username' => $this->session->userdata('username'), 'level' => 'admin'])->row_array();
            $data['data_contact'] = $this->M_admin->get_contact_id($id_contact);
            $data['title'] = "Contact";
            $this->load->view('admin/header', $data);
            $this->load->view('admin/edit_contact', $data);
            $this->load->view('admin/footer', $data);
        } else {
            $data = [
                'location' => $this->input->POST('location'),
                'email' => $this->input->POST('email'),
                'telp' => $this->input->POST('telp')
            ];
            $this->M_admin->edit_contact($id_contact, $data);
            $this->session->set_flashdata('success_msg', '
            toastr.success("Data Contact berhasil di simpan")');
            redirect('Admin/data_contact');
        }
    }
    public function data_profile()
    {
        $data['admin'] = $this->db->get_where('tb_petugas', ['username' => $this->session->userdata('username'), 'level' => 'admin'])->row_array();
        $data['data_profile'] = $this->M_admin->get_profile();
        $data['title'] = "Profile";
        $this->load->view('admin/header', $data);
        $this->load->view('admin/data_profile', $data);
        $this->load->view('admin/footer', $data);
    }
    public function edit_profile($id_profile)
    {
        $data['admin'] = $this->db->get_where('tb_petugas', ['username' => $this->session->userdata('username'), 'level' => 'admin'])->row_array();
        $data['data_profile'] = $this->M_admin->get_profile_id($id_profile);
        $data['title'] = "Profile";
        $this->load->view('admin/header', $data);
        $this->load->view('admin/edit_profile', $data);
        $this->load->view('admin/footer', $data);
    }
    public function edit_profile_aksi($id_profile)
    {
        $this->form_validation->set_rules('header', 'Header', 'required|trim', [
            'required' => 'Header belum di isi!'
        ]);
        $this->form_validation->set_rules('footer', 'Footer', 'required|trim', [
            'required' => 'Footer belum di isi!'
        ]);
        if (!$this->form_validation->run()) {
            $data['admin'] = $this->db->get_where('tb_petugas', ['username' => $this->session->userdata('username'), 'level' => 'admin'])->row_array();
            $data['data_profile'] = $this->M_admin->get_profile_id($id_profile);
            $data['title'] = "Profile";
            $this->load->view('admin/header', $data);
            $this->load->view('admin/edit_profile', $data);
            $this->load->view('admin/footer', $data);
        } else {
            $data = [
                'header' => $this->input->POST('header'),
                'footer' => $this->input->POST('footer')
            ];
            $this->M_admin->edit_profile($id_profile, $data);
            $this->session->set_flashdata('success_msg', '
            toastr.success("Data Profile berhasil di simpan")');
            redirect('Admin/data_profile');
        }
    }
    public function generate_laporan()
    {
        $data['data_pengaduan'] = $this->M_admin->get_pengaduan();
        $data['contact'] = $this->db->get('tb_contact')->row_array();
        $this->load->view('admin/generate_laporan', $data);
    }
    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('password');
        $this->session->set_flashdata('success_msg', '
        toastr.success("Logout telah berhasil")');
        redirect('Auth_petugas');
    }
}
