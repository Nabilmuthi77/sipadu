<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SuperAdmin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('role') != 'superAdmin') {
			if (!$this->session->userdata('nip'))  {
				redirect('auth');
			} else {
				redirect('authAdmin');
			}
		}
		$this->load->model('M_superAdmin');
	}

	public function index()
	{
			$data['title'] = 'Super Admin';
			$this->load->view('superAdmin/index', $data);
	}

	public function tambahAdmin()
	{
		$this->form_validation->set_rules('nik', 'NIK', 'required', [
			'required' => "NIK jangan dikosongkan !"
		]);
        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required', [
			'required' => "Nama Lengkap jangan dikosongkan !"
		]);
		$this->form_validation->set_rules('jabatan', 'Jabatan', 'required', [
			'required' => "Jabatan jangan dikosongkan !"
		]);
        $this->form_validation->set_rules('nip', 'NIP', 'required', [
			'required' => "NIP jangan dikosongkan !"
		]);
		$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]', [
            'min_length' => "Password Terlalu Pendek!",
			'required' => "Password Jangan Dikosongkan!"
        ]);

		if ($this->form_validation->run() == false) {
			$data['title'] = 'Tambah Admin';
			$this->load->view('superAdmin/tambahAdmin', $data);
		} else {
			$this->M_superAdmin->tambahAdmin();
			$this->session->set_flashdata(
				'message',
				'<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong> Admin Baru Berhasil Ditambahkan ! </strong>
			</div> <br>'
			);
			redirect('SuperAdmin');
		}

	}
}