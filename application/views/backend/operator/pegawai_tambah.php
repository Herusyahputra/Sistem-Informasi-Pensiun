<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<div class="row">
						<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Tambah Pegawai Baru</h3>
								</div>
								<div class="panel-body">
									<form class="row" method="post" action="<?php echo base_url().'admin/pegawai_tambah_proses';?>">
										<div class="col-md-6">
											<div class="form-group">
												<span>Nip </span>
												<input type="number" id="nip" name="nip" class="form-control" placeholder="Masukan nip pegawai" value="" required>	
											</div>											
											<div class="form-group">
												<span>Nama </span>
												<input type="text" name="nama" class="form-control" placeholder="Masukan Nama" value="">
											</div>									
											<div class="form-group">	
												<span>Golongan</span>
												<select name="golongan" class="form-control">                            
                            						<option value=""> -- Pilih Golongan -- </option>
                            						<?php $no = 0; foreach ($data2 as $data): ?>
                            						<option value="<?php echo $data->pangkat_ruang; ?>"><?php echo $data->pangkat_ruang; ?></option>
                            						<?php endforeach; ?>
                            					</select>
											</div>											
											<div class="form-group">
												<span>Eselon</span>
												<select name="eselon" class="form-control">                            
                            						<option value=""> -- Pilih Eselon -- </option>
                            						<?php $no = 0; foreach ($data3 as $data): ?>
                            						<option value="<?php echo $data->eselon_id; ?>"><?php echo $data->eselon_nama; ?></option>
                            						<?php endforeach; ?>
                            					</select>
											</div>											
											<div class="form-group">
												<span>Jabatan</span>
												<input type="text" name="jabatan" class="form-control" placeholder="Masukan Jabatan" value="">
											</div>											
											<div class="form-group">
												<span>Jabatan Fungsional Tertentu</span>
												<input type="text" name="jft" class="form-control" placeholder="Masukan jft " value="" >
											</div>											
											<div class="form-group">
												<span>Jabatan Fungsional Umum</span>
												<input type="text" name="jfu" class="form-control" placeholder="Masukan jfu " value="">
											</div>											
											<div class="form-group">
												<span>Satker</span>
												<input type="text" name="satker" class="form-control" placeholder="Masukan satuan kerja " value="">
											</div>											
											</div>
											<div class="col-md-6">
											<div class="form-group">
												<span>Skpd</span>
												<select name="skpd" class="form-control">                            
                            						<option value=""> -- Pilih SKPD -- </option>
                            						<?php $no = 0; foreach ($data1 as $data): ?>
                            						<option value="<?php echo $data->skpd_kd_skpd; ?>"><?php echo $data->skpd_nama; ?></option>
                            						<?php endforeach; ?>
                            					</select>
											</div>											
											<div class="form-group">
												<span>Tipe id</span>
												<input type="text" name="tipeid" class="form-control" placeholder="Masukan tipe id" value="">
											</div>											
											<div class="form-group">
												<span>Pensiun</span>
												<select name="skpd" class="form-control">                            
                            						<option value=""> -- Pilih -- </option>
                            						<option value="N">Belum pensiun</option>
                            						<option value="Y">Pensiun</option>
                            					</select>
											</div>											
											<div class="form-group">
												<span>Plt</span>
												<input type="text" name="plt" class="form-control" placeholder="Masukan plt " value="">
											</div>											
											<div class="form-group">
												<span>Createuser</span>
												<input type="text" name="createuser" class="form-control" placeholder="Masukan createuser" value="">
											</div>											
											<div class="form-group">
												<span>Createdate</span>
												<input type="text" name="createdate" class="form-control" placeholder="Masukan createdate" value="">
											</div>											
											<div class="form-group">
												<span>Updateuser</span>
												<input type="text" name="updateuser" class="form-control" placeholder="Masukan updateuser" value="">
											</div>											
											<div class="form-group">
												<span>Updatedate</span>
												<input type="text" name="updatedate" class="form-control" placeholder="Masukan updatedate" value="">
											</div>											
										</div>							
										<div class="col-md-12">		
											<button type="submit" class="btn btn-success" style="float:right">Simpan</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>