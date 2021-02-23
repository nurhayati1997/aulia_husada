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

	function pencarian()
	{
		// if($this->input->post('kategori', TRUE)==0){
		// 	echo json_encode($this->Db_model->get_where('tbl_user', array('kode' => $this->input->post('kata_kunci', TRUE)))->row());
		// } else if($this->input->post('kategori', TRUE)==1){
		// 	echo json_encode($this->Db_model->get_where('tbl_user', array('nik' => $this->input->post('kata_kunci', TRUE)))->row());
		// } else {
		// 	echo json_encode($this->Db_model->get_where('tbl_user', array('nama' => $this->input->post('kata_kunci', TRUE)))->row());
		// }
		echo json_encode($this->input->post('kata_kunci', TRUE));
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
}
