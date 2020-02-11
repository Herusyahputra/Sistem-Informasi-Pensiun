<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<!-- BASIC TABLE -->
						
						<div class="col-md-12">
								<div class="panel-body no-padding">
									<a href="#">
										<form id="kluster" method="post" action="">
											<button type="submit" value="true" name="update" class="btn btn_primary"> <span class="active"></span>Update Status</button>
										</form>
									</a>
									<table id="featured-datatable" class="table table-bordered">
										<thead>
											<tr class="info">		
												<th>No</th>	
												<th>Nip</th>
												<th>Nama</th>
												<th>umur</th>
												<th>Golongan</th>
												<th>Eselon</th>
												<th>Masa Kerja</>
												<th>Kluster 1</th>
												<th>Kluster 2</th>
												<th>Kluster 3</th>
												<th>Hasil</th>
											</tr>
										</thead>
										<tbody>	
											<?php $no=1; foreach($data as $data) { ?>										
											<tr>												
												<td><?php echo $no++; ?></td>	
												<td><?php echo $data['asn_nip']?></td>
												<td><?php echo $data['asn_nama']; ?></td>
												<td>
													<?php 
														$tahun = 2019 - (substr($data['asn_nip'], 0, 4));
														echo $tahun ." Tahun"; 
													?>
												</td>
												<td><?php echo $data['asn_gol_akhir']; ?></td>
												<td>
													<?php
														if ($data['asn_eselon'] == 11) {
															$eselon = 'Eselon 1';
														}
														else if ($data['asn_eselon'] == 21) {
															$eselon = 'Eselon 2';
														}
														else if ($data['asn_eselon'] == 31) {
															$eselon = 'Eselon 3';
														}
														else if ($data['asn_eselon'] == 41) {
															$eselon = 'Eselon 4';
														}
														else if ($data['asn_eselon'] == 51) {
															$eselon = 'JFT';
														}
														else if ($data['asn_eselon'] == 61) {
															$eselon = 'JFU';
														}

														echo $eselon;
													?>
												</td>
												<td>
													<?php 
														$tahun = (substr($data['asn_nip'], 0, 4) + 57) - substr($data['asn_nip'], 8, 4);
														echo $tahun ." Tahun"; 
													?>
												</td>												
												<td <?php if($dc1[$no-2] < $dc2[$no-2] && $dc1[$no-2] < $dc3[$no-2]) echo "style='background-color: red; color:black'"; ?>><?php echo $dc1[$no-2]; ?></td>
												<td <?php if($dc2[$no-2] < $dc3[$no-2] && $dc2[$no-2] < $dc1[$no-2]) echo "style='background-color: yellow; color:black'"; ?>><?php echo $dc2[$no-2]; ?></td>
												<td <?php if($dc3[$no-2] < $dc2[$no-2] && $dc3[$no-2] < $dc1[$no-2]) echo "style='background-color: blue; color:black'"; ?>><?php echo $dc3[$no-2]; ?></td>
												<td><?php echo 'Kluster '.$hasil[$no-2]; ?></td>
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
		</div>\

