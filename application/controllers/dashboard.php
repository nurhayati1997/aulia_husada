<?php
defined('BASEPATH') or exit('No direct script access allowed');

class dashboard extends CI_Controller
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
		date_default_timezone_set('Asia/Jakarta');
		$data["totalPasien"] = $this->db_model->get_all("tbl_pasien")->num_rows();

		$data["pasienBaru"] = $this->db_model->get_where("tbl_pasien", ["tgl_input >=" => date("Y") . "-" . date('m') . "-1 00:00:00", "tgl_input <=" => date("Y-m-d h:i:s")])->num_rows();


		$tanggalMulai = date("Y-m-d") . " 00:00:00";
		$tanggalSelesai = date("Y-m-d h:i:s");
		$data["totalUntung"] = $this->db_model->keuntunganHariIni($tanggalMulai, $tanggalSelesai);


		$this->template->load('template', 'dashboard_v', $data);
	}

	public function keuntunganMingguan()
	{
		$hari = array('Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun');
		$hariIndo = array("Senin", "Selasa", "Rabu", "Kamis", "Juma'at", "Sabtu", "Minggu");

		$hariIni = array_search(date('D', strtotime('today')), $hari);

		$tanggalSeminggu = array(date('Y-m-d', strtotime('last monday')), date('Y-m-d', strtotime('last tuesday')), date('Y-m-d', strtotime('last wednesday')), date('Y-m-d', strtotime('last thursday')), date('Y-m-d', strtotime('last friday')), date('Y-m-d', strtotime('last saturday')), date('Y-m-d', strtotime('last sunday')));

		$hasil = array();

		for ($i = $hariIni; $i < count($hari); $i++) {
			$jumlahPasien = $this->db_model->get_where('tbl_antrian', ['tanggal_antri >=' => $tanggalSeminggu[$i] . " 00:00:00", 'tanggal_antri <=' => $tanggalSeminggu[$i] . " 23:59:59"])->num_rows();

			array_push($hasil, array($hariIndo[$i], $jumlahPasien));
		}
		for ($i = 0; $i < $hariIni; $i++) {
			$jumlahPasien = $this->db_model->get_where('tbl_antrian', ['tanggal_antri >=' => $tanggalSeminggu[$i] . " 00:00:00", 'tanggal_antri <=' => $tanggalSeminggu[$i] . " 23:59:59"])->num_rows();

			array_push($hasil, array($hariIndo[$i], $jumlahPasien));
		}
		echo json_encode($hasil);
	}
}
