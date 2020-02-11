<!doctype html>
<html lang="en">

<head>
	<title>Pensiun Otomatis | Badan Kepegawaian Daerah Provinsi Bengkulu</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="<?php echo base_url().'assets/backend/vendor/bootstrap/css/bootstrap.min.css'?>">
	<link rel="stylesheet" href="<?php echo base_url().'assets/backend/vendor/font-awesome/css/font-awesome.min.css'?>">
	<link rel="stylesheet" href="<?php echo base_url().'assets/backend/vendor/linearicons/style.css'?>">
	<link rel="stylesheet" href="<?php echo base_url().'assets/vendor/chartist/css/chartist-custom.css'?>">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="<?php echo base_url().'assets/backend/css/main.css'?>">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="<?php echo base_url().'assets/backend/css/demo.css'?>">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url().'assets/backend/img/apple-icon.png'?>">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url().'assets/backend/img/Bengkulu_coa.png'?>">

	<link rel="stylesheet" href="<?php echo base_url().'assets/vendor/datatables/css-main/jquery.dataTables.min.css'?>">
	<link rel="stylesheet" href="<?php echo base_url().'assets/vendor/datatables/css-bootstrap/dataTables.bootstrap.min.css'?>">
	<link rel="stylesheet" href="<?php echo base_url().'assets/vendor/datatables-tabletools/css/dataTables.tableTools.css'?>">

	<!-- Chart/Morris.js -->
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="#"><img src="<?php echo base_url().'assets/backend/img/logo-dark.png'?>" alt="Klorofil Logo" class="img-responsive logo"></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
								<i class="lnr lnr-alarm"></i>
								<span class="badge bg-danger">*</span>
							</a>
							<ul class="dropdown-menu notifications">								
								<li><a href="#" class="notification-item"><?php $nip = $this->session->userdata('nip'); if($status['asn_nip'] == "$nip" && $status['asn_status'] == 'Persiapan'): ?><span class="dot bg-danger"></span>Anda telah memasuki masa pensiun. Silahkan lengkapi berkas.<?php endif; ?></a></li>									
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="lnr lnr-question-circle"></i> <span>Bantuan</span></a>
							
						</li>

						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?php echo base_url().'assets//backend/img/user.png'?>" class="img-circle" alt="Avatar"> <span><?php $user = $this->session->userdata('nama'); echo $user; ?></span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="lnr lnr-user"></i> <span>Profil</span></a></li>
								<li><a href="#"><i class="lnr lnr-cog"></i> <span>Pengaturan</span></a></li>
								<li><a href="<?php echo base_url().'login/logout'?>" class="active"><i class="glyphicon glyphicon-off"></i> <span>Keluar</span></a></li> 
							</ul>
						</li>
						<!-- <li>
							<a class="update-pro" href="https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
						</li> -->
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="<?php echo base_url().'dashboard'?>" class="active"><i class="lnr lnr-home"></i> <span>Halaman Utama</span></a></li>

						<?php if($this->session->userdata('level') === '1'): ?>
							<li><a href="<?php echo base_url().'index.php/admin'?>" class="active"><i class="glyphicon glyphicon-folder-open"></i> <span>Tabel Pegawai</span></a></li>
							<li><a href="#persiapan" data-toggle="collapse" class="active"><i class="glyphicon glyphicon-bullhorn"></i> <span>Persiapan Pensiun</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
								<div id="persiapan" class="collapse ">
									<ul class="nav">
										<li><a href="<?php echo base_url('admin/persiapan_57');?>" class="glyphicon glyphicon-chevron-right">Persiapan 57th</a></li>
										<li><a href="<?php echo base_url('admin/persiapan_59');?>" class="glyphicon glyphicon-chevron-right">Persiapan 59th</a></li>
										<li><a href="<?php echo base_url('admin/persiapan_64');?>" class="glyphicon glyphicon-chevron-right">Persiapan 64th</a></li>
									</ul>
								</div>
							</li>	
							<li><a href="#subPages" data-toggle="collapse" class="active"><i class="glyphicon glyphicon-th-list"></i> <span>Daftar Listing</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
								<div id="subPages" class="collapse ">
									<ul class="nav">
										<li><a href="<?php echo base_url('admin/listing_pensiun_58');?>" class="glyphicon glyphicon-chevron-right">Pensiun 58th</a></li>
										<li><a href="<?php echo base_url('admin/listing_pensiun_60');?>" class="glyphicon glyphicon-chevron-right">Pensiun 60th</a></li>
										<li><a href="<?php echo base_url('admin/listing_pensiun_65');?>" class="glyphicon glyphicon-chevron-right">Pensiun 65th</a></li>
									</ul>
								</div>
							</li>	
							<li><a href="<?php echo base_url().'clustering'?>" class="active"><i class="fa fa-bar-chart"></i> <span>Hasil Kluster</span></a></li>
							<li><a href="<?php echo base_url().'admin/cetak_laporan'?>" class="active"><i class="glyphicon glyphicon-print"></i> <span>Laporan</span></a></li>
							<li><a href="<?php echo base_url().'admin/tentang'?>" class="active"><i class="glyphicon glyphicon-info-sign"></i> <span>Tentang</span></a></li>																		
						<?php endif; ?>

						<?php if($this->session->userdata('level') === '11'): ?>
							<li><a href="<?php echo base_url('opd'); ?>" class="active"><i class="glyphicon glyphicon-folder-open"></i> <span>Tabel Pegawai</span></a></li>
							
							<li><a href="#persiapan" data-toggle="collapse" class="active"><i class="glyphicon glyphicon-bullhorn"></i> <span>Persiapan Pensiun</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
								<div id="persiapan" class="collapse ">
									<ul class="nav">
										<li><a href="<?php echo base_url('opd/persiapan_57');?>" class="glyphicon glyphicon-chevron-right">Persiapan 57th</a></li>
										<li><a href="<?php echo base_url('opd/persiapan_59');?>" class="glyphicon glyphicon-chevron-right">Persiapan 59th</a></li>
										<li><a href="<?php echo base_url('opd/persiapan_64');?>" class="glyphicon glyphicon-chevron-right">Persiapan 64th</a></li>
									</ul>
								</div>
							</li>	

							<li><a href="#subPages" data-toggle="collapse" class="active"><i class="glyphicon glyphicon-th-list"></i> <span>Daftar Listing</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
								<div id="subPages" class="collapse ">
									<ul class="nav">
										<li><a href="<?php echo base_url('opd/listing_pensiun_58'); ?>" class="glyphicon glyphicon-chevron-right">Pensiun 58th</a></li>
										<li><a href="<?php echo base_url('opd/listing_pensiun_60'); ?>" class="glyphicon glyphicon-chevron-right">Pensiun 60th</a></li>
										<li><a href="<?php echo base_url('opd/listing_pensiun_65'); ?>" class="glyphicon glyphicon-chevron-right">Pensiun 65th</a></li>
									</ul>
								</div>
							</li>	
							<li><a href="<?php echo base_url().'clustering'?>" class="active"><i class="fa fa-bar-chart"></i> <span>Hasil Kluster</span></a></li>
							<li><a href="<?php echo base_url().'opd/tentang'?>" class="active"><i class="glyphicon glyphicon-info-sign"></i> <span>Tentang</span></a></li>																			
						<?php endif; ?>

						<?php if($this->session->userdata('level') === '9'): ?>
						<li><a href="<?php echo base_url().'pegawai/riwayat'?>" class="active"><i class="glyphicon glyphicon-retweet"></i> <span>Riwayat Proses</span></a></li>
						<li><a href="<?php echo base_url('pegawai/dpcp_fpp/'.$this->session->userdata('nip'));?>" class="active"><i class="glyphicon glyphicon-picture"></i> <span>Lihat DPCP dan FPP</span></a></li>
						<li><a href="<?php echo base_url().'pegawai/tentang'?>" class="active"><i class="glyphicon glyphicon-info-sign"></i> <span>Tentang</span></a></li>	
						<?php endif; ?>
											
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<?php $this->load->view($isi)?>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2019 <a href="https://www.themeineed.com" target="_blank">Badan Kepegawaian Daerah</a>
				| Provinsi Bengkulu.</p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->

	<script src="<?php echo base_url().'assets/backend/vendor/jquery/jquery.min.js'?>"></script>
	<script src="<?php echo base_url().'assets/backend/vendor/bootstrap/js/bootstrap.min.js'?>"></script>
	<script src="<?php echo base_url().'assets/backend/vendor/jquery-slimscroll/jquery.slimscroll.min.js'?>"></script>
	<script src="<?php echo base_url().'assets/vendor/datatables/js-main/jquery.dataTables.min.js'?>"></script>
	<script src="<?php echo base_url().'assets/vendor/datatables/js-bootstrap/dataTables.bootstrap.min.js'?>"></script>
	<script src="<?php echo base_url().'assets/vendor/datatables-colreorder/dataTables.colReorder.js'?>"></script>
	<script src="<?php echo base_url().'assets/vendor/datatables-tabletools/js/dataTables.tableTools.js'?>"></script>
	<script src="<?php echo base_url().'assets/backend/scripts/klorofil-common.js'?>"></script>	
	<script src="<?php echo base_url().'assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js'?>"></script>
	<script src="<?php echo base_url().'assets/vendor/chartist/js/chartist.min.js'?>"></script>
	<script>
		$(function()
		{
			// datatable with paging options and live search
			$('#featured-datatable').dataTable(
			{
				sDom: "<'row'<'col-sm-6'l><'col-sm-6'f>r>t<'row'<'col-sm-6'i><'col-sm-6'p>>",
			});
			});
		</script>
		<script type="text/javascript">
		  	$(document).on('click', '.browse', function(){
		    var file = $(this).parent().parent().parent().find('.file');
		    file.trigger('click');
		  });
		  	$(document).on('change', '.file', function(){
		    $(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i, ''));
  			});
  	</script>
  	<script>
	    $(document).ready(function() {
	        // Untuk sunting
	        $('#modal').on('show.bs.modal', function (event) {
	            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
	            var modal          = $(this)            

	            // Isi nilai pada field            
	            modal.find('#id').attr("value",div.data('id'));
	            modal.find('#nip').attr("value",div.data('nip'));
	            modal.find('#nama').attr("value",div.data('nama'));            
	            modal.find('#tanggallahir').attr("value",div.data('tanggallahir'));
	            modal.find('#golongan').attr("value",div.data('golongan'));
	        });
	    });
	</script>
		<script>
	$(function() {
		var data, options;

		// headline charts
		data = {
			labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
			series: [
				[23, 29, 24, 40, 25, 24, 35],
				[14, 25, 18, 34, 29, 38, 44],
			]
		};

		options = {
			height: 300,
			showArea: true,
			showLine: false,
			showPoint: false,
			fullWidth: true,
			axisX: {
				showGrid: false
			},
			lineSmooth: false,
		};

		new Chartist.Line('#headline-chart', data, options);


		// visits trend charts
		data = {
			labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
			series: [{
				name: 'series-real',
				data: [200, 380, 350, 320, 410, 450, 570, 400, 555, 620, 750, 900],
			}, {
				name: 'series-projection',
				data: [240, 350, 360, 380, 400, 450, 480, 523, 555, 600, 700, 800],
			}]
		};

		options = {
			fullWidth: true,
			lineSmooth: false,
			height: "270px",
			low: 0,
			high: 'auto',
			series: {
				'series-projection': {
					showArea: true,
					showPoint: false,
					showLine: false
				},
			},
			axisX: {
				showGrid: false,

			},
			axisY: {
				showGrid: false,
				onlyInteger: true,
				offset: 0,
			},
			chartPadding: {
				left: 20,
				right: 20
			}
		};

		new Chartist.Line('#visits-trends-chart', data, options);


		// visits chart
		data = {
			labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
			series: [
				[6384, 6342, 5437, 2764, 3958, 5068, 7654]
			]
		};

		options = {
			height: 300,
			axisX: {
				showGrid: false
			},
		};

		new Chartist.Bar('#visits-chart', data, options);


		// real-time pie chart
		var sysLoad = $('#system-load').easyPieChart({
			size: 130,
			barColor: function(percent) {
				return "rgb(" + Math.round(200 * percent / 100) + ", " + Math.round(200 * (1.1 - percent / 100)) + ", 0)";
			},
			trackColor: 'rgba(245, 245, 245, 0.8)',
			scaleColor: false,
			lineWidth: 5,
			lineCap: "square",
			animate: 800
		});

		var updateInterval = 3000; // in milliseconds

		setInterval(function() {
			var randomVal;
			randomVal = getRandomInt(0, 100);

			sysLoad.data('easyPieChart').update(randomVal);
			sysLoad.find('.percent').text(randomVal);
		}, updateInterval);

		function getRandomInt(min, max) {
			return Math.floor(Math.random() * (max - min + 1)) + min;
		}

	});
	</script>
</body>

</html>
