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
}
