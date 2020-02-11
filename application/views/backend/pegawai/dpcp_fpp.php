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
						<img src="<?php echo base_url('assets/dpcpfpp/'.$data[0]['listing_dpcp']); ?>" width=475>
						<img src="<?php echo base_url('assets/dpcpfpp/'.$data[0]['listing_fpp']); ?>" width=475>
						<div class="form-group">
							<br>
							<label for="comment">Keterangan: </label>
							<input class="form-control" rows="5" name="keterangan" id="keterangan" value="<?php echo $data[0]['listing_ket']; ?>" readonly>
						</div>
						<?php } else { ?>
						Silakan Upload Daftar Perorangan Calon Penerima Pensiun dan Formulir Pendaftaran Pembayaran 
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>		
</div>