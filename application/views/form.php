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
    
  </style>
</head>
<body>
  <div style="margin: auto;">
    <div class="row">
      <div class="col-12">
        <h4 class="text-center"><b><?= $this->session->userdata('tindakan') ?> TINDAKAN MEDIS</b></h4>
      </div>
    </div>
    <div class="row" style="width: 70vw;margin-left: auto; margin-right: auto;">
      <div class="col">
        <table class="table table-responsive" style="margin-top: 50px; margin-left: auto; margin-right: auto;">
          <tr>
            <td colspan="3">Saya Yang bertanda Tangan Dibawah Ini :</td>
          </tr>
          <tr>
            <td style="width: 200px;">Nama</td>
            <td colspan="2">: <?= $this->session->userdata('nama_1') ?></td>
          </tr>
          <tr>
            <td style="width: 200px;">Tanggal Lahir / Jenis Kelamin</td>
            <td colspan="2">: <?= $this->session->userdata('ttl_1') ?> / <?= $this->session->userdata('jk_1') ?></td>
          </tr>
          <tr>
            <td style="width: 200px;">Alamat</td>
            <td colspan="2">: <?= $this->session->userdata('alamat_1') ?></td>
          </tr>
          <tr>
            <td style="width: 200px;">Bukti diri / KTP</td>
            <td colspan="2">: <?= $this->session->userdata('nik_1') ?></td>
          </tr>
          <tr>
            <td colspan="3">Dengan Ini Menyatakan dengan sesungguhnya telah memberikan :</td>
          </tr>
          <tr>
            <td colspan="3" class="text-center"><b><?= $this->session->userdata('tindakan') ?></b></td>
          </tr>
          <tr>
            <td style="width: 200px;">Terhadap :</td>
            <td colspan="2">: <?= $this->session->userdata('nik_1') ?></td>
          </tr>
          <tr>
            <td style="width: 200px;">Nama :</td>
            <td colspan="2">: <?= $this->session->userdata('nik_1') ?></td>
          </tr>
          <tr>
            <td style="width: 200px;">Umur / Jenis Kelamin :</td>
            <td colspan="2">: <?= $this->session->userdata('nik_1') ?></td>
          </tr>
          <tr>
            <td style="width: 200px;">Dirawat di :</td>
            <td colspan="2">: <?= $this->session->userdata('nik_1') ?></td>
          </tr>
          <tr>
            <td style="width: 200px;">No Rekam Medik :</td>
            <td colspan="2">: <?= $this->session->userdata('nik_1') ?></td>
          </tr>
          <tr>
            <td colspan="3">Yang tujuan, sifat dan perlunya tindakan medis 
                        tersebut diatas, serta resiko yang ditimbulkan telah cukup dijelasan oleh dokter
                        dan telah saya mengerti seperti demikian pernyataan ini saya buat dengan penuh 
                        kesadaran dan tanpa paksaan.</td>
          </tr>
          <tr>
            <td colspan="3"  class="text-right">Bangkalan, Tanggal.............Bulan.............Tahun.............</td>
          </tr>
          <tr>
            <td class="text-center">Saksi 1</td>
            <td class="text-center">Saksi 2</td>
            <td class="text-center">Saksi Yang Membuat Pernyataan</td>
          </tr>
          <tr>
            <td class="text-center">Tanda Tangan</td>
            <td class="text-center">Tanda Tangan</td>
            <td class="text-center">Tanda Tangan</td>
          </tr>
          <tr>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
          </tr>
          <tr>
            <td class="text-center">.................................................................</td>
            <td class="text-center">.................................................................</td>
            <td class="text-center"><u><?= $this->session->userdata('nama_1') ?></u></td>
          </tr>
          <tr>
            <td class="text-center">Nama Jelas</td>
            <td class="text-center">Nama Jelas</td>
            <td class="text-center">Nama Jelas</td>
          </tr>
        </table>
      </div>
    </div>
  </div>
<script>
  $(document).ready(function() {
    // window.print();
  });
</script>
</body>
</html>