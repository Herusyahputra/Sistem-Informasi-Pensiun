<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Opd extends CI_Controller {
	public function index(){
		
		$this->load->model('model_pegawai');

		if ($this->input->post('filter')) {
			$where = $this->input->post('skpd');
			$data = $this->model_pegawai->pegawai_filter($where);			
		}
		else {
			$data = $this->model_pegawai->pegawai();
		}		
		$data=array(
			'status' => $this->model_pegawai->status($this->session->userdata('nip')),
			'data'=> $data,
			'skpd' => $this->db->get('ref_skpd')->result(),
			'isi'=>'backend/tuopd/opd'
		);
		$this->load->view('layout',$data);
	}
	public function persiapan(){
		
		$this->load->model('model_pegawai');

		if ($this->input->post('filter')) {
			$where = $this->input->post('skpd');
			$data = $this->model_pegawai->pegawai_filter($where);			
		}
		else {
			$data = $this->model_pegawai->persiapan();
		}		
		$data=array(
			'data'=> $data,
			'skpd' => $this->db->get('ref_skpd')->result(),
			'isi'=>'backend/tuopd/opd'
		);
		$this->load->view('layout',$data);
	}
	//Persiapan Pensiun
	public function persiapan_57(){
		$this->load->model('model_pegawai');
		$this->load->model('model_listing');

		if ($this->input->post('filter')) {
			$where = $this->input->post('skpd');
			$data = $this->model_pegawai->pegawai_filter($where);			
		}
		else {
			$data = $this->model_listing->persiapan_opd_57();
		}		
		$data=array(
			'status' => $this->model_pegawai->status($this->session->userdata('nip')),
			'data'=> $data,
			'skpd' => $this->db->get('ref_skpd')->result(),
			'isi'=>'backend/tuopd/persiapan_57'
		);
		$this->load->view('layout',$data);
	}

	public function persiapan_59(){
		$this->load->model('model_pegawai');
		$this->load->model('model_listing');

		if ($this->input->post('filter')) {
			$where = $this->input->post('skpd');
			$data = $this->model_pegawai->pegawai_filter($where);			
		}
		else {
			$data = $this->model_listing->persiapan_opd_59();
		}		
		$data=array(
			'status' => $this->model_pegawai->status($this->session->userdata('nip')),
			'data'=> $data,
			'skpd' => $this->db->get('ref_skpd')->result(),
			'isi'=>'backend/tuopd/persiapan_59'
		);
		$this->load->view('layout',$data);
	}

	public function persiapan_64(){
		$this->load->model('model_pegawai');
		$this->load->model('model_listing');

		if ($this->input->post('filter')) {
			$where = $this->input->post('skpd');
			$data = $this->model_pegawai->pegawai_filter($where);			
		}
		else {
			$data = $this->model_listing->persiapan_opd_64();
		}		
		$data=array(
			'status' => $this->model_pegawai->status($this->session->userdata('nip')),
			'data'=> $data,
			'skpd' => $this->db->get('ref_skpd')->result(),
			'isi'=>'backend/tuopd/persiapan_64'
		);
		$this->load->view('layout',$data);
	}
	public function listing_pensiun(){
		$this->load->model('model_pegawai');
		$data=array(
			'data'=> $this->model_pegawai->listing_pensiun(),
			'data2' => $this->model_pegawai->listing_dipensiun(),
			'isi'=> 'backend/tuopd/listing_pensiun'
		);
		$this->load->view('layout',$data);	
	}

	// Listing Pensiun
	public function listing_pensiun_58(){
		$this->load->model('model_pegawai');
		$this->load->model('model_listing', 'listing');
		$data=array(
			'status' => $this->model_pegawai->status($this->session->userdata('nip')),
			'data'=> $this->listing->get_opd_58(),			
			'isi'=> 'backend/tuopd/listing_pensiun_58'
		);
		$this->load->view('layout',$data);	
	}

	public function listing_pensiun_60(){
		$this->load->model('model_pegawai');
		$this->load->model('model_listing', 'listing');
		$data=array(
			'status' => $this->model_pegawai->status($this->session->userdata('nip')),
			'data'=> $this->listing->get_opd_60(),			
			'isi'=> 'backend/tuopd/listing_pensiun_60'
		);
		$this->load->view('layout',$data);	
	}

	public function listing_pensiun_65(){
		$this->load->model('model_pegawai');
		$this->load->model('model_listing', 'listing');
		$data=array(
			'status' => $this->model_pegawai->status($this->session->userdata('nip')),
			'data'=> $this->listing->get_opd_65(),			
			'isi'=> 'backend/tuopd/listing_pensiun_65'
		);
		$this->load->view('layout',$data);	
	}

	public function pegawai_detail($nip){
		$this->load->model('model_pegawai');
		$data=array(
			'data'=> $this->model_pegawai->pegawai_detail($nip),
			'isi'=>'backend/tuopd/pegawai_detail'
		);
		$this->load->view('layout',$data);
	}	
	public function dpcp_fpp($nip){		
		$this->load->model('model_opd');
		date_default_timezone_set("Asia/Jakarta");           
        $skrg = date("Y-m-d");
		$data=array(
			'nip'		=> $nip,
			'tgl_proses' => $skrg,
			'proses_dpcp_fpp' => 3,
			'updateuser' => $this->session->userdata('nama'),
		);
		$this->db->insert('rw_proses', $data);

		$data = array(
			'data'	=> $this->model_opd->dpcp_fpp($nip)->result_array(),
			'num'	=> $this->model_opd->dpcp_fpp($nip)->num_rows(),
			'isi'	=> 'backend/tuopd/dpcp_fpp'
		);
		$this->load->view('layout', $data);
	}
	public function keterangan_proses($nip){
		$data=array(
			'listing_ket'		=>$this->input->post('keterangan'),			
		);
		$this->db->update('ref_listing',$data,'listing_nip='.$nip);
		redirect('opd/listing_pensiun');
	}
	public function pegawai_lihat($nip){		
		$this->load->model('model_opd');		
		$data = array(
			'data'	=> $this->model_opd->dpcp_fpp($nip)->result_array(),
			'num'	=> $this->model_opd->dpcp_fpp($nip)->num_rows(),
			'isi'	=> 'backend/tuopd/dpcp_fpp'
		);
		$this->load->view('layout', $data);
	}
	public function riwayat($nip){
		$this->load->model('model_pegawai');
		$data=array(
			'data'=> $this->model_pegawai->rw_proses($nip)->result_array(),
			'isi'=> 'backend/tuopd/riwayat'
		);
		$this->load->view('layout',$data);	
	}
	public function tentang(){
		$data=array(
			'isi'	=>'backend/tuopd/tentang'
		);
		$this->load->view('layout',$data);
	}
}