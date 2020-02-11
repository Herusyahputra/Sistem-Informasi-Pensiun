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
												<td>Belum Pensiun</td>
												<td>
													<a data-toggle="tooltip" title="Detail" href="<?php echo base_url().'opd/pegawai_detail/'.$data['asn_nip']?>"><button
													type="button" class="btn btn-info"><span class="glyphicon glyphicon-pencil"></span></button>
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