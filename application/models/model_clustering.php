<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_clustering extends CI_model 
{
	public function get()
	{
		$this->db->select('*');
		$this->db->from('ref_asn');
		$this->db->where('YEAR(CURDATE()) - SUBSTRING(asn_nip FROM 1 FOR 4) =', 57);
		$query = $this->db->get('');
		return $query->result_array();
	}

	public function getById($id)
	{
		$query = $this->db->get_where('ref_asn', ['asn_id' => $id]);
		return $query->row_array();
	}
}