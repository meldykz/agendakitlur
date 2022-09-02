<!DOCTYPE html>
<html>

<head>
    <title>Tes menjalankan aplikasi</title>
</head>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.css">

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<link type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css" rel="stylesheet">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

<script type="text/javascript" src="<?= base_url(); ?>assets/js/jquery.signature.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/jquery.signature.css">


<style>
    .kbw-signature {
        width: 400px;
        height: 200px;
    }

    #sig canvas {
        width: 100% !important;
        height: auto;
    }
</style>

<body>
    <form action="absen/add" method="post">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="form-group">
                <label for="">NIP *</label>
                <input type="text" name="nip" class="form-control a" placeholder="NIP ..." autocomplete="off" autofocus>

            </div>
            <div class="form-group">
                <label for="">Nama *</label>
                <input type="text" name="nama" class="form-control a" placeholder="Nama..." autocomplete="off">

            </div>
            <div class="form-group">
                <label for="">No HP *</label>
                <input type="text" name="hp" class="form-control a" placeholder="No HP ..." autocomplete="off">
            </div>
            <div class="form-group">
                <label for="">Email *</label>
                <input type="email" name="email" class="form-control a" placeholder="Email ..." autocomplete="off">
            </div>
            <div class="form-group">
                <label for="">Unit *</label>
                <input type="text" name="unit" class="form-control a" placeholder="Unit ..." autocomplete="off">
            </div>
            <div class="form-group">
                <label for="">Jabatan *</label>
                <input type="text" name="jabatan" class="form-control a" placeholder="Jabatan ..." autocomplete="off">
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
            <a href="#" id="clear">Hapus</a>
            <!-- <textarea style="display: none" id="signature64" name="signed"></textarea> -->
            <input type="hidden" id="simpangambar" name="signed">
            <hr>
            <div>
                <button class="btn btn-success" type="submit" name="save">Simpan</button>
            </div>
        </div>

    </form>
</body>


<script type="text/javascript">
    var sig = $('#sig').signature({
        syncField: '#simpangambar',
        syncFormat: 'PNG'
    });
    $('#clear').click(function(e) {
        e.preventDefault();
        sig.signature('clear');
        $("#simpangambar").val('');
    });
</script>

</html>