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
                <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
              </ol>
            </nav>
          </div>
        </div>
        <!-- Card stats -->
        <div class="row">
          <div class="col-xl-4 col-md-6">
            <div class="card card-stats">
              <!-- Card body -->
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-0">Total Pasien</h5>
                    <span class="h2 font-weight-bold mb-0"><?php echo $totalPasien; ?></span>
                  </div>
                  <div class="col-auto">
                    <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                      <i class="ni ni-chart-pie-35"></i>
                    </div>
                  </div>
                </div>
                <p class="mt-3 mb-0 text-sm">
                  <span class="text-success mr-2">Total Pasien terdaftar.</span>
                </p>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-md-6">
            <div class="card card-stats">
              <!-- Card body -->
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-0">Pasien Baru Bulan ini.</h5>
                    <span class="h2 font-weight-bold mb-0"><?php echo $pasienBaru; ?></span>
                  </div>
                  <div class="col-auto">
                    <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                      <i class="ni ni-money-coins"></i>
                    </div>
                  </div>
                </div>
                <p class="mt-3 mb-0 text-sm">
                  <span class="text-success mr-2">Total Pasien baru yang mendaftar</span>
                </p>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-md-6">
            <div class="card card-stats">
              <!-- Card body -->
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-0">Pendapatan Hari ini</h5>
                    <span class="h2 font-weight-bold mb-0">Rp. <?php if ($totalUntung) {
                                                                  echo $totalUntung;
                                                                } else {
                                                                  echo 0;
                                                                } ?></span>
                  </div>
                  <div class="col-auto">
                    <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                      <i class="ni ni-chart-bar-32"></i>
                    </div>
                  </div>
                </div>
                <p class="mt-3 mb-0 text-sm">
                  <span class="text-success mr-2">Total Pendapatan Harian</span>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Page content -->
  <div class="container-fluid mt--6">
    <div class="row">
      <div class="col-xl-6">
        <!--* Card header *-->
        <!--* Card body *-->
        <!--* Card init *-->
        <div class="card">
          <!-- Card header -->
          <div class="card-header">
            <!-- Title -->
            <h5 class="h3 mb-0">Pendaftaran Pasien</h5>
            <!-- Surtitle -->
            <h6 class="surtitle">Senin - Minggu</h6>
          </div>
          <!-- Card body -->
          <div class="card-body">
            <div class="chart">
              <!-- Chart wrapper -->
              <canvas id="chart-sales" class="chart-canvas"></canvas>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-6">
        <!--* Card header *-->
        <!--* Card body *-->
        <!--* Card init *-->
        <div class="card">
          <!-- Card header -->
          <div class="card-header">
            <!-- Title -->
            <h5 class="h3 mb-0">Pendaftaran Pasien Baru</h5>
            <!-- Surtitle -->
            <h6 class="surtitle">Senin - Minggu</h6>
          </div>
          <!-- Card body -->
          <div class="card-body">
            <div class="chart">
              <!-- Chart wrapper -->
              <canvas id="chart-bars" class="chart-canvas"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xl-6">
        <!--* Card header *-->
        <!--* Card body *-->
        <!--* Card init *-->
        <div class="card">
          <!-- Card header -->
          <div class="card-header">
            <!-- Title -->
            <h5 class="h3 mb-0">Total Praktik</h5>
            <!-- Surtitle -->
            <h6 class="surtitle">Berdasarkan dokter</h6>
          </div>
          <!-- Card body -->
          <div class="card-body">
            <div class="chart">
              <!-- Chart wrapper -->
              <canvas id="chart-pie" class="chart-canvas"></canvas>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-6">
        <!--* Card header *-->
        <!--* Card body *-->
        <!--* Card init *-->
        <div class="card">
          <!-- Card header -->
          <div class="card-header">
            <!-- Title -->
            <h5 class="h3 mb-0">Total pasien</h5>
            <!-- Surtitle -->
            <h6 class="surtitle">Berdasarkan Asal Kecamatan</h6>
          </div>
          <!-- Card body -->
          <div class="card-body">
            <div class="chart">
              <!-- Chart wrapper -->
              <canvas id="chart-points" class="chart-canvas"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>