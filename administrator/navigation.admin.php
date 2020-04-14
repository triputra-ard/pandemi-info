<?php include 'header.php'; ?>
<!-- ============================================================== -->
<!-- main wrapper -->
<!-- ============================================================== -->
<div class="dashboard-main-wrapper">
    <!-- ============================================================== -->
    <!-- navbar -->
    <!-- ============================================================== -->
    <div class="dashboard-header">
        <nav class="navbar navbar-expand-lg navbar-light bg-primary fixed-top">
            <a class="navbar-brand text-white" href="index">PANDEMI-INFO</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto navbar-right-top">
                    <li class="nav-item dropdown nav-user">
                        <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fa fa-fw fa-user-circle text-white"></i> </a>
                        <div class="dropdown-menu dropdown-menu-right nav-user-dropdown animated fadeInLeft" aria-labelledby="navbarDropdownMenuLink2">
                            <div class="nav-user-info">
                                <h5 class="mb-0 text-white nav-user-name"><?php echo @$_SESSION['admin_username']; ?> </h5>
                                <span class="badge badge-success">On</span><span class="ml-2">Tersedia</span>
                            </div>
                            <a class="dropdown-item" href="admin.info"><i class="fas fa-user mr-2"></i>Info Anda</a>
                            <a class="dropdown-item" href="" data-toggle="modal" data-target="#logout"><i class="fas fa-power-off mr-2"></i>Keluar</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <br><br>
    <!-- ============================================================== -->
    <!-- end navbar -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- left sidebar -->
    <!-- ============================================================== -->
    <div class="nav-left-sidebar sidebar-light transparent-white">
        <div class="menu-list">
            <nav class="navbar navbar-expand-lg navbar-light">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
                <a class="d-xl-none d-lg-none text-dark" href="#">
                  <?php if ($currentpage == "home"): ?>
                    <i class="fas fa-laptop"></i> Dasbor
                  <?php elseif($currentpage == "pandemic"): ?>
                    <i class="fa fa-fw fa-info-circle"></i> Informasi Pandemi</a>
                  <?php elseif($currentpage == "patient"): ?>
                    <i class="fa fa-fw fa-users"></i> Informasi Diagnosa Pasien</a>
                  <?php elseif($currentpage == "diagnosis"): ?>
                    <i class="fa fa-fw fa-stethoscope"></i> Diagnosa</a>
                  <?php elseif($currentpage == "erlocal"): ?>
                    <i class="fa fa-fw fa-ambulance"></i> Informasi Darurat</a>
                  <?php endif; ?>

                </a>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav flex-column">
                        <li class="nav-divider text-dark">
                            Main Menu
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-dark <?php if($currentpage == "home") echo "active"; ?>" href="admin.index">
                              <i class="fa fa-fw fa-laptop"></i>Dasbor</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark <?php if($currentpage == "pandemic") echo "active"; ?>" href="#" data-toggle="collapse" aria-expanded="false" data-target="#menu1" aria-controls="menu1">
                              <i class="fa fa-fw fa-info-circle"></i> Informasi Pandemi</a>
                            <div id="menu1" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                  <li class="nav-item">
                                      <a class="nav-link text-white" href="pandemi.add"><i class="fas fa-comment-medical"></i> Tambah Informasi Pandemi</a>
                                  </li>
                                  <li class="nav-item">
                                      <a class="nav-link text-white" href="pandemi.view"><i class="fas fa-book-medical"></i> Lihat Informasi Pandemi</a>
                                  </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark <?php if($currentpage == "patient") echo "active"; ?>" href="#" data-toggle="collapse" aria-expanded="false" data-target="#menu2" aria-controls="menu2">
                              <i class="fa fa-fw fa-users"></i>Informasi Diagnosa Pasien</a>
                            <div id="menu2" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="patient.view"><i class="fas fa-users"></i> Lihat Diagnosa</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark <?php if($currentpage == "diagnosis") echo "active"; ?>" href="#" data-toggle="collapse" aria-expanded="false" data-target="#menu3" aria-controls="menu3">
                              <i class="fa fa-fw fa-stethoscope"></i>Diagnosa</a>
                            <div id="menu3" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="symptoms.add"><i class="fas fa-plus"></i> Tambah & Lihat Gejala</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="question.add"><i class="fas fa-plus"></i> Tambah & Lihat Pertanyaan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="result.add"><i class="fas fa-plus"></i> Tambah & Lihat Hasil Diagnosa</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="diagnosis.view"><i class="fas fa-network-wired"></i> Buat & Lihat Relasi</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark <?php if($currentpage == "erlocal") echo "active"; ?>" href="#" data-toggle="collapse" aria-expanded="false" data-target="#menu4" aria-controls="menu4">
                              <i class="fa fa-fw fa-ambulance"></i>Informasi Darurat</a>
                            <div id="menu4" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="emergency.add"><i class="fas fa-map-marker-alt"></i> Tambah Informasi Darurat Lokal</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="emergency.view"><i class="fas fa-map-marked-alt"></i> Lihat Informasi Darurat</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                          <a class="nav-link text-danger" href="" data-toggle="modal" data-target="#logout"><i class="fas fa-power-off mr-2"></i>Keluar</a>
                        </li>

                        <li class="nav-divider">
                          <small class="text-dark">CONCEPT Admin @ colorlib</small>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end left sidebar -->
    <!-- ============================================================== -->
<?php include 'model/modal.logout.php' ?>
