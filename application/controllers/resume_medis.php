<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class resume_medis extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Db_model');
		$this->load->helper('file');
	}

	public function index()
	{
		$this->template->load('template', 'resume_medis_v');
	}

	function get_pasien()
	{
		// echo json_encode($this->input->post('nrm', TRUE));
		if($this->input->post('nrm', TRUE)==null){
			$newformat = 0 ;
		}else{
			$newformat = $this->input->post('nrm', TRUE);
		}
		echo json_encode($this->Db_model->get_where('v_riwayat_diagnosa', array('id_pasien' => $newformat))->result());
	}

	function get_nrm()
	{
		echo json_encode($this->Db_model->get_all('v_riwayat_diagnosa')->result());
	}

	function pencarian()
	{
		// echo json_encode($this->input->post('id_diagnosa', TRUE));
		echo json_encode($this->Db_model->get_where('v_riwayat_diagnosa', array('id_antrian' => $this->input->post('id_antrian', TRUE)))->row());
	}

	function upload_pernyataan()
	{
		$user = $this->Db_model->get_where('v_riwayat_diagnosa', array('id_diagnosa' => $this->input->post('id', TRUE)))->row();
		$nama = $user->tanggal_antri."_".$user->id_diagnosa."_".$user->nama;

		$config['allowed_types'] = 'jpg|jpeg|pdf';
		$config['upload_path'] = './document/pernyataan/';
		$config['file_name'] = $nama;

        $this->load->library('upload', $config);

		// unlink('./document/pernyataan/'.$nama);

        if ($this->upload->do_upload('berkas')) {
			
            $namaFotoBaru = $this->upload->data('file_name');

            $data = [
                "berkas_tindakan" => $namaFotoBaru,
                "tindakan" => $this->input->post('jenis', TRUE),
			];
			
			echo json_encode($this->Db_model->update("tbl_riwayat_diagnosa", $data , array('id_diagnosa' => $this->input->post("id", TRUE))));
		
		}else {
            echo json_encode($this->upload->display_errors());
		}
		// echo json_encode($nama);
	}	
}
