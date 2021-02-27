<style>
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
                  <li class="breadcrumb-item"><a href="#">Form Tindakan Medis</a></li>
                  <!-- <li class="breadcrumb-item active" aria-current="page">Default</li> -->
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a onclick="reset_form()" class="btn btn-sm btn-neutral">Reset</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
  <!-- Dark table -->
  <div class="container-fluid mt--6">
    <div class="row card-wrapper">
        <div class="card">
          <div class="card bg-gradient-info">
            <div class="card-header bg-transparent">
                <h4 class="card-title text-white mb-0">Form Tindakan Medis </h3>
            </div>
            <!-- Card body -->
            <div class="card-body">
              <div class="mt-1">
                <form role="form" class="form-danger">
                  <div class="row">
                      <div class="col-12">
                        <h4 class="card-title text-white mb-0">Saya Yang bertanda Tangan Dibawah Ini :</h4>
                      </div>
                      <div class="col-6">
                        <div class="form-group">
                          <div class="input-group input-group-alternative mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                            </div>
                            <input class="form-control" placeholder="Nama Lengkap" id="nama_1" type="text">
                          </div>
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="form-group">
                          <div class="input-group input-group-alternative mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="ni ni-pin-3"></i></span>
                            </div>
                            <input class="form-control" placeholder="Alamat" id="alamat_1" type="text">
                          </div>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="form-group">
                          <div class="input-group input-group-alternative mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                            </div>
                            <input class="form-control datepicker" placeholder="Tanggal lahir" id="ttl_1" type="text">
                          </div>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="form-group">
                          <select class="form-control" id="jk_1">
                            <option value="">-Pilih Jenis Kelamin-</option>
                            <option value="0">Laki-Laki</option>
                            <option value="1">Perempuan</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="form-group">
                          <div class="input-group input-group-alternative mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="ni ni-box-2"></i></span>
                            </div>
                            <input class="form-control" placeholder="No KTP" id="nik_1" type="number">
                          </div>
                        </div>
                      </div>
                      <div class="col-12">
                        <h4 class="card-title text-white mb-0">Dengan Ini Menyatakan dengan sesungguhnya telah memberikan :</h4>
                      </div>
                      <div class="col-12">
                        <div class="form-group">
                          <select class="form-control" id="tindakan">
                            <option value="">-Pilih Tindakan-</option>
                            <option value="PERSETUJUAN">PERSETUJUAN</option>
                            <option value="PENOLAKAN">PENOLAKAN</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-12">
                        <h4 class="card-title text-white mb-0">Untuk dilakukan tindakan medis berupa :</h4>
                      </div>
                      <div class="col-3">
                        <div class="form-group">
                          <select class="form-control" id="relasi">
                            <option value="">-Pilih Terhadap-</option>
                            <option value="diri saya sendiri">diri saya sendiri</option>
                            <option value="Istri">Istri</option>
                            <option value="Suami">Suami</option>
                            <option value="Anak">Anak</option>
                            <option value="Ayah">Ayah</option>
                            <option value="Ibu">Ibu</option>
                            <option value="Saudara">Saudara</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="form-group">
                          <div class="input-group input-group-alternative mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="ni ni-air-baloon"></i></span>
                            </div>
                            <input class="form-control" placeholder="Nama" id="nama_2" type="text" readonly>
                          </div>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="form-group">
                          <div class="input-group input-group-alternative mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="ni ni-app"></i></span>
                            </div>
                            <input class="form-control" placeholder="Umur" id="umur" type="text" readonly>
                          </div>
                        </div>
                      </div><div class="col-3">
                        <div class="form-group">
                          <select class="form-control" id="jk_2" readonly>
                            <option value="">-Pilih Jenis Kelamin-</option>
                            <option value="0">Laki-Laki</option>
                            <option value="1">Perempuan</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="form-group">
                          <div class="input-group input-group-alternative mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="ni ni-bag-17"></i></span>
                            </div>
                            <input class="form-control" placeholder="Alamat" id="alamat_2" type="text" readonly>
                            <input class="form-control" id="nrm_2" type="hidden" readonly>
                          </div>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="form-group">
                          <div class="input-group input-group-alternative mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="ni ni-book-bookmark"></i></span>
                            </div>
                            <select style="color: white!important;" title="-No Rekam Medis-" onchange="pencarian()" class="selectpicker form-control" id="nrm" name="nrm" data-live-search="true" placeholder="-Pilih-">
                  
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 mb-3">
                        <h4 class="card-title text-white mb-0">Yang tujuan, sifat dan perlunya tindakan medis 
                        tersebut diatas, serta resiko yang ditimbulkan telah cukup dijelasan oleh dokter
                        dan telah saya mengerti seperti demikian pernyataan ini saya buat dengan penuh 
                        kesadaran dan tanpa paksaan.</h4>
                      </div>
                  </div>
                  <button type="button" onclick="send_form()" class="btn btn-block btn-warning">Cetak</button>
                </form>
              </div>
            </div>
          </div>
        </div>
    </div>
   </div>
</div>
<script>
$(document).ready(function() {
     add_list();
  }); 

  function reset_form(){
    document.getElementById("nama_1").value = "";
    document.getElementById("alamat_1").value = "";
    document.getElementById("ttl_1").value = "";
    document.getElementById("jk_1").value = "";
    document.getElementById("nik_1").value = "";

    document.getElementById("tindakan").value = "";

    document.getElementById("relasi").value = "";

    document.getElementById("nama_2").value = "";
    document.getElementById("umur").value = "";
    document.getElementById("jk_2").value = "";
    document.getElementById("alamat_2").value = "";
    document.getElementById("nrm").value = "";
    $('#nrm').selectpicker('refresh');
  }

  function add_list() {
      $.ajax({
          type: 'POST',
          url: '<?= base_url() ?>pendaftaran/add_list',
          dataType: 'json',
          success: function(data) {
            // console.log(data);
            var html = '';
            for (var i = 0; i < data.length; i++) {
                html += "<option value='" + data[i].id + "'>" + data[i].kode + '</option>';  
            }
            $("#nrm").html(html);
            $('#nrm').selectpicker('refresh');
            
          }
      });
  }

  function pencarian() {
    $.ajax({
        type: 'POST',
        url: '<?= base_url() ?>pendaftaran/pencarian',
        data: 'kata_kunci=' + document.getElementById("nrm").value,
        dataType: 'json',
        success: function(data) {
            // console.log(data);
            $tgl = data.ttl.split("/");
            var d = new Date();
            var n = d.getFullYear();
            document.getElementById("nama_2").value = data.nama;
            document.getElementById("jk_2").value = data.jenis_kelamin;
            document.getElementById("alamat_2").value = data.alamat;
            document.getElementById("nrm_2").value = data.kode;
            document.getElementById("umur").value = n-$tgl[2] + " Tahun";
        }
    });
  }

  function send_form() {
      // console.log(id);
      if(document.getElementById("nama_1").value == ""){
        document.getElementById("nama_1").focus();
      } else if(document.getElementById("alamat_1").value == ""){
        document.getElementById("alamat_1").focus();
      } else if(document.getElementById("ttl_1").value == ""){
        document.getElementById("ttl_1").focus();
      } else if(document.getElementById("jk_1").value == ""){
        document.getElementById("jk_1").focus();
      } else if(document.getElementById("nik_1").value == ""){
        document.getElementById("nik_1").focus();
      } else if(document.getElementById("tindakan").value == ""){
        document.getElementById("tindakan").focus();
      } else if(document.getElementById("relasi").value == ""){
        document.getElementById("relasi").focus();
      } else if(document.getElementById("nama_2").value == ""){
        document.getElementById("nama_2").focus();
      } else if(document.getElementById("umur").value == ""){
        document.getElementById("umur").focus();
      } else if(document.getElementById("jk_2").value == ""){
        document.getElementById("jk_2").focus();
      } else if(document.getElementById("alamat_2").value == ""){
        document.getElementById("alamat_2").focus();
      } else if(document.getElementById("nrm").value == ""){
        document.getElementById("nrm").focus();
      } else{
       
        $.ajax({
          type: 'POST',
          data: 'nama_1='+ document.getElementById("nama_1").value
          + '&alamat_1='+ document.getElementById("alamat_1").value
          + '&ttl_1='+ document.getElementById("ttl_1").value
          + '&jk_1='+ document.getElementById("jk_1").value
          + '&nik_1='+ document.getElementById("nik_1").value
          + '&tindakan='+ document.getElementById("tindakan").value
          + '&relasi='+ document.getElementById("relasi").value
          + '&nama_2='+ document.getElementById("nama_2").value
          + '&umur='+ document.getElementById("umur").value
          + '&jk_2='+ document.getElementById("jk_2").value
          + '&alamat_2='+ document.getElementById("alamat_2").value
          + '&nrm='+ document.getElementById("nrm").value
          + '&nrm_2='+ document.getElementById("nrm_2").value,
          url: '<?= base_url() ?>tindakan/send_form',
          dataType: 'json',
          success: function(data) {
            window.open(
              '<?= site_url('tindakan/open_form') ?>',
              '_blank'
            );
          }
        });
      }
  }
</script>
