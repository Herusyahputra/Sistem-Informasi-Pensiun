<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V2</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo base_url().'assets/images/icons/favicon.ico'?>"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/vendor/bootstrap/css/bootstrap.min.css'?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css'?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/fonts/iconic/css/material-design-iconic-font.min.css'?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/vendor/animate/animate.css'?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/vendor/css-hamburgers/hamburgers.min.css'?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/vendor/animsition/css/animsition.min.css'?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/vendor/select2/select2.min.css'?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/vendor/daterangepicker/daterangepicker.css'?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/util.css'?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/mainlogin2.css'?>">
<!--===============================================================================================-->
</head>
<body bgcolor="blue">
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100" style="opacity:10;" >
				<form class="login100-form validate-form" id="login-form" method="post" action="<?php echo base_url('login'); ?>">
					<span class="login100-form-title p-b-48" style="margin-bottom: -33px;">
						Sistem Informasi Pensiun Otomatis
					</span>
					<span class="login100-form-title p-b-25">
						<img src="<?php echo base_url().'assets/images/Bengkulu_coa.png'?>" height="130" align="center" />
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Nama Pengguna Tidak Boleh Kosong!">
						<input class="input100" type="text" name="username">
						<span class="focus-input100" data-placeholder="Username"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Kata sandi tidak boleh kosong!">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="password">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit" name="submit" value="login">
								Masuk
							</button>
						</div>				

					<?php if(validation_errors()): ?>
					<div class="text-center p-t-12">
						<span class="txt2">
							<?php echo validation_errors('<p>', '</p>'); ?>
						</span>						
					</div>
					<?php endif; ?>

					<div class="text-center p-t-20">
						<span class="txt1">
							Badan Kepegawaian Daerah
							<br> 
							Provinsi Bengkulu
						</span>
					</div>
				</form>
			</div>
		</div>
	</div>

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="<?php echo base_url().'assets/vendor/jquery/jquery-3.2.1.min.js'?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url().'assets/vendor/animsition/js/animsition.min.js'?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url().'assets/vendor/bootstrap/js/popper.js'?>"></script>
	<script src="<?php echo base_url().'assets/vendor/bootstrap/js/bootstrap.min.js'?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url().'assets/vendor/select2/select2.min.js'?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url().'assets/vendor/daterangepicker/moment.min.js'?>"></script>
	<script src="<?php echo base_url().'assets/vendor/daterangepicker/daterangepicker.js'?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url().'assets/vendor/countdowntime/countdowntime.js'?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url().'assets/js/main.js'?>"></script>

</body>
</html>