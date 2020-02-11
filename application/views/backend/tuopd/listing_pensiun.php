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
									<div class="col-md-5" >
												<select name="skpd" class="form-control">                            
                            						<option value=""> -- Pilih SKPD -- </option>
                            						<?php $no = 0; foreach ($skpd as $skpd): ?>
                            						<option value="<?php echo $skpd->skpd_kd_skpd; ?>"><?php echo $skpd->skpd_nama; ?></option>
                            						<?php endforeach; ?>
                            					</select>
									</div>		
									<div class="col-md-5" >
												<select name="periode" class="form-control">                            
                            						<option value=""> -- Pilih Periode -- </option>
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
									<a href="<?php echo base_url('opd/tambah_listing/')?>">
									</a>
									<table id="featured-datatable" class="table table-bordered">
										<thead>
											<tr class="info">
												<th>No</th>
												<th>Nip</th>
												<th>Nama</th>
												<th>Golongan</th>
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
												<td>Persiapan Pensiun</td>								
												<td>
													
													<a data-toggle="tooltip" title="Lihat DPCP dan FPP" href="<?php echo base_url().'opd/dpcp_fpp/'.$data['asn_nip']?>"><button
													type="button" class="btn btn-info"><span class="glyphicon glyphicon-picture"></span></button>
													<a data-toggle="tooltip" title="Riwayat" href="<?php echo base_url().'opd/riwayat/'.$data['asn_nip']?>"><button
													type="button" class="btn btn-success"><span class="glyphicon glyphicon-retweet"></span></button>				
												</td>
											</tr>
											</tr>
											<?php } ?>
											<?php $no=1; foreach($data2 as $data) { ?>
											<tr>
												<td><?php echo $no++; ?></td>
												<td><?php echo $data['asn_nip']?></td>
												<td><?php echo $data['asn_nama']; ?></td>
												<td><?php echo $data['asn_gol_akhir']; ?></td>								
												<td>
													<a data-toggle="tooltip" title="Lihat DPCP dan FPP" href="<?php echo base_url().'opd/pegawai_lihat/'.$data['asn_nip']?>"><button
													type="button" class="btn btn-info"><span class="glyphicon glyphicon-picture"></span></button>
													<a data-toggle="tooltip" title="Riwayat" href="<?php echo base_url().'opd/riwayat/'.$data['asn_nip']?>"><button
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