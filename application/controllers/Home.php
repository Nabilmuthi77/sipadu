<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
    {
        $this->form_validation->set_rules('nik', 'NIK', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login SIPADU';
            $this->load->view('home/index', $data);
        } else {
            $this->_login();
        }
    }

	private function _login()
    {
        $nik = $this->input->post('nik');
        $password = $this->input->post('password');

        $user = $this->db->get_where('masyarakat', ['nik' => $nik])->row_array();
        $user = $this->db->get_where('administrator', ['nik' => $nik])->row_array();
        var_dump($user); die;
            if ($user) {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'nik' => $user['nik'],
                        'role' => $user['role']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['role'] == 'superAdmin') {
                        redirect('superAdmin');
                    } elseif ($user['role'] == 'admin') {
                        redirect('admin');
                    } else {
                        redirect('masyarakat');
                    }
                } else {
                    var_dump($user['password']);
                    var_dump($password);
                    die;
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> wrong password! ..... </div>');
                    redirect('home');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Your Account has not been Registerd Yet! ..... </div>');
                redirect('home');
            }
            
        }


	
	// public function register()
	// {
    //     $this->form_validation->set_rules('name', 'Name', 'required|trim');
    //     $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
    //         'is_unique' => "This email has already registered!"
    //     ]);
    //     $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
    //         'matches' => "password doesn't matches!",
    //         'min_length' => "password too short!"
    //     ]);
    //     $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

    //     if ($this->form_validation->run() == false) {
    //         $data['title'] = 'Registration Page';
    //         $this->load->view('templates/auth_header', $data);
    //         $this->load->view('auth/registration');
    //         $this->load->view('templates/auth_footer');
    //     } else {
    //         $email = $this->input->post('email', true);
    //         $data = [
    //             'name' => htmlspecialchars($this->input->post('name', true)),
    //             'email' => htmlspecialchars($email),
    //             'image' => 'profile.jpeg',
    //             'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
    //             'role' => 'user',
    //             'is_active' => 0,
    //             'date_created' => time()
    //         ];

    //         $token = base64_encode(random_bytes(32));

    //         $user_token = [
    //             'email' => $email,
    //             'token' => $token,
    //             'date_created' => time()
    //         ];

    //         $this->db->insert('user', $data);
    //         $this->db->insert('user_token', $user_token);

    //         $this->_sendEmail($token, 'verify');

    //         $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Congratulation! Your account has been created, Please activate your account.... </div>');
    //         redirect('auth');
    //     }
    // }
	
}
