<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('role') != 'admin') {
			if (!$this->session->userdata('nip'))  {
				redirect('auth');
			} else {
				redirect('authAdmin');
			}
		}
		$this->load->model('M_admin');
	}


	public function index()
	{
		$this->load->view('admin/index');
	}
	

    public function dataMasyarakat()
	{
		$data['title'] = 'Data Masyarakat';
		$data['masyarakat'] = $this->M_admin->read();
		$this->load->view('admin/dataMasyarakat', $data);
	}

    public function dataValidasiMasyarakat()
	{
		$data['title'] = 'Data Validasi Masyarakat';
		$data['masyarakat'] = $this->M_admin->read();
		$this->load->view('admin/dataValidasiMasyarakat', $data);
	}

    public function dataPengaduanMasyarakat()
	{
		$this->load->view('admin/dataPengaduanMasyarakat');
	}

    public function setting()
	{
		$this->load->view('admin/setting');
	}
}
