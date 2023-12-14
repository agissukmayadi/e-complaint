<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_user');
        $user = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
        if (!$user) {
            $this->session->set_flashdata('failed_msg', '
            toastr.info("Silahkan login terlebih dahulu")');
            redirect('Auth_user');
        }
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
        $user = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = "Dashboard";
        $data['count_pengaduanproses'] = $this->M_user->count_pengaduanproses($user);
        $data['count_pengaduanselesai'] = $this->M_user->count_pengaduanselesai($user);
        $data['count_pengaduantolak'] = $this->M_user->count_pengaduantolak($user);
        $data['count_pengaduanverifikasi'] = $this->M_user->count_pengaduanverifikasi($user);
        $this->load->view('user/header', $data);
        $this->load->view('user/index', $data);
        $this->load->view('user/footer', $data);
    }
    public function data_pengaduan()
    {
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
        $user = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = "Data Pengaduan";
        $data['data_pengaduan'] = $this->M_user->get_pengaduan($user);
        $this->load->view('user/header', $data);
        $this->load->view('user/data_pengaduan', $data);
        $this->load->view('user/footer', $data);
    }
    public function generate_laporan()
    {
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
        $user = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
        $data['data_pengaduan'] = $this->M_user->get_pengaduan($user);
        $data['contact'] = $this->db->get('tb_contact')->row_array();
        $this->load->view('user/generate_laporan', $data);
    }
    public function detail_pengaduan($id_pengaduan)
    {
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
        $user = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = "Data Pengaduan";
        $data['detail_pengaduan'] = $this->M_user->get_pengaduan_id($id_pengaduan);
        $this->load->view('user/header', $data);
        $this->load->view('user/detail_pengaduan', $data);
        $this->load->view('user/footer', $data);
    }
    public function tambah_pengaduan()
    {
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = "Data Pengaduan";
        $data['subject'] = $this->db->get('tb_subject')->result_array();
        $this->load->view('user/header', $data);
        $this->load->view('user/tambah_pengaduan', $data);
        $this->load->view('user/footer', $data);
    }
    public function tambah_pengaduan_aksi()
    {
        $this->form_validation->set_rules('id_subject', 'Id_subject', 'required|trim', [
            'required' => 'Subject belum di isi!'
        ]);
        $this->form_validation->set_rules('laporan', 'Laporan', 'required|trim', [
            'required' => 'Laporan belum di isi!'
        ]);
        if (!$this->form_validation->run()) {
            $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
            $data['title'] = "Data Pengaduan";
            $data['subject'] = $this->db->get('tb_subject')->result_array();
            $this->load->view('user/header', $data);
            $this->load->view('user/tambah_pengaduan', $data);
            $this->load->view('user/footer', $data);
        } else {
            $nik = $this->input->POST('nik');
            $id_subject = $this->input->POST('id_subject');
            $laporan = $this->input->POST('laporan');
            if (!empty($_FILES['file']['name'])) {
                $file = $_FILES['file']['name'];
                $config['upload_path'] = './assets/file/';
                $config['allowed_types'] = 'jpg|png|jpeg|mp4';
                $config['max_size']     = '102800';

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('file')) {
                    $this->session->set_flashdata('failed_msg', '
                    toastr.error("Kesalahan dalam mengupload file")');
                    redirect('User/data_pengaduan');
                } else {
                    $file = $this->upload->data('file_name');
                }
                $data = array(
                    'nik' => $nik,
                    'id_subject' => $id_subject,
                    'laporan' => $laporan,
                    'file' => $file,
                    'status' => "0",
                    'date_created' => time()
                );
                $this->M_user->tambah_pengaduan($data);
                $this->session->set_flashdata('success_msg', '
                toastr.success("Pengaduan berhasil di buat")');
                redirect('User/data_pengaduan');
            } else {
                $data = array(
                    'nik' => $nik,
                    'id_subject' => $id_subject,
                    'laporan' => $laporan,
                    'status' => "0",
                    'date_created' => time()
                );
                $this->M_user->tambah_pengaduan($data);
                $this->session->set_flashdata('success_msg', '
                toastr.success("Pengaduan berhasil di buat")');
                redirect('User/data_pengaduan');
            }
        }
    }
    public function edit_pengaduan($id_pengaduan)
    {
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = "Data Pengaduan";
        $user = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
        $data['data_pengaduan'] = $this->M_user->edit_pengaduan($id_pengaduan);
        $data['subject'] = $this->db->get('tb_subject')->result_array();
        $this->load->view('user/header', $data);
        $this->load->view('user/edit_pengaduan', $data);
        $this->load->view('user/footer', $data);
    }
    public function edit_pengaduan_aksi($id_pengaduan)
    {
        $id_pengaduan = $id_pengaduan;
        $id_subject = $this->input->POST('id_subject');
        $laporan = $this->input->POST('laporan');
        if (!empty($_FILES['file']['name'])) {
            $file = $_FILES['file']['name'];
            $config['upload_path'] = './assets/file/';
            $config['allowed_types'] = 'jpg|jpeg|png|mp4';
            $config['max_size']     = '102800';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('file')) {
                $this->session->set_flashdata('failed_msg', '
                toastr.error("Terjadi kesalahan dalam mengupload file!")');
                redirect('User/edit_pengaduan/' . $id_pengaduan);
            } else {
                $file = $this->upload->data('file_name');
            }
            $row = $this->db->get_where('tb_pengaduan', ['id_pengaduan' => $id_pengaduan])->row();
            unlink("./assets/img/pengaduan/$row->file");
            $data = array(
                'id_pengaduan' => $id_pengaduan,
                'id_subject' => $id_subject,
                'laporan' => $laporan,
                'file' => $file
            );
            $this->M_user->edit_pengaduan_aksi($id_pengaduan, $data);
            $this->session->set_flashdata('success_msg', '
            toastr.success("Pengaduan berhasil di ubah")');
            redirect('User/data_pengaduan');
        } else {
            $data = array(
                'id_pengaduan' => $id_pengaduan,
                'id_subject' => $id_subject,
                'laporan' => $laporan
            );
            $this->M_user->edit_pengaduan_aksi($id_pengaduan, $data);
            $this->session->set_flashdata('success_msg', '
            toastr.success("Pengaduan berhasil di ubah")');
            redirect('User/data_pengaduan');
        }
    }
    public function hapus_pengaduan($id_pengaduan)
    {
        $row = $this->db->get_where('tb_pengaduan', ['id_pengaduan' => $id_pengaduan])->row();
        unlink("./assets/file//$row->file");
        $this->M_user->hapus_pengaduan($id_pengaduan);
        $this->session->set_flashdata('success_msg', '
        toastr.success("Pengaduan berhasil di hapus")');
        redirect('User/data_pengaduan');
    }
    public function profile()
    {
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = "Profile";
        $this->load->view('user/header', $data);
        $this->load->view('user/profile', $data);
        $this->load->view('user/footer', $data);
    }
    public function edit_profile()
    {
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = "Profile";
        $this->load->view('user/header', $data);
        $this->load->view('user/edit_profile', $data);
        $this->load->view('user/footer', $data);
    }
    public function edit_profile_aksi($nik)
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim|min_length[3]', [
            'required' => 'Nama tidak boleh kosong!',
            'min_length' => 'Nama terlalu pendek!',
            'alpha' => 'Nama tidak valid!'
        ]);
        $this->form_validation->set_rules('telp', 'Telp', 'required|trim|min_length[10]|max_length[13]', [
            'required' => 'Nomor telepon tidak boleh kosong!',
            'is_unique' => 'Nomor telepon sudah digunakan!',
            'min_length' => 'Nomor telepon terlalu pendek!',
            'max_length' => 'Nomor telepon terlalu panjang!'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', [
            'required' => 'Email tidak boleh kosong!',
            'is_unique' => 'Email sudah digunakan!',
            'valid_email' => 'Email tidak valid!'
        ]);
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis_kelamin', 'required|trim', [
            'required' => 'Gender tidak boleh kosong!'
        ]);

        if (!$this->form_validation->run()) {
            $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
            $data['title'] = "Profile";
            $this->load->view('user/header', $data);
            $this->load->view('user/edit_profile', $data);
            $this->load->view('user/footer', $data);
        } else {
            $nik = $nik;
            $nama = $this->input->POST('nama');
            $email = $this->input->POST('email');
            $telp = $this->input->POST('telp');
            $jenis_kelamin = $this->input->POST('jenis_kelamin');
            if (!empty($_FILES['foto']['name'])) {
                $foto = $_FILES['foto']['name'];
                $config['upload_path'] = './assets/img/user/';
                $config['allowed_types'] = 'jpg|jpeg|png';
                $config['max_size']     = '10280';

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('foto')) {
                    $this->session->set_flashdata('failed_msg', '
                    toastr.danger("Terjadi kesalahan dalam mengupload file!")');
                    redirect('User/edit_profile/');
                } else {
                    $foto = $this->upload->data('file_name');
                }
                $row = $this->db->get_where('tb_user', ['nik' => $nik])->row();
                if ($row->foto == "pria_default.png" || !$row->foto == "wanita_default.png") {
                    $data = array(
                        'nik' => $nik,
                        'nama' => $nama,
                        'email' => $email,
                        'telp' => $telp,
                        'jenis_kelamin' => $jenis_kelamin,
                        'foto' => $foto
                    );
                    $this->M_user->edit_profile($nik, $data);
                    $this->session->set_flashdata('success_msg', '
                    toastr.success("Profile berhasil di ubah")');
                    redirect('User/profile');
                } else {
                    unlink("./assets/img/user/$row->foto");
                    $data = array(
                        'nik' => $nik,
                        'nama' => $nama,
                        'email' => $email,
                        'telp' => $telp,
                        'jenis_kelamin' => $jenis_kelamin,
                        'foto' => $foto
                    );
                    $this->M_user->edit_profile($nik, $data);
                    $this->session->set_flashdata('success_msg', '
                    toastr.success("Profile berhasil di ubah")');
                    redirect('User/profile');
                }
            } else {
                $data = array(
                    'nik' => $nik,
                    'nama' => $nama,
                    'email' => $email,
                    'telp' => $telp,
                    'jenis_kelamin' => $jenis_kelamin
                );
                $this->M_user->edit_profile($nik, $data);
                $this->session->set_flashdata('success_msg', '
                toastr.success("Profile berhasil di ubah")');
                redirect('User/profile');
            }
        }
    }
    public function edit_pass()
    {
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = "Profile";
        $this->load->view('user/header', $data);
        $this->load->view('user/edit_pass', $data);
        $this->load->view('user/footer', $data);
    }
    public function edit_pass_aksi($nik)
    {
        $user = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
        $this->form_validation->set_rules('current_password', 'Current_password', 'required|trim', [
            'required' => 'Password Lama tidak boleh kosong!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[5]|matches[password1]', [
            'required' => 'Password tidak boleh kosong!',
            'matches' => 'Password tidak cocok!',
            'min_length' => 'Password terlalu pendek!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|matches[password]', [
            'required' => 'Password tidak boleh kosong!',
            'matches' => 'Password tidak cocok!'

        ]);
        if (!$this->form_validation->run()) {
            $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
            $data['title'] = "Profile";
            $this->load->view('user/header', $data);
            $this->load->view('user/edit_pass', $data);
            $this->load->view('user/footer', $data);
        } else {

            $current_password = $this->input->POST('current_password');

            if (password_verify($current_password, $user['password'])) {
                $data = [
                    'password' => password_hash($this->input->POST('password'), PASSWORD_DEFAULT),
                ];
                $this->M_user->edit_pass($nik, $data);
                $this->session->set_flashdata('success_msg', '
                toastr.success("Password berhasil di ubah")');
                redirect('User/profile');
            } else {
                $this->session->set_flashdata('failed_msg', '
                toastr.danger("Password lama tidak sesuai")');
                redirect('User/edit_pass');
            }
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('password');
        $this->session->set_flashdata('success_msg', '
        toastr.success("Logout telah berhasil")');
        redirect('Auth_user');
    }
}
