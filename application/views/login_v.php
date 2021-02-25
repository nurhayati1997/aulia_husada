<!DOCTYPE html>
<html lang="en">

<head>
	<title>Husada Raya</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?= base_url() ?>assets_login/images/icons/logo.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets_login/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets_login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets_login/fonts/iconic/css/material-design-iconic-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets_login/vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets_login/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets_login/vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets_login/vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets_login/vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets_login/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets_login/css/main.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets_admin/vendor/%40fortawesome/fontawesome-free/css/all.min.css" type="text/css">
	<!--===============================================================================================-->
</head>

<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('<?= base_url() ?>assets_login/images/klinik.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action='dashboard' method="POST">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-gamepad"></i>
						<!-- <i class="zmdi zmdi-landscape"></i> -->
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Husada Raya
					</span>

					<div class="wrap-input100 validate-input" id="peringatanEmail" data-validate="Silahkan isi Email..">
						<input class="input100" type="email" id="email" name="email" placeholder="Email..">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" id="peringatanPass" data-validate="Silahkan isi Password..">
						<input class="input100 active" type="password" id="pass" name="pass" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" id="tombolLogin">
							Login
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>

	<script src="<?= base_url() ?>assets_login/vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<!--===============================================================================================-->
	<script src="<?= base_url() ?>assets_login/vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url() ?>assets_login/vendor/bootstrap/js/popper.js"></script>
	<script src="<?= base_url() ?>assets_login/vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url() ?>assets_login/vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url() ?>assets_login/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?= base_url() ?>assets_login/vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url() ?>assets_login/vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url() ?>assets_login/js/main.js"></script>

</body>

</html>