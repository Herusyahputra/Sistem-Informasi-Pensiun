<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<h3 class="page-title">Inputs</h3>
					<div class="row">
						<div class="panel">
								<div class="panel-body">
									<form method="post" action="<?php echo base_url().'admin/pegawai_ubah_proses/'.$data[0]['asn_nip'];?>">
										<input type="hidden" name="asn_id" class="form-control" value="<?php echo $data[0]['asn_nip']; ?>" required"">
									<div class="col-md-6">
										<div class="form-group">
											<span>Nip </span>
											<input type="text" name="nip" class="form-control" placeholder="Masukan nip pegawai" value="<?php echo $data[0]['asn_nip']; ?>" required"">	
										</div>											
										<div class="form-group">
											<span>Nama </span>
											<input type="text" name="nama" class="form-control" placeholder="Masukan nama pegawai" value="<?php echo $data[0]['asn_nama']; ?>" required"">
										</div>									
										<div class="form-group">	
											<span>Golongan</span>
											<input type="text" name="golongan" class="form-control" placeholder="Masukan golongan pegawai" value="<?php echo $data[0]['asn_gol_akhir']; ?>" required"">
										</div>											
										<div class="form-group">
											<span>Eselon</span>
											<input type="text" name="eselon" class="form-control" placeholder="Masukan eselon pegawai" value="<?php echo $data[0]['asn_eselon']; ?>" required"">
										</div>											
										<div class="form-group">
											<span>Jabatan</span>
											<input type="text" name="jabatan" class="form-control" placeholder="Masukan jabatan pegawai" value="<?php echo $data[0]['asn_jabatan']; ?>" required"">
										</div>											
										<div class="form-group">
											<span>Jft</span>
											<input type="text" name="jft" class="form-control" placeholder="Masukan jft pegawai" value="<?php echo $data[0]['asn_jft']; ?>" required"">
										</div>											
										<div class="form-group">
											<span>Jfu</span>
											<input type="text" name="jfu" class="form-control" placeholder="Masukan jfu pegawai" value="<?php echo $data[0]['asn_jfu']; ?>" required"">
										</div>											
										<div class="form-group">
											<span>Satker</span>
											<input type="text" name="satker" class="form-control" placeholder="Masukan satker pegawai" value="<?php echo $data[0]['asn_satker']; ?>" required"">
										</div>	
									</div>
									<div class="col-md-6">

										<div class="form-group">
												<span>Skpd</span>
												<select name="skpd" class="form-control">                            
                            						<option value=""> -- Pilih SKPD -- </option>
                            						<?php $no = 0; foreach ($data2 as $data2): ?>
                            						<option value="<?php echo $data2->skpd_kd_skpd; ?>"><?php echo $data2->skpd_nama; ?></option>
                            						<?php endforeach; ?>
                            					</select>
											</div>															
										<div class="form-group">
											<span>Tipe id</span>
											<input type="text" name="tipe id" class="form-control" placeholder="Masukan tipe id pegawai" value="<?php echo $data[0]['asn_ref_tipe_id']; ?>" required"">
										</div>											
										<div class="form-group">
											<span>Pensiun</span>
											<input type="text" name="pensiun" class="form-control" placeholder="Masukan pensiun pegawai" value="<?php echo $data[0]['asn_pensiun']; ?>" required"">
										</div>											
										<div class="form-group">
											<span>Plt</span>
											<input type="text" name="plt" class="form-control" placeholder="Masukan plt pegawai" value="<?php echo $data[0]['asn_is_plt']; ?>" required"">
										</div>											
										<div class="form-group">
											<span>Createuser</span>
											<input type="text" name="createuser" class="form-control" placeholder="Masukan createuser pegawai" value="<?php echo $data[0]['asn_createuser']; ?>" required"">
										</div>											
										<div class="form-group">
											<span>Createdate</span>
											<input type="text" name="createdate" class="form-control" placeholder="Masukan createdate pegawai" value="<?php echo $data[0]['asn_createdate']; ?>" required"">
										</div>											
										<div class="form-group">
											<span>Updateuser</span>
											<input type="text" name="updateuser" class="form-control" placeholder="Masukan updateuser pegawai" value="<?php echo $data[0]['asn_updateuser']; ?>" required"">
										</div>											
										<div class="form-group">
											<span>Updatedate</span>
											<input type="text" name="updatedate" class="form-control" placeholder="Masukan updatedate pegawai" value="<?php echo $data[0]['asn_updatedate']; ?>" required"">
										</div>
									</div>								
								<button type="submit" class="btn btn-success" style="float: right;">Simpan</button>
							</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>