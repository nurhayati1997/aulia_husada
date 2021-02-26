<div class="content">
  <!-- Header -->
  <!-- Header -->
  <div class="header bg-primary pb-6">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-7">
            <h6 class="h2 text-white d-inline-block mb-0">Aulia Husada</h6>
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
              <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="#">Data User</a></li>
                <!-- <li class="breadcrumb-item active" aria-current="page">Default</li> -->
              </ol>
            </nav>
          </div>
          <!-- <div class="col-lg-6 col-5 text-right">
            <a href="#" class="btn btn-sm btn-neutral">New</a>
            <a href="#" class="btn btn-sm btn-neutral">Filters</a>
          </div> -->
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
          <div class="card-header bg-gradient-success">
            <div class="pt-4 text-center">
              <h4 class="text-uppercase ls-1 text-white py-3 mb-0">Data User</h4>
              <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-4">
                  <button type="button" class="btn btn-block btn-primary" onClick="tryTambah()">Tambah</button>
                  <div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                    <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
                      <div class="modal-content">
                        <div class="modal-body p-0">
                          <div class="card bg-secondary border-0 mb-0">
                            <div class="card-header bg-success pb-1">
                              <div class="text-muted text-center mt-2 mb-3">
                                <span class="text-muted text-white">Form Master Data User </span>
                              </div>
                            </div>
                            <div class="card-body px-lg-5 py-lg-5">
                              <form role="form">
                                <div class="form-group mb-3">
                                  <div class="input-group input-group-merge input-group-alternative">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="ni ni-badge"></i></span>
                                    </div>
                                    <input class="form-control" id="nama" placeholder="Nama" type="text">
                                  </div>
                                </div>
                                <div class="form-group mb-3">
                                  <select class="form-control">
                                    <option value="">-Pilih Level-</option>
                                    <option value="0">Owner</option>
                                    <option value="1">Admin</option>
                                    <option value="2">Dokter</option>
                                  </select>
                                </div>
                                <div class="form-group mb-3">
                                  <div class="input-group input-group-merge input-group-alternative">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                    </div>
                                    <input class="form-control" id="namaTindakan" placeholder="email" type="email">
                                  </div>
                                </div>
                                <div class="form-group mb-3">
                                  <div class="input-group input-group-merge input-group-alternative">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                    </div>
                                    <input class="form-control" id="passwordLama" placeholder="Pasword Lama" type="password">
                                  </div>
                                </div>
                                <div class="form-group mb-3">
                                  <div class="input-group input-group-merge input-group-alternative">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="ni ni-paper-diploma"></i></span>
                                    </div>
                                    <input class="form-control" id="passwordBaru" placeholder="Pasword Baru" type="password">
                                  </div>
                                </div>
                                <div class="text-center">
                                  <button type="button" onClick="tambah()" id="tombolTambah" class="btn btn-success my-4">Tambah</button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                </div>
              </div>
            </div>
          </div>
          <div class="card-body ">
            <div class="table-responsive py-4">
              <table class="table table-flush" id="datatable-basic">
                <thead class="thead-light">
                  <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Pasword</th>
                  </tr>
                </thead>
                <tbody id="tempatTabel">
                </tbody>
              </table>
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
              Hapus Data Master</span>
            <span class="fw-light">
              Barang
            </span>
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p id="teksHapus"></p>
          <input type="hidden" id="id_hapus" name="id_hapus" />
        </div>
        <div class="modal-footer no-bd">
          <button type="button" id="hapus" onClick="hapus()" class="btn btn-primary">Hapus</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
        </div>
      </div>
    </div>
  </div>

</div>

<script>
  tampilkan()

  function tampilkan() {
    $("#tempatTabel").html('<i class="fas fa-spinner fa-pulse"></i> Memuat...')
    var baris = ''
    $.ajax({
      url: '<?= base_url() ?>master/tampil',
      method: 'post',
      dataType: 'json',
      success: function(data) {
        for (let i = 0; i < data.length; i++) {
          baris += '<tr>'
          baris += '<td>' + data[i].id_tindakan + '</td>'
          baris += '<td>' + data[i].nama_tindakan + '</td>'
          baris += '<td>' + formatRupiah(data[i].harga.toString()) + '</td>'
          baris += '<td><a href="#" title="hapus?" class="badge badge-danger" id="hapus' + data[i].id_tindakan + '" onClick="tryHapus(' + data[i].id_tindakan + ')"><i class="fa fa-times"></i></a>'
          baris += '</div></td></tr>'
        }
        $("#tempatTabel").html(baris);
      }
    });
  }

  function tryTambah() {
    $("#nama_jasa").val("")
    $("#harga_jasa").val("")
    $("#modalTambah").modal('show')
    $('#pesan_error_tambah').html("")
  }

  function tambah() {
    $("#tombolTambah").html('<i class="fas fa-spinner fa-pulse"></i> Memproses..')
    var nama = $("#namaTindakan").val()
    var harga = $("#hargaTindakan").val()
    $.ajax({
      url: '<?= base_url() ?>master/tambah',
      method: 'post',
      data: "target=tbl_tindakan&nama=" + nama + "&harga=" + harga,
      dataType: 'json',
      success: function(data) {
        if (data == "") {
          $("#modalTambah").modal('hide')
          tampilkan()
          $("#namaTindakan").val("")
          $("#hargaTindakan").val("")
        } else {
          $('#pesan_error_tambah').html(data)
        }
        $("#tombolTambah").html('Tambah')
      }
    });
  }

  function tryHapus(id) {
    $("#hapus" + id).html('<i class="fas fa-spinner fa-pulse"></i>')
    $.ajax({
      url: '<?= base_url() ?>master/dataById',
      method: 'post',
      data: "target=tbl_master&id=" + id,
      dataType: 'json',
      success: function(data) {
        $("#id_hapus").val(id)
        $("#teksHapus").html("apakah anda yakin ingin menghapus Jasa dengan nama '" + data[0].nama_tindakan + "' ?")

        $("#hapus" + id).html('<i class="fa fa-times"></i>')
      }
    });
    $("#modalHapus").modal('show')
  }

  function hapus() {
    $("#hapus").html('<i class="fas fa-spinner fa-pulse"></i> Memproses..')
    var id = $("#id_hapus").val()
    $.ajax({
      url: '<?= base_url() ?>master/hapus',
      method: 'post',
      data: "target=tbl_tindakan&id=" + id,
      dataType: 'json',
      success: function(data) {
        $("#id_hapus").val("")
        $("#teksHapus").html("")
        tampilkan()
        $("#modalHapus").modal('hide')
        $("#hapus").html('Hapus')
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