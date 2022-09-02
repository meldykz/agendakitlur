<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>DAFTAR HADIR ONLINE</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="<?= base_url(); ?>assets/img/favicon.png" />

	<!-- Fonts and icons -->
	<script src="<?= base_url(); ?>assets/js/plugin/webfont/webfont.min.js"></script>
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/atlantis.min.css">

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<link type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css" rel="stylesheet">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>


	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/demo.css">

	<script type="text/javascript" src="<?= base_url(); ?>assets/js/jquery.signature.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/jquery.signature.css">

	<style>
		.kbw-signature {
			width: 403px;
			height: 103px;
		}

		#sig canvas {
			width: 100% !important;
			height: auto;
		}

		input.a {
			text-transform: uppercase;
		}
	</style>
</head>

<body>
	<div class="wrapper overlay-sidebar">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="blue2">
				<a href="#" class="logo">
					<img src="<?= base_url(); ?>assets/img/logo-copy-BLUE.png" alt="navbar brand" class="navbar-brand">
				</a>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">


			</nav>
			<!-- End Navbar -->
		</div>


		<div class="main-panel">

			<div class="content">
				<div class="panel-header">
					<div class="page-inner py-6">

					</div>
				</div>

				<div class="container">
					<div class="row">
						<div class="col-sm-1">

						</div>
						<div class="col-sm-10">
							<div class="col-md-12 align-items-center">
								<div class="card">
									<div class="card-header">


									</div>
									<div class="card-body">
										<div class="text-center">
											<?php
											if (count($isi) > 0) {
												foreach ($isi as $u) {
											?>
													<h1> Terimakasih Sudah Hadir Pada 
														<?php echo $u->agenda ?></h1>
													<h3><?php echo date_indo($u->tgl_plak) ?> Pukul <?php echo $u->waktu ?> Wita</h3>

										</div>
										<!-- <h2>Terimakasih</h2> -->
									</div>
									<div class="card-footer text-center">
										<a href="<?= base_url(); ?>absen/acara/<?php echo $u->id_agenda ?>" class="btn btn-success " type="submit" name="save">Oke</a>
									</div>
							<?php }
											} else {
												redirect(base_url("acara"));
											} ?>
							</form>

								</div>
							</div>
						</div>
						<div class="col-sm-1">

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	</div>

</body>

</html>