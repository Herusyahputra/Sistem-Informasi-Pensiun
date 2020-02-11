<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function index(){	
		$this->load->model('model_pegawai');
		$this->load->model('model_dashboard');

		// date_default_timezone_set("Asia/Jakarta");
		// $skrg = date("Y");
		// for($i = 0; $i < 5; $i++){
		// 	$tahun = $skrg - $i;
		// }

		$data=array(			
			'status' => $this->model_pegawai->status($this->session->userdata('nip')),
			'isi'=>'backend/dashboard',			
		);
		$json = $this->model_dashboard->statistik()->result();
		$data['statistik'] = json_encode($json);
		$this->load->view('layout',$data);		
	}
}

