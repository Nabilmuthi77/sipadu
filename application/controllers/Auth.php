<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
    {
        $this->form_validation->set_rules('nik', 'NIK', 'trim|required', [
            'required' => "NIK Jangan Dikosongkan!"
        ]);
        $this->form_validation->set_rules('password', 'Password', 'trim|required', [
            'required' => "Password Jangan Dikosongkan!"
        ]);

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login SIPADU';
            $this->load->view('auth/index', $data);
        } else {
            $this->_login();
        }
    }

	private function _login()
    {
        $nik = $this->input->post('nik');
        $password = $this->input->post('password');

        $user = $this->db->get_where('masyarakat', ['nik' => $nik])->row_array();
            if ($user) {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'nik' => $user['nik'],
                        'nama' => $user['nama']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['status'] == 'verified') {
                        redirect('masyarakat');
                    } else {
                        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Akun Anda Sedang Divalidasi Admin!  </div>');
                        redirect('auth');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Maaf, Password Anda Salah!  </div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Akun Anda Belum Terdaftar!  </div>');
                redirect('auth');
            }
            
        }
	
	public function register()
	{
        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required', [
            'required' => "Nama Lengkap Jangan Dikosongkan!"
        ]);
        $this->form_validation->set_rules('nik', 'NIK', 'required|trim|is_unique[masyarakat.nik]', [
            'is_unique' => "NIK Ini Telah Terdaftar!",
            'required' => "NIK Jangan Dikosongkan!"
        ]);
        $this->form_validation->set_rules('wa', 'Nomor WhatsApp', 'required', [
            'required' => "Nomor WhatsApp Jangan Dikosongkan!"
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]', [
            'min_length' => "password is too short!",
            'required' => "Password Jangan Dikosongkan!"
        ]);
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required', [
            'required' => "Tanggal Lahir Jangan Dikosongkan!"
        ]);
        $this->form_validation->set_rules('jenisKelamin', 'Jenis Kelamin', 'required', [
            'required' => "Jenis Kelamin Jangan Dikosongkan!"
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|min_length[7]', [
            'min_length' => "Mohon Tulis Alamat Lengkap!",
            'required' => "Alamat Jangan Dikosongkan!"
        ]);


        if ($this->form_validation->run() == false) {
            $data['title'] = 'Register SIPADU';
            $this->load->view('auth/register', $data);
        } else {

            $config['upload_path']          = 'assets/gambar';
            $config['allowed_types']        = 'gif|jpg|png|jpeg|heic|heif';
            $config['max_size']             = '10240';

            $this->load->library('upload', $config); 

            if ($this->upload->do_upload("selfie")) {
                $imageData = $this->upload->data();
                $fileName = $imageData['file_name']; 
            } else {
                //flashdata massage
                $x = $this->upload->display_errors();
                $this->session->set_flashdata(
                    'message',
                    '<small class="text-danger pl-3"><i>
			            ' . $x . ' 
                    </i></small>'
            );
            redirect('auth/register');
        }
        
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'nik' => htmlspecialchars($this->input->post('nik', true)),
                'tgl_lahir' => htmlspecialchars($this->input->post('tgl_lahir', true)),
                'gender' => $this->input->post('jenisKelamin'),
                'wa' => htmlspecialchars($this->input->post('wa', true)),
                'alamat' => htmlspecialchars($this->input->post('alamat', true)),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'status' => 'unverified',
                'id_service' => 0,
                'selfie' => $fileName
            ];

            $this->db->insert('masyarakat', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Akun Anda telah didaftarkan, Tunggu validasi admin! </div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth');
    }
	
}
