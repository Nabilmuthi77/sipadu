<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Masyarakat extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('masyarakat/index');
	}

	public function kelolaPengaduan()
	{
		$this->load->view('masyarakat/kelolaPengaduan');
	}
}