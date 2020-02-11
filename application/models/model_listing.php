<?php
class Model_listing extends CI_Model {
	public function get_58()
	{
		return $this->db->get_where('ref_asn', ['asn_kluster' => 3, 'YEAR(CURDATE()) - SUBSTRING(asn_nip FROM 1 FOR 4) >=' => 58])->result_array();
	}

	public function get_filter_58($where)
	{
		return $this->db->get_where('ref_asn', ['asn_kluster' => 3, 'asn_skpd' => $where, 'YEAR(CURDATE()) - SUBSTRING(asn_nip FROM 1 FOR 4) >=' => 58])->result_array();
	}

	public function persiapan_57(){
		$this->db->where('YEAR(CURDATE()) - SUBSTRING(asn_nip FROM 1 FOR 4) =', 57);
		$this->db->where('asn_kluster = ', 3);
		$data = $this->db->get('ref_asn');
		return $data->result_array();
	}

	public function get_60()
	{
		return $this->db->get_where('ref_asn', ['asn_kluster' => 2, 'YEAR(CURDATE()) - SUBSTRING(asn_nip FROM 1 FOR 4) >=' => 60])->result_array();
	}

	public function get_filter_60($where)
	{
		return $this->db->get_where('ref_asn', ['asn_kluster' => 2, 'asn_skpd' => $where, 'YEAR(CURDATE()) - SUBSTRING(asn_nip FROM 1 FOR 4) >=' => 60])->result_array();
	}

	public function persiapan_59(){
		$this->db->where('YEAR(CURDATE()) - SUBSTRING(asn_nip FROM 1 FOR 4) =', 59);
		$this->db->where('asn_kluster = ', 2);
		$data = $this->db->get('ref_asn');
		return $data->result_array();
	}

	public function get_65()
	{
		return $this->db->get_where('ref_asn', ['asn_kluster' => 1, 'YEAR(CURDATE()) - SUBSTRING(asn_nip FROM 1 FOR 4) >=' => 65])->result_array();
	}

	public function get_filter_65($where)
	{
		return $this->db->get_where('ref_asn', ['asn_kluster' => 1, 'asn_skpd' => $where, 'YEAR(CURDATE()) - SUBSTRING(asn_nip FROM 1 FOR 4) >=' => 65])->result_array();
	}

	public function persiapan_64(){
		$this->db->where('YEAR(CURDATE()) - SUBSTRING(asn_nip FROM 1 FOR 4) =', 64);
		$this->db->where('asn_kluster = ', 1);
		$data = $this->db->get('ref_asn');
		return $data->result_array();
	}

	public function get_opd_58()
	{
		return $this->db->get_where('ref_asn', ['asn_kluster' => 3, 'asn_skpd' => $this->session->userdata('skpd')])->result_array();
	}
	public function persiapan_opd_57(){
		$this->db->where('YEAR(CURDATE()) - SUBSTRING(asn_nip FROM 1 FOR 4) =', 57);
		$this->db->where('asn_kluster = ', 3);
		$data = $this->db->get('ref_asn');
		return $data->result_array();
	}

	public function get_opd_60()
	{
		return $this->db->get_where('ref_asn', ['asn_kluster' => 2, 'asn_skpd' => $this->session->userdata('skpd')])->result_array();
	}
	public function persiapan_opd_59(){
		$this->db->where('YEAR(CURDATE()) - SUBSTRING(asn_nip FROM 1 FOR 4) =', 59);
		$this->db->where('asn_kluster = ', 2);
		$data = $this->db->get('ref_asn');
		return $data->result_array();
	}

	public function get_opd_65()
	{
		return $this->db->get_where('ref_asn', ['asn_kluster' => 1, 'asn_skpd' => $this->session->userdata('skpd')])->result_array();
	}
	public function persiapan_opd_64(){
		$this->db->where('YEAR(CURDATE()) - SUBSTRING(asn_nip FROM 1 FOR 4) =', 64);
		$this->db->where('asn_kluster = ', 1);
		$data = $this->db->get('ref_asn');
		return $data->result_array();
	}
}