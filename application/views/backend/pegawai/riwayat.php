<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<h3 class="page-title">Tables</h3>
					<div class="row">
						<div class="col-md-12">
							<!-- BASIC TABLE -->
						
						<div class="col-md-12">
								<div class="panel-body no-padding">									
									<table id="featured-datatable" class="table table-bordered">
										<thead>
											<tr class="info">
												<th>No</th>
												<th>Nip</th>
												<th>Tanggal</th>
												<th>Proses</th>
												<th>Update User</th>																		
											</tr>
										</thead>
										<tbody>
											<?php $no=1; foreach($data as $data) { ?>
											<tr>
												<td><?php echo $no++; ?></td>
												<td><?php echo $data['nip']?></td>
												<td><?php echo $data['tgl_proses']; ?></td>
												<td><?php echo $data['nama']; ?></td>
												<td><?php echo $data['updateuser']; ?></td>												
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