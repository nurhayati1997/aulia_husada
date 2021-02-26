<?php
defined('BASEPATH') or exit('No direct script access allowed');

class laporan extends CI_Controller
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
}
