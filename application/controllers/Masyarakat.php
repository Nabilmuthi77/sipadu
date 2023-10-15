<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Masyarakat extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('nik')){
			redirect('auth');
		}
		$this->load->model('M_masyarakat');
	}

	public function index()
	{
		$this->form_validation->set_rules('judul', 'Judul Pengaduan', 'required', [
			'required' => "Judul Pengaduan jangan dikosongkan !"
		]);
        $this->form_validation->set_rules('isi', 'Isi Pengaduan', 'required', [
			'required' => "Isi Pengaduan jangan dikosongkan !"
		]);

		if ($this->form_validation->run() == false) {
			$data['title'] = 'Pengaduan';
			$this->load->view('masyarakat/index', $data);
		} else {
			$this->M_masyarakat->pengaduan();
			$this->session->set_flashdata(
				'message',
				'<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong> Data Pengaduan Berhasil Ditambahkan ! </strong>
			</div> <hr>'
			);
			redirect('Masyarakat/kelolaPengaduan');
		}
	}

	public function kelolaPengaduan()
	{
		$data['compareData'] = $this->db->get_where('pengaduan', ['nik' => $this->session->userdata('nik')])->result_array();
		$data['title'] = 'Kelola Pengaduan';
		$data['user'] = $this->session->userdata('nik');
		$data['pengaduan'] = $this->M_masyarakat->read();
		$this->load->view('masyarakat/kelolaPengaduan', $data);
	}

	public function hapusPengaduan($id)
    {
		$this->M_masyarakat->hapus($id);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong> Data Pengaduan Berhasil Dihapus ! </strong>
        </div> <hr>'
        );
        redirect('Masyarakat/kelolaPengaduan');
    }
}