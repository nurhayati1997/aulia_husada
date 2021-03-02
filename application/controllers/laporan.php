<?php
defined('BASEPATH') or exit('No direct script access allowed');

class laporan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('db_model');
		$this->load->library('form_validation');
		if (!$this->session->userdata("id_user") or $this->session->userdata("rule") != 1) {
			redirect("login");
		}
		date_default_timezone_set('Asia/Jakarta');
	}
	public function index()
	{
		// $this->load->view('dashboard_v');
		$this->template->load('template', 'laporan_v');
	}

	public function dataLaporan()
	{
		$tanggalMulai = $this->input->post('tanggalMulai') . " 00:00:00";
		$tanggalSelesai = $this->input->post('tanggalSelesai') . " 23:59:59";
		$this->db->order_by("tanggal DESC");
		$data = $this->db_model->get_where("vw_transaksi", ['tanggal >=' => $tanggalMulai, 'tanggal <=' => $tanggalSelesai])->result_array();
		echo json_encode($data);
	}

	public function printLaporan()
	{
		$tanggalMulai =  $this->input->get('mulai') . " 00:00:00";
		$tanggalSelesai =  $this->input->get('selesai') . " 23:59:59";
		$this->db->order_by("tanggal DESC");
		$data["dataTransaksi"] = $this->db_model->get_where("vw_transaksi", ['tanggal >=' => $tanggalMulai, 'tanggal <=' => $tanggalSelesai])->result_array();
		$data["pemilik"] = $this->db_model->get_where("tbl_user", ["rule" => 1])->row_array()["nama"];
		$data["admin"] = $this->db_model->get_where("tbl_user", ["rule" => 2])->row_array()["nama"];
		$data['totalPasien'] = $this->db_model->get_where("tbl_transaksi", ['tanggal >=' => $tanggalMulai, 'tanggal <=' => $tanggalSelesai])->num_rows();
		$data["mulai"] = $this->input->get('mulai');
		$data["selesai"] = $this->input->get('selesai');
		$this->load->view("print_laporan", $data);
	}

	public function dataByid()
	{
		$tabel = $this->input->post("target");
		$id = $this->input->post("id");
		$kondisi = $this->input->post("kondisi");
		$data = $this->db_model->get_where($tabel, [$kondisi => $id])->row_array();
		echo json_encode($data);
	}

	public function hapusData()
	{
		$idTransaksiTindakan = $this->input->post("id");

		$idTransaksi = $this->db_model->get_where("vw_transaksi", ["id_transaksi_tindakan" => $idTransaksiTindakan])->row_array()["id_transaksi"];

		$this->db_model->delete("tbl_transaksi_tindakan", ["id_transaksi_tindakan" => $idTransaksiTindakan]);

		$jmlTransaksi = count($this->db_model->get_where("vw_transaksi", ["id_transaksi" => $idTransaksi])->result_array());
		if ($jmlTransaksi == 0) {
			$this->db_model->delete("tbl_transaksi", ["id_transaksi" => $idTransaksi]);
		}
		echo json_encode("");
	}
}
