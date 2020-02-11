<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<h3 class="page-title">Tambah listing</h3>
					<div class="row">
						<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Detail Pegawai</h3>
								</div>
								<div class="panel-body">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<span>Nip </span>
												<input type="text" name="nip" class="form-control" placeholder="Masukan nip pegawai" value="<?php echo $data[0]['asn_nip']; ?>" readonly>	
											</div>											
											<div class="form-group">
												<span>Nama </span>
												<input type="text" name="nama" class="form-control" placeholder="Masukan nama pegawai" value="<?php echo $data[0]['asn_nama']; ?>" readonly>
											</div>								
											<div class="form-group">	
												<span>Golongan</span>
												<input type="text" name="golongan" class="form-control" placeholder="Masukan golongan pegawai" value="<?php echo $data[0]['asn_gol_akhir']; ?>" readonly>
											</div>											
											<div class="form-group">
												<span>Eselon</span>
												<input type="text" name="eselon" class="form-control" placeholder="Masukan eselon pegawai" value="<?php echo $data[0]['asn_eselon']; ?>" readonly>
											</div>											
											<div class="form-group">
												<span>Jabatan</span>
												<input type="text" name="jabatan" class="form-control" placeholder="Masukan jabatan pegawai" value="<?php echo $data[0]['asn_jabatan']; ?>" readonly>
											</div>											
											<div class="form-group">
												<span>Jft</span>
												<input type="text" name="jft" class="form-control" placeholder="Masukan jft pegawai" value="<?php echo $data[0]['asn_jft']; ?>" readonly>
											</div>											
											<div class="form-group">
												<span>Jfu</span>
												<input type="text" name="jfu" class="form-control" placeholder="Masukan jfu pegawai" value="<?php echo $data[0]['asn_jfu']; ?>" readonly>
											</div>											
											<div class="form-group">
												<span>Satker</span>
												<input type="text" name="satker" class="form-control" placeholder="Masukan satker pegawai" value="<?php echo $data[0]['asn_satker']; ?>" readonly>
											</div>											
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<span>Skpd</span>
												<input type="text" name="skpd" class="form-control" placeholder="Masukan skpd pegawai" value"<?php echo $data[0]['asn_skpd']; ?>" readonly>
											</div>											
											<div class="form-group">
												<span>Tipe id</span>
												<input type="text" name="tipe id" class="form-control" placeholder="Masukan tipe id pegawai" value="<?php echo $data[0]['asn_ref_tipe_id']; ?>" readonly>
											</div>											
											<div class="form-group">
												<span>Pensiun</span>
												<input type="text" name="pensiun" class="form-control" placeholder="Masukan pensiun pegawai" value="<?php echo $data[0]['asn_pensiun']; ?>" readonly>
											</div>											
											<div class="form-group">
												<span>Plt</span>
												<input type="text" name="plt" class="form-control" placeholder="Masukan plt pegawai" value="<?php echo $data[0]['asn_is_plt']; ?>" readonly>
											</div>											
											<div class="form-group">
												<span>Createuser</span>
												<input type="text" name="createuser" class="form-control" placeholder="Masukan createuser pegawai" value="<?php echo $data[0]['asn_createuser']; ?>" readonly>
											</div>											
											<div class="form-group">
												<span>Createdate</span>
												<input type="text" name="createdate" class="form-control" placeholder="Masukan createdate pegawai" value="<?php echo $data[0]['asn_createdate']; ?>" readonly>
											</div>											
											<div class="form-group">
												<span>Updateuser</span>
												<input type="text" name="updateuser" class="form-control" placeholder="Masukan updateuser pegawai" value="<?php echo $data[0]['asn_updateuser']; ?>" readonly>
											</div>											
											<div class="form-group">
												<span>Updatedate</span>
												<input type="text" name="updatedate" class="form-control" placeholder="Masukan updatedate pegawai" value="<?php echo $data[0]['asn_updatedate']; ?>" readonly>
											</div>											
										</div>
									</div>
											<a href="<?=base_url('opd/tambah_listing_proses/'.$data[0]['asn_nip'])?>" class="btn btn-primary" style="float: center" >Tambah Ke Listing</a>
											&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
											<a href="<?=base_url('opd')?>" class="btn btn-warning" style="float: right" >Kembali</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>