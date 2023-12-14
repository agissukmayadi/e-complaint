<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_user extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_user');
        $user = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
        if ($user) {
            redirect('User');
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
            $this->load->view('user/auth/login');
        } else {
            $this->login();
        }
    }
    private function login()
    {
        $username = $this->input->POST('username');
        $password = $this->input->POST('password');

        $user = $this->db->get_where('tb_user', ['username' => $username])->row_array();
        if ($user) {
            if (password_verify($password, $user['password'])) {
                $data = [
                    'username' => $user['username']
                ];
                if ($user['status'] == 0) {
                    $this->session->set_flashdata('failed_msg', '
                    toastr.info("Akun sedang menunggu persetujuan")');
                    redirect('Auth_user');
                } elseif ($user['status'] == 2) {
                    $this->session->set_flashdata('failed_msg', '
                    toastr.info("Akun di nonaktifkan")');
                    redirect('Auth_user');
                } elseif ($user['status'] == 3) {
                    $this->session->set_flashdata('failed_msg', '
                    toastr.info("Akun tidak terverifikasi")');
                    redirect('Auth_user');
                } elseif ($user['status'] == 1) {
                    $this->session->set_userdata($data);
                    redirect('User');
                }
            } else {
                $this->session->set_flashdata('failed_msg', '
                toastr.error("Maaf, password salah")');
                redirect('Auth_user');
            }
        } else {
            $this->session->set_flashdata('failed_msg', '
            toastr.info("Maaf, akun belum terdaftar")');
            redirect('Auth_user');
        }
    }
    public function register()
    {
        $this->load->view('user/auth/register');
    }
    public function register_act()
    {
        $this->form_validation->set_rules('nik', 'Nik', 'required|trim|is_unique[tb_user.nik]|min_length[16]|max_length[16]', [
            'required' => 'NIK tidak boleh kosong!',
            'min_length' => 'NIK terlalu pendek!',
            'max_length' => 'NIK terlalu panjang!',
            'is_unique' => 'NIK telah digunakan!'
        ]);
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim|min_length[3]', [
            'required' => 'Nama tidak boleh kosong!',
            'min_length' => 'Nama terlalu pendek!',
            'alpha' => 'Nama tidak valid!'
        ]);
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[tb_user.username]|min_length[5]|alpha_dash', [
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
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|matches[password]', [
            'required' => 'Password tidak boleh kosong!',
            'matches' => 'Password tidak cocok!',

        ]);
        $this->form_validation->set_rules('telp', 'Telp', 'required|trim|is_unique[tb_user.telp]|min_length[10]|max_length[13]', [
            'required' => 'Nomor telepon tidak boleh kosong!',
            'is_unique' => 'Nomor telepon sudah digunakan!',
            'min_length' => 'Nomor telepon terlalu pendek!',
            'max_length' => 'Nomor telepon terlalu panjang!'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|is_unique[tb_user.email]|valid_email', [
            'required' => 'Email tidak boleh kosong!',
            'is_unique' => 'Email sudah digunakan!',
            'valid_email' => 'Email tidak valid!'
        ]);
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis_kelamin', 'required|trim', [
            'required' => 'Gender tidak boleh kosong!'
        ]);

        if (!$this->form_validation->run()) {
            $this->load->view('user/auth/register');
        } else {
            $jenis_kelamin = $this->input->POST('jenis_kelamin');
            if ($jenis_kelamin == "Pria") {
                $foto = "pria_default.png";
            } elseif ($jenis_kelamin == "Wanita") {
                $foto = "wanita_default.png";
            }
            $data = [
                'nik' => htmlspecialchars($this->input->POST('nik', true)),
                'nama' => htmlspecialchars($this->input->POST('nama', true)),
                'username' => strtolower($this->input->POST('username', true)),
                'password' => password_hash($this->input->POST('password'), PASSWORD_DEFAULT),
                'telp' => htmlspecialchars($this->input->POST('telp', true)),
                'email' => htmlspecialchars($this->input->POST('email', true)),
                'jenis_kelamin' => htmlspecialchars($this->input->POST('jenis_kelamin', true)),
                'foto' => $foto,
                'status' => 0,
                'date_created' => time()
            ];
            $this->M_user->register_act($data);
            $this->session->set_flashdata('success_msg', '
            toastr.success("Akun berhasil di buat, tunggu proses persetujuan dari Petugas")');
            redirect('Auth_user');
        }
    }
    public function forgot_pass_validation()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', [
            'required' => 'Email tidak boleh kosong!',
            'valid_email' => 'Email tidak valid!'
        ]);
        if (!$this->form_validation->run()) {
            $this->load->view('user/auth/forgot_pass_validation');
        } else {
            $email = $this->input->POST('email');
            $user = $this->db->get_where('tb_user', ['email' => $email, 'status' => 1])->row_array();
            if ($user) {
                $token = base64_encode(random_bytes(32));
                $user_token = [
                    'email' => $email,
                    'token' => $token,
                    'date_created' => time()
                ];
                $this->db->insert('tb_token', $user_token);

                $this->_sendEmail($token, 'forgot_pass_validation');

                $this->session->set_flashdata('success_msg', '
                toastr.success("Token sudah terkirim, Token hanya berlaku 5 Menit")');
                redirect('Auth_user');
            } else {
                $this->session->set_flashdata('failed_msg', '
                toastr.info("Maaf, akun belum terdaftar")');

                redirect('Auth_user/forgot_pass_validation');
            }
        }
    }
    private function _sendEmail($token, $type)
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
        $this->email->to($this->input->POST('email'));

        if ($type == 'forgot_pass_validation') {
            $this->email->subject('Forgot Password');
            $this->email->message('Klik link ini untuk memulihkan akun anda : <a href="' . base_url('Auth_user/forgot_pass_email?email=' . $this->input->POST('email') . '&token=' . urlencode($token)) . '">Reset Password</a>');
        }

        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
        }
    }

    public function forgot_pass_email()
    {
        $email = $this->input->GET('email');
        $token = $this->input->GET('token');
        $cek_user = $this->db->get_where('tb_user', ['email' => $email])->row_array();
        $data = [
            'email' => $email,
            'token' => $token
        ];
        if ($cek_user) {
            $user_token = $this->db->get_where('tb_token', ['token' => $token])->row_array();
            if ($user_token) {
                if (time() - $user_token['date_created'] < (60 * 5)) {
                    $this->session->set_userdata('reset_email', $email);
                    $this->db->delete('tb_token', ['email' => $email]);
                    $this->change_password();
                } else {
                    $this->db->delete('tb_token', ['email' => $email]);
                    $this->session->set_flashdata('failed_msg', '
                    toastr.error("Token Expired")');
                    redirect('Auth_user');
                }
            } else {
                $this->session->set_flashdata('failed_msg', '
                toastr.error("Token tidak valid")');
                redirect('Auth_user');
            }
        } else {
            $this->session->set_flashdata('failed_msg', '
            toastr.error("Email tidak valid")');
            redirect('Auth_user');
        }
    }
    public function change_password()
    {
        if (!$this->session->userdata('reset_email')) {
            redirect('Auth_user');
        }
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
            $this->load->view('user/auth/change_password');
        } else {
            $password = password_hash($this->input->POST('password'), PASSWORD_DEFAULT);
            $email = $this->session->userdata('reset_email');

            $this->db->set('password', $password);
            $this->db->where('email', $email);
            $this->db->update('tb_user');

            $this->session->unset_userdata('reset_email');
            $this->session->set_flashdata('success_msg', '
            toastr.success("Password berhasil di ubah")');
            redirect('Auth_user');
        }
    }
}
