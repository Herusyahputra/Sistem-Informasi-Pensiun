<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<body> <marquee width="1200" height="40" style="font-size:24px;">Selamat Datang Di Layanan Pensiun Otomatis Badan Kepegawaian Daerah | Provinsi Bengkulu</marquee> </body>
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">STATISTIKA PENSIUN PEGAWAI</h3>
							<!-- <p><?php echo $pensiun_58; ?></p>
							<p><?php echo $pensiun_60; ?></p>
							<p><?php echo $pensiun_65; ?></p>
							<p class="panel-subtitle">Periode: Januari 01, 2019 - Desember 31, 2020</p> -->
						</div>
						<div class="panel-body">
							<!-- 
							<div class="row">
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="fa fa-download"></i></span>
										<p>
											<span class="number">1,252</span>
											<span class="title">Downloads</span>
										</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="fa fa-shopping-bag"></i></span>
										<p>
											<span class="number">203</span>
											<span class="title">Sales</span>
										</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="fa fa-eye"></i></span>
										<p>
											<span class="number">274,678</span>
											<span class="title">Visits</span>
										</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="fa fa-bar-chart"></i></span>
										<p>
											<span class="number">35%</span>
											<span class="title">Conversions</span>
										</p>
									</div>
								</div>
							</div>
							-->
							<div class="row">
								<div class="col-md-9">
									<!-- <div id="headline-chart" class="ct-chart"></div> -->
									<div id="graph"></div>
								</div>
								
								<div class="col-md-3">
									<div class="weekly-summary text-right">
										<span class="number">113</span> <span class="percentage">Pegawai Pensiun</span>
										<span class="info-label">di Usia 58 Tahun</span>
									</div>
									<div class="weekly-summary text-right">
										<span class="number">44</span> <span class="percentage">Pegawai Pensiun</span>
										<span class="info-label">di Usia 60 Tahun</span>
									</div>
									<div class="weekly-summary text-right">
										<span class="number">0</span> <span class="percentage">Pegawai Pensiun</span>
										<span class="info-label">di Usia 65 Tahun</span>
									</div>
								</div>
								
							</div>
						</div>
					</div>
					<!-- END OVERVIEW -->
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>

		<script>			
			Morris.Line({
				element: 'graph',
				data: <?php echo $statistik; ?>,
				xkey: 'tahun',
				ykeys: ['pensiun_58', 'pensiun_60', 'pensiun_65'],
				labels: ['Pensiun Umur 58 Tahun', 'Pensiun Umur 60 Tahun', 'Pensiun Umur 65 Tahun']
			});
		</script>