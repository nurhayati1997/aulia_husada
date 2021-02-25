<?php
defined('BASEPATH') or exit('No direct script access allowed');

class login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('db_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->view('login_v');
	}

	public function tryLogin()
	{
		$email = $this->input->post("email");
		$pass = $this->input->post("pass");

		echo json_encode($this->_login($email, $pass));
	}

	private function _login($email, $pass)
	{
		$user = $this->db_model->get_where("tbl_user", ["email" => $email])->row_array();

		if ($user) {
			// if (password_verify($pass, $user['password'])) {
			if ($pass == $user['password']) {
				$data = [
					'id_user' => $user['id_user'],
					'nama' => $user['nama'],
					'rule' => $user['rule']
				];
				$this->session->set_userdata($data);

				return false;
			} else {
				return 'pass';
			}
		} else {
			return 'email';
		}
	}
}
