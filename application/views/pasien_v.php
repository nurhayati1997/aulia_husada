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
                  <li class="breadcrumb-item"><a href="#">Indeks Pasien</a></li>
                  <!-- <li class="breadcrumb-item active" aria-current="page">Default</li> -->
                </ol>
              </nav>
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
            <div class="card-header bg-gradient-success">
                <div class="pt-4 text-center">
                  <h4 class="text-uppercase ls-1 text-white py-3 mb-0">Data Pasien</h4>
                  <div class="row">
                    <div class="col-md-3">
                      <div class="form-group">
                        <div class="input-group input-group-alternative mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                          </div>
                          <input class="form-control datepicker" onchange="ambil_data()" placeholder="Tanggal Periksa" id="tgl" type="text">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <select class="form-control" id="dokter" onchange="ambil_data()">
                          
                        </select>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <select class="form-control" id="kec" onchange="ambil_data()">
                          
                        </select>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <select class="form-control" id="diagnosa" onchange="ambil_data()">
                          
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="card-body ">
              <div class="table-responsive py-4">
                  <table class="table table-flush" id="datatable-basic">
                      <thead class="thead-light">
                          <tr>
                              <th>Nama</th>
                              <th>No Rekam Medik</th>
                              <th>NIK</th>
                              <th>Alamat</th>
                              <th>Diagnosa</th>
                              <th>Terapi</th>
                          </tr>
                      </thead>
                      <tfoot>
                          <tr>
                              <th>Nama</th>
                              <th>No Rekam Medik</th>
                              <th>NIK</th>
                              <th>Alamat</th>
                              <th>Diagnosa</th>
                              <th>Terapi</th>
                          </tr>
                      </tfoot>
                      <tbody>
                          
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
    $(document).ready(function() {
        get_dokter();
        get_kec();
        get_diagnosa();
        ambil_data();
    });

    function get_kec() {
      $.ajax({
          type: 'POST',
          url: '<?= base_url() ?>pendaftaran/get_kecamatan',
          dataType: 'json',
          success: function(data) {
              var html = '<option value="">-Pilih Kecamatan-</option>';
              for (var i = 0; i < data.length; i++) {
                  html += '<option value="' + data[i].ID + '">' + data[i].KECAMATAN + '</option>';
              }
              $("#kec").html(html);
          }
      });
    }

    function get_diagnosa() {
      $.ajax({
          type: 'POST',
          url: '<?= base_url() ?>pasien/get_diagnosa',
          dataType: 'json',
          success: function(data) {
              var html = '<option value="">-Pilih Diagnosa-</option>';
              for (var i = 0; i < data.length; i++) {
                  html += '<option value="' + data[i].diagnosa + '">' + data[i].diagnosa + '</option>';
              }
              $("#diagnosa").html(html);
          }
      });
    }

    function get_dokter() {
      $.ajax({
          type: 'POST',
          url: '<?= base_url() ?>pendaftaran/get_dokter',
          dataType: 'json',
          success: function(data) {
              var html = '<option value="">-Pilih Dokter-</option>';
              for (var i = 0; i < data.length; i++) {
                  html += '<option value="' + data[i].id_user + '">' + data[i].nama + ' | ' +  data[i].jabatan  + '</option>';
              }
              $("#dokter").html(html);
          }
      });
    }

    function ambil_data() {
        $('#datatable-basic').DataTable({
            destroy: true,
            "order": [[ 1, "asc" ]],
              "ajax": {
              "type": "POST",
                "url": "<?php echo site_url("pasien/get_pasien") ?>",
                "data": function(data) {
                    data.tgl = $("#tgl").val();
                    data.dokter = $("#dokter").val();
                    data.kec = $("#kec").val();
                    data.diagnosa = $("#diagnosa").val();
                },
                "dataSrc": ""
            },
            "columns": [
                {
                    "data": "nama"
                },
                {
                    "data": "kode"
                },
                {
                    "data": "nik"
                },
                {
                    "data": "alamat",
                    "render": function(data, type, row) {
                      return data +", "+ row.nama_kecamatan
                    }
                },
                {
                    "data": "diagnosa"
                },
                {
                    "data": "terapi"
                }
            ]
        });
    }
</script>
