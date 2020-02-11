<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {
	public function index()
	{
		$this->load->view('layout_pegawai');
	}
	public function riwayat(){
		$this->load->model('model_pegawai');
		$data=array(
			'status' => $this->model_pegawai->status($this->session->userdata('nip')),
			'data'=> $this->model_pegawai->riwayat()->result_array(),
			'isi'=> 'backend/pegawai/riwayat'
		);
		$this->load->view('layout',$data);	
	}
	public function dpcp_fpp($nip){		
		$this->load->model('model_pegawai');
		$this->load->model('model_opd');
		$data = array(
			'status' => $this->model_pegawai->status($this->session->userdata('nip')),
			'data'	=> $this->model_opd->dpcp_fpp($nip)->result_array(),
			'num'	=> $this->model_opd->dpcp_fpp($nip)->num_rows(),
			'isi'	=> 'backend/pegawai/dpcp_fpp'
		);
		$this->load->view('layout', $data);
	}
	public function tentang(){
		$this->load->model('model_pegawai');
		$data=array(
			'status' => $this->model_pegawai->status($this->session->userdata('nip')),
			'isi'	=>'backend/pegawai/tentang'
		);
		$this->load->view('layout',$data);
	}
}