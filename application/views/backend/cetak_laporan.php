        <div class="main">
            <!-- MAIN CONTENT -->
            <div class="main-content">
                <div class="container-fluid">                    
                    <h3 class="page-title">Cetak Laporan</h3>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Tahun</h3>
                                </div>
                                <div class="panel-body" align="center">
                                	<form method="post" action="<?php echo site_url('admin/laporan'); ?>">
	                                    <select class="form-control" name="tahun">
	                                    	<option value="2018">2018</option>
	                                    	<option value="2017">2017</option>
	                                    	<option value="2016">2016</option>
	                                    	<option value="2015">2015</option>
											<option value="2014">2014</option>										
										</select><br>
										<button type="submit" class="btn btn-success">Cetak</button>
									</form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT -->
        </div>