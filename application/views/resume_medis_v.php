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
                  <li class="breadcrumb-item"><a href="#">Asesmen Medis Pasien</a></li>
                  <!-- <li class="breadcrumb-item active" aria-current="page">Default</li> -->
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="#" class="btn btn-sm btn-neutral">Print Resume Medis</a>
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
                      <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
                        <div class="form-group mb-0">
                          <div class="input-group input-group-alternative input-group-merge">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-search"></i></span>
                            </div>
                            <input class="form-control" placeholder="masukkan No Rekam Medis" type="text">
                          </div>
                        </div>
                        <!-- <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
                          <span aria-hidden="true">×</span>
                        </button> -->
                      </form>
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
                          <tr>
                              <td>Tiger Nixon</td>
                              <td>System Architect</td>
                              <td>Edinburgh</td>
                              <td>61</td>
                              <td>2011/04/25</td>
                              <td>
                                    <div id="social-buttons-icon-component" class="tab-pane tab-example-result fade show active" role="tabpanel" aria-labelledby="social-buttons-icon-component-tab">
                                      <div class="row">
                                          <div class="col-md-3">
                                            <button type="button" class="btn btn-vimeo btn-icon-only" data-toggle="modal" data-target="#modal-default" title="Lihat">
                                              <span class="btn-inner--icon"><i class="fas fa-search"></i></span>
                                            </button>
                                            <div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
                                              <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
                                                <div class="modal-content bg-gradient-info">
                                                  <div class="modal-header">
                                                    <h6 class="modal-title" id="modal-title-notification">Detail Asesment</h6>
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
                                                                <input class="form-control" placeholder="No Rekam Medis" id="nrm_antri" type="text">
                                                              </div>
                                                            </div>
                                                          </div>
                                                          <div class="col-6">
                                                            <div class="form-group">
                                                              <div class="input-group input-group-alternative mb-3">
                                                                <div class="input-group-prepend">
                                                                  <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                                                                </div>
                                                                <input class="form-control" placeholder="Nama Lengkap" id="nama_antri" type="text">
                                                              </div>
                                                            </div>
                                                          </div>
                                                          <div class="col-6">
                                                            <div class="form-group">
                                                              <div class="input-group input-group-alternative mb-3">
                                                                <div class="input-group-prepend">
                                                                  <span class="input-group-text"><i class="ni ni-box-2"></i></span>
                                                                </div>
                                                                <input class="form-control" placeholder="No KTP" id="nik_antri" type="text">
                                                              </div>
                                                            </div>
                                                          </div>
                                                          <div class="col-6">
                                                            <div class="form-group">
                                                              <div class="input-group input-group-alternative mb-3">
                                                                <div class="input-group-prepend">
                                                                  <span class="input-group-text"><i class="ni ni-pin-3"></i></span>
                                                                </div>
                                                                <input class="form-control" placeholder="Alamat" id="alamat_antri" type="text">
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
                                                                <input class="form-control form-control-lg" placeholder="Keluhan Utama" type="text">
                                                              </div>
                                                            </div>
                                                          </div>
                                                          <div class="col-6">
                                                            <div class="form-group">
                                                              <div class="input-group input-group-alternative mb-3">
                                                                <div class="input-group-prepend">
                                                                  <span class="input-group-text"><i class="ni ni-air-baloon"></i></span>
                                                                </div>
                                                                <input class="form-control" placeholder="Riwayat penyakit Sekarang" type="text">
                                                              </div>
                                                            </div>
                                                          </div>
                                                          <div class="col-6">
                                                            <div class="form-group">
                                                              <div class="input-group input-group-alternative mb-3">
                                                                <div class="input-group-prepend">
                                                                  <span class="input-group-text"><i class="ni ni-app"></i></span>
                                                                </div>
                                                                <input class="form-control" placeholder="Riwayat Penyakit Dahulu" type="text">
                                                              </div>
                                                            </div>
                                                          </div>
                                                          <div class="col-6">
                                                            <div class="form-group">
                                                              <div class="input-group input-group-alternative mb-3">
                                                                <div class="input-group-prepend">
                                                                  <span class="input-group-text"><i class="ni ni-bag-17"></i></span>
                                                                </div>
                                                                <input class="form-control" placeholder="Riwayat Alergi" type="text">
                                                              </div>
                                                            </div>
                                                          </div>
                                                          <div class="col-6">
                                                            <div class="form-group">
                                                              <div class="input-group input-group-alternative mb-3">
                                                                <div class="input-group-prepend">
                                                                  <span class="input-group-text"><i class="ni ni-book-bookmark"></i></span>
                                                                </div>
                                                                <input class="form-control" placeholder="Riwayat Operasi" type="text">
                                                              </div>
                                                            </div>
                                                          </div>
                                                          <div class="col-6">
                                                            <div class="form-group">
                                                              <div class="input-group input-group-alternative mb-3">
                                                                <div class="input-group-prepend">
                                                                  <span class="input-group-text"><i class="ni ni-books"></i></span>
                                                                </div>
                                                                <input class="form-control" placeholder="Riwayat Transfusi" type="text">
                                                              </div>
                                                            </div>
                                                          </div>
                                                          <div class="col-6">
                                                            <div class="form-group">
                                                              <div class="input-group input-group-alternative mb-3">
                                                                <div class="input-group-prepend">
                                                                  <span class="input-group-text"><i class="ni ni-basket"></i></span>
                                                                </div>
                                                                <input class="form-control" placeholder="Riwayat Penggunaan Obat" type="text">
                                                              </div>
                                                            </div>
                                                          </div>
                                                          <div class="col-12">
                                                            <h4 class="card-title text-white text-center mb-0">Pemeriksaan Fisik</h4>
                                                          </div>
                                                          <div class="col-6">
                                                            <div class="form-group">
                                                              <select class="form-control" id="kesadaran_umum">
                                                                <option selected>Kesadaran Umum</option>
                                                                <option>Baik</option>
                                                                <option>Sedang</option>
                                                                <option>Lemah</option>
                                                                <option>Jelek</option>
                                                              </select>
                                                            </div>
                                                          </div>
                                                          <div class="col-6">
                                                            <div class="form-group">
                                                              <select class="form-control" id="kesadaran">
                                                                <option selected>Kesadaran</option>
                                                                <option>Composmentis</option>
                                                                <option>Apatis</option>
                                                                <option>Somnolen</option>
                                                                <option>Sopor</option>
                                                                <option>Koma</option>
                                                              </select>
                                                            </div>
                                                          </div>
                                                          <div class="col-3">
                                                            <div class="form-group">
                                                              <div class="input-group input-group-alternative mb-3">
                                                                <div class="input-group-prepend">
                                                                  <span class="input-group-text"><i class="ni ni-box-2"></i></span>
                                                                </div>
                                                                <input class="form-control" placeholder="Tekanan Darah" type="text">
                                                              </div>
                                                            </div>
                                                          </div>
                                                          <div class="col-3">
                                                            <div class="form-group">
                                                              <div class="input-group input-group-alternative mb-3">
                                                                <div class="input-group-prepend">
                                                                  <span class="input-group-text"><i class="ni ni-briefcase-24"></i></span>
                                                                </div>
                                                                <input class="form-control" placeholder="Nadi" type="text">
                                                              </div>
                                                            </div>
                                                          </div>
                                                          <div class="col-3">
                                                            <div class="form-group">
                                                              <div class="input-group input-group-alternative mb-3">
                                                                <div class="input-group-prepend">
                                                                  <span class="input-group-text"><i class="ni ni-building"></i></span>
                                                                </div>
                                                                <input class="form-control" placeholder="Suhu" type="text">
                                                              </div>
                                                            </div>
                                                          </div>
                                                          <div class="col-3">
                                                            <div class="form-group">
                                                              <div class="input-group input-group-alternative mb-3">
                                                                <div class="input-group-prepend">
                                                                  <span class="input-group-text"><i class="ni ni-button-pause"></i></span>
                                                                </div>
                                                                <input class="form-control" placeholder="RR" type="text">
                                                              </div>
                                                            </div>
                                                          </div>
                                                          <div class="col-12">
                                                            <div class="form-group">
                                                              <div class="input-group input-group-alternative mb-3">
                                                                <div class="input-group-prepend">
                                                                  <span class="input-group-text"><i class="ni ni-bullet-list-67"></i></span>
                                                                </div>
                                                                <input class="form-control form-control-lg" placeholder="Diagnosa" type="text">
                                                              </div>
                                                            </div>
                                                          </div>
                                                          <div class="col-12">
                                                            <div class="form-group">
                                                              <div class="input-group input-group-alternative mb-3">
                                                                <div class="input-group-prepend">
                                                                  <span class="input-group-text"><i class="ni ni-caps-small"></i></span>
                                                                </div>
                                                                <input class="form-control form-control-lg" placeholder="Terapi" type="text">
                                                              </div>
                                                            </div>
                                                          </div>
                                                          <div class="col-12">
                                                            <h4 class="card-title text-white text-center mb-0">Penunjang</h4>
                                                          </div>
                                                          <div class="col-6">
                                                            <h4 class="card-title text-white text-center mb-0">Lab</h4>
                                                            <div class="dropzone dropzone-single mb-3" data-toggle="dropzone" data-dropzone-url="http://">
                                                              <div class="fallback">
                                                                <div class="custom-file">
                                                                  <input type="file" class="custom-file-input" id="projectCoverUploads">
                                                                  <label class="custom-file-label" for="projectCoverUploads">Choose file</label>
                                                                </div>
                                                              </div>
                                                              <div class="dz-preview dz-preview-single">
                                                                <div class="dz-preview-cover">
                                                                  <img class="dz-preview-img" src="...html" alt="..." data-dz-thumbnail>
                                                                </div>
                                                              </div>
                                                            </div>
                                                          </div>
                                                          <div class="col-6">
                                                            <h4 class="card-title text-white text-center mb-0">Radiologi</h4>
                                                            <div class="dropzone dropzone-single mb-3" data-toggle="dropzone" data-dropzone-url="http://">
                                                              <div class="fallback">
                                                                <div class="custom-file">
                                                                  <input type="file" class="custom-file-input" id="projectCoverUploads">
                                                                  <label class="custom-file-label" for="projectCoverUploads">Choose file</label>
                                                                </div>
                                                              </div>
                                                              <div class="dz-preview dz-preview-single">
                                                                <div class="dz-preview-cover">
                                                                  <img class="dz-preview-img" src="...html" alt="..." data-dz-thumbnail>
                                                                </div>
                                                              </div>
                                                            </div>
                                                          </div>
                                                          <div class="col-12">
                                                            <h4 class="card-title text-white text-center mb-0">Catatan</h4>
                                                            <div class="dropzone dropzone-single mb-3" data-toggle="dropzone" data-dropzone-url="http://">
                                                              <div class="fallback">
                                                                <div class="custom-file">
                                                                  <input type="file" class="custom-file-input" id="projectCoverUploads">
                                                                  <label class="custom-file-label" for="projectCoverUploads">Choose file</label>
                                                                </div>
                                                              </div>
                                                              <div class="dz-preview dz-preview-single">
                                                                <div class="dz-preview-cover">
                                                                  <img class="dz-preview-img" src="...html" alt="..." data-dz-thumbnail>
                                                                </div>
                                                              </div>
                                                            </div>
                                                          </div>
                                                      </div>
                                                      <button type="button" class="btn btn-block btn-info">Simpan</button>
                                                    </form>
                                                  </div>
                                                  <div class="modal-footer">
                                                    <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Close</button>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-md-3">
                                            <button type="button" class="btn btn-pinterest btn-icon-only" data-toggle="modal" data-target="#modal-upload" title="Upload Data">
                                              <span class="btn-inner--icon"><i class="fas fa-upload"></i></span>
                                            </button>
                                            <div class="modal fade" id="modal-upload" tabindex="-1" role="dialog" aria-labelledby="modal-upload" aria-hidden="true">
                                                <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
                                                  <div class="modal-content bg-gradient-danger">
                                                    <div class="modal-header">
                                                      <h6 class="modal-title" id="modal-title-notification">Upload Data Penunjang</h6>
                                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                      </button>
                                                    </div>
                                                    <div class="modal-body">
                                                      <form role="form" class="form-danger">
                                                        <div class="row">
                                                            <div class="col-12">
                                                              <div class="dropzone dropzone-multiple mb-3" data-toggle="dropzone" data-dropzone-multiple data-dropzone-url="http://">
                                                                <div class="fallback">
                                                                  <div class="custom-file">
                                                                    <input type="file" class="custom-file-input" id="customFileUploadMultiple" multiple>
                                                                    <label class="custom-file-label" for="customFileUploadMultiple">Choose file</label>
                                                                  </div>
                                                                </div>
                                                                <ul class="dz-preview dz-preview-multiple list-group list-group-lg list-group-flush">
                                                                  <li class="list-group-item px-0">
                                                                    <div class="row align-items-center">
                                                                      <div class="col-auto">
                                                                        <div class="avatar">
                                                                          <img class="avatar-img rounded" src="...html" alt="..." data-dz-thumbnail>
                                                                        </div>
                                                                      </div>
                                                                      <div class="col ml--3">
                                                                        <h4 class="mb-1" data-dz-name>...</h4>
                                                                        <p class="small text-muted mb-0" data-dz-size>...</p>
                                                                      </div>
                                                                      <div class="col-auto">
                                                                        <div class="dropdown">
                                                                          <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            <i class="fe fe-more-vertical"></i>
                                                                          </a>
                                                                          <div class="dropdown-menu dropdown-menu-right">
                                                                            <a href="#" class="dropdown-item" data-dz-remove>
                                                                              Remove
                                                                            </a>
                                                                          </div>
                                                                        </div>
                                                                      </div>
                                                                    </div>
                                                                  </li>
                                                                </ul>
                                                              </div>
                                                            </div>
                                                        </div>
                                                        <button type="button" class="btn btn-block btn-info">Simpan</button>
                                                      </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                      <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Close</button>
                                                    </div>
                                                  </div>
                                                </div>
                                            </div>
                                          </div>
                                          <div class="col-md-3">
                                            <button type="button" class="btn btn-slack btn-icon-only" data-toggle="modal" data-target="#modal-edit" title="Edit">
                                              <span class="btn-inner--icon"><i class="fas fa-edit"></i></span>
                                            </button>
                                            <div class="modal fade" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="modal-edit" aria-hidden="true">
                                                <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
                                                  <div class="modal-content bg-gradient-success">
                                                    <div class="modal-header">
                                                      <h6 class="modal-title" id="modal-title-notification">Edit Asesment</h6>
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
                                                                  <input class="form-control" placeholder="No Rekam Medis" id="nrm_antri" type="text">
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="col-6">
                                                              <div class="form-group">
                                                                <div class="input-group input-group-alternative mb-3">
                                                                  <div class="input-group-prepend">
                                                                    <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                                                                  </div>
                                                                  <input class="form-control" placeholder="Nama Lengkap" id="nama_antri" type="text">
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="col-6">
                                                              <div class="form-group">
                                                                <div class="input-group input-group-alternative mb-3">
                                                                  <div class="input-group-prepend">
                                                                    <span class="input-group-text"><i class="ni ni-box-2"></i></span>
                                                                  </div>
                                                                  <input class="form-control" placeholder="No KTP" id="nik_antri" type="text">
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="col-6">
                                                              <div class="form-group">
                                                                <div class="input-group input-group-alternative mb-3">
                                                                  <div class="input-group-prepend">
                                                                    <span class="input-group-text"><i class="ni ni-pin-3"></i></span>
                                                                  </div>
                                                                  <input class="form-control" placeholder="Alamat" id="alamat_antri" type="text">
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
                                                                  <input class="form-control form-control-lg" placeholder="Keluhan Utama" type="text">
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="col-6">
                                                              <div class="form-group">
                                                                <div class="input-group input-group-alternative mb-3">
                                                                  <div class="input-group-prepend">
                                                                    <span class="input-group-text"><i class="ni ni-air-baloon"></i></span>
                                                                  </div>
                                                                  <input class="form-control" placeholder="Riwayat penyakit Sekarang" type="text">
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="col-6">
                                                              <div class="form-group">
                                                                <div class="input-group input-group-alternative mb-3">
                                                                  <div class="input-group-prepend">
                                                                    <span class="input-group-text"><i class="ni ni-app"></i></span>
                                                                  </div>
                                                                  <input class="form-control" placeholder="Riwayat Penyakit Dahulu" type="text">
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="col-6">
                                                              <div class="form-group">
                                                                <div class="input-group input-group-alternative mb-3">
                                                                  <div class="input-group-prepend">
                                                                    <span class="input-group-text"><i class="ni ni-bag-17"></i></span>
                                                                  </div>
                                                                  <input class="form-control" placeholder="Riwayat Alergi" type="text">
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="col-6">
                                                              <div class="form-group">
                                                                <div class="input-group input-group-alternative mb-3">
                                                                  <div class="input-group-prepend">
                                                                    <span class="input-group-text"><i class="ni ni-book-bookmark"></i></span>
                                                                  </div>
                                                                  <input class="form-control" placeholder="Riwayat Operasi" type="text">
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="col-6">
                                                              <div class="form-group">
                                                                <div class="input-group input-group-alternative mb-3">
                                                                  <div class="input-group-prepend">
                                                                    <span class="input-group-text"><i class="ni ni-books"></i></span>
                                                                  </div>
                                                                  <input class="form-control" placeholder="Riwayat Transfusi" type="text">
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="col-6">
                                                              <div class="form-group">
                                                                <div class="input-group input-group-alternative mb-3">
                                                                  <div class="input-group-prepend">
                                                                    <span class="input-group-text"><i class="ni ni-basket"></i></span>
                                                                  </div>
                                                                  <input class="form-control" placeholder="Riwayat Penggunaan Obat" type="text">
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="col-12">
                                                              <h4 class="card-title text-white text-center mb-0">Pemeriksaan Fisik</h4>
                                                            </div>
                                                            <div class="col-6">
                                                              <div class="form-group">
                                                                <select class="form-control" id="kesadaran_umum">
                                                                  <option selected>Kesadaran Umum</option>
                                                                  <option>Baik</option>
                                                                  <option>Sedang</option>
                                                                  <option>Lemah</option>
                                                                  <option>Jelek</option>
                                                                </select>
                                                              </div>
                                                            </div>
                                                            <div class="col-6">
                                                              <div class="form-group">
                                                                <select class="form-control" id="kesadaran">
                                                                  <option selected>Kesadaran</option>
                                                                  <option>Composmentis</option>
                                                                  <option>Apatis</option>
                                                                  <option>Somnolen</option>
                                                                  <option>Sopor</option>
                                                                  <option>Koma</option>
                                                                </select>
                                                              </div>
                                                            </div>
                                                            <div class="col-3">
                                                              <div class="form-group">
                                                                <div class="input-group input-group-alternative mb-3">
                                                                  <div class="input-group-prepend">
                                                                    <span class="input-group-text"><i class="ni ni-box-2"></i></span>
                                                                  </div>
                                                                  <input class="form-control" placeholder="Tekanan Darah" type="text">
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="col-3">
                                                              <div class="form-group">
                                                                <div class="input-group input-group-alternative mb-3">
                                                                  <div class="input-group-prepend">
                                                                    <span class="input-group-text"><i class="ni ni-briefcase-24"></i></span>
                                                                  </div>
                                                                  <input class="form-control" placeholder="Nadi" type="text">
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="col-3">
                                                              <div class="form-group">
                                                                <div class="input-group input-group-alternative mb-3">
                                                                  <div class="input-group-prepend">
                                                                    <span class="input-group-text"><i class="ni ni-building"></i></span>
                                                                  </div>
                                                                  <input class="form-control" placeholder="Suhu" type="text">
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="col-3">
                                                              <div class="form-group">
                                                                <div class="input-group input-group-alternative mb-3">
                                                                  <div class="input-group-prepend">
                                                                    <span class="input-group-text"><i class="ni ni-button-pause"></i></span>
                                                                  </div>
                                                                  <input class="form-control" placeholder="RR" type="text">
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="col-12">
                                                              <div class="form-group">
                                                                <div class="input-group input-group-alternative mb-3">
                                                                  <div class="input-group-prepend">
                                                                    <span class="input-group-text"><i class="ni ni-bullet-list-67"></i></span>
                                                                  </div>
                                                                  <input class="form-control form-control-lg" placeholder="Diagnosa" type="text">
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="col-12">
                                                              <div class="form-group">
                                                                <div class="input-group input-group-alternative mb-3">
                                                                  <div class="input-group-prepend">
                                                                    <span class="input-group-text"><i class="ni ni-caps-small"></i></span>
                                                                  </div>
                                                                  <input class="form-control form-control-lg" placeholder="Terapi" type="text">
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="col-12">
                                                              <h4 class="card-title text-white text-center mb-0">Penunjang</h4>
                                                            </div>
                                                            <div class="col-6">
                                                              <h4 class="card-title text-white text-center mb-0">Lab</h4>
                                                              <div class="dropzone dropzone-single mb-3" data-toggle="dropzone" data-dropzone-url="http://">
                                                                <div class="fallback">
                                                                  <div class="custom-file">
                                                                    <input type="file" class="custom-file-input" id="projectCoverUploads">
                                                                    <label class="custom-file-label" for="projectCoverUploads">Choose file</label>
                                                                  </div>
                                                                </div>
                                                                <div class="dz-preview dz-preview-single">
                                                                  <div class="dz-preview-cover">
                                                                    <img class="dz-preview-img" src="...html" alt="..." data-dz-thumbnail>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="col-6">
                                                              <h4 class="card-title text-white text-center mb-0">Radiologi</h4>
                                                              <div class="dropzone dropzone-single mb-3" data-toggle="dropzone" data-dropzone-url="http://">
                                                                <div class="fallback">
                                                                  <div class="custom-file">
                                                                    <input type="file" class="custom-file-input" id="projectCoverUploads">
                                                                    <label class="custom-file-label" for="projectCoverUploads">Choose file</label>
                                                                  </div>
                                                                </div>
                                                                <div class="dz-preview dz-preview-single">
                                                                  <div class="dz-preview-cover">
                                                                    <img class="dz-preview-img" src="...html" alt="..." data-dz-thumbnail>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="col-12">
                                                              <h4 class="card-title text-white text-center mb-0">Catatan</h4>
                                                              <div class="dropzone dropzone-single mb-3" data-toggle="dropzone" data-dropzone-url="http://">
                                                                <div class="fallback">
                                                                  <div class="custom-file">
                                                                    <input type="file" class="custom-file-input" id="projectCoverUploads">
                                                                    <label class="custom-file-label" for="projectCoverUploads">Choose file</label>
                                                                  </div>
                                                                </div>
                                                                <div class="dz-preview dz-preview-single">
                                                                  <div class="dz-preview-cover">
                                                                    <img class="dz-preview-img" src="...html" alt="..." data-dz-thumbnail>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                            </div>
                                                        </div>
                                                        <button type="button" class="btn btn-block btn-info">Simpan</button>
                                                      </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                      <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Close</button>
                                                    </div>
                                                  </div>
                                                </div>
                                            </div>
                                          </div>
                                    </div>
                              </td>
                              <!-- <td>
                                <div class="dropdown">
                                  <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v"></i>
                                  </a>
                                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    <a class="dropdown-item" href="#">Lihat</a>
                                    <a class="dropdown-item" href="#">Edit</a>
                                    <a class="dropdown-item" href="#">Upload Data</a>
                                  </div>
                                </div>
                              </td> -->
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
