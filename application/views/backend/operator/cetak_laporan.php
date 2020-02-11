        <div class="main">
            <!-- MAIN CONTENT -->
            <div class="main-content">
                <div class="container-fluid">                    
                    <h3 class="page-title">Laporan</h3>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Daftar Laporan Pegawai Pensiun Badan Kepegawaian Daerah | Provinsi Bengkulu</h3>
                                </div>
                                <div class="panel-body" align="center">
                                <form method="post" action="<?php echo base_url("admin/laporan") ?>">
									<div class="form-group" >
									<div class="col-md-5" >
												<select name="skpd" class="form-control">                            
                            						<option value=""> -- Pilih SKPD -- </option>
                            						<?php $no = 0; foreach ($data as $data): ?>
                            						<option value="<?php echo $data->skpd_kd_skpd; ?>"><?php echo $data->skpd_nama; ?></option>
                            						<?php endforeach; ?>
                            					</select>
									</div>		
									<div class="col-md-5" >
												<select name="periode" class="form-control">                            
                            						<option value=""> -- Pilih Tahun Periode -- </option>
                            						<?php date_default_timezone_set("Asia/Jakarta"); $skrg = date("Y"); for($i = 0; $i < 5; $i++): ?>
                                                        <option value="<?php echo $skrg - $i; ?>"><?php echo $skrg - $i; ?></option>                            
                                                    <?php endfor; ?>
                            					</select>
									</div>														
									<div class="col-md-2">										
											<button type="submit" name="filter" value="true" class="btn btn-secodary glyphicon glyphicon-print"  style="float:center"> Cetak </button>										
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


