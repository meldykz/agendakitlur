<html>
<head>
	<meta charset="utf-8"><meta http-equiv="X-UA-Compatible"content="IE=edge">
	<meta name="viewport"content="width=device-width, initial-scale=1">
	<meta name="description"content=""><meta name="keywords"content=""><meta name="author"content="">
	<title>DAFTAR HADIR ONLINE</title>
	<script src="<?= base_url(); ?>assets/js/plugin/webfont/webfont.min.js"></script>

	<link rel="icon"href="<?= base_url(); ?>assets/img/favicon.png"/>
	<link rel="stylesheet"href="<?= base_url(); ?>assets/css/bootstrap.min.css"><link rel="stylesheet"href="<?= base_url(); ?>assets/css/atlantis.min.css">

	<style>
		#sig-canvas 
		{
			border: 2px dotted #CCCCCC;
			border-radius: 5px;
			cursor: crosshair;
		}

		#sig-dataUrl {
			width: 100%;
		}

		.jumbotron {
			padding-top: 10px;
			padding-bottom: 10px;
		opacity: 0,003;
			height: 120px;
		}


		.navbar {
			background-color: #1572e8;
		}

		.go {
			background-image: url('<?= base_url(); ?>assets/img/logo_Keren.png');
			background-size: cover;
		}


	</style>
</head>
<body class="go">
	<nav class="navbar navbar-dark">
		<a class="navbar-brand"href="#">
			<img src="<?= base_url(); ?>assets/img/logo-copy-BLUE.png"width="30"height="30"class="d-inline-block align-top"alt="">UIKL KALIMANTAN 
		</a>
		<img src="<?= base_url(); ?>assets/img/logo_Keren.png"alt="navbar brand"class="navbar-brand"style="float:right"width="30px"height="35px">
	</nav>
	<div class="jumbotron jumbotron-fluid">
		<div class="container">
			<div class="text-center">
				<h1>PT PLN (PERSERO) UIKL KALIMANTAN</h2>
					<?php if (count($isi) > 0) {
						foreach ($isi as $u) {
							?>
							<h4><?php echo $u->agenda ?></h4>
							<h5><?php echo date_indo($u->tgl_plak) ?>Pukul <?php echo $u->waktu ?>Wita</h5>
						</div>
					</div>
					<div class="card-body">
						<form action="<?= base_url(); ?>absen/add/<?php echo $u->id_agenda ?>"method="post"enctype="multipart/form-data">
							<input type="hidden"value="<?php echo $u->id_agenda ?>"name="id"><?php
						}
					}

					else {
						redirect(base_url("acara"));
					}

					?>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-sm-5">
					<div class="card">
						<div class="card-header text-center">
							<h5>Data Peserta</h5>
							<button type="button" class="btn btn-primary btn-xs btn-round" data-toggle="modal" data-target="#exampleModal" style="float:right">
								Bagikan
							</button>

						</div>
						<div class="card-body">
							<div class="form-group">
								<label for="">NIP *</label>
								<input type="text"name="nip"class="form-control a"placeholder="NIP ..."autocomplete="on"autofocus>
								<small class="form-text text-danger"><?=form_error('nip') ?></small>
							</div>
							<div class="form-group">
								<label for="">Nama *</label>
								<input type="text"name="nama"class="form-control a"placeholder="Nama..."autocomplete="on">
								<small class="form-text text-danger"><?=form_error('nama') ?></small>
							</div>
							<div class="form-group">
								<label for="">No HP *</label>
								<input type="text"name="hp"class="form-control a"placeholder="No HP ..."autocomplete="on">
								<small class="form-text text-danger"><?=form_error('hp') ?></small>
							</div><div class="form-group">
								<label for="">Email *</label>
								<input type="email"name="email"class="form-control"placeholder="Email ..."autocomplete="on">
								<small class="form-text text-danger"><?=form_error('email') ?></small>
							</div>
							<div class="form-group">
								<label for="">Unit / Instansi *</label>
								<input type="text"name="unit"class="form-control a"placeholder="Unit ..."autocomplete="on">
								<small class="form-text text-danger"><?=form_error('unit') ?></small>
							</div>
							<div class="form-group">
								<label for="">Jabatan *</label>
								<input type="text"name="jabatan"class="form-control a"placeholder="Jabatan ..."autocomplete="on">
								<small class="form-text text-danger"><?=form_error('jabatan') ?></small></div><div class="form-group">
									<label for="">Tanda Tangan *</label>
									<table border="0">
										<tr>
											<td>
												<canvas id="sig-canvas"width="320"height="160">Get a better browser,bro. </canvas>
											</td>
										</tr>
									</table>
								</div>
								<small class="form-text text-danger"><?=form_error('signed') ?></small>
								<a href="#"id="sig-clearBtn">Hapus</a>
								<textarea name="signed"id="sig-dataUrl" hidden="hidden"class="form-control"rows="5"> </textarea>
								<!-- <input type="hidden" type="text"name="signed"class="form-control a"placeholder="Unit ..."autocomplete="on"> -->

								<hr>
								<div>
									<button class="btn btn-success"type="submit"id="sig-submitBtn"name="save">Simpan</button>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-sm-7">
					<div class="card">
						<div class="card-header text-center">
							<h5>Daftar Peserta</h5>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table id="basic-datatables"class="display table table-hover table-head-bg-primary">
									<thead>
										<tr class="text-center">
											<th style="width: 18.8889px;">No</th>
											<th>NIP</th>
											<th>Nama</th>
											<th>Unit / Instansi</th>
											<th>Jabatan</th>
											<th>Waktu</th>
										</tr>
									</thead>
									<tbody>
										<?php $no=1;

										foreach ($org as $u) {
											?><tr><td><?php echo $no++?></td><td><?php echo $u->nip ?></td><td><?php echo $u->nama ?></td><td><?php echo $u->unit ?></td><td><?php echo $u->jabatan ?></td><td><?php echo $u->waktu ?></td></tr><?php
										}

										?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>



		<!-- Modal Sharing Link -->
		<!-- Button trigger modal -->


		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Bagikan Link</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<?php if (count($isi) > 0) {
							foreach ($isi as $u) {
								?>
								<input id="myInput" class="form-control" value="<?= base_url(); ?>absen/acara/<?php echo $u->id_agenda ?>" readonly>
								<?php
							}
						}
						?>
					</div>
					<div class="modal-footer">
						<!-- <a href="https://api.whatsapp.com/send/?text=https%3A%2F%2Fs.id%2Fappuikl&type=custom_url&app_absent=0">Bagikan ke WhatsApp</a> -->
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary" onclick="myFunction()">Salin</button>
					</div>
				</div>
			</div>
		</div>
		<!-- End Modal -->



		<script src="<?= base_url(); ?>assets/js/atlantis.min.js"></script>
		<script src="<?= base_url(); ?>assets/js/core/jquery.3.2.1.min.js"></script>
		<script src="<?= base_url(); ?>assets/js/core/popper.min.js"></script>
		<script src="<?= base_url(); ?>assets/js/core/bootstrap.min.js"></script>

		<script src="<?= base_url(); ?>assets/js/jquery2.signature.min.js"></script>
		<script src="<?= base_url(); ?>assets/js/plugin/datatables/datatables.min.js"></script>
		<script>
			$(document).ready(function() {
			$('#basic-datatables').DataTable( {}

				);

			$('#multi-filter-select').DataTable( {

				"pageLength": 5,
				initComplete: function() {
					this.api().columns().every(function() {
						var column=this;

						var select=$('<select class="form-control"><option value=""></option></select>') .appendTo($(column.footer()).empty()) .on('change', function() {
							var val=$.fn.dataTable.util.escapeRegex($(this).val());

							column .search(val ? '^'+ val + '$' : '', true, false) .draw();
						}

						);

						column.data().unique().sort().each(function(d, j) {
							select.append('<option value="'+ d + '">'+ d + '</option>')
						}

						);
					}

					);
				}
			}

			);

		// Add Row
		$('#add-row').DataTable( {
			"pageLength": 5,
		}

		);

		var action='<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

		$('#addRowButton').click(function() {
			$('#add-row').dataTable().fnAddData([ $("#addName").val(),
				$("#addPosition").val(),
				$("#addOffice").val(),
				action]);
			$('#addRowModal').modal('hide');

		}

		);
	}

	);


function myFunction() {
  /* Get the text field */
  var copyText = document.getElementById("myInput");

  /* Select the text field */
  copyText.select();
  copyText.setSelectionRange(0, 99999); /* For mobile devices */

   /* Copy the text inside the text field */
  navigator.clipboard.writeText(copyText.value);

  /* Alert the copied text */
  alert("Copied the text: " + copyText.value);
} 

</script>
</body>
</html>
