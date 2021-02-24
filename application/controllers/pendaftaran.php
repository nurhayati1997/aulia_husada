<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pendaftaran extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Db_model');
	}

	public function index()
	{
		// $this->load->view('dashboard_v');
		$this->template->load('template', 'pendaftaran_v');
	}

	function get_kecamatan()
	{
		echo json_encode($this->Db_model->get_all('tbl_kecamatan')->result());
	}

	function get_dokter()
	{
		echo json_encode($this->Db_model->get_where('tbl_user', array('rule' => 2))->result());
	}

	function add_list()
	{
		echo json_encode($this->Db_model->get_all('tbl_pasien')->result());
	}

	function get_list()
	{
		date_default_timezone_set('Asia/Jakarta');
		
		echo json_encode($this->Db_model->get_where('tbl_antrian', array('id_user' => $this->input->post('id', TRUE), 'status' => 0 , 'tanggal_antri' => date('d-m-Y')))->result());
	}

	function pencarian()
	{
		echo json_encode($this->Db_model->get_where('tbl_pasien', array('id' => $this->input->post('kata_kunci', TRUE)))->row());
	}

	function tambah_pasien()
	{
		$data = [
			"kode" => $this->input->post('nrm', TRUE),
			"nik" => $this->input->post('nik', TRUE),
			"nama" => $this->input->post('nama', TRUE),
			"kecamatan" => $this->input->post('kec', TRUE),
			"alamat" => $this->input->post('alamat', TRUE),
			"jenis_kelamin" => $this->input->post('jk', TRUE),
			"agama" => $this->input->post('agama', TRUE),
			"status" => $this->input->post('status', TRUE),
			"ttl" => $this->input->post('ttl', TRUE),
			"pekerjaan" => $this->input->post('pekerjaan', TRUE),
			"pendidikan" => $this->input->post('pendd', TRUE),
			"nohp" => $this->input->post('telp', TRUE),
			"ortu" => $this->input->post('ortu', TRUE)
		];

		// echo json_encode($data);
		echo json_encode($this->Db_model->insert_get("tbl_pasien", $data));
	}

	function tambah_antrian()
	{
		$data = [
			"id_pasien" => $this->input->post('id', TRUE),
			"id_user" => $this->input->post('dokter', TRUE)
		];

		// echo json_encode($data);
		echo json_encode($this->Db_model->insert_get("tbl_antrian", $data));
	}
}
