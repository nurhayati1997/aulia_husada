<style>
/* The spinner */

@keyframes spinner {
  to {transform: rotate(360deg);}
}

.spinner,
.spinner:before {
  width: 20px;
  height: 20px;
  box-sizing: border-box;
}

.spinner:before {
  content: '';
  display: block;
  border-radius: 50%;
  border: 2px solid #ccc;
  border-top-color: #333;
  animation: spinner .6s linear infinite;
}

.spinner-absolute {
  position: absolute;
  top: 50%;
  left: 50%;
  margin-top: -10px;
  margin-left: -10px;
}

/* Animations */

.spinner-add,
.spinner-remove {
  animation-fill-mode: both;
  animation-duration: .4s;
}

.spinner-add {
  animation-name: spinner-add;
}

@keyframes spinner-add {
  from {transform: scale(0);}
  to {transform: scale(1);}
}

.spinner-remove {
  animation-name: spinner-remove;
}

@keyframes spinner-remove {
  to {transform: scale(0);}
}

</style>
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
                          <input class="form-control datepicker" onchange="ambil_data()" placeholder="Tanggal Periksa" id="tgl" type="text" autocomplete="off">
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
                              <th></th>
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
                              <th></th>
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

<!-- Pasien Baru -->
<div class="modal fade" id="modal-notification" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
  <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
    <div class="modal-content bg-gradient-danger">
      <div class="modal-header">
        <h6 class="modal-title" id="modal-title-notification">Identitas Pasien</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form role="form" class="form-danger" autocomplete="off">
          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <div class="input-group input-group-alternative mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-credit-card"></i></span>
                  </div>
                  <input class="form-control" placeholder="No Rekam Medis" id="nrm" readonly type="text">
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <div class="input-group input-group-alternative mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-box-2"></i></span>
                  </div>
                  <input class="form-control" placeholder="No KTP"  id="nik" type="number">
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <div class="input-group input-group-alternative mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                  </div>
                  <input class="form-control" placeholder="Nama Lengkap"  id="nama" type="text">
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <select class="form-control"  id="kecamatan">
                  
                </select>
              </div>
            </div>
              <div class="col-6">
              <div class="form-group">
                <div class="input-group input-group-alternative mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                  </div>
                  <input class="form-control" placeholder="Nama Orang Tua"  id="ortu" type="text">
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <div class="input-group input-group-alternative mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-pin-3"></i></span>
                  </div>
                  <input class="form-control" placeholder="Alamat" id="alamat"  type="text">
                </div>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <select class="form-control"  id="jk">
                  <option value="">-Pilih Jenis Kelamin-</option>
                  <option value="0">laki-Laki</option>
                  <option value="1">Perempuan</option>
                </select>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <select class="form-control"  id="agama">
                  <option value="">-Pilih Agama-</option>
                  <option value="0">Islam</option>
                  <option value="1">Kristen</option>
                  <option value="2">Hindu</option>
                  <option value="3">Budha</option>
                  <option value="4">Konghucu</option>
                </select>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <select class="form-control"  id="status">
                  <option value="">-Pilih Status-</option>
                  <option value="0">Belum Menikah</option>
                  <option value="1">Menikah</option>
                </select>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <div class="input-group input-group-alternative mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                  </div>
                  <input class="form-control datepicker" id="ttl"  placeholder="Tanggal lahir" type="text">
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <div class="input-group input-group-alternative">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                  </div>
                  <input class="form-control" placeholder="Pekerjaan"  id="pekerjaan" type="text">
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <div class="input-group input-group-alternative">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                  </div>
                  <input class="form-control" placeholder="Pendidikan"  id="pendd" type="text">
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <div class="input-group input-group-alternative">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                  </div>
                  <input class="form-control" placeholder="No Hp"  id="telp" type="number">
                </div>
              </div>
            </div>
          </div>
          <div id="button_place">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Close</button> -->
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
          $("#kecamatan").html(html);
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

function ubah(id){
  $.ajax({
      type: 'POST',
      url: '<?= base_url() ?>pasien/get_data_pasien',
      data: 'id=' + id,
      dataType: 'json',
      success: function(data) {
        document.getElementById('nrm').value = data.kode;
        document.getElementById('nik').value = data.nik;
        document.getElementById('nama').value = data.nama;
        document.getElementById('kecamatan').value = data.kecamatan;
        document.getElementById('alamat').value = data.alamat;
        document.getElementById('jk').value = data.jenis_kelamin;
        document.getElementById('agama').value = data.agama;
        document.getElementById('status').value = data.status;
        document.getElementById('ttl').value = data.ttl;
        document.getElementById('pekerjaan').value = data.pekerjaan;
        document.getElementById('pendd').value = data.pendidikan;
        document.getElementById('telp').value = data.nohp;
        document.getElementById('ortu').value = data.ortu;
        $("#button_place").html('<button id="simpan_button" type="button" class="btn btn-block btn-info" onclick="tambah_baru('+data.id+')"> <div id="loader"> </div> Ubah</button>');
        $('#modal-notification').modal('show');
        
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
            },
            {
                "data": "id_pasien",
                "render": function(data, type, row) {
                  return '<div style="cursor:pointer;" title="edit?" class="badge badge-info" onClick="ubah(' + data + ')"><i class="fa fa-edit"></i></div>'
                }
            }
        ]
    });
}
function tambah_baru(id) {
  if (document.getElementById('nama').value == "") {
      document.getElementById('nama').focus();
  } else if(document.getElementById('kec').value == "") {
          document.getElementById('kec').focus();
  } else {
      $.ajax({
          type: 'POST',
          data: 'nrm=' + document.getElementById("nrm").value + '&nik=' + document.getElementById('nik').value
          + '&nama=' +  document.getElementById('nama').value + '&kec=' +  document.getElementById('kecamatan').value
          + '&alamat=' +  document.getElementById('alamat').value + '&jk=' +  document.getElementById('jk').value
          + '&agama=' +  document.getElementById('agama').value + '&status=' +  document.getElementById('status').value
          + '&ttl=' +  document.getElementById('ttl').value + '&pekerjaan=' +  document.getElementById('pekerjaan').value
          + '&pendd=' +  document.getElementById('pendd').value + '&telp=' +  document.getElementById('telp').value
          + '&ortu=' +  document.getElementById('ortu').value + '&id=' +  id,
          url: '<?= base_url() ?>pasien/ubah_data',
          dataType: 'json',
          beforeSend: function () {
            $('#simpan_button').attr('disabled', true);
            $('#loader').html('');
            addSpinner($('#loader'));
          },
          success: function(data) {
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Data Berhasil Diubah',
                showConfirmButton: false,
                timer: 1500
            });
            $('#simpan_button').attr('disabled', false);
            removeSpinner($('#loader'), function () {
              $('#loader').html('');
            });
            ambil_data();
            $('#modal-notification').modal('hide');
          }
      });
  }
}

function addSpinner(el, static_pos)
{
  var spinner = el.children('.spinner');
  if (spinner.length && !spinner.hasClass('spinner-remove')) return null;
  !spinner.length && (spinner = $('<div class="spinner' + (static_pos ? '' : ' spinner-absolute') + '"/>').appendTo(el));
  animateSpinner(spinner, 'add');
}

function removeSpinner(el, complete)
{
  var spinner = el.children('.spinner');
  spinner.length && animateSpinner(spinner, 'remove', complete);
}

function animateSpinner(el, animation, complete)
{
  if (el.data('animating')) {
    el.removeClass(el.data('animating')).data('animating', null);
    el.data('animationTimeout') && clearTimeout(el.data('animationTimeout'));
  }
  el.addClass('spinner-' + animation).data('animating', 'spinner-' + animation);
  el.data('animationTimeout', setTimeout(function() { animation == 'remove' && el.remove(); complete && complete(); }, parseFloat(el.css('animation-duration')) * 1000));
}
</script>
