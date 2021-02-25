<div class="content">
  <!-- Header -->
  <!-- Header -->
  <div class="header bg-primary pb-6">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-7">
            <h6 class="h2 text-white d-inline-block mb-0">Husada Raya</h6>
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
              <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="#">Data Transaksi</a></li>
                <!-- <li class="breadcrumb-item active" aria-current="page">Default</li> -->
              </ol>
            </nav>
          </div>
          <div class="col-lg-6 col-5 text-right">
            <a href="#" class="btn btn-sm btn-neutral">New</a>
            <a href="#" class="btn btn-sm btn-neutral">Filters</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Page content -->
  <!-- Dark table -->
  <div class="container-fluid mt--6">
    <div class="row">
      <div class="col">
        <div class="card">
          <div class="card-header bg-gradient-warning">
            <div class="pt-4 text-center">
              <h4 class="text-uppercase ls-1 text-white py-3 mb-0">Transaksi Pembayaran</h4>
            </div>
          </div>
          <div class="card-body p-4">
            <div class="row">
              <div class="col-xl-3 col-md-6 pb-2">
                <select class="form-control" id="idPasien" onChange="aktifkanTombolTransaksi()" style="border:2px solid orange;">
                  <option value="0" selected disabled>Pilih Pasien</option>
                  <option value="1">Pasien 1</option>
                  <option value="2">Pasien 2</option>
                </select>
              </div>
              <div class="col-xl-3 col-md-6 pb-2">
                <select class="form-control" id="idDokter" onChange="aktifkanTombolTransaksi()" style="border:2px solid orange;">
                  <option value="0" selected disabled>Pilih Dokter</option>
                  <?php
                  foreach ($dokter as $key => $value) {
                    echo "<option value='" . $value["id_user"] . "'>" . $value["username"] . "</option>";
                  }
                  ?>
                </select>
              </div>
              <div class="col-xl-3 col-md-6"><button id="proses" class="btn btn-warning" onclick="prosesTransaksi()" disabled>Proses</button></div>
              <div class="col-xl-3 col-md-6">
                <h2 class="text-warning mt-2" id="totalHarga">Rp. 0.00</h2>
              </div>
            </div>
            <div id="tempatCheck"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="card">
          <div class="card-header">
            <div class="text-center">
              <h4 class="text-uppercase ls-1">Transaksi Terakhir</h4>
            </div>
          </div>
          <div class="card-body ">
            <div class="table-responsive">
              <table class="table table-flush" id="datatable-basic">
                <thead class="thead-light">
                  <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>61</td>
                    <td>2011/04/25</td>
                    <td>$320,800</td>
                  </tr>
                  <tr>
                    <td>Garrett Winters</td>
                    <td>Accountant</td>
                    <td>Tokyo</td>
                    <td>63</td>
                    <td>2011/07/25</td>
                    <td>$170,750</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  tampilkan()
  pasienBayar();
  var tindakanTerpilih = [];
  var hargaTerpilih = [];

  var indeksTindakan = 0;
  var indeksHarga = 0;
  var totalHarga = 0;

  function tampilkan() {
    $("#tempatCheck").html('<i class="fas fa-spinner fa-pulse"></i> Memuat...')
    var baris = ''
    baris += '<div class="row pt-4">'
    $.ajax({
      url: '<?= base_url() ?>transaksi/tampil',
      method: 'post',
      dataType: 'json',
      success: function(data) {
        for (let i = 0; i < data.length; i++) {
          baris += '<div class="col-xl-3 col-md-3 col-sm-4 pt-2"><button onClick="updateHarga(' + data[i].id_tindakan + ',' + data[i].harga + ')" class="btn btn-outline-secondary" id="tindakan' + data[i].id_tindakan + '">' + data[i].nama_tindakan + ' (Rp. ' + formatRupiah(data[i].harga.toString()) + ') </button></div>'
        }
        baris += '</div>'
        $("#tempatCheck").html(baris);
      }
    });
  }

  function pasienBayar() {
    var baris = '<option value="0" selected disabled>Pilih Pasien..</option>';
    $.ajax({
      url: '<?= base_url() ?>transaksi/pasienBayar',
      method: 'post',
      dataType: 'json',
      success: function(data) {
        for (let i = 0; i < data.length; i++) {
          baris += '<option value="' + data[i].id + '">' + data[i].nama + '</option>'
        }
        $("#idPasien").html(baris);
      }
    });
  }

  function updateHarga(id, harga) {
    if ($("#tindakan" + id).hasClass("btn-outline-secondary")) {
      $("#tindakan" + id).removeClass("btn-outline-secondary")
      $("#tindakan" + id).addClass("btn-success")
      tindakanTerpilih.push(id)
      hargaTerpilih.push(harga)
    } else {
      $("#tindakan" + id).removeClass("btn-success")
      $("#tindakan" + id).addClass("btn-outline-secondary")
      indeksTindakan = tindakanTerpilih.indexOf(id);
      tindakanTerpilih.splice(indeksTindakan, 1);
      indeksHarga = hargaTerpilih.indexOf(harga);
      hargaTerpilih.splice(indeksHarga, 1);
    }

    indeksHarga = 0;
    indeksTindakan = 0;
    totalHarga = 0;

    for (let i = 0; i < hargaTerpilih.length; i++) {
      totalHarga += hargaTerpilih[i];
    }
    $("#totalHarga").html("Rp. " + formatRupiah(totalHarga.toString()));
    aktifkanTombolTransaksi();
  }

  function aktifkanTombolTransaksi() {
    if (tindakanTerpilih.length && $("#idPasien").val() && $("#idDokter").val()) {
      $("#proses").prop('disabled', false);
    } else {
      $("#proses").prop('disabled', true);
    }
  }

  function prosesTransaksi() {
    $("#proses").html('<i class="fas fa-spinner fa-pulse"></i> Memproses..')
    $("#proses").prop('disabled', true);
    var idPasien = $("#idPasien").val()
    var idDokter = $("#idDokter").val()
    $.ajax({
      url: '<?= base_url() ?>transaksi/prosesTransaksi',
      method: 'post',
      data: {
        idTindakan: tindakanTerpilih,
        idPasien: idPasien,
        idDokter: idDokter
      },
      dataType: 'json',
      success: function(data) {
        for (let i = 0; i < tindakanTerpilih.length; i++) {
          $("#tindakan" + tindakanTerpilih[i]).removeClass("btn-success")
          $("#tindakan" + tindakanTerpilih[i]).addClass("btn-outline-secondary")
        }

        tindakanTerpilih = []
        hargaTerpilih = []
        $("#totalHarga").html("Rp. 0.00");
        $("#proses").html('Proses')
        $("#idPasien").val(0)
        $("#idDokter").val(0)
      }
    });
  }

  function formatRupiah(angka, prefix) {
    var number_string = angka.replace(/[^,\d]/g, '').toString(),
      split = number_string.split(','),
      sisa = split[0].length % 3,
      rupiah = split[0].substr(0, sisa),
      ribuan = split[0].substr(sisa).match(/\d{3}/gi);

    // tambahkan titik jika yang di input sudah menjadi angka ribuan
    if (ribuan) {
      separator = sisa ? '.' : '';
      rupiah += separator + ribuan.join('.');
    }

    rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
    return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
  }
</script>