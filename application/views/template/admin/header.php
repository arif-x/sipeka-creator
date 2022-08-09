<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>SIPEKA CREATOR | <?= $title ?></title>
  <!-- core:css -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/core/core.css">
  <!-- endinject -->
  <!-- Datatable -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
  <!-- end plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/fonts/feather-font/css/iconfont.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/flag-icon-css/css/flag-icon.min.css">
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/demo_1/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="<?= base_url() ?>assets/images/favicon.png" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> 
</head>

<body>
  <div class="main-wrapper">

    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar">
      <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
          Sipeka <span>Creator</span>
        </a>
      </div>
      <div class="sidebar-body">
        <ul class="nav">
          <li class="nav-item nav-category">Kembali Ke Homepage</li>
          <li class="nav-item">
            <a href="<?= base_url() ?>" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Home</span>
            </a>
          </li>
          <li class="nav-item nav-category">Dashboard</li>
          <li class="nav-item">
            <a href="<?= base_url() ?>admin/pelaku-ekraf" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Data Pelaku Ekraf</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url() ?>admin/event-ekraf" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Data Event Ekraf</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url() ?>admin/wisata" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Data Wisata</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url() ?>admin/informasi" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Data Informasi</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url() ?>admin/event" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Data Event</span>
            </a>
          </li>
          <li class="nav-item nav-category">Kategori</li>
          <li class="nav-item">
            <a href="<?= base_url() ?>admin/kategori/wisata" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Kategori Wisata</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url() ?>admin/kategori/informasi" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Kategori Informasi</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url() ?>admin/kategori/event" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Kategori Event</span>
            </a>
          </li>
          <li class="nav-item nav-category">Konfigurasi</li>
          <li class="nav-item">
            <a href="<?= base_url() ?>admin/slider" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Slider Video</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url() ?>admin/slider-text" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Slider Text</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url() ?>admin/config" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Konfigurasi</span>
            </a>
          </li>
          <li class="nav-item nav-category">Logout</li>
          <li class="nav-item">
            <a href="<?= base_url() ?>admin/logout" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Logout</span>
            </a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- partial -->

    <div class="page-wrapper">

      <!-- partial:partials/_navbar.html -->
      <nav class="navbar">
        <a href="#" class="sidebar-toggler">
          <i data-feather="menu"></i>
        </a>
        <div class="navbar-content">
          
        </div>
      </nav>
      <!-- partial -->