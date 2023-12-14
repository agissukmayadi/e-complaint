<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_petugas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_petugas');
        $petugas = $this->db->get_where('tb_petugas', ['username' => $this->session->userdata('username')])->row_array();
        if ($petugas) {
            if ($petugas['level'] == "admin") {
                redirect('Admin');
            } elseif ($petugas['level'] == "petugas") {
                redirect('Petugas');
            }
        }
    }
    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim', [
            'required' => 'Username belum di isi!',
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim', [
            'required' => 'Password belum di isi!'
        ]);

        if (!$this->form_validation->run()) {
            $this->load->view('auth_petugas/login');
        } else {
            $this->login();
        }
    }
    private function login()
    {
        $username = $this->input->POST('username');
        $password = $this->input->POST('password');

        $petugas = $this->db->get_where('tb_petugas', ['username' => $username])->row_array();
        if ($petugas) {
            if (password_verify($password, $petugas['password'])) {
                $data = [
                    'username' => $petugas['username']
                ];
                if ($petugas['level'] == 'admin') {
                    $this->session->set_userdata($data);
                    redirect('Admin');
                } elseif ($petugas['level'] == 'petugas') {
                    $this->session->set_userdata($data);
                    redirect('Petugas');
                }
            } else {
                $this->session->set_flashdata('failed_msg', '
                toastr.error("Password salah")');
                redirect('Auth_petugas');
            }
        } else {
            $this->session->set_flashdata('failed_msg', '
            toastr.info("Akun tidak terdaftar")');
            redirect('Auth_petugas');
        }
    }
}
