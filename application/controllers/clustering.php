<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clustering extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_clustering');
		$this->load->model('model_pegawai');
	}
	public function index()
	{
		$data = $this->model_clustering->get();		
		$view['data'] = $this->model_clustering->get();

		foreach ($data as $data) {
			// hitung umur
			$umur = date("Y") - substr($data['asn_nip'], 0, 4);
						
			// transformasi umur
			if ($umur == 57) {
				$umur = 0.02;
			}
			else if ($umur >= 58 AND $umur < 60) {
				$umur = 0.25;
			}
			else if ($umur >= 60 AND $umur < 65) {
				$umur = 0.35;
			}
			else if ($umur >= 65) {
				$umur = 0.40;
			}
			else {
				$umur = "pensiun";
			}

			// transformasi eselon
			if ($data['asn_eselon'] == 11) {
				$eselon = 0.45;
			}
			else if ($data['asn_eselon'] == 21) {
				$eselon = 0.2;
			}
			else if ($data['asn_eselon'] == 31) {
				$eselon = 0.1;
			}
			else if ($data['asn_eselon'] == 41) {
				$eselon = 0.175;
			}
			else if ($data['asn_eselon'] == 51) {
				$eselon = 0.075;
			}
			else if ($data['asn_eselon'] == 61) {
				$eselon = 0.25;
			}

			// menentukan centroid
			$c1 = [0.25, 0.175];
			$c2 = [0.35, 0.05];
			$c3 = [0.40, 0.075];

			// rumus + perhitungan				
			$dc1 = sqrt(pow($eselon - $c1[0], 2) + pow($umur - $c1[1], 2));
			$dc2 = sqrt(pow($eselon - $c2[0], 2) + pow($umur - $c2[1], 2));
			$dc3 = sqrt(pow($eselon - $c3[0], 2) + pow($umur - $c3[1], 2));


			$view['dc1'][] = $dc1;
			$view['dc2'][] = $dc2;
			$view['dc3'][] = $dc3;

			// kluster			
			if ($dc1 < $dc2 && $dc1 < $dc3) {
				$hasil = 1;			
			}			
			else if ($dc2 < $dc3 && $dc2 < $dc1) {
				$hasil = 2;				
			}
			else if ($dc3 < $dc2 && $dc3 < $dc1) {
				$hasil = 3;				
			}
			else {
				$hasil = 'ulang';
			}

			$view['hasil'][] = $hasil;			

			if($this->input->post('update')){
				$this->db->where('asn_nip', $data['asn_nip']);
				$this->db->update('ref_asn', ["asn_kluster" => $hasil]);				
			}

			// echo $data['asn_nip'].' | '.$data['asn_nama'].' | '.$data['asn_gol_akhir'].' | '.$eselon.' | '.$umur.'| jarak ke cluster 1 = '.$dc1.' | jarak ke cluster 2 = '.$dc2.' | jarak ke cluster 3 = '.$dc3.' | hasil kluster = '.$hasil.'<br>';			
			
		}

		$view['status'] = $this->model_pegawai->status($this->session->userdata('nip'));
		$view['isi'] = 'backend/operator/klustering';
		$this->load->view('layout', $view);
	}


}