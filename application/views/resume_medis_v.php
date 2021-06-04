<style>
  .swal2-container {
    z-index: 3000;
  }
  .selectpicker{
    background-color: white!important;
  }

  .bootstrap-select>.dropdown-toggle.bs-placeholder, .bootstrap-select>.dropdown-toggle.bs-placeholder:active, .bootstrap-select>.dropdown-toggle.bs-placeholder:focus, .bootstrap-select>.dropdown-toggle.bs-placeholder:hover{
    color: white;
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
                  <li class="breadcrumb-item"><a href="#">Asesmen Medis Pasien</a></li>
                  <!-- <li class="breadcrumb-item active" aria-current="page">Default</li> -->
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a onclick="cetak()" class="btn btn-sm btn-neutral">Print Resume Medis</a>
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
                  <h4 class="text-uppercase ls-1 text-white py-3 mb-0">Resume Medis</h4>
                  <div class="row">
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4">
                      <select data-live-search-style="startsWith" onchange="ambil_data()" title="-Masukkan No Rekam Medis-" onchange="pencarian()" class="selectpicker form-control" id="kata_kunci" name="kata_kunci" data-live-search="true">
                  
                      </select>
                    </div>
                    <div class="col-md-4">
                    </div>
                  </div>
                </div>
            </div>
            <div class="card-body ">
              <div class="table-responsive py-4">
                  <table class="table table-flush" id="myTabel">
                      <thead class="thead-light">
                          <tr>
                              <th>Tanggal</th>
                              <th>Nama Dokter</th>
                              <th>Diagnosa</th>
                              <th>Terapi</th>
                              <th>Keterangan</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tfoot>
                          <tr>
                              <th>Tanggal</th>
                              <th>Nama Dokter</th>
                              <th>Diagnosa</th>
                              <th>Terapi</th>
                              <th>Keterangan</th>
                              <th>Action</th>
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

<div class="modal fade" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="modal-edit" aria-hidden="true">
  <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
    <div class="modal-content bg-gradient-success">
      <div class="modal-header">
        <h6 class="modal-title" id="modal-title-notification"></h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form role="form" class="form-danger">
          <div class="row">
              <div class="col-6">
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-credit-card"></i></span>
                    </div>
                    <input class="form-control" placeholder="No Rekam Medis" id="nrm_antri" type="text" readonly>
                    <input class="form-control" id="id_antri" type="hidden">
                  </div>
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                    </div>
                    <input class="form-control" placeholder="Nama Lengkap" id="nama_antri" type="text" readonly>
                  </div>
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-box-2"></i></span>
                    </div>
                    <input class="form-control" placeholder="No KTP" id="nik_antri" type="text" readonly>
                  </div>
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-pin-3"></i></span>
                    </div>
                    <input class="form-control" placeholder="Alamat" id="alamat_antri" type="text" readonly>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <h4 class="card-title text-white text-center mb-0">Anamnesa</h4>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-active-40"></i></span>
                    </div>
                    <input class="form-control form-control-lg" placeholder="Keluhan Utama" id="keluhan" type="text">
                  </div>
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-air-baloon"></i></span>
                    </div>
                    <input class="form-control" placeholder="Riwayat penyakit Sekarang" id="penyakit_sekarang" type="text">
                  </div>
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-app"></i></span>
                    </div>
                    <input class="form-control" placeholder="Riwayat Penyakit Dahulu" id="penyakit_dahulu" type="text">
                  </div>
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-bag-17"></i></span>
                    </div>
                    <input class="form-control" placeholder="Riwayat Alergi" id="riwayat_alergi" type="text">
                  </div>
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-book-bookmark"></i></span>
                    </div>
                    <input class="form-control" placeholder="Riwayat Operasi" id="riwayat_operasi" type="text">
                  </div>
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-books"></i></span>
                    </div>
                    <input class="form-control" placeholder="Riwayat Transfusi" id="riwayat_transfusi" type="text">
                  </div>
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-basket"></i></span>
                    </div>
                    <input class="form-control" placeholder="Riwayat Penggunaan Obat" id="riwayat_obat" type="text">
                  </div>
                </div>
              </div>
              <div class="col-12">
                <h4 class="card-title text-white text-center mb-0">Pemeriksaan Fisik</h4>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <select class="form-control" id="kesadaran_umum">
                    <option value="" selected>-Kesadaran Umum-</option>
                    <option value="baik" >Baik</option>
                    <option value="sedang">Sedang</option>
                    <option value="lemah">Lemah</option>
                    <option value="jelek">Jelek</option>
                  </select>
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <select class="form-control" id="kesadaran">
                    <option value="" selected>-Kesadaran-</option>
                    <option value="Composmentis">Composmentis</option>
                    <option value="Apatis">Apatis</option>
                    <option value="Somnolen">Somnolen</option>
                    <option value="Sopor">Sopor</option>
                    <option value="Koma">Koma</option>
                  </select>
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-basket"></i></span>
                    </div>
                    <input class="form-control" placeholder="Berat Badan (Kg)" id="bb" type="number">
                  </div>
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-basket"></i></span>
                    </div>
                    <input class="form-control" placeholder="GDA" id="gda" type="number">
                  </div>
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-basket"></i></span>
                    </div>
                    <input class="form-control" placeholder="Choles" id="choles" type="number">
                  </div>
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-basket"></i></span>
                    </div>
                    <input class="form-control" placeholder="AU" id="au" type="number">
                  </div>
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-box-2"></i></span>
                    </div>
                    <input class="form-control" placeholder="Tekanan Darah" id="tekanan_darah" type="text">
                  </div>
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-briefcase-24"></i></span>
                    </div>
                    <input class="form-control" placeholder="Nadi" id="nadi" type="text">
                  </div>
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-building"></i></span>
                    </div>
                    <input class="form-control" placeholder="Suhu" id="suhu" type="text">
                  </div>
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-button-pause"></i></span>
                    </div>
                    <input class="form-control" placeholder="RR" id="rr" type="text">
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-bullet-list-67"></i></span>
                    </div>
                    <input class="form-control form-control-lg" placeholder="Diagnosa" id="diagnosa" type="text">
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-caps-small"></i></span>
                    </div>
                    <input class="form-control form-control-lg" placeholder="Terapi" id="terapi" type="text">
                  </div>
                </div>
              </div>
              <div class="col-12">
                <h4 class="card-title text-white text-center mb-0">Penunjang</h4>
              </div>
              <div class="col-4">
                <p></p>
              </div>
              <div class="col-12">
                <!-- <h4 class="card-title text-white text-center mb-0">Lab</h4> -->
                <a href="#" class="btn btn-secondary btn-lg btn-block" role="button" aria-pressed="true" id="file_lab"></a>
                <!-- <div id="file_lab"></div> -->
                <div class="custom-file form_disable" id="hidden_lab">
                  <input type="file" class="custom-file-input" id="hasil_lab" accept="image/jpeg,image/jpg,application/pdf">
                  <label class="custom-file-label" for="hasil_lab">Choose file</label>
                </div>
              </div>
              <div class="col-4">
                <p></p>
              </div>
              <div class="col-12">
                <!-- <h4 class="card-title text-white text-center mb-0">Radiologi</h4> -->
                <a href="#" class="btn btn-secondary btn-lg btn-block" role="button" aria-pressed="true" id="file_radiologi"></a>
                <!-- <div id="file_radiologi"></div> -->
                <div class="custom-file form_disable" id="hidden_radiologi">
                  <input type="file" class="custom-file-input" id="hasil_radiologi" accept="image/jpeg,image/jpg,application/pdf">
                  <label class="custom-file-label" for="hasil_radiologi">Choose file</label>
                </div>
              </div>
              <div class="col-12">
                <p></p>
              </div>
              <div class="col-12">
                <!-- <h4 class="card-title text-white text-center mb-0">Catatan</h4> -->
                <a href="#" class="btn btn-secondary btn-lg btn-block" role="button" aria-pressed="true" id="file_catatan"></a>
                <!-- <div id="file_catatan"></div> -->
                <div class="custom-file form_disable" id="hidden_catatan">
                  <input type="file" class="custom-file-input" id="hasil_catatan" accept="image/jpeg,image/jpg,application/pdf">
                  <label class="custom-file-label" for="hasil_catatan">Choose file</label>
                </div>
              </div>
              <div class="col-12">
                <p></p>
              </div>
          </div>
          <div id="antrian_footer">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal-upload" tabindex="-1" role="dialog" aria-labelledby="modal-upload" aria-hidden="true">
  <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
    <div class="modal-content bg-gradient-danger">
      <div class="modal-header">
        <h6 class="modal-title" id="modal-title-notification">Upload Persetujuan atau Penolakan</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form role="form" class="form-danger">
          <div class="row">
              <div class="col-12">
                  <form>
                    <div class="custom-file mb-3">
                      <select class="form-control" id="jenis_pernyataan">
                        <option value="" selected>-Jenis Pernyataan-</option>
                        <option value="0" >Penolakan Tindakan</option>
                        <option value="1" >Persetujuan Tindakan</option>
                      </select>
                    </div>
                    <div class="custom-file mb-3">
                      <input type="file" class="custom-file-input" id="berkas" accept="image/jpeg,image/jpg,application/pdf">
                      <label class="custom-file-label" for="berkas"></label>
                    </div>
                </form>
              </div>
          </div>
          <div id="div_upload">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script>
    $(document).ready(function() {
      add_list();  
      // et_diagnosa();
      ambil_data();
        
    });

    function get_diagnosa() {
      $.ajax({
          type: 'POST',
          url: '<?= base_url() ?>resume_medis/get_pasien',
          dataType: 'json',
          data: 'nrm=' + $("#kata_kunci").val(),
          success: function(data) {
              console.log(data);
          }
      });
    }
    function ambil_data() {
        $('#myTabel').DataTable({
            destroy: true,
            "order": [[ 1, "asc" ]],
              "ajax": {
              "type": "POST",
                "url": "<?php echo site_url("resume_medis/get_pasien") ?>",
                "data": function(data) {
                    data.nrm = $("#kata_kunci").val();
                },
                "dataSrc": ""
            },
            "columns": [
                {
                    "data": "tanggal_antri"
                },
                {
                    "data": "nama_dokter"
                },
                {
                    "data": "diagnosa"
                },
                {
                    "data": "terapi"
                },
                {
                    "data": "tindakan",
                    "render": function(data, type, row) {
                        var html = '';
                        if(data!=null){
                          if(data==0){
                            var style = 'style="color:red"';
                            var title = 'Penolakan.pdf';
                          }else{
                            var style = 'style="color:green"';
                            var title = 'Persetujuan.pdf';
                          }
                          html += ' <a '+style+' href="<?= base_url() ?>document/pernyataan/'+row.berkas_tindakan+'" target="_blank">'+title+'</a>';
                        }
                      return html
                    }
                },
                {
                    "data": "id_diagnosa",
                    "render": function(data, type, row) {
                        var html = '';
                        html += '<div id="social-buttons-icon-component" class="tab-pane tab-example-result fade show active" role="tabpanel" aria-labelledby="social-buttons-icon-component-tab">';
                        html += '<div class="row">';
                        html += '<div class="col-md-3">';
                        html += '<button type="button" class="btn btn-vimeo btn-icon-only" onclick="tampil_modal('+data+','+row.id_antrian+')" title="Lihat">';
                        html += '<span class="btn-inner--icon"><i class="fas fa-search"></i></span>';
                        html += '</button>';
                        html += '</div>';
                        html += '<div class="col-md-3">';
                        html += '<button type="button" class="btn btn-pinterest btn-icon-only" onclick="tampil_modal_upload('+data+')" title="Upload Data">';
                        html += '<span class="btn-inner--icon"><i class="fas fa-upload"></i></span>';
                        html += '</button>';
                        html += '</div>';
                        html += '</div>';
                      return html
                    }
                }
            ]
        });
    }

    function disable_form(){
      document.getElementById("keluhan").disabled = true;
      document.getElementById("penyakit_sekarang").disabled = true;
      document.getElementById("penyakit_dahulu").disabled = true;
      document.getElementById("riwayat_alergi").disabled = true;
      document.getElementById("riwayat_operasi").disabled = true;
      document.getElementById("riwayat_transfusi").disabled = true;
      document.getElementById("riwayat_obat").disabled = true;
      document.getElementById("kesadaran_umum").disabled = true;
      document.getElementById("kesadaran").disabled = true;
      document.getElementById("bb").disabled = true;
      document.getElementById("gda").disabled = true;
      document.getElementById("choles").disabled = true;
      document.getElementById("au").disabled = true;
      document.getElementById("tekanan_darah").disabled = true;
      document.getElementById("nadi").disabled = true;
      document.getElementById("suhu").disabled = true;
      document.getElementById("rr").disabled = true;
      document.getElementById("diagnosa").disabled = true;
      document.getElementById("terapi").disabled = true;

      document.getElementById("hidden_lab").style.display = "none";
      document.getElementById("hidden_catatan").style.display = "none";
      document.getElementById("hidden_radiologi").style.display = "none";

      var tombol = '<button type="button" class="btn btn-block btn-default" onclick="enable_form()" >Ubah</button>';
      $("#antrian_footer").html(tombol);
      $("#modal-title-notification").html("Detail Asessmen");
    }

    function enable_form(){
      document.getElementById("keluhan").disabled = false;
      document.getElementById("penyakit_sekarang").disabled = false;
      document.getElementById("penyakit_dahulu").disabled = false;
      document.getElementById("riwayat_alergi").disabled = false;
      document.getElementById("riwayat_operasi").disabled = false;
      document.getElementById("riwayat_transfusi").disabled = false;
      document.getElementById("riwayat_obat").disabled = false;
      document.getElementById("kesadaran_umum").disabled = false;
      document.getElementById("kesadaran").disabled = false;
      document.getElementById("bb").disabled = false;
      document.getElementById("gda").disabled = false;
      document.getElementById("choles").disabled = false;
      document.getElementById("au").disabled = false;
      document.getElementById("tekanan_darah").disabled = false;
      document.getElementById("nadi").disabled = false;
      document.getElementById("suhu").disabled = false;
      document.getElementById("rr").disabled = false;
      document.getElementById("diagnosa").disabled = false;
      document.getElementById("terapi").disabled = false;

      document.getElementById("hidden_lab").style.display = "block";
      document.getElementById("hidden_catatan").style.display = "block";
      document.getElementById("hidden_radiologi").style.display = "block";

      var tombol = '<button type="button" class="btn btn-block btn-danger" id="ubah_button" onclick="ubah_asessmen()" ><div id="loader"> </div> Simpan</button>';
      $("#antrian_footer").html(tombol);
      $("#modal-title-notification").html("Edit Asessmen");
    }

    function tampil_modal(id_diagnosa,id_antrian){
      $.ajax({
          type: 'POST',
          url: '<?= base_url() ?>resume_medis/pencarian',
          data: 'id_antrian=' + id_antrian,
          dataType: 'json',
          success: function(data) {
              // console.log(data);
              $("#file_radiologi").html('');
              $("#file_catatan").html('');
              $("#file_lab").html('');
 
              document.getElementById("id_antri").value = data.id_antrian;
              document.getElementById("nrm_antri").value = data.kode;
              document.getElementById("nama_antri").value = data.nama;
              document.getElementById("nik_antri").value = data.nik;
              document.getElementById("alamat_antri").value = data.alamat;

              document.getElementById("keluhan").value = data.keluhan;
              document.getElementById("penyakit_sekarang").value = data.penyakit_sekarang;
              document.getElementById("penyakit_dahulu").value = data.penyakit_dahulu;
              document.getElementById("riwayat_alergi").value = data.riwayat_alergi;
              document.getElementById("riwayat_operasi").value = data.riwayat_operasi;
              document.getElementById("riwayat_transfusi").value = data.riwayat_transfusi;
              document.getElementById("riwayat_obat").value = data.riwayat_obat;
              document.getElementById("kesadaran_umum").value = data.kesadaran_umum;
              document.getElementById("kesadaran").value = data.kesadaran;
              document.getElementById("bb").value = data.bb;
              document.getElementById("gda").value = data.gda;
              document.getElementById("choles").value = data.choles;
              document.getElementById("au").value = data.au;
              document.getElementById("tekanan_darah").value = data.tekanan_darah;
              document.getElementById("nadi").value = data.nadi;
              document.getElementById("suhu").value = data.suhu;
              document.getElementById("rr").value = data.rr;
              document.getElementById("diagnosa").value = data.diagnosa;
              document.getElementById("terapi").value = data.terapi;

              if(data.hasil_lab!=null){
                var link = ' <a href="<?= base_url() ?>document/hasil_lab/'+data.hasil_lab+'" target="_blank"> Lihat Hasil Lab</a>';
                $("#file_lab").html(link);
              }

              if(data.hasil_catatan!=null){
                var link = ' <a href="<?= base_url() ?>document/catatan/'+data.hasil_catatan+'" target="_blank">Lihat Catatan</a>';
                $("#file_catatan").html(link);
              }

              if(data.hasil_radiologi!=null){
                var link = ' <a href="<?= base_url() ?>document/radiologi/'+data.hasil_radiologi+'" target="_blank">Lihat Hasil Radiologi</a>';
                $("#file_radiologi").html(link);
              }
              
              disable_form();
              $('#modal-edit').modal('show');
          }
      });
    }

    function tampil_modal_upload(id_diagnosa){
      document.getElementById("jenis_pernyataan").value = "";
      document.getElementById("berkas").value = "";

      var tombol = '<button type="button" onclick="pernyataan('+id_diagnosa+')" id="simpan_pernyataan" class="btn btn-block btn-info"><div id="loader_upload"> </div> Simpan</button>';
      $("#div_upload").html(tombol);

      $('#modal-upload').modal('show');
    }

    function ubah_asessmen() {
      // console.log(id);
      if(document.getElementById("keluhan").value == ""){
        document.getElementById("keluhan").focus();
      } else if(document.getElementById("tekanan_darah").value == ""){
        document.getElementById("tekanan_darah").focus();
      } else if(document.getElementById("nadi").value == ""){
        document.getElementById("nadi").focus();
      } else if(document.getElementById("suhu").value == ""){
        document.getElementById("suhu").focus();
      } else if(document.getElementById("rr").value == ""){
        document.getElementById("rr").focus();
      } else if(document.getElementById("diagnosa").value == ""){
        document.getElementById("diagnosa").focus();
      } else if(document.getElementById("terapi").value == ""){
        document.getElementById("terapi").focus();
      } else{
        var form_data = new FormData();
        form_data.append('keluhan', document.getElementById("keluhan").value);
        form_data.append('penyakit_sekarang', document.getElementById("penyakit_sekarang").value);
        form_data.append('penyakit_dahulu', document.getElementById("penyakit_dahulu").value);
        form_data.append('riwayat_alergi', document.getElementById("riwayat_alergi").value);
        form_data.append('riwayat_operasi', document.getElementById("riwayat_operasi").value);
        form_data.append('riwayat_transfusi', document.getElementById("riwayat_transfusi").value);
        form_data.append('riwayat_obat', document.getElementById("riwayat_obat").value);
        form_data.append('kesadaran_umum', document.getElementById("kesadaran_umum").value);
        form_data.append('kesadaran', document.getElementById("kesadaran").value);
        form_data.append('bb', document.getElementById("bb").value);
        form_data.append('gda', document.getElementById("gda").value);
        form_data.append('choles', document.getElementById("choles").value);
        form_data.append('au', document.getElementById("au").value);
        form_data.append('tekanan_darah', document.getElementById("tekanan_darah").value);
        form_data.append('nadi', document.getElementById("nadi").value);
        form_data.append('suhu', document.getElementById("suhu").value);
        form_data.append('rr', document.getElementById("rr").value);
        form_data.append('diagnosa', document.getElementById("diagnosa").value);
        form_data.append('terapi', document.getElementById("terapi").value);

        form_data.append('kode', document.getElementById("nrm_antri").value);
        form_data.append('id_antrian', document.getElementById("id_antri").value);

        $.ajax({
          type: 'POST',
          data: form_data,
          url: '<?= base_url() ?>pendaftaran/tambah_asessmen',
          processData:false,
          contentType:false,
          cache:false,
          dataType: 'json',
          beforeSend: function () {
            $('#ubah_button').attr('disabled', true);
            $('#loader').html('');
            addSpinner($('#loader'));
          },
          success: function(data) {
            // console.log(data);

            if(document.getElementById("hasil_lab").value!=""){berkas("#hasil_lab",document.getElementById("id_antri").value,document.getElementById("nrm_antri").value,"hasil_lab");}
            if(document.getElementById("hasil_radiologi").value!=""){berkas("#hasil_radiologi",document.getElementById("id_antri").value,document.getElementById("nrm_antri").value,'radiologi');}
            if(document.getElementById("hasil_catatan").value!=""){berkas("#hasil_catatan",document.getElementById("id_antri").value,document.getElementById("nrm_antri").value,'catatan');}
          
            $('#modal-edit').modal('hide');

            $('#ubah_button').attr('disabled', false);
            removeSpinner($('#loader'), function () {
              $('#loader').html('');
            });
            disable_form();
            Swal.fire({
              position: 'center',
              icon: 'success',
              title: 'Data Berhasil Diupload',
              showConfirmButton: false,
              timer: 2500
            });
          }
        });
      }
  }

  function berkas(id,antrian,kode,path) {
      var format = $(id).prop('files')[0].type;
      if (format.includes('pdf') || format.includes('jpg') || format.includes('jpeg')) {
        var form_data = new FormData();
        form_data.append('id_antrian', antrian);
        form_data.append('kode', kode);
        form_data.append('path', path);
        form_data.append('berkas', $(id).prop('files')[0]);

        // console.log(antrian);
        $.ajax({
          type: 'POST',
          data: form_data,
          url: '<?= base_url() ?>pendaftaran/tambah_berkas',
          processData:false,
          contentType:false,
          cache:false,
          dataType: 'json',
          success: function(data) {
            // console.log(data);
          }
        });
      }
  }

  function pernyataan(id) {
      // console.log(id);
      if(document.getElementById("jenis_pernyataan").value == ""){
        document.getElementById("jenis_pernyataan").focus();
      } else if(document.getElementById("berkas").value == ""){
        document.getElementById("berkas").focus();
      } else{
        var format = $('#berkas').prop('files')[0].type;
        if (format.includes('pdf') || format.includes('jpg') || format.includes('jpeg')) {
          var form_data = new FormData();
          form_data.append('id', id);
          form_data.append('jenis', document.getElementById("jenis_pernyataan").value);
          form_data.append('berkas', $('#berkas').prop('files')[0]);

          $.ajax({
            type: 'POST',
            data: form_data,
            url: '<?= base_url() ?>resume_medis/upload_pernyataan',
            processData:false,
            contentType:false,
            cache:false,
            dataType: 'json',
            beforeSend: function () {
              $('#simpan_pernyataan').attr('disabled', true);
              $('#loader_upload').html('');
              addSpinner($('#loader_upload'));
            },
            success: function(data) {
              // alert(data);
              // console.log(data);
              $('#simpan_pernyataan').attr('disabled', false);
              removeSpinner($('#loader_upload'), function () {
                $('#loader_upload').html('');
              });
              ambil_data();
              $('#modal-upload').modal('hide');
              Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Data Berhasil Diupload',
                showConfirmButton: false,
                timer: 2500
              });
            }
          });
        }else{
           Swal.fire({
              position: 'center',
              icon: 'error',
              title: 'Type file harus PDF atau JPEG atau JPG',
              showConfirmButton: false,
              timer: 2500
            });
        }
      }
  }

  function cetak(){
    if($("#kata_kunci").val()!=""){
      window.open(
        '<?= site_url('tindakan/cetak_asessmen/') ?>'+$("#kata_kunci").val(),
        '_blank'
      );
    }
  }

  function add_list() {
      $.ajax({
          type: 'POST',
          url: '<?= base_url() ?>resume_medis/add_list',
          dataType: 'json',
          success: function(data) {
            // console.log(data);
            var html = '';
            for (var i = 0; i < data.length; i++) {
                html += "<option value='" + data[i].id + "'>" + data[i].kode + '</option>'; 
            }
            $("#kata_kunci").html(html);
            $('#kata_kunci').selectpicker('refresh');
          
          }
      });
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