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

	$this->form_validation->set_rules('password', 'Password', 'required|trim', [
		'required' => "Kata Sandi Lama Harus Diisi!"
	]);
    $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
		'required' => "Kata Sandi Baru Harus Diisi!",
		'matches' => "Kata Sandi Tidak Sama!",
		'min_length' => "Kata Sandi Terlalu Singkat!"
	]);
	$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

	if ($this->form_validation->run() == false) {
		$data['compareData'] = $this->db->get_where('administrator', ['nip' => $this->session->userdata('nip')])->row_array();
		$data['title'] = 'Settings';
		$this->load->view('admin/setting', $data);
	} else {
		$data['compareData'] = $this->db->get_where('administrator', ['nip' => $this->session->userdata('nip')])->row_array();
		$current_password = $this->input->post('password');
		$new_password = $this->input->post('password1');

		if (!password_verify($current_password, $data['compareData']['password'])){
			$this->session->set_flashdata(
				'message',
				'<div style="background-color: lightsalmon; border-radius: 5px; padding: 4px; text-align: center; margin-bottom: 7px; color: white;">
			<strong> Kata Sandi Lama Salah! </strong>
			</div>'
			);
			redirect('Admin/setting');
		} else {
				if ($current_password == $new_password){
		
					$this->session->set_flashdata(
						'message',
						'<div style="background-color: lightsalmon; border-radius: 5px; padding: 4px; text-align: center; margin-bottom: 7px; color: white;">
					<strong> Kata Sandi Tidak Boleh Sama! </strong>
					</div>'
					);
				  redirect('Admin/setting');
		
				} else {
		
				  $password_hash = password_hash($new_password, PASSWORD_DEFAULT);
				  
				  $this->db->set('password', $password_hash);
				  $this->db->where('nip', $this->session->userdata('nip'));
				  $this->db->update('administrator');
		  
				  $this->session->set_flashdata(
					'message',
					'<div style="background-color: lightgreen; border-radius: 5px; padding: 4px; text-align: center; margin-bottom: 7px; color: grey;">
				<strong> Kata Sandi Berhasil Diperbarui! </strong>
				</div>'
				);
				  redirect('Admin/setting');
				}
			  }
	}}

	public function terima($id)
	{
		$this->M_admin->terima($id);
        $this->session->set_flashdata(
            'message',
            '<div style="background-color: lightgreen; border-radius: 5px; padding: 4px; text-align: center; margin-bottom: 7px; color: grey;">
        <strong> Data Masyarakat Berhasil Divalidasi! </strong>
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
        <strong> Data Masyarakat Berhasil Dihapus! </strong>
        </div>'
        );
        redirect('Admin/dataValidasiMasyarakat');
	}

	public function proses($id)
	{
		$this->M_admin->proses($id);
        $this->session->set_flashdata(
            'message',
            '<div style="background-color: gold; border-radius: 5px; padding: 4px; text-align: center; margin-bottom: 7px; color: grey;">
        <strong> Data Pengaduan Sedang Akan Diproses! </strong>
        </div>'
        );
        redirect('Admin/dataPengaduanMasyarakat');
	}

	public function selesai($id)
	{
		$this->M_admin->selesai($id);
        $this->session->set_flashdata(
            'message',
            '<div style="background-color: lightgreen; border-radius: 5px; padding: 4px; text-align: center; margin-bottom: 7px; color: grey;">
        <strong> Data Pengaduan Berhasil Diselesaikan! </strong>
        </div>'
        );
        redirect('Admin/dataPengaduanMasyarakat');
	}

	public function hapusPengaduan($id)
	{
		$this->M_admin->hapusPengaduan($id);
        $this->session->set_flashdata(
            'message',
            '<div style="background-color: lightsalmon; border-radius: 5px; padding: 4px; text-align: center; margin-bottom: 7px; color: white;">
        <strong> Data Pengaduan Berhasil Dihapus! </strong>
        </div>'
        );
        redirect('Admin/dataPengaduanMasyarakat');
	}
}
