<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Petugas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_petugas');
        $petugas = $this->db->get_where('tb_petugas', ['username' => $this->session->userdata('username'), 'level' => 'petugas'])->row_array();
        if (!$petugas) {
            $this->session->set_flashdata('failed_msg', '
            toastr.info("Silahkan login terlebih dahulu")');
            redirect('Auth_petugas');
        }
    }
    public function index()
    {
        $data['petugas'] = $this->db->get_where('tb_petugas', ['username' => $this->session->userdata('username'), 'level' => 'petugas'])->row_array();
        $data['title'] = "Dashboard";
        $data['count_pengaduan'] = $this->M_petugas->count_pengaduan();
        $data['count_user'] = $this->M_petugas->count_user();
        $this->load->view('Petugas/header', $data);
        $this->load->view('Petugas/index', $data);
        $this->load->view('Petugas/footer', $data);
    }
    public function data_user()
    {
        $data['petugas'] = $this->db->get_where('tb_petugas', ['username' => $this->session->userdata('username'), 'level' => 'petugas'])->row_array();
        $data['title'] = "Data User";
        $data['data_user'] = $this->M_petugas->get_user_status();
        $this->load->view('Petugas/header', $data);
        $this->load->view('Petugas/data_user', $data);
        $this->load->view('Petugas/footer', $data);
    }
    public function detail_user($nik)
    {
        $data['petugas'] = $this->db->get_where('tb_petugas', ['username' => $this->session->userdata('username'), 'level' => 'petugas'])->row_array();
        $data['title'] = "Data User";
        $data['detail_user'] = $this->M_petugas->get_user_id($nik);
        $this->load->view('Petugas/header', $data);
        $this->load->view('Petugas/detail_user', $data);
        $this->load->view('Petugas/footer', $data);
    }
    public function data_verifikasi()
    {
        $data['petugas'] = $this->db->get_where('tb_petugas', ['username' => $this->session->userdata('username'), 'level' => 'petugas'])->row_array();
        $data['title'] = "Verifikasi User";
        $data['data_verifikasi'] = $this->M_petugas->get_user_verifikasi();
        $this->load->view('Petugas/header', $data);
        $this->load->view('Petugas/data_verifikasi', $data);
        $this->load->view('Petugas/footer', $data);
    }
    public function verifikasi_aksi($nik)
    {
        $user = $this->db->get_where('tb_user', ['nik' => $nik])->row_array();
        $email =  $user['email'];
        $status = $this->input->POST('status');
        if ($status == 1) {
            $data = [
                'status' => $status
            ];
            $keterangan = "";
            var_dump($data);
            die;
            $this->M_petugas->verifikasi_aksi($nik, $data);
            $this->_sendEmail($email, 'diverifikasi', $keterangan);
            $this->session->set_flashdata('success_msg', '
            toastr.success("Data user berhasil diverifikasi")');
            redirect('Petugas/data_verifikasi');
        } elseif ($status == 3) {
            $keterangan = $this->input->POST('keterangan');
            $data = [
                'status' => $status,
                'keterangan' => $keterangan
            ];
            var_dump($data);
            die;
            $this->M_petugas->verifikasi_aksi($nik, $data);
            $this->_sendEmail($email, 'tidakdiverifikasi', $keterangan);
            $this->session->set_flashdata('success_msg', '
            toastr.success("Data user berhasil tidak terverifikasi")');
            redirect('Petugas/data_verifikasi');
        }
    }
    private function _sendEmail($email, $type, $keterangan)
    {
        $this->load->library('email');
        $config = array();
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.googlemail.com';
        $config['smtp_user'] = 'agissukmayadi009@gmail.com';
        $config['smtp_pass'] = 'hxicceunluqzbzca';
        $config['smtp_port'] = 465;
        $config['mailtype'] = 'html';
        $config['charset'] = 'utf-8';

        $this->email->initialize($config);

        $this->email->set_newline("\r\n");

        $this->email->from('agissukmayadi009@gmail.com', 'E-Complaint');
        $this->email->to($email);

        if ($type == 'diverifikasi') {
            $this->email->subject('Verifikasi');
            $this->email->message('Akun anda berhasil diverifikasi, <a href="' . base_url('Auth_user') . '">Login</a>');
        } elseif ($type == 'tidakdiverifikasi') {
            $this->email->subject('Verifikasi');
            $this->email->message('Maaf akun anda tidak kami verifikasi, dikarenakan' . $keterangan);
        } elseif ($type == 'nonaktif') {
            $this->email->subject('Nonaktif');
            $this->email->message('Maaf akun anda tidak kami nonaktifkan, di karenakan' . $keterangan);
        }

        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
        }
    }
    public function nonaktif_user($nik)
    {
        $user = $this->db->get_where('tb_user', ['nik' => $nik])->row_array();
        $email = $user['email'];
        $data = [
            'status' => $this->input->POST('status'),
            'keterangan' => $this->input->POST('keterangan')
        ];
        $keterangan = $data['keterangan'];
        $this->M_petugas->verifikasi_aksi($nik, $data);
        $this->_sendEmail($email, 'nonaktif', $keterangan);
        $this->session->set_flashdata('success_msg', '
        toastr.success("Data user berhasil di nonaktifkan")');
        redirect('Petugas/data_user');
    }
    public function data_pengaduan()
    {
        $data['petugas'] = $this->db->get_where('tb_petugas', ['username' => $this->session->userdata('username'), 'level' => 'petugas'])->row_array();
        $data['title'] = "Data Pengaduan";
        $data['data_pengaduan'] = $this->M_petugas->get_pengaduan();
        $this->load->view('Petugas/header', $data);
        $this->load->view('Petugas/data_pengaduan', $data);
        $this->load->view('Petugas/footer', $data);
    }
    public function detail_pengaduan($id_pengaduan)
    {
        $data['petugas'] = $this->db->get_where('tb_petugas', ['username' => $this->session->userdata('username'), 'level' => 'petugas'])->row_array();
        $data['title'] = "Data Pengaduan";
        $data['detail_pengaduan'] = $this->M_petugas->get_pengaduan_id($id_pengaduan);
        $this->load->view('Petugas/header', $data);
        $this->load->view('Petugas/detail_pengaduan', $data);
        $this->load->view('Petugas/footer', $data);
    }
    public function data_pengaduan_verifikasi()
    {
        $data['petugas'] = $this->db->get_where('tb_petugas', ['username' => $this->session->userdata('username'), 'level' => 'petugas'])->row_array();
        $data['title'] = "Verifikasi Pengaduan";
        $data['data_pengaduan_verifikasi'] = $this->M_petugas->get_pengaduan_verifikasi();
        $this->load->view('Petugas/header', $data);
        $this->load->view('Petugas/data_pengaduan_verifikasi', $data);
        $this->load->view('Petugas/footer', $data);
    }
    public function verifikasi_pengaduan($id_pengaduan)
    {
        $keterangan = $this->input->POST('keterangan');
        $status = $this->input->POST('status');
        if (!$keterangan) {
            $data = [
                'status' => $status
            ];
        } else {
            $data = [
                'keterangan' => $keterangan,
                'status' => $status
            ];
        }
        $this->M_petugas->verifikasi_pengaduan($id_pengaduan, $data);
        if ($status == "proses") {
            $this->session->set_flashdata('success_msg', '
            toastr.success("Data Pengaduan berhasil di verifikasi")');
            redirect('Petugas/data_pengaduan_verifikasi');
        } elseif ($status == "tolak") {
            $this->session->set_flashdata('success_msg', '
            toastr.success("Data Pengaduan berhasil di tolak")');
            redirect('Petugas/data_pengaduan_verifikasi');
        }
    }
    public function tanggapi_pengaduan($id_pengaduan)
    {
        $data['petugas'] = $this->db->get_where('tb_petugas', ['username' => $this->session->userdata('username'), 'level' => 'petugas'])->row_array();
        $data['title'] = "Data Pengaduan";
        $data['data_pengaduan'] = $this->M_petugas->get_pengaduan_id($id_pengaduan);
        $this->load->view('Petugas/header', $data);
        $this->load->view('Petugas/tanggapi_pengaduan', $data);
        $this->load->view('Petugas/footer', $data);
    }
    public function tanggapi_pengaduan_aksi($id_pengaduan)
    {
        $this->form_validation->set_rules('tanggapan', 'Tanggapan', 'required|trim', [
            'required' => 'Tanggapan tidak boleh kosong!'
        ]);

        if (!$this->form_validation->run()) {
            $data['petugas'] = $this->db->get_where('tb_petugas', ['username' => $this->session->userdata('username'), 'level' => 'petugas'])->row_array();
            $data['title'] = "Data Pengaduan";
            $data['data_pengaduan'] = $this->M_petugas->get_pengaduan_id($id_pengaduan);
            $this->load->view('Petugas/header', $data);
            $this->load->view('Petugas/tanggapi_pengaduan', $data);
            $this->load->view('Petugas/footer', $data);
        } else {
            $data = [
                'id_pengaduan' => $id_pengaduan,
                'id_petugas' => $this->input->POST('id_petugas'),
                'tanggapan' => $this->input->POST('tanggapan'),
                'date_created' => time()
            ];
            $this->M_petugas->update_pengaduan($id_pengaduan);
            $this->M_petugas->tanggapi_pengaduan($data);
            $this->session->set_flashdata('success_msg', '
            toastr.success("Tanggapan berhasil dikirim")');
            redirect('Petugas/data_pengaduan');
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->set_flashdata('success_msg', '
		toastr.success("Logout telah berhasil")');
        redirect('Auth_petugas');
    }
}
