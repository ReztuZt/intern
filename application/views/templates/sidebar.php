<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index3.html" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Contact</a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        ManiIntern



    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="<?= base_url('assets/template/') ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">MITrack</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="<?= base_url('assets/template/') ?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Restu Setiawan</a>
          </div>
        </div>



        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">


            <!-- Dashboard -->
            <li class="nav-item">
              <a href="<?= base_url('dashboard') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'dashboard') echo 'active' ?>">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Dashboard</p>
              </a>
            </li>

            <!-- Divider untuk memisahkan Dashboard dari Master Data -->
            <li class="nav-item">
              <hr class="sidebar-divider my-3">
            </li>

            <!-- Master Data (hanya label, tidak dapat diklik) -->
            <li class="nav-item">
              <p class="nav-label text-uppercase font-weight-bold text-muted">Master Data</p>
            </li>

            <!-- Course -->
            <li class="nav-item">
              <a href="<?= base_url('course') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'course') echo 'active' ?>">
                <i class="nav-icon fas fa-book"></i>
                <p>Course</p>
              </a>
            </li>

            <!-- Peserta -->
            <li class="nav-item">
              <a href="<?= base_url('peserta') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'peserta') echo 'active' ?>">
                <i class="nav-icon fas fa-users"></i>
                <p>Peserta</p>
              </a>
            </li>

            <!-- Pelatihan -->
            <li class="nav-item">
              <a href="<?= base_url('pelatihan') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'pelatihan') echo 'active' ?>">
                <i class="nav-icon fas fa-chalkboard"></i>
                <p>Pelatihan</p>
              </a>
            </li>

            <!-- Status -->
            <li class="nav-item">
              <a href="<?= base_url('status') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'status') echo 'active' ?>">
                <i class="nav-icon fas fa-check-circle"></i>
                <p>Status</p>
              </a>
            </li>

            <!-- Divider untuk memisahkan Master Data dari Pembayaran -->
            <li class="nav-item">
              <hr class="sidebar-divider my-3">
            </li>

            <!-- Pembayaran -->
            <li class="nav-item">
              <a href="<?= base_url('pembayaran') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'pembayaran') echo 'active' ?>">
                <i class="nav-icon fas fa-credit-card"></i>
                <p>Pembayaran</p>
              </a>
            </li>

            <!-- Profile -->
            <li class="nav-item">
              <a href="<?= base_url('user/profile/' . $this->session->id_admin); ?>" class="nav-link <?php if ($this->uri->segment(1) == 'user/profile') echo 'active' ?>">
                <i class="nav-icon fas fa-user"></i>
                <p>Profile</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('auth/logout') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'logout') echo 'active' ?>">
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <p>Log Out</p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0"><?= $title ?></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active"><?= $title ?></li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">