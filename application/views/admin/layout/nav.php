<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url('dashboard') ?>assets/admin/index3.html" class="brand-link">
      <img src="<?php echo base_url() ?>assets/admin/dist/img/AdminLTELogo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">SI KOPERASI</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url() ?>assets/admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="<?php echo base_url('profile') ?>" class="d-block">User Yang Login</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <!--DASHBOARD PAGE -->
          <li class="nav-item">
            <a href="<?php echo base_url('admin/dashboard') ?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <!--DATA MASTER MENU-->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Master Data
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">8</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('master_data') ?>" class="nav-link">
                  <i class="fas fa-table"></i>
                  <p>Barang</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('master_data/list_golongan') ?>" class="nav-link">
                  <i class="fas fa-table"></i>
                  <p>Golongan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('master_data/list_satuan') ?>" class="nav-link">
                  <i class="fas fa-table"></i>
                  <p>Satuan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('master_data/list_kota') ?>" class="nav-link">
                  <i class="fas fa-table"></i>
                  <p>Kota</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('master_data/list_suplier') ?>" class="nav-link">
                  <i class="fas fa-user"></i>
                  <p>Suplier</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('master_data/list_pegawai') ?>" class="nav-link">
                  <i class="fas fa-user"></i>
                  <p>Pegawai</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('master_data/list_anggota') ?>" class="nav-link">
                  <i class="fas fa-user"></i>
                  <p>Anggota</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('master_data/list_toko') ?>" class="nav-link">
                  <i class="fas fa-table"></i>
                  <p>Toko</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- PENJUALAN -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Penjualan
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">2</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('penjualan') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>POS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('golongan') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Laporan Penjualan</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- STOCK -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-shopping-cart"></i>
              <p>
                Stock
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">2</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('barang') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Laporan Stock</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('golongan') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pengadaan</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- PANDUAN SISTEM -->
          <li class="nav-item">
            <a href="<?php echo base_url('panduan') ?>" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Buku Panduan
              </p>
            </a>
          </li>
          <!-- LOGOUT -->
          <li class="nav-item">
            <a href="<?php echo base_url('login/logut') ?>" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
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
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?php echo $title ?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard') ?>">Dashboard</a></li>
              <li class="breadcrumb-item active"><?php echo $title ?></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">

            <!-- /.card-header -->
            <div class="card-body">
