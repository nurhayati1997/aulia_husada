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
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i>Rujukan</a></li>
                  <li class="breadcrumb-item"><a href="#">Laboratorium</a></li>
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
                  <h4 class="text-uppercase ls-1 text-white py-3 mb-0">Data Laboratorium Rujukan</h4>
                  <div class="row">
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4">
                      <button type="button" class="btn btn-secondary" onclick="tampil_daftar_modal()">Tambah Data</button>
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
                              <th>Nama</th>
                              <th>Jenis</th>
                              <th>Pengirim</th>
                              <th>Harga</th>
                              <th>Discount</th>
                              <th>Total</th>
                              <th></th>
                          </tr>
                      </thead>
                      <tfoot>
                          <tr>
                              <th>Nama</th>
                              <th>Jenis</th>
                              <th>Pengirim</th>
                              <th>Harga</th>
                              <th>Discount</th>
                              <th>Total</th>
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

<!-- Tambah Data -->
<div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
  <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <h6 class="text-center modal-title " id="modal-title-notification">Pendaftaran Laboratorium Rujukan</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
      <!-- <h4 class="text-center " id="modal-title-notification">Jenis Identitas</h4> -->
        <form role="form" class="form-danger" autocomplete="off">
          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <div class="input-group input-group-alternative mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                  </div>
                  <input class="form-control" placeholder="Nama Lengkap" id="nama" type="text">
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <div class="input-group input-group-alternative mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-pin-3"></i></span>
                  </div>
                  <input class="form-control" placeholder="Janis" id="jenis" type="text">
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <div class="input-group input-group-alternative mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                  </div>
                  <input class="form-control datepicker" id="tgl" placeholder="Tanggal" type="text">
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <div class="input-group input-group-alternative mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                  </div>
                  <input class="form-control" placeholder="Pengirim" id="pengirim" type="text">
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <div class="input-group input-group-alternative mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-box-2"></i></span>
                  </div>
                  <input class="form-control" placeholder="Tarif" id="tarif" type="text">
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <div class="input-group input-group-alternative mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-box-2"></i></span>
                  </div>
                  <input class="form-control" placeholder="Discount %" id="disc" type="number">
                </div>
              </div>
            </div>
          </div>
          <button type="button" id="simpan_button" class="btn btn-block btn-success" onclick="simpan()"> <div id="loader"> </div> Simpan</button>
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
    ambil_data();
    var rupiah = document.getElementById('tarif');
		rupiah.addEventListener('keyup', function(e){
			rupiah.value = formatRupiah(this.value, 'Rp. ');
		});
  });

  function formatRupiah(angka, prefix){
    var number_string = angka.replace(/[^,\d]/g, '').toString(),
    split   		= number_string.split(','),
    sisa     		= split[0].length % 3,
    rupiah     		= split[0].substr(0, sisa),
    ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);

    // tambahkan titik jika yang di input sudah menjadi angka ribuan
    if(ribuan){
      separator = sisa ? '.' : '';
      rupiah += separator + ribuan.join('.');
    }

    rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
    return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
  }

  function tampil_daftar_modal(){
    reset_form();
    $('#modal-default').modal('show');
  }

  function reset_form(){
    document.getElementById('nama').value = "";
    document.getElementById('jenis').value = "";
    document.getElementById('tgl').value = "";

    document.getElementById('pengirim').value = "";
    document.getElementById('tarif').value = "";
    document.getElementById('disc').value = "";
  }

  function ambil_data(){
    $('#datatable-basic').DataTable({
      destroy: true,
      "order": [[ 1, "asc" ]],
        "ajax": {
        "type": "POST",
          "url": "<?php echo site_url("lab/get_lab") ?>",
          "dataSrc": ""
      },
      "columns": [
          {
              "data": "nama"
          },
          {
              "data": "jenis"
          },
          {
              "data": "pengirim"
          },
          {
              "data": "tarif",
              "render": function(data, type, row) {
                return formatRupiah(data, 'Rp. ')
              }
          },
          {
              "data": "diskon",
              "render": function(data, type, row) {
                return data + " %"
              }
          },
          {
              "data": "tarif",
              "render": function(data, type, row) {
                var harga = data;
                var diskon = data * row.diskon / 100;
                return formatRupiah(parseInt(harga-diskon).toString(), 'Rp. ')
              }
          },
          {
              "data": "id_lab",
              "render": function(data, type, row) {
                return '<div style="cursor:pointer;" title="hapus?" class="badge badge-danger" id="' + data + '" onClick="hapus(' + data + ')"><i class="fa fa-times"></i></div>'
              }
          },
          
      ]
    });
  }

  function simpan(){
    if(document.getElementById('nama').value == ""){
      document.getElementById('nama').focus();
    }else if(document.getElementById('jenis').value == ""){
      document.getElementById('jenis').focus();
    }else if(document.getElementById('tgl').value == ""){
      document.getElementById('tgl').focus();
    }else if(document.getElementById('pengirim').value == ""){
      document.getElementById('pengirim').focus();
    }else if(document.getElementById('tarif').value == ""){
      document.getElementById('tarif').focus();
    }else if(document.getElementById('disc').value == ""){
      document.getElementById('disc').focus();
    }else{
      var form_data = new FormData();
      form_data.append('nama', document.getElementById("nama").value);
      form_data.append('jenis', document.getElementById("jenis").value);
      form_data.append('tgl', document.getElementById("tgl").value);

      form_data.append('pengirim', document.getElementById("pengirim").value);
      form_data.append('disc', document.getElementById("disc").value);

      var tarif = document.getElementById("tarif").value;
      tarif = tarif.replace("Rp. ", "");
      tarif = tarif.replace(".", "");

      form_data.append('tarif', parseInt(tarif));

      $.ajax({
          type: 'POST',
          data: form_data,
          url: '<?= base_url() ?>lab/tambah',
          processData:false,
          contentType:false,
          cache:false,
          dataType: 'json',
          beforeSend: function () {
            $('#simpan_button').attr('disabled', true);
            $('#loader').html('');
            addSpinner($('#loader'));
          },
          success: function(data) {
            // console.log(data);
            ambil_data();
            $('#modal-default').modal('hide');

            $('#simpan_button').attr('disabled', false);
            removeSpinner($('#loader'), function () {
              $('#loader').html('');
            });
            Swal.fire({
              position: 'center',
              icon: 'success',
              title: 'Data Berhasil Ditambahkan',
              showConfirmButton: false,
              timer: 2500
            });
          }
        });
    }
  }

  function hapus(id){
    Swal.fire({
      title: 'Hapus ?',
      text: "Data yang telkah dihapus tidak dapat dikembalikan!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Hapus'
    }).then((result) => {
      if (result.isConfirmed) {
        $.ajax({
          type: 'POST',
          url: '<?= base_url() ?>lab/hapus',
          dataType: 'json',
          data: 'id=' + id,
          success: function(data) {
            ambil_data();
            Swal.fire({
              position: 'center',
              icon: 'success',
              title: 'Data Berhasil Dihapus',
              showConfirmButton: false,
              timer: 1500
            })
          }
        });
      }
    })
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
