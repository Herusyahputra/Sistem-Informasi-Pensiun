<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="panel">
					<div class="panel-heading">
						<h3 class="panel-title">Tampilkan</h3>
					</div>
					<div class="panel-body">	
					<?php if ($num>0){ ?>
					<form id="dpcpfpp" method="post" action="<?php echo base_url('admin/keterangan_proses/'.$data[0]['listing_nip']); ?> ">	
						<input type="hidden" value="<?php echo $data[0]['listing_nip']; ?>">
						<img src="<?php echo base_url('assets/dpcpfpp/'.$data[0]['listing_dpcp']); ?>" width=475>
						<img src="<?php echo base_url('assets/dpcpfpp/'.$data[0]['listing_fpp']); ?>" width=475>
						<div class="form-group">
							<br>
							<label for="keterangan">Keterangan: </label>
							<input class="form-control" rows="5" name="keterangan" id="keterangan" value="<?php echo $data[0]['listing_ket']; ?>"/>
						</div>
						<button type="submit" class="btn btn-success" style="float: right;">Kirim</button>
					</form>
					<?php } else { ?>
					Silakan Upload Data Perorangan Calon Penerima Pensiun dan Formulir Permintaan Pembayaran 
					<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>		
</div>