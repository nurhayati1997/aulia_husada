<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Aulia Husada-Print Tindakan Medis</title>
  <link rel="icon" href="<?= base_url() ?>assets_admin/img/brand/logo.ico" type="image/png">
  <script src="<?= base_url() ?>assets_admin/vendor/jquery/dist/jquery.min.js"></script>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  <style>
    .borderless td, .borderless th {
      border: none!important;
    }
  </style>
</head>
<body>
  <div style="margin: auto;">
    <div class="row" style="width: 90vw;margin-left: auto; margin-right: auto;">
      <table class="table table-responsive borderless" style="margin-top: 50px; margin-left: auto; margin-right: auto;">
        <tr>
            <td>Nama (L/P)</td>
            <td>:</td>
            <td id="nama" style="width: 70%;"></td>
        </tr>
        <tr>
            <td>No RM</td>
            <td>:</td>
            <td id="nrm"></td>
        </tr>
        <tr>
            <td>TGL LAHIR (UMUR)</td>
            <td>:</td>
            <td id="ttl"></td>
        </tr>
        <tr>
            <td>ALAMAT</td>
            <td>:</td>
            <td id="alamat"></td>
        </tr>
      </table>
    </div>
    <div class="row" style="width: 90vw;margin-left: auto; margin-right: auto;">
      <div class="col">
        <table class="table table-responsive" style="margin-top: 50px; margin-left: auto; margin-right: auto;" >
            <thead>
                <th class="text-center">Tanggal</th>
                <th class="text-center">Nama Dokter</th>
                <th class="text-center">Diagnosa</th>
                <th class="text-center">Terapi</th>
                <th class="text-center">Keterangan</th>
            </thead>
            <tbody id="myTabel" >

            </tbody>
        </table>
      </div>
    </div>
  </div>
<script>
    $(document).ready(function() {
        pencarian();
        isi_tabel();
        
    });

    function pencarian() {
        $.ajax({
            type: 'POST',
            url: '<?= base_url() ?>pendaftaran/pencarian',
            data: 'kata_kunci=' + <?=$id?>,
            dataType: 'json',
            success: function(data) {
                $tgl = data.ttl.split("/");
                var d = new Date();
                var n = d.getFullYear();

                if(data.jenis_kelamin==0){
                    var jk = "L";
                }else{
                    var jk = "P";
                }

                $("#nama").html(data.nama+" ("+ jk +")");
                $("#nrm").html(data.kode);
                $("#alamat").html(data.alamat);
                $("#ttl").html(data.ttl + " (" + (n-$tgl[2]) + " Tahun)");
            }
        });
    }

    function isi_tabel() {
        $.ajax({
            type: 'POST',
            url: '<?= base_url() ?>tindakan/isi_tabel',
            data: 'kata_kunci=' + <?=$id?>,
            dataType: 'json',
            success: function(data) {
                console.log(data);
                var html = '';
                for (var i = 0; i < data.length; i++) {
                    // console.log(data[i].tanggal_antri);
                    html += "<tr>";
                    
                    html += "<td class='text-center'>";
                    $tgl = data[i].tanggal_antri.split("-");
                    html += $tgl[2]+"-"+$tgl[1]+"-"+$tgl[0];
                    html += "</td>";
                    
                    html += "<td>";
                     html += data[i].nama_dokter;
                    html += "</td>";
                    
                    html += "<td>";
                    if(data[i].diagnosa!=null){html += data[i].diagnosa;}
                    html += "</td>";

                    html += "<td>";
                    if(data[i].terapi!= null){html += data[i].terapi;}
                    html += "</td>";

                    html += "<td class='text-center'>";
                    if(data[i].tindakan==0){
                        html += 'Persetujuan';
                    }else if(data[i].tindakan==1){
                        html += 'Penolakan';
                    }
                    html += "</td>";

                    html += "</tr>";
                }
                $("#myTabel").html(html);
                window.print();
            }
        });
    }
</script>
</body>
</html>