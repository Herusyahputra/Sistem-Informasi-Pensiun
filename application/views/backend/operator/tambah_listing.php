		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<h3 class="page-title">Elements</h3>
					<div class="row">
						<div class="col-md-12">
							<!-- INPUTS -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Inputs</h3>
								</div>
								<div class="panel-body">
									<form method="post" action="<?php echo base_url().'admin/tambah_listing_proses';?>">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label for="nip">NIP </label>
												<input type="number" class="form-control" id="nip" placeholder="Masukkan NIP" name="nip">
											</div>											
											<div class="form-group">
												<label for="nama">Nama </label>
												<input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama">
											</div>											
											<div class="form-group">
												<label for="eselon">Eselon </label>
												<input type="text" class="form-control" id="eselon" placeholder="Masukkan Eselon" name="eselon">
											</div>
											<div class="form-group">
												<label for="nama">Golongan </label>
												<input type="text" class="form-control" id="golongan" placeholder="Masukkan Golongan" name="golongan">
											</div>
											<div class="form-group">
												<label for="nama">Jabatan </label>
												<input type="text" class="form-control" id="jabatan" placeholder="Masukkan Jabatan" name="jabatan">
											</div>											
											
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="nama">JFT </label>
												<input type="text" class="form-control" id="jft" placeholder="Masukkan Jft Pegawai" name="jft">
											</div>
											<div class="form-group">
												<label for="nama">JFU </label>
												<input type="text" class="form-control" id="jfu" placeholder="Masukkan jfu Pegawai" name="jfu">
											</div>
											<div class="form-group">
												<label for="nama">Skpd </label>
												<input type="text" class="form-control" id="skpd" placeholder="Masukkan Skpd" name="skpd">
											</div>
											<div class="form-group">
												<label for="nama">Petugas </label>
												<input type="text" class="form-control" id="petugas" placeholder="Masukkan Petugas" name="petugas" readonly>
											</div>
											<button type="submit" class="btn btn-success">Simpan</button>
										</div>
									</div>
									</form>
								</div>
							</div>
							<!-- END INPUTS -->

					<!-- <div class="row">
						<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Inputs</h3>
								</div>
								<div class="panel-body">
									<form method="post" action="<?php echo base_url().'admin/pegawai_tambah_proses';?>">
									<span>nip</span>
									<input type="text" name="nip" class="form-control" placeholder="Masukan nip pegawai">
									<form method="post" action="<?php echo base_url().'admin/pegawai_tambah_proses';?>">
									<span>nama</span>
									<input type="text" name="nama" class="form-control" placeholder="Masukan nama pegawai">
									<span>eselon</span>
									<input type="text" name="tanggallahir" class="form-control" placeholder="Masukan eselon pegawai">
									<span>golongan</span>
									<input type="text" name="golongan" class="form-control" placeholder="Masukan golongan pegawai">
									<span>jft</span>
									<input type="text" name="golongan" class="form-control" placeholder="Masukan jabatan fungsional">
									<span>jfu</span>
									<input type="text" name="golongan" class="form-control" placeholder="Masukan jabatan khusus"><span>skpd</span>
									<input type="text" name="golongan" class="form-control" placeholder="Masukan skpd"><span>update user</span>
									<input type="text" name="golongan" class="form-control" placeholder="Masukan golongan pegawai">
								<button type="submit" class="btn btn-success">Simpan</button>
							</form>
								</div>
							</div>
						</div> -->
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>