<div class="content">
  <!-- Header -->
  <!-- Header -->
  <div class="header bg-primary pb-6">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-7">
            <h6 class="h2 text-white d-inline-block mb-0">Aulia Raya</h6>
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
              <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item"><a><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a>Laporan Internal</a></li>
                <!-- <li class="breadcrumb-item active" aria-current="page">Default</li> -->
              </ol>
            </nav>
          </div>
          <div class="col-lg-6 col-5 text-right">
            <a href="#" onclick="printLaporan()" class="btn btn-sm btn-neutral" id="linkPrintLaporan">Print Laporan</a>
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
          <div class="card-header bg-gradient-info">
            <div class="pt-4 text-center">
              <h4 class="text-uppercase ls-1 text-white py-3 mb-0" id="judul">Laporan Internal</h4>
              <div id="pesanError" class="badge badge-danger"></div>
              <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <div class="input-group input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                      </div>
                      <input class="form-control datepicker" placeholder="Mulai Tanggal" id="tanggalMulai" type="text" onchange="tampilkanLaporan()">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                      </div>
                      <input class="form-control datepicker" placeholder="Sampai Tanggal" id="tanggalSelesai" type="text" onchange="tampilkanLaporan()">
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                </div>
              </div>
              <div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-4">
                  <div class="numbers text-white">
                    <p class="card-category">Total Pemasukan :</p>
                    <h4 class="card-title  text-white" id="pemasukan">Rp. 0</h4>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="numbers text-white">
                    <p class="card-category">Total Keuntungan :</p>
                    <h4 class="card-title  text-white" id="keuntungan">Rp. 0</h4>
                  </div>
                </div>
                <div class="col-md-2">
                </div>
              </div>
            </div>
          </div>
          <div class="card-body ">
            <div class="table-responsive py-4" id="tempatTabel">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modalHapus" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header no-bd">
        <h5 class="modal-title">
          <span class="fw-mediumbold">
            Hapus</span>
          <span class="fw-light">
            Transaksi
          </span>
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p id="teksHapus"></p>
        <input type="hidden" id="idHapus" name="id_hapus" />
      </div>
      <div class="modal-footer no-bd">
        <button type="button" id="hapus" onClick="hapus()" class="btn btn-primary">Hapus</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
      </div>
    </div>
  </div>
</div>
<script>
  var tanggal = new Date;
  var hariIni = (tanggal.getMonth() + 1) + '/' + (tanggal.getDate()) + '/' + tanggal.getFullYear();
  $("#tanggalMulai").val(hariIni)
  $("#tanggalSelesai").val(hariIni)
  tampilkanLaporan()

  function tampilkanLaporan() {
    var tanggalMulai = $("#tanggalMulai").val()
    var tanggalSelesai = $("#tanggalSelesai").val()

    if (Date.parse(tanggalMulai) && Date.parse(tanggalSelesai)) {
      if (tanggalMulai > tanggalSelesai) {
        $("#pesanError").html("Tanggal Mulai tidak Boleh Melebihi tanggal Selesai")
      } else {
        $("#judul").html("LAPORAN KEUNTUNGAN (" + tanggalMulai + " - " + tanggalSelesai + ")")
        dapatkanLaporan();
      }
    } else {
      $("#pesanError").html("Tanggal tidak valid")

    }

  }

  function dapatkanLaporan() {
    $("#keuntungan").html('<i class="fas fa-spinner fa-pulse"></i>')
    $("#pemasukan").html('<i class="fas fa-spinner fa-pulse"></i>')
    $("#tempatTabel").html('<i class="fas fa-spinner fa-pulse"></i> Memproses....')
    var tanggalMulai = formatTanggal($("#tanggalMulai").val())
    var tanggalSelesai = formatTanggal($("#tanggalSelesai").val())
    var totalKeuntungan = 0;
    var totalPemasukan = 0;
    var tabel = '<table class="table table-flush" id="tabelKeuntungan"><thead class="thead-light"><tr><th>Hapus</th><th>Pasien</th><th>Waktu</th><th>Tindakan</th><th>Biaya</th><th>Dokter</th><th>keuntungan</th></tr></thead><tbody>';
    var keuntungan = 0;
    $.ajax({
      url: '<?= base_url() ?>laporan_internal/dataLaporan',
      method: 'post',
      data: "target=tbl_penjualan&tanggalMulai=" + tanggalMulai + "&tanggalSelesai=" + tanggalSelesai,
      dataType: 'json',
      success: function(data) {
        console.log(data);
        for (let i = 0; i < data.length; i++) {
          tabel += '<tr>'

          tabel += '<td><div style="cursor:pointer;" title="hapus?" class="badge badge-danger" id="hapus' + data[i].id_transaksi_tindakan + '" onClick="tryHapus(' + data[i].id_transaksi_tindakan + ')"><i class="fa fa-times"></i></div></td>'
          tabel += '<td>' + data[i].namaPasien + '</td>'
          tabel += '<td>' + data[i].tanggal + '</td>'
          tabel += '<td>' + data[i].nama_tindakan + '</td>'
          tabel += '<td>' + formatRupiah(data[i].harga.toString()) + '</td>'
          tabel += '<td>' + data[i].namaUser + '</td>'
          if (data[i].rule != 1) {
            keuntungan = data[i].harga * 0.3
          } else {
            keuntungan = data[i].harga
          }
          tabel += '<td>' + formatRupiah(keuntungan.toString()) + '</td>'
          tabel += '</tr>'
          totalKeuntungan += parseInt(keuntungan)
          totalPemasukan += parseInt(data[i].harga)
        }
        tabel += '</tbody></table>'
        $("#tempatTabel").html(tabel)
        $("#keuntungan").html('Rp. ' + formatRupiah(totalKeuntungan.toString()))
        $("#pemasukan").html('Rp. ' + formatRupiah(totalKeuntungan.toString()))
        $('#tabelKeuntungan').DataTable({
          "pageLength": 10,
        });
      }
    });
  }

  function printLaporan() {
    $("#linkPrintLaporan").html('<i class="fas fa-spinner fa-pulse"></i> Memproses....')
    var tanggalMulai = formatTanggal($("#tanggalMulai").val())
    var tanggalSelesai = formatTanggal($("#tanggalSelesai").val())

    window.open("<?= base_url("laporan_internal/printLaporan?") ?>mulai=" + tanggalMulai + "&selesai=" + tanggalSelesai)

    $("#linkPrintLaporan").html('Print Laporan')
  }

  function tryHapus(id) {
    $("#hapus" + id).html('<i class="fas fa-spinner fa-pulse"></i>')
    $.ajax({
      url: '<?= base_url() ?>laporan_internal/dataByid',
      method: 'post',
      data: {
        target: "vw_transaksi",
        id: id,
        kondisi: "id_transaksi_tindakan"
      },
      dataType: 'json',
      success: function(data) {
        $("#idHapus").val(id)
        $("#teksHapus").html("yakin ingin menghapus pembayaran pasien <b>'" + data.namaPasien + "'</b> dengan tindakan <b>'" + data.nama_tindakan + "'</b> dengan biaya <b>'" + data.harga + "'</b> pada tanggal dan jam : <b>'" + data.tanggal + "'</b> ?")

        $("#hapus" + id).html('<i class="fa fa-times"></i>')
      }
    });
    $("#modalHapus").modal('show')
  }

  function hapus() {
    $("#hapus").html('<i class="fas fa-spinner fa-pulse"></i> Memproses..')
    var id = $("#idHapus").val()
    $.ajax({
      url: '<?= base_url() ?>laporan_internal/hapusData',
      method: 'post',
      data: {
        id: id
      },
      dataType: 'json',
      success: function(data) {
        $("#idHapus").val("")
        $("#teksHapus").html("")
        tampilkanLaporan()
        $("#modalHapus").modal('hide')
        $("#hapus").html('Hapus')
      }
    });
  }

  function formatTanggal(tanggal) {
    var now = new Date(tanggal);
    var day = ("0" + now.getDate()).slice(-2);
    var month = ("0" + (now.getMonth() + 1)).slice(-2);
    var today = now.getFullYear() + "%2f" + (month) + "%2f" + (day);
    return today
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