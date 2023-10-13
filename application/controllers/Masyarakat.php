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
	}

	public function index()
	{
		var_dump($this->session->userdata); die;
		$this->load->view('masyarakat/index');
	}

	public function kelolaPengaduan()
	{
		$this->load->view('masyarakat/kelolaPengaduan');
	}
}