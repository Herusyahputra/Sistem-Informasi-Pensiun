<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_pegawai extends CI_model {
	function pegawai(){
		$this->db->where('YEAR(CURDATE()) - SUBSTRING(asn_nip FROM 1 FOR 4) <=', 57);
		$data = $this->db->get('ref_asn');
		return $data->result_array();
	}
	function pegawai_filter($where){
		$this->db->where('YEAR(CURDATE()) - SUBSTRING(asn_nip FROM 1 FOR 4) =', 57);
		$this->db->where('asn_skpd', $where);
		$data = $this->db->get('ref_asn');		
		return $data->result_array();
	}
	function persiapan(){
		$this->db->where('YEAR(CURDATE()) - SUBSTRING(asn_nip FROM 1 FOR 4) =', 57);
		$data = $this->db->get('ref_asn');
		return $data->result_array();
	}
	function pegawai_pensiun(){
		$this->db->where('2018-substring(asn_nip,1,4)>=', 58);
		$data = $this->db->get('ref_asn');
		return $data->result_array();
	}
	function pegawai_detail($nip){
		$this->db->join('ref_skpd', 'ref_asn.asn_skpd = ref_skpd.skpd_kd_skpd');
		$this->db->where('asn_nip',$nip);
		$data = $this->db->get('ref_asn');
		return $data->result_array();
	}
	function pegawai_ubah($nip){
		$this->db->where('asn_nip',$nip);
		$data = $this->db->get('ref_asn');
		return $data->result_array();
	}
	function listing_pensiun(){	
		$data = $this->db->query('SELECT * FROM ref_asn where (YEAR(CURDATE()) - SUBSTRING(asn_nip FROM 1 FOR 4)) >= 57 AND (YEAR(CURDATE())-SUBSTRING(asn_nip FROM 1 FOR 4)) <= 58 AND asn_pensiun = "N"');

		/*
		$this->db->select('*');
		$this->db->from('ref_asn');
		$this->db->where('$umur >=', 57);
		$this->db->where('$umur <=', 58);
		$data = $this->db->get();
		*/

		return $data->result_array();
	}
	function listing_dipensiun(){		
		$data = $this->db->query('SELECT * FROM ref_asn where (YEAR(CURDATE())-SUBSTRING(asn_nip FROM 1 FOR 4)) <= 56 AND asn_pensiun = "Y"');
		return $data->result_array();
	}
	function tambah_listing(){		
		$data = $this->db->get('ref_listing');
		return $data->result_array();
	}

	function data($number,$offset){
		return $query = $this->db->get('ref_asn',$number,$offset)->result();		
	}

	function dpcp_fpp($nip){
		$this->db->where('listing_nip', $nip);
    	$data = $this->db->get('ref_listing');
    	return $data->result_array();
    }
 
	function jumlah_data(){
		return $this->db->get('ref_asn')->num_rows();
	}

	function riwayat_proses($data){
		$query = $this->db->insert('rw_proses', $data);
		return $query;
	}

	function riwayat(){
		$where = $this->session->userdata('nip');
		$this->db->select('*');
		$this->db->from('rw_proses');
		$this->db->join('ref_rw_proses', 'rw_proses.proses_dpcp_fpp = ref_rw_proses.id');
		$this->db->where('nip', $where);
		$query = $this->db->get();
		return $query;
	}

	function rw_proses($nip){		
		$this->db->select('*');
		$this->db->from('rw_proses');
		$this->db->join('ref_rw_proses', 'rw_proses.proses_dpcp_fpp = ref_rw_proses.id');
		$this->db->where('nip', $nip);
		$query = $this->db->get();
		return $query;
	}

	public function notifikasi($nip, $data){
		$query = $this->db->where('asn_nip', $nip)->update('ref_asn', $data);
		return $query;
	}

	public function status($nip){		
		$query = $this->db->where('asn_nip', $nip)->get('ref_asn');
		return $query->row_array();
	}

	public function laporan_pensiun($skpd = null, $tahun = null){
		$this->db->where('asn_skpd', $skpd);
		$this->db->where($tahun.'-substring(asn_nip,1,4)>=', 58);
		$this->db->join('ref_skpd', 'ref_asn.asn_skpd = ref_skpd.skpd_kd_skpd');
		$data = $this->db->get('ref_asn');
		return $data->result_array();
	}

	public function upload($data){
    try{
      $this->db->insert('ref_listing', $data);
      return true;
    }catch(Exception $e){
    }      
	}	
}