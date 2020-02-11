<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<!-- BASIC TABLE -->
						<div class="col-md-12">
							<div class="panel-body no-padding">
									<form method="post" action="">
									<div class="form-group" >
									<div class="col-md-2"></div>
									<div class="col-md-6" >
												<select name="skpd" class="form-control">                            
                            						<option value=""> -- Pilih SKPD -- </option>
                            						<?php $no = 0; foreach ($skpd as $skpd): ?>
                            						<option value="<?php echo $skpd->skpd_kd_skpd; ?>"><?php echo $skpd->skpd_nama; ?></option>
                            						<?php endforeach; ?>
                            					</select>
									</div>										
									<div class="col-md-2">										
											<button type="submit" name="filter" value="true" class="btn btn-success" style="float:center">Tampilkan</button>										
										</div>
										</form>
										<br>
										<br>
										<br>
								<div class="panel-body no-padding">
									<table id="featured-datatable" class="table table-bordered">
										<thead>
											<tr class="info">
												<th>No</th>
												<th>Nip</th>
												<th>Nama</th>
												<th>Golongan</th>
												<th>Eselon</th>
												<th>Status</th>
												<td>Aksi</td>
											</tr>
										</thead>
										<tbody>
											<?php $no=1; foreach($data as $data) { ?>
											<tr>
												<td><?php echo $no++; ?></td>
												<td><?php echo $data['asn_nip']?></td>
												<td><?php echo $data['asn_nama']; ?></td>
												<td><?php echo $data['asn_gol_akhir']; ?></td>
												<td><?php echo $data['asn_eselon']; ?></td>
												<td>Persiapan Pensiun</td>
												<td>
												<a
													href = "javascript:;"				
													data-id = "<?php echo $data['asn_id'] ?>"	  
													data-nip = "<?php echo $data['asn_nip'] ?>"                                  
													data-nama = "<?php echo $data['asn_nama'] ?>"                                   
													data-golongan = "<?php echo $data['asn_gol_akhir'] ?>"
													data-toggle="modal" data-target="#modal">
													<button class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Upload"><span class="glyphicon glyphicon-upload"></span></button>
												</a>
												<a data-toggle="tooltip" title="Lihat" href="<?php echo base_url().'admin/listing_lihat/'.$data['asn_nip']?>"><button
												type="button" class="btn btn-info"><span class="glyphicon glyphicon-picture"></span></button></a>
												<a data-toggle="tooltip" title="Riwayat" href="<?php echo base_url().'admin/riwayat/'.$data['asn_nip']?>"><button
												type="button" class="btn btn-success"><span class="glyphicon glyphicon-retweet"></span></button>
												</td>
											</tr>
											</tr>
											<?php } ?>
										</tbody>
									</table>
								</div>
							</div>
							<!-- END TABLE NO PADDING -->
						</div>
					</div>
					
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>		

		<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title" id="myModalLabel">Upload DPCP dan FPP</h4>
			</div>
			<form method="post" action="<?php echo base_url().'admin/aksi_upload';?>" enctype="multipart/form-data">
			<div class="modal-body">				
				<input type="hidden" id="id" name="asn_id" class="form-control" value="" readonly>
				<div class="col-md-12">
					<span>Nip </span>
					<input type="text" id="nip" name="nip" class="form-control" placeholder="Masukan nip pegawai" value="" readonly>	
					<span>Nama </span>
					<input type="text" id="tanggallahir" name="tanggallahir" class="form-control" placeholder="Masukan nama pegawai" value="" readonly>		
					<span>Golongan</span>
					<input type="text" id="golongan" name="golongan" class="form-control" placeholder="Masukan golongan pegawai" value="" readonly>
					

					<div class="row">
	                    <div class="col-md-12">
	                        <div class="form-group">
	                            <label for="userfile">DPCP</label>
	                            <input type="file" name="dpcp" class="file" style="display: none;">
	                            <div class="input-group col-xs-12">
	                                <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
	                                <input type="text" class="form-control input-lg" readonly placeholder="Unggah DPCP">
	                                <span class="input-group-btn">
	                                <button class="browse btn btn-primary input-lg" type="button"><i class="glyphicon glyphicon-search"></i> Telusuri</button>
	                                </span>
	                            </div>
	                        </div>     
	                    </div>
	                </div>
				    <div class="row">
	                    <div class="col-md-12">
	                        <div class="form-group">
	                            <label for="userfile">FPP</label>
	                            <input type="file" name="fpp" class="file" style="display: none;">
	                            <div class="input-group col-xs-12">
	                                <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
	                                <input type="text" class="form-control input-lg" readonly placeholder="Unggah FPP">
	                                <span class="input-group-btn">
	                                <button class="browse btn btn-primary input-lg" type="button"><i class="glyphicon glyphicon-search"></i> Telusuri</button>
	                                </span>
	                            </div>
	                        </div>     
	                    </div>
	                </div>
					
				</div>				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times-circle"></i> Batal</button>
				<button type="submit" value="true" class="btn btn-success"><i class="fa fa-check-circle"></i> Simpan</button>				
			</div>
			</form>
		</div>
	</div>
</div>		