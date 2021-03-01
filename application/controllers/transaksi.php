<?php
defined('BASEPATH') or exit('No direct script access allowed');

class transaksi extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata("id_user") or ($this->session->userdata("rule") != 1 and $this->session->userdata("rule") != 2)) {
			redirect("login");
		}
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
		date_default_timezone_set("Asia/Jakarta");
		$dataTindakan = $this->input->post("idTindakan", TRUE);
		$idAntrian = $this->input->post("idAntrian", TRUE);

		$antrian = $this->db_model->get_where('vw_belum_bayar', ["id_antrian" => $idAntrian])->row_array();
		$idPasien = $antrian["id_pasien"];
		$idDokter = $antrian["id_user"];
		$data = [
			"dokter" => $idDokter,
			"id_pasien" => $idPasien,
			"id_antrian" => $idAntrian,
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
		echo json_encode($this->db_model->get_all('vw_belum_bayar')->result());
	}

	public function getTransaksiTerakhir()
	{
		$tanggalMulai = $this->input->post('tanggalMulai') . " 00:00:00";
		$tanggalSelesai = $this->input->post('tanggalSelesai') . " 23:59:59";
		$this->db->limit(5, 0);
		$this->db->order_by("tanggal", 'DESC');
		echo json_encode($this->db_model->get_where("vw_transaksi", ['tanggal >=' => $tanggalMulai, 'tanggal <=' => $tanggalSelesai])->result_array());
	}
}
