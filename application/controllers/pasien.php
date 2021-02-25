<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pasien extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Db_model');
	}

	public function index()
	{
		$this->template->load('template', 'pasien_v');
	}

	function get_pasien()
	{
		echo json_encode($this->Db_model->get_group('v_riwayat_diagnosa','nama')->result());
	}

	function get_diagnosa()
	{
		echo json_encode($this->Db_model->get_group('tbl_riwayat_diagnosa','diagnosa')->result());
	}
}
