<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function index()
	{
		$data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
		$data['faq'] = $this->db->get('tb_faq')->result_array();
		$data['contact'] = $this->db->get('tb_contact')->row_array();
		$data['profile'] = $this->db->get('tb_profile')->row_array();
		$this->load->view('welcome_message', $data);
	}
	public function snk()
	{
		$data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
		$data['faq'] = $this->db->get('tb_faq')->result_array();
		$data['contact'] = $this->db->get('tb_contact')->row_array();
		$data['profile'] = $this->db->get('tb_profile')->row_array();
		$this->load->view('snk', $data);
	}
}
