<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>DAFTAR HADIR ONLINE</title>
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
                urls: ['<?= base_url(); ?>assets/css/fonts.min.css']
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/atlantis.min.css">

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/demo.css">
</head>

<body>
    <div class="wrapper">
        <div class="main-header">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="blue">

                <a href="#" class="logo">
                    <img src="<?= base_url(); ?>assets/img/logo-copy-BLUE.png" alt="navbar brand" class="navbar-brand">
                </a>
                <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <i class="icon-menu"></i>
                    </span>
                </button>
                <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
                <div class="nav-toggle">
                    <button class="btn btn-toggle toggle-sidebar">
                        <i class="icon-menu"></i>
                    </button>
                </div>
            </div>
            <!-- End Logo Header -->

            <!-- Navbar Header -->
            <nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">

                <div class="container-fluid">
                </div>
            </nav>
            <!-- End Navbar -->
        </div>

        <!-- Sidebar -->
        <?php $this->load->view("sidebar") ?>
        <!-- End Sidebar -->

        <div class="main-panel">
            <div class="content">
                <div class="page-inner">
                    <div class="page-header">
                        <h2>Tambah Agenda</h2>
                    </div>
                    <div class="page-body">
                        <div class="card">
                            <div class="card-header">
                                <!-- <a href="#" class="btn btn-success btn-sm">Tambah</a> -->
                            </div>
                            <div class="card-body">
                                <form action="<?= base_url(); ?>agenda/save" method="post" enctype="multipart/form-data">

                                    <div class="tab-content mt-2 mb-3" id="pills-tabContent">
                                        <div class="form-group">
                                            <label for="">Agenda *</label>
                                            <input type="text" name="agenda" class="form-control a" placeholder="Agenda ..." autocomplete="on" autofocus>
                                            <small class="form-text text-danger"><?= form_error('agenda') ?></small>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Tanggal *</label>
                                            <div class="row">
                                                <div class="col-3">
                                                    <input type="date" name="tgl" class="form-control a" placeholder="" autocomplete="on">
                                                </div>
                                            </div>
                                            <small class="form-text text-danger"><?= form_error('tgl') ?></small>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Waktu (Wita)*</label>
                                            <div class="row">
                                                <div class="col-2">
                                                    <select name="waktu" class="form-control input-square" id="squareSelect">
                                                        <option>00:00</option>
                                                        <option>00:30</option>
                                                        <option>01:00</option>
                                                        <option>01:30</option>
                                                        <option>02:00</option>
                                                        <option>02:30</option>
                                                        <option>03:00</option>
                                                        <option>03:30</option>
                                                        <option>04:00</option>
                                                        <option>04:30</option>
                                                        <option>05:00</option>
                                                        <option>05:30</option>
                                                        <option>06:00</option>
                                                        <option>06:30</option>
                                                        <option>07:00</option>
                                                        <option>07:30</option>
                                                        <option>08:00</option>
                                                        <option>08:30</option>
                                                        <option>09:00</option>
                                                        <option>09:30</option>
                                                        <option>10:00</option>
                                                        <option>10:30</option>
                                                        <option>11:00</option>
                                                        <option>11:30</option>
                                                        <option>12:00</option>
                                                        <option>12:30</option>
                                                        <option>13:00</option>
                                                        <option>13:30</option>
                                                        <option>14:00</option>
                                                        <option>14:30</option>
                                                        <option>15:00</option>
                                                        <option>15:30</option>
                                                        <option>16:00</option>
                                                        <option>16:30</option>
                                                        <option>17:00</option>
                                                        <option>17:30</option>
                                                        <option>18:00</option>
                                                        <option>18:30</option>
                                                        <option>19:00</option>
                                                        <option>19:30</option>
                                                        <option>20:00</option>
                                                        <option>20:30</option>
                                                        <option>21:00</option>
                                                        <option>21:30</option>
                                                        <option>22:00</option>
                                                        <option>22:30</option>
                                                        <option>23:00</option>
                                                        <option>23:30</option>
                                                        <option>24:00</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <small class="form-text text-danger"><?= form_error('waktu') ?></small>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Tempat *</label>
                                            <input type="text" name="tempat" class="form-control a" placeholder="Tempat ..." autocomplete="on" autofocus>
                                            <small class="form-text text-danger"><?= form_error('tempat') ?></small>
                                        </div>
                                        <div class="form-group">
                                            <label for="">PIC *</label>
                                            <input type="text" name="pic" class="form-control a" placeholder="PIC  ..." autocomplete="on" autofocus>
                                            <small class="form-text text-danger"><?= form_error('pic') ?></small>
                                        </div>
                                        <hr>
                                        <div>
                                            <button class="btn btn-success" type="submit" name="save">Simpan</button>
                                            <a href="<?php echo base_url('agenda') ?>" class="btn btn-default float-right">Kembali</a>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav class="pull-left">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link" href="https://www.themekita.com">
                                    ThemeKita
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Help
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Licenses
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="copyright ml-auto">
                        2018, made with <i class="fa fa-heart heart text-danger"></i> by <a href="https://www.themekita.com">ThemeKita</a>
                    </div>
                </div>
            </footer>
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

    <!-- Datatables -->


    <!-- Bootstrap Notify -->
    <script src="<?= base_url(); ?>assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>


    <!-- Sweet Alert -->
    <script src="<?= base_url(); ?>assets/js/plugin/sweetalert/sweetalert.min.js"></script>

    <!-- Atlantis JS -->
    <script src="<?= base_url(); ?>assets/js/atlantis.min.js"></script>



</body>

</html>