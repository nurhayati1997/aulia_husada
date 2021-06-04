<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pendaftaran extends CI_Controller
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
		// $this->load->view('dashboard_v');
		$this->template->load('template', 'pendaftaran_v');
	}

	function get_kecamatan()
	{
		echo json_encode($this->Db_model->get_all('tbl_kecamatan')->result());
	}

	function get_dokter()
	{
		echo json_encode($this->Db_model->get_where('tbl_user', array('rule !=' => 2, 'status' => 0))->result());
	}

	function add_list()
	{
		echo json_encode($this->Db_model->get_all('tbl_pasien')->result());
	}

	function get_list()
	{
		date_default_timezone_set('Asia/Jakarta');
		// echo json_encode(date('Y-m-d'));
		echo json_encode($this->Db_model->get_where('v_antrian', array('id_dokter' => $this->input->post('id', TRUE), 'status_antrian' => 0, 'tanggal_antri' => strval(date('Y-m-d'))))->result());
	}

	function pencarian()
	{
		echo json_encode($this->Db_model->get_where('tbl_pasien', array('id' => $this->input->post('kata_kunci', TRUE)))->row());
	}

	function get_last_id()
	{
		echo json_encode($this->Db_model->get_query("SELECT MAX(id) AS kode FROM `tbl_pasien`")->row());
	}

	function normalisasi()
	{
		$all_id = $this->Db_model->get_query("SELECT * FROM `tbl_pasien`")->result();
		foreach ($all_id as $row){
			echo json_encode($row->id);
			$random = rand(pow(10,5),pow(10,6)-1);
			$data = [
				"kode" => $random
			];
			$this->Db_model->update('tbl_pasien', $data, array('id' => $row->id));
			echo json_encode($random);
		}
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

	function tambah_asessmen()
	{
		$update = [
			"status" => 1
		];
		$this->Db_model->update("tbl_antrian", $update, array('id_antrian' => $this->input->post("id_antrian", TRUE)));

		$data = [
			"keluhan" => $this->input->post('keluhan', TRUE),
			"penyakit_sekarang" => $this->input->post('penyakit_sekarang', TRUE),
			"penyakit_dahulu" => $this->input->post('penyakit_dahulu', TRUE),
			"riwayat_alergi" => $this->input->post('riwayat_alergi', TRUE),
			"riwayat_operasi" => $this->input->post('riwayat_operasi', TRUE),
			"riwayat_transfusi" => $this->input->post('riwayat_transfusi', TRUE),
			"riwayat_obat" => $this->input->post('riwayat_obat', TRUE),
			"kesadaran_umum" => $this->input->post('kesadaran_umum', TRUE),
			"kesadaran" => $this->input->post('kesadaran', TRUE),
			"bb" => $this->input->post('bb', TRUE),
			"gda" => $this->input->post('gda', TRUE),
			"choles" => $this->input->post('choles', TRUE),
			"au" => $this->input->post('au', TRUE),
			"tekanan_darah" => $this->input->post('tekanan_darah', TRUE),
			"nadi" => $this->input->post('nadi', TRUE),
			"suhu" => $this->input->post('suhu', TRUE),
			"rr" => $this->input->post('rr', TRUE),
			"diagnosa" => $this->input->post('diagnosa', TRUE),
			"terapi" => $this->input->post('terapi', TRUE),
			"id_antrian" => $this->input->post('id_antrian', TRUE)
		];

		$cek = $this->Db_model->get_where('tbl_riwayat_diagnosa', array('id_antrian' => $this->input->post('id_antrian', TRUE)))->num_rows();
		
		if ($cek > 0) {
			echo json_encode($this->Db_model->update("tbl_riwayat_diagnosa", $data, array('id_antrian' => $this->input->post("id_antrian", TRUE))));
		} else {
			echo json_encode($this->Db_model->insert_get("tbl_riwayat_diagnosa", $data));
		}
		// echo json_encode($update);
	}

	function tambah_berkas(){
		$user = $this->Db_model->get_where('v_riwayat_diagnosa', array('id_antrian' => $this->input->post('id_antrian', TRUE)))->row();
		$nama = $user->tanggal_antri . "_" . $user->id_diagnosa . "_" . $user->nama;

		$path = './document/'.$this->input->post('path', TRUE)."/";
		$config['allowed_types'] = 'jpg|jpeg|pdf';
		$config['upload_path'] = $path;
		$config['file_name'] = $nama;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('berkas')) {
			$namaFotoBaru = $this->upload->data('file_name');

			if($this->input->post('path', TRUE)=='hasil_lab'){
				$kolom = "hasil_lab";
			}else if($this->input->post('path', TRUE)=='radiologi'){
				$kolom = "hasil_radiologi";
			}else if($this->input->post('path', TRUE)=='catatan'){
				$kolom = "hasil_catatan";
			}

			// echo json_encode($path);
			$data = [
				$kolom => $namaFotoBaru
			];

			// echo json_encode($kolom);
			echo json_encode($this->Db_model->update("tbl_riwayat_diagnosa", $data, array('id_antrian' => $this->input->post("id_antrian", TRUE))));
		} else {
			echo json_encode($this->upload->display_errors());
		}
		
	}
}
