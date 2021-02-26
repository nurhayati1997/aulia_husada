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
		$data["dokter"] = $this->db_model->get_where("tbl_user", ["rule" => 2, "status" => 0])->result_array();
		$this->template->load('template', 'transaksi_v', $data);
	}

	public function tampil()
	{
		echo json_encode($this->db_model->get_where("tbl_tindakan", ["status" => 0])->result());
	}

	public function prosesTransaksi()
	{
		$dataTindakan = $this->input->post("idTindakan");
		$data = [
			"dokter" => $this->input->post("idDokter", TRUE),
			"id_pasien" => $this->input->post("idPasien", TRUE),
			"tanggal" => date("Y-m-d h:i:sa")
		];
		$this->db_model->insert('tbl_transaksi', $data);
		$idTransaksi = $this->db->insert_id();
		for ($i = 0; $i < count($dataTindakan); $i++) {
			$data = [
				"id_tindakan" => $dataTindakan[$i],
				"id_transaksi" => $idTransaksi
			];
			$this->db_model->insert('tbl_transaksi_tindakan', $data);
		}

		echo json_encode("");
	}

	function pasienBayar()
	{
		echo json_encode($this->db_model->get_all('tbl_pasien')->result());
	}
}
