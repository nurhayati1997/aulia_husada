<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{

	public function __construct()
	{
		if (!$this->session->userdata("id_user") or ($this->session->userdata("rule") != 1 and $this->session->userdata("rule") != 2)) {
			redirect("login");
		}
		parent::__construct();
		$this->load->model('db_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->view('profile_v');
	}
}
