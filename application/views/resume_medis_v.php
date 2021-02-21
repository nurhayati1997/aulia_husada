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
                  <li class="breadcrumb-item"><a href="#">Resume Medis</a></li>
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
    <div class="row card-wrapper">
      <div class="col-lg-4">
        <!-- Timeline card -->
        <div class="card">
          <!-- Card header -->
          <div class="card-header">
            <!-- Title -->
            <h5 class="h3 mb-0">Latest notifications</h5>
          </div>
          <!-- Card body -->
          <div class="card-body">
            <div class="timeline timeline-one-side" data-timeline-content="axis" data-timeline-axis-style="dashed">
                <div class="timeline-block">
                  <span class="timeline-step badge-success">
                    <i class="ni ni-bell-55"></i>
                  </span>
                <div class="timeline-content">
                  <div class="d-flex justify-content-between pt-1">
                     <div>
                      <span class="text-muted text-sm font-weight-bold">New message</span>
                    </div>
                    <div class="text-right">
                      <small class="text-muted"><i class="fas fa-clock mr-1"></i>2 hrs ago</small>
                    </div>
                  </div>
                  <h6 class="text-sm mt-1 mb-0">Let's meet at Starbucks at 11:30. Wdyt?</h6>
                </div>
              </div>
              <div class="timeline-block">
                <span class="timeline-step badge-danger">
                  <i class="ni ni-html5"></i>
                </span>
                <div class="timeline-content">
                  <div class="d-flex justify-content-between pt-1">
                    <div>
                      <span class="text-muted text-sm font-weight-bold">Product issue</span>
                    </div>
                    <div class="text-right">
                      <small class="text-muted"><i class="fas fa-clock mr-1"></i>3 hrs ago</small>
                    </div>
                  </div>
                  <h6 class="text-sm mt-1 mb-0">A new issue has been reported for Argon.</h6>
                </div>
              </div>
              <div class="timeline-block">
                <span class="timeline-step badge-info">
                  <i class="ni ni-like-2"></i>
                </span>
                <div class="timeline-content">
                  <div class="d-flex justify-content-between pt-1">
                    <div>
                      <span class="text-muted text-sm font-weight-bold">New likes</span>
                    </div>
                    <div class="text-right">
                      <small class="text-muted"><i class="fas fa-clock mr-1"></i>5 hrs ago</small>
                    </div>
                  </div>
                  <h6 class="text-sm mt-1 mb-0">Your posts have been liked a lot.</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
      <div class="card">
            <div class="card bg-gradient-info">
              <div class="card-header bg-transparent">
                
              </div>
              <!-- Card body -->
              <div class="card-body">
                <div class="mt-4">
                  <form role="form" class="form-danger">
                    <div class="row">
                      <div class="col-6">
                        <div class="form-group">
                          <div class="input-group input-group-alternative mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="ni ni-credit-card"></i></span>
                            </div>
                            <input class="form-control" placeholder="No Rekam Medis" type="text">
                          </div>
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="form-group">
                          <div class="input-group input-group-alternative mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                            </div>
                            <input class="form-control" placeholder="Nama Lengkap" type="text">
                          </div>
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="form-group">
                          <div class="input-group input-group-alternative mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="ni ni-box-2"></i></span>
                            </div>
                            <input class="form-control" placeholder="No KTP" type="text">
                          </div>
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="form-group">
                          <div class="input-group input-group-alternative mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="ni ni-pin-3"></i></span>
                            </div>
                            <input class="form-control" placeholder="Alamat" type="text">
                          </div>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="form-group">
                          <select class="form-control" id="exampleFormControlSelect1">
                            <option selected>Jenis Kelamin</option>
                            <option>laki-Laki</option>
                            <option>Perempuan</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="form-group">
                          <select class="form-control" id="exampleFormControlSelect1">
                            <option selected>Agama</option>
                            <option>Islam</option>
                            <option>Kriten</option>
                            <option>Hindu</option>
                            <option>Budha</option>
                            <option>Konghucu</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="form-group">
                          <select class="form-control" id="exampleFormControlSelect1">
                            <option selected>Status</option>
                            <option>Belum Menikah</option>
                            <option>Menikah</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="form-group">
                          <div class="input-group input-group-alternative mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                            </div>
                            <input class="form-control datepicker" placeholder="Tanggal lahir" type="text">
                          </div>
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="form-group">
                          <div class="input-group input-group-alternative">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                            </div>
                            <input class="form-control" placeholder="Pekerjaan" type="text">
                          </div>
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="form-group">
                          <div class="input-group input-group-alternative">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                            </div>
                            <input class="form-control" placeholder="Pendidikan" type="text">
                          </div>
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="form-group">
                          <div class="input-group input-group-alternative">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                            </div>
                            <input class="form-control" placeholder="No Hp" type="text">
                          </div>
                        </div>
                      </div>
                    </div>
                    <button type="button" class="btn btn-block btn-info">Simpan</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
   </div>
</div>
