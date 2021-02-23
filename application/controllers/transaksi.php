<?php
defined('BASEPATH') or exit('No direct script access allowed');

class transaksi extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('db_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		// $this->load->view('dashboard_v');
		$this->template->load('template', 'transaksi_v');
	}

	public function tampil()
	{
		echo json_encode($this->db_model->get_where("tbl_tindakan", ["status" => 0])->result());
	}
}
