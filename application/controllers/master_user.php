<?php
defined('BASEPATH') or exit('No direct script access allowed');

class master_user extends CI_Controller
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
		$this->template->load('template', 'master_user_v');
	}

	public function tampil()
	{
		echo json_encode($this->db_model->get_where("tbl_tindakan", ["status" => 0])->result());
	}

	public function tambah()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('harga', 'Harga', 'required|trim');
		if ($this->form_validation->run() == false) {
			if (form_error("nama")) {
				$error = form_error("nama");
			} else {
				$error = form_error("harga");
			}
			echo json_encode($error);
		} else {
			$data = [
				"nama_tindakan" => $this->input->post("nama", TRUE),
				"harga" => $this->input->post("harga", TRUE)
			];
			$this->db_model->insert('tbl_tindakan', $data);
			echo json_encode("");
		}
	}

	function dataById()
	{
		echo json_encode($this->db_model->get_where('tbl_tindakan', ["id_tindakan" => $this->input->post('id', TRUE)])->result());
	}

	public function hapus()
	{
		$data = [
			"status" => 1
		];
		echo json_encode($this->db_model->update('tbl_tindakan', $data, array('id_tindakan' => $this->input->post('id', TRUE))));
		// echo json_encode("hapus");
		// echo json_encode($this->db_model->delete("tbl_barang", ['id_barang' => $this->input->post('id', TRUE)]));
	}
}
