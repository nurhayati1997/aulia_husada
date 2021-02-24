<div class="content">
  <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Search form -->
        <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
          <div class="form-group mb-0">
            <div class="input-group input-group-alternative input-group-merge">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-search"></i></span>
              </div>
              <input class="form-control" placeholder="Search" type="text">
            </div>
          </div>
          <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </form>
        <!-- Navbar links -->
        <ul class="navbar-nav align-items-center  ml-md-auto ">
          <li class="nav-item d-xl-none">
            <!-- Sidenav toggler -->
            <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
              <div class="sidenav-toggler-inner">
                <i class="sidenav-toggler-line"></i>
                <i class="sidenav-toggler-line"></i>
                <i class="sidenav-toggler-line"></i>
              </div>
            </div>
          </li>
          <li class="nav-item d-sm-none">
            <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
              <i class="ni ni-zoom-split-in"></i>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="ni ni-bell-55"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-xl  dropdown-menu-right  py-0 overflow-hidden">
              <!-- Dropdown header -->
              <div class="px-3 py-3">
                <h6 class="text-sm text-muted m-0">You have <strong class="text-primary">13</strong> notifications.</h6>
              </div>
              <!-- List group -->
              <div class="list-group list-group-flush">
                <a href="#!" class="list-group-item list-group-item-action">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <!-- Avatar -->
                      <img alt="Image placeholder" src="<?= base_url() ?>assets_admin/img/theme/team-1.jpg" class="avatar rounded-circle">
                    </div>
                    <div class="col ml--2">
                      <div class="d-flex justify-content-between align-items-center">
                        <!-- <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div> -->
                        <div class="text-right text-muted">
                          <small>2 hrs ago</small>
                        </div>
                      </div>
                      <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                    </div>
                  </div>
                </a>
                <a href="#!" class="list-group-item list-group-item-action">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <!-- Avatar -->
                      <img alt="Image placeholder" src="<?= base_url() ?>assets_admin/img/theme/team-2.jpg" class="avatar rounded-circle">
                    </div>
                    <div class="col ml--2">
                      <div class="d-flex justify-content-between align-items-center">
                        <!-- <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div> -->
                        <div class="text-right text-muted">
                          <small>3 hrs ago</small>
                        </div>
                      </div>
                      <p class="text-sm mb-0">A new issue has been reported for Argon.</p>
                    </div>
                  </div>
                </a>
                <a href="#!" class="list-group-item list-group-item-action">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <!-- Avatar -->
                      <img alt="Image placeholder" src="<?= base_url() ?>assets_admin/img/theme/team-3.jpg" class="avatar rounded-circle">
                    </div>
                    <div class="col ml--2">
                      <div class="d-flex justify-content-between align-items-center">
                        <!-- <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div> -->
                        <div class="text-right text-muted">
                          <small>5 hrs ago</small>
                        </div>
                      </div>
                      <p class="text-sm mb-0">Your posts have been liked a lot.</p>
                    </div>
                  </div>
                </a>
                <a href="#!" class="list-group-item list-group-item-action">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <!-- Avatar -->
                      <img alt="Image placeholder" src="<?= base_url() ?>assets_admin/img/theme/team-4.jpg" class="avatar rounded-circle">
                    </div>
                    <div class="col ml--2">
                      <div class="d-flex justify-content-between align-items-center">
                        <!-- <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div> -->
                        <div class="text-right text-muted">
                          <small>2 hrs ago</small>
                        </div>
                      </div>
                      <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                    </div>
                  </div>
                </a>
                <a href="#!" class="list-group-item list-group-item-action">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <!-- Avatar -->
                      <img alt="Image placeholder" src="<?= base_url() ?>assets_admin/img/theme/team-5.jpg" class="avatar rounded-circle">
                    </div>
                    <div class="col ml--2">
                      <div class="d-flex justify-content-between align-items-center">
                        <!-- <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div> -->
                        <div class="text-right text-muted">
                          <small>3 hrs ago</small>
                        </div>
                      </div>
                      <p class="text-sm mb-0">A new issue has been reported for Argon.</p>
                    </div>
                  </div>
                </a>
              </div>
              <!-- View all -->
              <a href="#!" class="dropdown-item text-center text-primary font-weight-bold py-3">View all</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="ni ni-ungroup"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-dark bg-default  dropdown-menu-right ">
              <div class="row shortcuts px-4">
                <a href="#!" class="col-4 shortcut-item">
                  <span class="shortcut-media avatar rounded-circle bg-gradient-red">
                    <i class="ni ni-calendar-grid-58"></i>
                  </span>
                  <small>Calendar</small>
                </a>
                <a href="#!" class="col-4 shortcut-item">
                  <span class="shortcut-media avatar rounded-circle bg-gradient-orange">
                    <i class="ni ni-email-83"></i>
                  </span>
                  <small>Email</small>
                </a>
                <a href="#!" class="col-4 shortcut-item">
                  <span class="shortcut-media avatar rounded-circle bg-gradient-info">
                    <i class="ni ni-credit-card"></i>
                  </span>
                  <small>Payments</small>
                </a>
                <a href="#!" class="col-4 shortcut-item">
                  <span class="shortcut-media avatar rounded-circle bg-gradient-green">
                    <i class="ni ni-books"></i>
                  </span>
                  <small>Reports</small>
                </a>
                <a href="#!" class="col-4 shortcut-item">
                  <span class="shortcut-media avatar rounded-circle bg-gradient-purple">
                    <i class="ni ni-pin-3"></i>
                  </span>
                  <small>Maps</small>
                </a>
                <a href="#!" class="col-4 shortcut-item">
                  <span class="shortcut-media avatar rounded-circle bg-gradient-yellow">
                    <i class="ni ni-basket"></i>
                  </span>
                  <small>Shop</small>
                </a>
              </div>
            </div>
          </li>
        </ul>
        <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <img alt="Image placeholder" src="<?= base_url() ?>assets_admin/img/theme/team-4.jpg">
                </span>
                <div class="media-body  ml-2  d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold">Hello Admin</span>
                </div>
              </div>
            </a>
            <div class="dropdown-menu  dropdown-menu-right ">
              <div class="dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome!</h6>
              </div>
              <a href="#!" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>My profile</span>
              </a>
              <a href="#!" class="dropdown-item">
                <i class="ni ni-settings-gear-65"></i>
                <span>Settings</span>
              </a>
              <a href="#!" class="dropdown-item">
                <i class="ni ni-calendar-grid-58"></i>
                <span>Activity</span>
              </a>
              <a href="#!" class="dropdown-item">
                <i class="ni ni-support-16"></i>
                <span>Support</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#!" class="dropdown-item">
                <i class="ni ni-user-run"></i>
                <span>Logout</span>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
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