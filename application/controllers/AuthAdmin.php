<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AuthAdmin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}


	public function index()
	{
		$this->form_validation->set_rules('nip', 'NIP', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login Admin SIPADU';
            $this->load->view('authAdmin/index', $data);
        } else {
            $this->_login();
        }
	}
	
	private function _login()
    {
        $nip = $this->input->post('nip');
        $password = $this->input->post('password');

        $user = $this->db->get_where('administrator', ['nip' => $nip])->row_array();
            if ($user) {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'nip' => $user['nip'],
                        'nama' => $user['nama'],
                        'role' => $user['role']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['role'] == 'admin') {
                        redirect('admin');
                    } else {
                        redirect('superAdmin');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Maaf, Password Anda Salah!  </div>');
                    redirect('authAdmin');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Anda Bukan Admin SIPADU!  </div>');
                redirect('auth');
            }
            
        }

        public function logout()
        {
            $this->session->sess_destroy();
            redirect('authAdmin');
        }
}