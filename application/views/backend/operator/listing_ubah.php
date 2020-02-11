<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<h3 class="page-title">Elements</h3>
					<div class="row">
						<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Inputs</h3>
								</div>
								<div class="panel-body">
									<input type="hidden" name="asn_id" class="form-control" value="<?php echo $data[0]['id']; ?>" required"">
									<span>Nip </span>
									<input type="text" name="nip" class="form-control" placeholder="Masukan nip pegawai" value="<?php echo $data[0]['nip']; ?>" required"">	
									<span>Nama </span>
									<input type="text" name="nama" class="form-control" placeholder="Masukan nama pegawai" value="<?php echo $data[0]['nama']; ?>" required"">	
									<span>Golongan</span>
									<input type="text" name="golongan" class="form-control" placeholder="Masukan golongan pegawai" value="<?php echo $data[0]['golongan']; ?>" required"">
									<span>Eselon</span>
									<input type="text" name="eselon" class="form-control" placeholder="Masukan eselon pegawai" value="<?php echo $data[0]['eselon']; ?>" required"">
									<span>Jabatan</span>
									<input type="text" name="jabatan" class="form-control" placeholder="Masukan jabatan pegawai" value="<?php echo $data[0]['jabatan']; ?>" required"">
									<span>Jft</span>
									<input type="text" name="jft" class="form-control" placeholder="Masukan jft pegawai" value="<?php echo $data[0]['jft']; ?>" required"">
									<span>Jfu</span>
									<input type="text" name="jfu" class="form-control" placeholder="Masukan jfu pegawai" value="<?php echo $data[0]['jfu']; ?>" required"">
									<span>Skpd</span>
									<input type="text" name="skpd" class="form-control" placeholder="Masukan skpd pegawai" value"<?php echo $data[0]['skpd']; ?>" required">
									<span>Update_user</span>
									<input type="text" name="updateuser" class="form-control" placeholder="" value="<?php echo
									$data[0]['update_user']; ?>" readonly>
									<button type="submit" class="btn btn-success">Simpan</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>