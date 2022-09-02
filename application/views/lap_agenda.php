<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html mozdisallowselectionprint="" moznomarginboxes="" xmlns="http://www.w3.org/1999/xhtml">
<link rel="icon" href="<?= base_url(); ?>assets/img/favicon.png" />

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <title>Laporan Agenda Kegiatan</title>
    <link href="<?= base_url(); ?>assets/print/fonts.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/print/printview.css">
    <style>
        @media print {
            @page {
                margin: 1.6cm 1.3cm 0.6cm 1.3cm;
                size: landscape;
            }

            body {
                margin-bottom: 1.6cm;
                width: 100%;
            }
        }

        body {
            font: 14px Arial, Helvetica, sans-serif;
            margin: 0;
            padding: 0;
        }

        .pdfWrapper {
            margin: 20px;
            padding: 0;
        }

        .pdfHeadWrapper {
            padding: 0px 0 15px 0;
        }

        .pdfHeadWrapper h1 {
            margin: 0;
            padding: 0;
            color: #000;
            font-weight: normal;
            letter-spacing: 0.3px;
            font-size: 24px;
            font-size: 17px;
            font-weight: 500;
        }

        .pdfHeadWrapper .headSubCont {
            color: #888888;
            font-size: 13px;
        }

        .pdfHeadWrapper .headSubCont span {
            color: #666;
        }

        .pdfContWrapper {
            padding: 0;
        }

        .pdfContWrapper table {
            border: 1px solid #E4E4E4;
            border-right: 1px solid #E4E4E4;
            border-bottom: 0;
            margin: 0px 0 20px 0;
        }

        .pdfContWrapper table tr {
            page-break-inside: avoid;
        }

        /*.pdfContWrapper table tr {page-break-inside:avoid; display:inline-table; width:100%;} */
        .pdfContWrapper table tr td {
            border-bottom: 1px solid #E8E8E8;
            width: 50%;
            vertical-align: top;
            -webkit-column-break-inside: avoid;
            page-break-inside: avoid;
            break-inside: avoid;
        }

        .pdfContWrapper table td.cell p {
            font-weight: normal;
        }

        .pdfContWrapper table td.cell {
            background-color: #f7f7f7;
            border-right: 1px solid #E8E8E8;
        }

        .pdfFootWrapper {
            padding: 5px 0 20px 0;
            text-align: right;
        }

        .pdfFootWrapper span {
            padding-right: 3px;
            position: relative;
            top: -3px;
        }

        .pdfFootWrapper img {
            width: 130px;
            margin-top: 3px;
            border: 0
        }

        .reportTable {
            border: 1px solid #E4E4E4;
        }

        .reportTable thead th {
            padding: 0px 15px;
            vertical-align: middle;
            text-align: left;
            height: 33px;
            white-space: nowrap;
            min-width: 150px;
            background: #F4F2F2;
            background: -webkit-gradient(linear, left top, left bottom, from(#F4F2F2), to(#F4F2F2));
            background: -moz-linear-gradient(top, #fafafa, #F4F2F2);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fafafa', endColorstr='#F4F2F2');
            box-shadow: 0 1px 0 #FFFFFF inset;
            -moz-box-shadow: 0 1px 0 #FFFFFF inset;
            -webkit-box-shadow: 0 1px 0 #FFFFFF inset;
            color: #000;
            text-shadow: 1px 1px 0 #FFFFFF;
            border-right: 1px solid #E8E8E8;
        }

        .reportTable tbody {
            color: #000;
        }

        .reportTable tbody tr:hover {
            background: #f2fbf9;
        }

        .reportTable tbody tr.select {
            background: #f2fbf9;
        }

        .reportTable tbody td {
            padding: 10px 15px;
            vertical-align: middle;
            text-align: left;
            cursor: default;
            height: 15px;
            min-height: 15px;
        }

        .reportTable tr td {
            border-top: 1px solid #E8E8E8;
            border-right: 1px solid #E8E8E8;
            vertical-align: top;
        }

        .pdfRptWrapper table {
            margin-bottom: 20px;
        }

        .pdfNoData {
            text-align: center;
            border: 1px solid #E8E8E8;
            padding: 15px;
        }

        .approved {
            color: #468847;
        }

        .denied {
            color: #d20007;
        }

        .pending {
            color: #ff7225;
        }

        .statusIcon {
            width: 16px;
            height: 16px;
            border: 1px solid;
            background: url(https://static.zohocdn.com/forms/images/pngSprite.fa94b0dc25678499f66dbe0f94ae668e.png);
            margin-right: 5px;
            display: inline-block;
            vertical-align: bottom;
            -webkit-border-radius: 15px;
            -moz-border-radius: 15px;
            border-radius: 15px;
        }

        .approved img {
            border: 1px solid #468847;
            padding: 5px 4px;
            vertical-align: middle;
            margin-right: 5px;
            -webkit-border-radius: 20px;
            -moz-border-radius: 20px;
            border-radius: 20px;
        }

        .denied img {
            border: 1px solid #d20007;
            padding: 0px;
            vertical-align: middle;
            margin-right: 5px;
            -webkit-border-radius: 20px;
            -moz-border-radius: 20px;
            border-radius: 20px;
            width: 16px;
            height: 16px;
        }

        .pending img {
            border: 1px solid #ff7225;
            padding: 3px;
            vertical-align: middle;
            margin-right: 5px;
            -webkit-border-radius: 20px;
            -moz-border-radius: 20px;
            border-radius: 20px;
        }

        .approved img,
        .denied img,
        .pending img {
            position: relative;
            margin-top: -2px;
        }

        .imgPreviewWrap .imgContainer {
            width: 50px;
            height: 50px;
        }

        .imgPreviewWrap .fileContainer {
            width: 50px;
            height: 50px;
            border: 1px dash #E8E8E8;
        }

        .imgPreviewWrap .downloadLink {
            margin: 15px 10px 0 58px;
            display: block;
            float: none;
        }

        .imgPreviewWrapBig {
            padding: 10px !important;
        }

        .imgPreviewWrapBig .fileContainer,
        .imgPreviewWrapBig .imgContainer {
            float: none;
        }

        .imgPreviewWrapBig .downloadLink {
            margin-top: 15px;
            text-decoration: none;
            font-weight: 400;
            font-size: 14px;
        }

        .imgPreviewWrapBig .imgContainer img {
            width: auto;
            height: auto;
            max-width: 400px;
            max-height: 300px;
        }

        .fileIcon {
            background: url(https://static.zohocdn.com/forms/images/printTypeIcon.3b0153c4af3d89445ae1ea9b17fe6774.png) no-repeat;
            width: 16px;
            height: 16px;
            display: none;
        }

        .flLeft {
            float: left;
        }

        .flRight {
            float: right;
        }

        .clearBoth {
            clear: both;
        }

        .crmRecordSuccess,
        .crmFileFailure,
        .crmRecordFailure,
        .crmRecordWarning {
            display: block;
            padding: 10px;
            margin-bottom: 10px;
            border-left: 2px solid;
            line-height: 19px;
        }

        .crmRecordSuccess {
            background: #e2fad9;
            border-color: #46c51b;
        }

        .crmFileFailure,
        .crmRecordFailure {
            background: #fdf1f1;
            border-color: #ff5552;
        }

        .crmRecordWarning {
            border-color: #eba700;
            background: #fff6e1;
        }

        .crmFileFailure b,
        .crmRecordFailure b {
            display: block;
            text-transform: uppercase;
            margin-top: 10px;
            margin-bottom: 4px;
            font-size: 12px;
            color: #d50000;
            font-weight: 300;
        }

        .statMgsWrap ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .statMgsWrap .crmRecordSuccess,
        .crmFileFailure,
        .crmRecordFailure,
        .crmRecordWarning {
            display: inline-block !important;
        }

        .statMgsWrap .statMgsTitle {
            font-size: 15px;
            margin-bottom: 7px;
            font-weight: 300;
        }

        .matrixEntry table {
            border-collapse: collapse;
            width: 100%;
        }

        .matrixEntry tr th {
            border-right: 1px solid #eaeaea;
            font-weight: bold !important;
        }

        .matrixEntry tr td,
        .matrixEntry tr th {
            cursor: default;
            font-weight: normal;
            padding: 10px 15px;
            text-align: left;
            vertical-align: top;
            border-bottom: none;
        }

        .matrixEntry tr {
            border-bottom: 1px solid #eaeaea;
        }

        .matrixEntry tr:last-child {
            border-bottom: none;
        }

        .matrixEntry tr td:last-child {
            border-right: none;
        }

        .matrixEntry table {
            margin-bottom: 0;
        }

        .matrixEntry table td {
            border: none !important;
        }

        .matrixEntry p,
        .matrixEntry h5 {
            color: #777777;
            margin: 0 0 15px 0;
            font-weight: 600;
            font-size: 13px;
        }

        .summaryMtrixList p,
        .summaryMtrixList span {
            font-weight: normal;
            margin-bottom: 5px;
            font-size: 15px;
            color: #777777;
        }

        .summaryMtrixList span {
            color: #444;
            font-size: 14px;
        }

        .imgOuterCont {
            margin-bottom: 10px;
        }

        .imgInnerCont {
            border: 1px solid #eaeaea;
            border-radius: 3px;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            background: #fff;
        }

        .imgPreviewWrap .imgContainer {
            width: 50px;
            height: 50px;
            display: table-cell;
            vertical-align: middle;
            text-align: center;
        }

        .imgPreviewWrap .imgContainer img {
            max-width: 50px;
            max-height: 50px;
        }

        .imgPreviewWrap .imgContainer .Over_Icon {
            top: 0;
            display: none;
        }

        .imgPreviewWrap .fileContainer {
            background-position: -128px -222px;
        }

        .imgPreviewWrap .downloadLink {
            margin-left: 60px;
            padding-top: 15px;
            text-decoration: none;
        }

        .imgPreviewWrap .downloadLink em {
            border-bottom: 1px solid;
        }

        .imgPreviewWrap .downloadLink a {
            display: inline;
        }

        .imgPreviewWrap .downloadLink a:hover {
            text-decoration: none;
        }

        .imgPreviewWrapBig {
            padding: 10px !important;
            padding-top: 20px !important;
        }

        .imgPreviewWrapBig .imgPreviewWidth {
            width: 150px;
            height: 150px;
            border-radius: 3px;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border: 1px dashed #ccc;
        }

        .imgPreviewWrapBig .imgContainer {
            position: relative;
            width: 150px;
            height: 150px;
            margin: 0 auto;
            display: table-cell;
            vertical-align: middle;
            text-align: center;
            overflow: hidden;
        }

        .imgPreviewWrapBig .fileContainer {
            position: relative;
            border-radius: 3px;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border: 1px dashed #ccc;
            float: left;
        }

        .imgPreviewWrapBig .downloadLink {
            margin-top: 5px;
            text-decoration: none;
            font-weight: 400;
            font-size: 14px;
            display: inline-block;
        }

        .imgPreviewWrapBig .imgContainer img {
            max-height: 150px;
            max-width: 150px;
        }

        .imgPreviewCont {
            margin-bottom: 20px;
            -webkit-column-break-inside: avoid;
        }

        .imgPreviewWrapBig .fileIcon {
            display: block;
            margin-top: 4px;
            margin-left: 4px;
        }

        .fileType {
            display: inline-block;
        }

        .fileType .downloadLink {
            display: block;
            margin-left: 33px;
            line-height: 27px;
            margin-top: 0;
        }

        .fileType .fileContainer {
            width: 25px;
            height: 25px;
        }

        .imgPreviewWrap .downloadLink .imgPreName {
            float: left;
            max-width: 75%;
            white-space: nowrap;
            text-overflow: ellipsis;
            overflow: hidden;
        }

        .printviewTbl {
            -webkit-column-break-inside: avoid;
            page-break-inside: avoid;
            break-inside: avoid;
        }

        .recordSum_subfrm .labelCont {
            background: #fff !important;
            width: 34.5%;
        }

        /* subform print as list css */
        .subFormEntry thead th {
            background: none !important;
            border-bottom: none !important;
        }

        /* matrix css start here */
        .matrixNewEntry table th:last-child {
            border-right: none !important;
        }

        .matrixNewEntry table th {
            min-width: 60px;
        }

        .matrixNewEntry table td {
            min-width: 60px;
            border-right: 1px solid #eaeaea !important;
        }

        .matrixNewEntry table td:last-child {
            border-right: none !important;
        }

        .listImgView .imgfileName,
        .summaryImgView .imgfileName,
        .recordSum_subfrm .imgfileName {
            display: inline-block;
        }

        .listImgView em,
        .summaryImgView em,
        .recordSum_subfrm em {
            font-style: normal;
        }

        .printSummaryComment h3 {
            margin: 0 0 8px 0;
            font-size: 15px;
            font-weight: 500;
        }

        .printSummaryComment h3 {
            margin: 0 0 7px 0;
        }

        .printSummaryComment span {
            margin-bottom: 12px;
            display: inline-block;
            color: #909090;
            font-size: 13px;
            font-weight: 300;
        }

        .comntInnerList p {
            margin: 0;
            color: #444;
            font-size: 14px;
        }

        .printSummaryComment {
            border-bottom: 0px;
            border-top: 0px;
            padding: 20px 20px 0;
            border: 1px solid #ddd;
            border-top: 0;
            letter-spacing: 0.3px;
            margin-bottom: 20px;
            margin-top: -20px;
            font-family: 'Proxima Nova', 'Open Sans', "Lucida Grande", "Lucida Sans Unicode", Arial, Arimo, Helvetica, sans-serif !important;
        }

        .comntInnerList tr:last-child,
        .comntInnerList table {
            border-bottom: 0px;
        }

        .summaryMtrixList {
            margin-bottom: 15px;
        }

        .summaryMtrixList:last-child {
            margin-bottom: 0px;
        }

        .printSummaryComment h2 {
            margin: 0 0 15px 0;
            font-size: 16px;
            font-weight: 500;
            letter-spacing: 0.3px;
        }

        .cmtListLft {
            float: left;
        }

        .cmtListRht {
            margin-left: 96px;
        }

        .cmtListLft img {
            width: 65px;
            height: 65px;
            border-radius: 100px;
        }

        .comntInnerList {
            border-bottom: 1px solid #eaeaea;
            padding-bottom: 20px;
            margin-bottom: 20px;
            display: inline-block;
            width: 100%;
        }

        .comntInnerList:last-child {
            border-bottom: 0px;
            margin-bottom: 0px;
        }

        .cmtListImg {
            width: 65px;
            height: 65px;
            border-radius: 80px;
            overflow: hidden;
        }

        .recordSum_subfrm {
            box-shadow: none;
            margin: 20px 0;
        }

        .recordSum_subfrm label {
            margin-bottom: 10px;
            display: inline-block;
            color: #909090;
            font-weight: normal;
        }

        .subform_text {
            font-size: 14px;
        }

        .recordSum_subfrm table tr td.dataCont {
            font-weight: normal;
        }

        .website_link {
            text-decoration: none;
            color: #24A68A;
        }

        @media print {
            * {
                -webkit-print-color-adjust: exact !important;
                /*Chrome, Safari */
                color-adjust: exact !important;
                /*Firefox*/
            }
        }
    </style>

    <head>
        <!-- <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /> -->
        <title>Halaman Print A4</title>
    </head>



<body>
    <div class="pdfHeadWrapper">
        <h1>Agenda Kegiatan PT PLN (Persero) UIKL Kalimantan</h1>
        <div class="headSubCont">
            <span></span>

        </div>
    </div>
    <div class="pdfWrapper">

        <table border="1">

            <tr>
                <th style="width: 18.8889px;">No</th>
                <th>Agenda Kegiatan</th>
                <th>Tanggal</th>
                <th>Waktu</th>
                <th>Tempat</th>
                <th>PIC</th>
                <th>Pembuat</th>
                <th>Tgl Buat</th>
            </tr>
            <?php
            $no = 1;
            foreach ($isi as $u) {
            ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $u->agenda ?></td>
                    <td><?php echo date_indo($u->tgl_plak) ?></td>
                    <td><?php echo $u->waktu ?></td>
                    <td><?php echo $u->tempat ?></td>
                    <td><?php echo $u->pic ?></td>
                    <td><?php echo $u->input ?></td>
                    <td><?php echo date_indo($u->tgl_buat) ?></td>

                </tr>
            <?php } ?>

        </table>
    </div>
</body>

</html>
<script type="text/javascript">
    window.print();
</script>