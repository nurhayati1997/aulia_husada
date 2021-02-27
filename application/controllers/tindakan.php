<?php
defined('BASEPATH') or exit('No direct script access allowed');

class tindakan extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata("id_user")) {
			redirect("login");
		}
		$this->load->model('Db_model');
		$this->load->helper('url');
	}

	public function index()
	{
		$this->template->load('template', 'tindakan_v');
	}

	function send_form()
	{
		$session_data = array(
			'nama_1' =>  $this->input->post('nama_1', TRUE),
			'alamat_1' => $this->input->post('alamat_1', TRUE),
			'ttl_1' => $this->input->post('ttl_1', TRUE),
			'jk_1' => $this->input->post('jk_1', TRUE),
			'nik_1' => $this->input->post('nik_1', TRUE),
			'tindakan' => $this->input->post('tindakan', TRUE),
			'relasi' => $this->input->post('relasi', TRUE),
			'nama_2' => $this->input->post('nama_2', TRUE),
			'umur' => $this->input->post('umur', TRUE),
			'jk_2' => $this->input->post('jk_2', TRUE),
			'alamat_2' => $this->input->post('alamat_2', TRUE),
			'nrm' => $this->input->post('nrm', TRUE),
			'nrm_2' => $this->input->post('nrm_2', TRUE)
		);

		$this->session->set_userdata($session_data);
		// $this->load->view('form', $data);
		echo json_encode($session_data);
	}

	function cetak_asessmen($id){
		$data["id"] = $id;
		$this->load->view('cetak',$data);
	}

	function isi_tabel()
	{
		echo json_encode($this->Db_model->get_where('v_riwayat_diagnosa', array('id_pasien' =>  $this->input->post('kata_kunci', TRUE)))->result());
	}
}
