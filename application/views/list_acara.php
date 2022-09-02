<!DOCTYPE html>
<html lang="en">
<meta http-equiv="refresh" content="60; url=<?= base_url(); ?>">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>PLN UIKL KALIMANTAN</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="<?= base_url(); ?>assets/img/favicon.png" />

    <!-- Fonts and icons -->
    <script src="<?= base_url(); ?>assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Lato:300,400,700,900"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
                urls: ['..assets/css/fonts.min.css']
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!-- CSS Files -->
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
 .navbar
 {
	background-color: #1572e8;
 }

	</style>
</head>

<body>
<nav class="navbar navbar-dark">
		<a class="navbar-brand" href="#">
			<img src="<?= base_url(); ?>assets/img/logo-copy-BLUE.png" width="30" height="30" class="d-inline-block align-top" alt="">
			UIKL KALIMANTAN
		</a>
		<img src="<?= base_url(); ?>assets/img/logo_Keren.png" alt="navbar brand" class="navbar-brand" style="float:right" width="30px" height="35px">

	</nav>

    <div class="card">
        <div class="card-header">
            <div class="text-center">
                <h2>AGENDA KEGIATAN </h2>
                <h1>PT PLN UIKL KALIMANTAN</h1>
                <h3><?php echo "Tanggal " . date_indo('Y-m-d'); ?></h3>
                <a class="btn btn-xs btn-light" style="float:right" href="<?= base_url(); ?>login" target="_blank">Login</a>
            </div>
        </div>
        <!-- <div class="card-body">

            <div class="card-body"> -->
        <div class="table-responsive">
            <table id="basic-datatables" class="display table table-striped table-hover table-head-bg-primary">
                <thead>
                    <tr class="text-center">
                        <th style="width: 18.8889px;">No</th>
                        <th>Agenda Kegiatan</th>
                        <th>Tanggal</th>
                        <th>Waktu (Wita)</th>
                        <th>Tempat</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($isi as $u) {
                    ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $u->agenda ?></td>
                            <td class="text-center"><?php echo date_indo($u->tgl_plak) ?></td>
                            <td class="text-center"><?php echo $u->waktu ?></td>
                            <td><?php echo $u->tempat ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="card-footer">
        </div>
    </div>

    <!--   Core JS Files   -->
    <script src="<?= base_url(); ?>assets/js/core/jquery.3.2.1.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/core/popper.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/core/bootstrap.min.js"></script>

    <!-- jQuery UI -->
    <script src="<?= base_url(); ?>assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

    <!-- jQuery Scrollbar -->
    <script src="<?= base_url(); ?>assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

    <!-- jQuery Sparkline -->
    <script src="<?= base_url(); ?>assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>


    <!-- Datatables -->
    <script src="<?= base_url(); ?>assets/js/plugin/datatables/datatables.min.js"></script>


    <!-- Sweet Alert -->
    <!-- <script src="<?= base_url(); ?>assets/js/plugin/sweetalert/sweetalert.min.js"></script> -->

    <!-- Atlantis JS -->
    <script src="<?= base_url(); ?>assets/js/atlantis.min.js"></script>

    <!-- Atlantis DEMO methods, don't include it in your project! -->
    <script src="<?= base_url(); ?>assets/js/setting-demo.js"></script>
    <script src="<?= base_url(); ?>assets/js/demo.js"></script>
    <script>
        $(document).ready(function() {
            $('#basic-datatables').DataTable({});

            $('#multi-filter-select').DataTable({
                "pageLength": 5,
                initComplete: function() {
                    this.api().columns().every(function() {
                        var column = this;
                        var select = $('<select class="form-control"><option value=""></option></select>')
                            .appendTo($(column.footer()).empty())
                            .on('change', function() {
                                var val = $.fn.dataTable.util.escapeRegex(
                                    $(this).val()
                                );

                                column
                                    .search(val ? '^' + val + '$' : '', true, false)
                                    .draw();
                            });

                        column.data().unique().sort().each(function(d, j) {
                            select.append('<option value="' + d + '">' + d + '</option>')
                        });
                    });
                }
            });

            // Add Row
            $('#add-row').DataTable({
                "pageLength": 5,
            });

            var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

            $('#addRowButton').click(function() {
                $('#add-row').dataTable().fnAddData([
                    $("#addName").val(),
                    $("#addPosition").val(),
                    $("#addOffice").val(),
                    action
                ]);
                $('#addRowModal').modal('hide');

            });
        });
    </script>

</body>

</html>