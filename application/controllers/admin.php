<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct(){
		parent::__construct();
		  $this->load->helper(array('form', 'url'));
	}

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
			'isi'=>'backend/operator/pegawai'
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
			'status' => $this->model_pegawai->status($this->session->userdata('nip')),
			'data'=> $data,
			'skpd' => $this->db->get('ref_skpd')->result(),
			'isi'=>'backend/operator/persiapan'
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
			$data = $this->model_listing->persiapan_57();
		}		
		$data=array(
			'status' => $this->model_pegawai->status($this->session->userdata('nip')),
			'data'=> $data,
			'skpd' => $this->db->get('ref_skpd')->result(),
			'isi'=>'backend/operator/persiapan_57'
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
			$data = $this->model_listing->persiapan_59();
		}		
		$data=array(
			'status' => $this->model_pegawai->status($this->session->userdata('nip')),
			'data'=> $data,
			'skpd' => $this->db->get('ref_skpd')->result(),
			'isi'=>'backend/operator/persiapan_59'
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
			$data = $this->model_listing->persiapan_64();
		}		
		$data=array(
			'status' => $this->model_pegawai->status($this->session->userdata('nip')),
			'data'=> $data,
			'skpd' => $this->db->get('ref_skpd')->result(),
			'isi'=>'backend/operator/persiapan_64'
		);
		$this->load->view('layout',$data);
	}
	
	public function pegawai_tambah(){		
		$this->load->model('model_pegawai');
		$data=array(
			'status' => $this->model_pegawai->status($this->session->userdata('nip')),
			'data1' => $this->db->get('ref_skpd')->result(),
			'data2' => $this->db->get('ref_pangkat')->result(),
			'data3' => $this->db->get('ref_eselon')->result(),			
			'isi'=>'backend/operator/pegawai_tambah'
		);
		$this->load->view('layout',$data);
	}

	public function pegawai_tambah_proses(){
		$data=array(
			'asn_nip'		=>$this->input->post('nip'),
			'asn_nama'		=>$this->input->post('nama'),			
			'asn_gol_akhir'	=>$this->input->post('golongan'),
			'asn_eselon'	=>$this->input->post('eselon'),
			'asn_jabatan'	=>$this->input->post('jabatan'),
			'asn_jft'		=>$this->input->post('jft'),
			'asn_jfu'		=>$this->input->post('jfu'),
			'asn_satker'	=>$this->input->post('satker'),
			'asn_skpd'		=>$this->input->post('skpd'),
			'asn_ref_tipe_id'	=>$this->input->post('tipe id'),
		);
		$this->db->insert('ref_asn',$data);

		redirect('admin');
		}
	public function pegawai_ubah($nip){
		$this->load->model('model_pegawai');
		$data=array(
			'status' => $this->model_pegawai->status($this->session->userdata('nip')),
			'data' => $this->model_pegawai->pegawai_ubah($nip),
			'data2' => $this->db->get('ref_skpd')->result(),
			'isi'=>'backend/operator/pegawai_ubah'
		);
		$this->load->view('layout',$data);
	}
	public function pegawai_ubah_proses($nip){
		$data=array(
			'asn_nip'		=>$this->input->post('nip'),
			'asn_nama'		=>$this->input->post('nama'),			
			'asn_gol_akhir'	=>$this->input->post('golongan'),
			'asn_eselon'		=>$this->input->post('eselon'),
			'asn_jabatan'		=>$this->input->post('jabatan'),
			'asn_jft'			=>$this->input->post('jft'),
			'asn_jfu'			=>$this->input->post('jfu'),
			'asn_satker'		=>$this->input->post('satker'),
			'asn_skpd'			=>$this->input->post('skpd'),
			'asn_ref_tipe_id'	=>$this->input->post('tipe id'),
		);
		$this->db->update('ref_asn',$data,'asn_nip='.$nip);
		redirect('admin');
	}
	public function pegawai_hapus($nip){
		$this->db->delete('ref_asn','asn_nip='.$nip);
		redirect('admin', 'refresh');
	}
	public function pegawai_detail($nip){
		$this->load->model('model_pegawai');
		$data=array(
			'status' => $this->model_pegawai->status($this->session->userdata('nip')),
			'data'=> $this->model_pegawai->pegawai_detail($nip),
			'isi'=>'backend/operator/pegawai_detail'
		);
		$this->load->view('layout',$data);
	}
	public function listing_pensiun(){
		$this->load->model('model_pegawai');
		$data=array(
			'status' => $this->model_pegawai->status($this->session->userdata('nip')),
			'data'=> $this->model_pegawai->listing_pensiun(),
			'data2' => $this->model_pegawai->listing_dipensiun(),
			'isi'=> 'backend/operator/listing_pensiun'
		);
		$this->load->view('layout',$data);	
	}

	// Listing Pensiun
	public function listing_pensiun_58(){
		$this->load->model('model_pegawai');
		$this->load->model('model_listing', 'listing');

		if ($this->input->post('filter')) {
			$where = $this->input->post('skpd');
			$data = $this->listing->get_filter_58($where);			
		}
		else {
			$data = $this->listing->get_58();
		}		

		$data=array(
			'status' => $this->model_pegawai->status($this->session->userdata('nip')),
			'data'=> $data,
			'skpd' => $this->db->get('ref_skpd')->result(),		
			'isi'=> 'backend/operator/listing_pensiun_58'
		);
		$this->load->view('layout',$data);	
	}

	public function listing_pensiun_60(){
		$this->load->model('model_pegawai');
		$this->load->model('model_listing', 'listing');

		if ($this->input->post('filter')) {
			$where = $this->input->post('skpd');
			$data = $this->listing->get_filter_60($where);			
		}
		else {
			$data = $this->listing->get_60();
		}

		$data=array(
			'status' => $this->model_pegawai->status($this->session->userdata('nip')),
			'data'=> $data,			
			'skpd' => $this->db->get('ref_skpd')->result(),
			'isi'=> 'backend/operator/listing_pensiun_60'
		);
		$this->load->view('layout',$data);	
	}

	public function listing_pensiun_65(){
		$this->load->model('model_pegawai');
		$this->load->model('model_listing', 'listing');

		if ($this->input->post('filter')) {
			$where = $this->input->post('skpd');
			$data = $this->listing->get_filter_65($where);			
		}
		else {
			$data = $this->listing->get_65();
		}

		$data=array(
			'status' => $this->model_pegawai->status($this->session->userdata('nip')),
			'data'=> $data,			
			'skpd' => $this->db->get('ref_skpd')->result(),
			'isi'=> 'backend/operator/listing_pensiun_65'
		);
		$this->load->view('layout',$data);	
	}

	public function tambah_listing_proses($nip){		
		date_default_timezone_set("Asia/Jakarta");           
        $skrg = date("Y-m-d");
		$data=array(
			'nip'		=> $nip,
			'tgl_proses' => $skrg,
			'proses_dpcp_fpp' => 1,
			'updateuser' => $this->session->userdata('nama'),
		);
		$this->db->insert('rw_proses', $data);

		$data=array(
			'asn_pensiun'	=> 'Y'			
		);
		$this->db->update('ref_asn',$data,'asn_nip='.$nip);

		redirect('admin/listing_pensiun');
	}
	public function aksi_upload(){
		$this->load->model('model_pegawai');		

		date_default_timezone_set("Asia/Jakarta");           
		$skrg = date("Y-m-d");
		$data=array(
			'nip' => $this->input->post('nip'),
			'tgl_proses' => $skrg,
			'proses_dpcp_fpp' => 1,
			'updateuser' => $this->session->userdata('nama')
		);
		$this->db->insert('rw_proses', $data);
        $skrg = date("Y-m-d");
		$data=array(
			'nip' => $this->input->post('nip'),
			'tgl_proses' => $skrg,
			'proses_dpcp_fpp' => 2,
			'updateuser' => $this->session->userdata('nama')
		);
		$this->db->insert('rw_proses', $data);

		$config['upload_path'] = './assets/dpcpfpp';
	    $config['allowed_types'] = 'gif|jpg|jpeg|png';
	    $config['max_size'] = 2000;	    

	    // Load library upload
	    $this->load->library('upload', $config);
	    
	    // Jika terdapat error pada proses upload maka exit
	    if (!$this->upload->do_upload('dpcp') && !$this->upload->do_upload('fpp')) {
	        exit($this->upload->display_errors());
	    }
	    else
	    {
	    	$this->upload->do_upload('dpcp');
	        $file1 = $this->upload->data();
	        $this->upload->do_upload('fpp');
	        $file2 = $this->upload->data();
	                                                           	
			$data = array(                
			    'listing_nip'	=> $this->input->post('nip'),
			    'listing_dpcp'	=> $file1['file_name'],
			    'listing_fpp'	=> $file2['file_name'],
			    'update_user'	=> $this->session->userdata('nama')
			);
	        $this->model_pegawai->upload($data); //memasukan data ke database
	        redirect($_SERVER['HTTP_REFERER']);

		}		
	}
	public function tambah_listing(){
		$this->load->model('model_pegawai');
		$data=array(
			'status' => $this->model_pegawai->status($this->session->userdata('nip')),
			'isi'=>'backend/operator/tambah_listing'
		);
		$this->load->view('layout',$data);
	}	
	public function listing_ubah($id){
		$this->load->model('model_pegawai');
		$data=array(
			'status' => $this->model_pegawai->status($this->session->userdata('nip')),
			'data' => $this->model_pegawai->listing_ubah($id),
			'isi'=>'backend/operator/listing_ubah'
		);
		$this->load->view('layout',$data);
	}
	public function listing_ubah_proses($id){
		$data=array(
			'nip'		=>$this->input->post('nip'),
			'nama'		=>$this->input->post('nama'),
			'golongan'	=>$this->input->post('golongan'),
			'eselon'	=>$this->input->post('eselon'),
			'jabatan'	=>$this->input->post('jabatan'),
			'jft'		=>$this->input->post('jft'),
			'jfu'		=>$this->input->post('jfu'),
			'update_user'	=>$this->input->post('update_user'),
		);
		$this->db->update('ref_asn',$data,'asn_id='.$id);
		redirect('admin/listing_pensiun');
	}
	public function listing_hapus($nip){
		$this->db->delete('ref_asn','asn_id='.$nip);
		redirect('admin/listing_pensiun');
	}	
	public function listing_upload(){
		$this->load->model('model_pegawai');
		$data=array(
			'status' => $this->model_pegawai->status($this->session->userdata('nip')),
			'data'=> $this->model_pegawai->listing_pensiun(),
			'data2' => $this->model_pegawai->listing_dipensiun(),
			'isi'=> 'backend/operator/listing_upload'
		);
		$this->load->view('layout',$data);	
	}
	public function listing_lihat($nip){		
		$this->load->model('model_opd');		
		$this->load->model('model_pegawai');
		$data = array(
			'status' => $this->model_pegawai->status($this->session->userdata('nip')),
			'data'	=> $this->model_opd->dpcp_fpp($nip)->result_array(),
			'num'	=> $this->model_opd->dpcp_fpp($nip)->num_rows(),
			'isi'	=> 'backend/operator/dpcp_fpp'
		);
		$this->load->view('layout', $data);
	}
	public function keterangan_proses($nip){
		$this->load->model('model_pegawai');
		date_default_timezone_set("Asia/Jakarta");           
        $skrg = date("Y-m-d");
		$data=array(
			'nip'		=> $nip,
			'tgl_proses' => $skrg,
			'proses_dpcp_fpp' => 3,
			'updateuser' => $this->session->userdata('nama'),
		);
		$this->db->insert('rw_proses', $data);

		$data=array(
			'status' => $this->model_pegawai->status($this->session->userdata('nip')),
			'listing_ket'		=>$this->input->post('keterangan'),			
		);
		$this->db->update('ref_listing',$data,'listing_nip='.$nip);
		redirect($_SERVER['HTTP_REFERER']);
	}
	public function laporan($skpd = null, $tahun = null)
    {
    	$this->load->model('model_pegawai');
		$this->load->library('m_pdf');
		
		$skpd = $this->input->post('skpd');
		$tahun = $this->input->post('periode');
        
		$data['pensiun'] = $this->model_pegawai->laporan_pensiun($skpd, $tahun);     
		$data['tahun'] = $this->input->post('periode');
		$data['skpd'] = $this->db->get_where('ref_skpd', ['skpd_kd_skpd' => $skpd])->row_array();
        $html = $this->load->view('laporan', $data, TRUE);

        $pdf = $this->m_pdf->load();

        $pdf->AddPage('P');
        // $pdf->WriteHTML($stylesheet, 1);
        $pdf->WriteHTML($html);
        
        $pdf->Output(/*$pdfFilePath, "D"*/);
        exit();    
    }
    public function riwayat($nip){
		$this->load->model('model_pegawai');
		$data=array(
			'status' => $this->model_pegawai->status($this->session->userdata('nip')),
			'data'=> $this->model_pegawai->rw_proses($nip)->result_array(),
			'isi'=> 'backend/operator/riwayat'
		);
		$this->load->view('layout',$data);	
	}
	public function cetak_laporan(){
		$this->load->model('model_pegawai');
		$data=array(
			'status' => $this->model_pegawai->status($this->session->userdata('nip')),
			'data'=> $this->db->get('ref_skpd')->result(),
			'isi'	=>'backend/operator/cetak_laporan'
		);
		$this->load->view('layout',$data);
	}
	public function tentang(){
		$this->load->model('model_pegawai');
		$data=array(
			'status' => $this->model_pegawai->status($this->session->userdata('nip')),
			'isi'	=>'backend/operator/tentang'
		);
		$this->load->view('layout',$data);
	}
	public function notifikasi($nip){
		$this->load->model('model_pegawai');
		$data = array(
			'asn_status' => 'Persiapan'
		);
		$this->model_pegawai->notifikasi($nip, $data);
		redirect($_SERVER['HTTP_REFERER']);
	}
}