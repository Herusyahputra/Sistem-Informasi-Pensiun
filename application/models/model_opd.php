<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_opd extends CI_model {
	function pegawai(){
		$data = $this->db->get('ref_asn');
		return $data->result_array();
	}
	function listing_pensiun(){		
		$data = $this->db->query('SELECT * FROM ref_asn where (YEAR(CURDATE())-YEAR(asn_tgl_lahir)) >= 57 AND (YEAR(CURDATE())-YEAR(asn_tgl_lahir)) <= 58');

		/*
		$this->db->select('*');
		$this->db->from('ref_asn');
		$this->db->where('$umur >=', 57);
		$this->db->where('$umur <=', 58);
		$data = $this->db->get();
		*/

		return $data->result_array();
	}
	function dpcp_fpp($nip){
		$this->db->where('listing_nip', $nip);
		$this->db->order_by('listing_id', 'DESC');
    	$data = $this->db->get('ref_listing');
    	return $data;
    }
}