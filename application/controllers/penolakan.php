<?php
defined('BASEPATH') or exit('No direct script access allowed');

class penolakan extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata("id_user")) {
			redirect("login");
		}
		$this->load->model('Db_model');
	}

	public function index()
	{
		// $this->load->view('dashboard_v');
		$this->template->load('template', 'penolakan_v');
	}
}
