<?php
defined('BASEPATH') or exit('No direct script access allowed');

class usg extends CI_Controller
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
		$this->template->load('template', 'usg_v');
	}
}
