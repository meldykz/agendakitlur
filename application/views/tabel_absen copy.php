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
										<div class="text-center">
											<h1>PT PLN (Persero) UIKL KALIMANTAN</h1>
											<?php
											if (count($isi) > 0) {
												foreach ($isi as $u) {
											?>
													<h2><?php echo $u->agenda ?></h1>
													<h4><?php echo date_indo($u->tgl_plak) ?> Pukul <?php echo $u->waktu ?> Wita</h3>
										</div>
										<!-- <button class="btn btn-xs btn-primary" style="float:right" id="<?= base_url(); ?>acara/" onClick="reply_click(this.id)">Copy Link</button> -->
									</div>
									<div class="card-body">

										<form action="<?= base_url(); ?>absen/add/<?php echo $u->id_agenda ?>" method="post" enctype="multipart/form-data">
											<input type="hidden" value="<?php echo $u->id_agenda ?>" name="id">

									<?php }
											} else {
												redirect(base_url("acara"));
											} ?>

									<div class="tab-content mt-2 mb-3" id="pills-tabContent">
										<div class="form-group">
											<label for="">NIP *</label>
											<input type="text" name="nip" class="form-control a" placeholder="NIP ..." autocomplete="on" autofocus>
											<small class="form-text text-danger"><?= form_error('nip') ?></small>
										</div>
										<div class="form-group">
											<label for="">Nama *</label>
											<input type="text" name="nama" class="form-control a" placeholder="Nama..." autocomplete="on">
											<small class="form-text text-danger"><?= form_error('nama') ?></small>
										</div>
										<div class="form-group">
											<label for="">No HP *</label>
											<input type="text" name="hp" class="form-control a" placeholder="No HP ..." autocomplete="on">
											<small class="form-text text-danger"><?= form_error('hp') ?></small>
										</div>
										<div class="form-group">
											<label for="">Email *</label>
											<input type="email" name="email" class="form-control" placeholder="Email ..." autocomplete="on">
											<small class="form-text text-danger"><?= form_error('email') ?></small>
										</div>
										<div class="form-group">
											<label for="">Unit *</label>
											<input type="text" name="unit" class="form-control a" placeholder="Unit ..." autocomplete="on">
											<small class="form-text text-danger"><?= form_error('unit') ?></small>
										</div>
										<div class="form-group">
											<label for="">Jabatan *</label>
											<input type="text" name="jabatan" class="form-control a" placeholder="Jabatan ..." autocomplete="on">
											<small class="form-text text-danger"><?= form_error('jabatan') ?></small>
										</div>
										<div class="form-group">
											<label for="">Tanda Tangan *</label>
											<table border="1">
												<tr>
													<td>
														<div id="sig"></div>
													</td>
												</tr>
											</table>
										</div>
										<small class="form-text text-danger"><?= form_error('signed') ?></small>
										<a href="#" id="clear">Hapus</a>
										<!-- <textarea style="display: none" id="signature64" name="signed"></textarea> -->
										<input type="hidden" id="signature64" name="signed">
										<hr>
										<div>
											<button class="btn btn-success" type="submit" name="save">Simpan</button>
										</div>

										</form>
									</div>

								</div>

							</div>
						</div>
					</div>
					<div class="col-sm-1">

					</div>
				</div>

				<div class="container">
					<div class="row">
						<div class="col-sm-1">

						</div>
						<div class="col-sm-12">
							<div class="col-md-12 align-items-center">
								<div class="card">
								<div class="card-header">
										<div class="text-center">
											<h3>DAFTAR HADIR</h3>
										</div>
										<div class="card">

							<div class="card-body">
								<hr>
								<div class="table-responsive">
									<table id="basic-datatables" class="display table table-hover table-head-bg-primary">
										<thead>
											<tr class="text-center">
												<th style="width: 18.8889px;">No</th>
												<th>NIP</th>
												<th>Nama</th>
												<th>Unit</th>
												<th>Jabatan</th>
												<th>Waktu</th>
											</tr>
										</thead>
										<tbody>
											<?php
											$no = 1;
											foreach ($org as $u) {
											?>
												<tr>
													<td><?php echo $no++ ?></td>
													<td><?php echo $u->nip ?></td>
													<td><?php echo $u->nama ?></td>
													<td><?php echo $u->unit ?></td>
													<td><?php echo $u->jabatan ?></td>
													<td><?php echo $u->waktu ?></td>
													
												</tr>
											<?php } ?>
										</tbody>
									</table>
								</div>
							</div>
							<div class="card-footer">
								<!-- <a href="<?php echo base_url('agenda') ?>" class="btn btn-sm btn-default float-right">Kembali</a> -->
							</div>
						</div>
									</div>
								</div>

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

	<script type="text/javascript">
		var sig = $('#sig').signature({
			syncField: '#signature64',
			syncFormat: 'PNG'
		});
		$('#clear').click(function(e) {
			e.preventDefault();
			sig.signature('clear');
			$("#signature64").val('');
		});
	</script>

	<script type="text/javascript">
		function reply_click(clicked_id) {
			alert("Anda akan mengkopi link : " + clicked_id);
			document.getElementById("myText").value = clicked_id;
			var copyText = document.getElementById("myText");
			copyText.select();
			copyText.setSelectionRange(0, 99999)
			document.execCommand("copy");
			alert("Link tercopy , silahkan di paste / share ");
		}
	</script>

</body>

</html>