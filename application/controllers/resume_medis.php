<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class resume_medis extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Db_model');
	}

	public function index()
	{
		$this->template->load('template', 'resume_medis_v');
	}

	function get_pasien()
	{
		echo json_encode($this->Db_model->get_all('v_riwayat_diagnosa')->result());
	}

	function pencarian()
	{
		// echo json_encode($this->input->post('id_diagnosa', TRUE));
		echo json_encode($this->Db_model->get_where('v_riwayat_diagnosa', array('id_antrian' => $this->input->post('id_antrian', TRUE)))->row());
	}
}
