<?php
defined('BASEPATH') or exit('No direct script access allowed');

class lab extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata("id_user")) {
			redirect("login");
		}
		$this->load->model('db_model');
	}

	public function index()
	{
		$this->template->load('template', 'lab_v');
	}

	function tambah()
	{
		$time = strtotime($this->input->post('tgl', TRUE));
		$newformat = date('Y-m-d', $time);
		$data = [
			"nama" => $this->input->post('nama', TRUE),
			"jenis" => $this->input->post('jenis', TRUE),
			"tgl" => $newformat,
			"pengirim" => $this->input->post('pengirim', TRUE),
			"diskon" => $this->input->post('disc', TRUE),
			"tarif" => $this->input->post('tarif', TRUE)
		];

		// echo json_encode($data);
		echo json_encode($this->db_model->insert_get("tbl_lab", $data));
	}

	function get_lab()
	{
		$time_awal = strtotime($this->input->post('awal', TRUE));
		$newformat_awal = date('Y-m-d', $time_awal);

		$time_akhir = strtotime($this->input->post('akhir', TRUE));
		$newformat_akhir = date('Y-m-d', $time_akhir);
		echo json_encode($this->db_model->get_where('tbl_lab', array('tgl >=' => $newformat_awal, 'tgl <=' => $newformat_akhir))->result());
		// echo json_encode($this->db_model->get_where('tbl_lab', array('tgl' => strval(date('Y-m-d'))))->result());
		// echo json_encode(strval(date('Y-m-d')));
	}

	function hapus(){
		// echo json_encode($this->input->post('id', TRUE));
		echo json_encode($this->db_model->delete('tbl_lab', ["id_lab" => $this->input->post('id', TRUE)]));
	}
}
