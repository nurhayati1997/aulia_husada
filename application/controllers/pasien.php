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
		if($this->input->post('tgl', TRUE)==null){
			$newformat = $this->input->post('tgl', TRUE);
		}else{
			$time = strtotime($this->input->post('tgl', TRUE));
			$newformat = date('Y-m-d',$time);
		}
		echo json_encode($this->Db_model->get_tbl_pasien('v_riwayat_diagnosa','nama',$newformat,$this->input->post('dokter', TRUE),$this->input->post('kec', TRUE),$this->input->post('diagnosa', TRUE))->result());
	}
	
	function get_diagnosa()
	{
		echo json_encode($this->Db_model->get_group('tbl_riwayat_diagnosa','diagnosa')->result());
	}
}
