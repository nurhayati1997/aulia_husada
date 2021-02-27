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
		echo json_encode($this->db_model->get_where("tbl_user", ["status" => 0])->result());
	}

	public function tambah()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[tbl_user.email]', [
			"is_unique" => "Alamat email ini sudah terdaftar.",
			"required" => "Email tidak boleh kosong.",
			"valid_email" => "Email tidak valid."
		]);
		$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[5]|matches[konfirPass]', [
			"required" => "Password tidak boleh kosong.",
			"matches" => "Password tidak cocok dengan konfirmasi.",
			"min_length" => "Pasword minimal 5 karakter."
		]);
		$this->form_validation->set_rules('konfirPass', 'Konfirmasi Password', 'required|trim|matches[password]');
		if ($this->form_validation->run() == false) {
			if (form_error("nama")) {
				$error = "Nama tidak boleh kosong.";
			} else if ($this->input->post("rule") == 0) {
				$error = "Harap Memilih jenis user. (admin/dokter)";
			} else if (form_error("email")) {
				$error = form_error("email");
			} else if (form_error("password")) {
				$error = form_error("password");
			} else {
				$error = form_error("konfirPass");
			}
			echo json_encode($error);
		} else {
			$data = [
				"nama" => $this->input->post("nama", TRUE),
				"email" => $this->input->post("email", TRUE),
				"password" => password_hash($this->enkripsi($this->input->post("password")), PASSWORD_DEFAULT),
				"rule" => $this->input->post("rule", TRUE),
				"spesialis" => $this->input->post("dokter", TRUE),
				"status" => 0
			];
			$this->db_model->insert('tbl_user', $data);
			echo json_encode("");
		}
	}

	public function dataById()
	{
		echo json_encode($this->db_model->get_where($this->input->post("target"), ["id_user" => $this->input->post('id', TRUE)])->row_array());
	}

	public function edit()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		if ($this->form_validation->run() == false) {
			$error = "Nama tidak boleh kosong.";
			echo json_encode($error);
		} else {
			$data = [
				"nama" => $this->input->post("nama", TRUE)
			];
			$this->db_model->update('tbl_user', $data, ["id_user" => $this->input->post("id")]);
			echo json_encode("");
		}
	}

	public function hapus()
	{
		$data = [
			"status" => 1
		];
		echo json_encode($this->db_model->update('tbl_user', $data, array('id_user' => $this->input->post('id', TRUE))));
	}

	function enkripsi($data)
	{
		$kode =  array("", "~", "!", "@", "#", "$", "%", "^", "&", "*", "(", ")", "_", "s-", "d+", "9=", "=|", ")}", "{", "-[", "[]", ";", ":", "?", ">", ".", "<k", "67", "05=", "2e", "8q", "9a", "2=", "3", "8", "9", "0", "A", "3", "s", "s", "E", "F", "G", "l", "o", "J", "K", "L", "M", "a", "sf", "Pa", "w$", "ar", "Sj", "sa", "sf", "V", "W", "s", "Y", "Z", "~", "!", "@", "#", "$", "%", "^", "&", "*", "(", ")", "_", "-", "+", "=", "|", "}", "{", "[", "]", ";", ":", "?", ">", ".", "<", "3", "5", "2", "8", "-", "as", "3", "8", "9", "0", "A", "3", "d", "<k", "67", "05=", "2e", "a", "gd",  "!", "@", "#", "$", "%", "^", "&", "*", "(", ")", "Fa", "df", "a", "sf", "Jh", "Ks", "L", "M", "05=", "2e", "8q", "9a", "Mj", "gOf", "qw", "w", "ht", ".S", "a", "p[", "dg", "W0", "Xia", "asY", "dZ", "M", "a", "sf", "Pa", "w$", "ar", "Sj", "sa", "sf", "V");

		$terjemah = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z", "1", "2", "3", "4", "5", "6", "7", "8", "9", "0", "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z");

		$data = str_split($data);
		$hasil = '';
		for ($i = 0; $i < count($data); $i++) {
			$index = array_search($data[$i], $terjemah);
			$index = $index + (count($data) * $i);
			while ($index >= count($kode)) {
				$index -= count($kode);
			}
			if ($index == 0) {
				$index = count($data) + $i;
			}

			$hasil .= $kode[$index];
		}
		return $hasil;
	}

	function spin($data)
	{
		$data = str_split($data);
		$hasil = '';
		$index = 0;
		$penampung = '';
		for ($i = 0; $i < count($data); $i++) {
			$index += $i;
			for ($j = $index; $j < ($index + $i + 1); $j++) {
				if ($j >= count($data)) break;
				$penampung = $data[$j] . $penampung;
			}
			$hasil .= $penampung;
			$penampung = "";
			if ($i >= count($data)) break;
		}
		return $hasil;
	}
}
}
