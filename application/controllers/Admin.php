<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('admin/index');
	}
	
    public function dataMasyarakat()
	{
		$this->load->view('admin/dataMasyarakat');
	}

    public function dataValidasiMasyarakat()
	{
		$this->load->view('admin/dataValidasiMasyarakat');
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
