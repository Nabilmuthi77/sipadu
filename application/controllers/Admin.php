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
		$data['title'] = 'Data Pengaduan Masyarakat';
		$data['pengaduan'] = $this->M_admin->readPengaduan();
		$this->load->view('admin/dataPengaduanMasyarakat', $data);
	}

    public function setting()
	{
		$this->load->view('admin/setting');
	}

	public function terima($id)
	{
		$this->M_admin->terima($id);
        $this->session->set_flashdata(
            'message',
            '<div style="background-color: lightgreen; border-radius: 5px; padding: 4px; text-align: center; margin-bottom: 7px; color: grey;">
        <strong> Data Masyarakat Berhasil Divalidasi ! </strong>
        </div>'
        );
        redirect('Admin/dataMasyarakat');
	}

	public function tolak($id)
	{
		$this->M_admin->tolak($id);
        $this->session->set_flashdata(
            'message',
            '<div style="background-color: lightsalmon; border-radius: 5px; padding: 4px; text-align: center; margin-bottom: 7px; color: white;">
        <strong> Data Masyarakat Berhasil Dihapus ! </strong>
        </div>'
        );
        redirect('Admin/dataValidasiMasyarakat');
	}
}
