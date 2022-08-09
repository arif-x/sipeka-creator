<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Thu Sep 05 2019 02:31:37 GMT+0000 (UTC)  -->
<html data-wf-page="5d68c92e8dfed95df459a334" data-wf-site="5d68c92e8dfed9e8e859a331">

<head>
  <meta charset="utf-8">
  <title>SIPEKA CREATOR | <?= $title ?></title>
  <meta content="SIPEKA CREATOR" property="og:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="<?= base_url() ?>assets_guest/css/normalize.css" rel="stylesheet" type="text/css">
  <link href="<?= base_url() ?>assets_guest/css/webflow.css" rel="stylesheet" type="text/css">
  <link href="<?= base_url() ?>assets_guest/css/etan.webflow.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <style type="text/css">
    .img-resizer {
      object-fit: cover !important;
      width: 500px !important;
      height: 150px;
    }

    .img-news {
      object-fit: cover !important;
      width: 500px !important;
      height: 300px;
    }

    .img-maps {
      width: 500px !important;
      height: auto;
    }

    .img-center {
      display: block;
      margin-left: auto;
      margin-right: auto;
    }

    .center-div {
      display: block;
      margin-left: auto;
      margin-right: auto;
    }

    .table {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    .table td,
    .table th {
      border: 1px solid #ddd;
      padding: 8px;
    }

    .table tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    .table tr:hover {
      background-color: #ddd;
    }

    .table th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #363B3A;
      color: white;
    }
  </style>
  <script type="text/javascript">
    WebFont.load({
      google: {
        families: ["Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic", "Inconsolata:400,700", "Merriweather:300,300italic,400,400italic,700,700italic,900,900italic", "Gothic A1:100,200,300,regular,500,600,700,800,900"]
      }
    });
  </script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">
    ! function(o, c) {
      var n = c.documentElement,
        t = " w-mod-";
      n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch")
    }(window, document);
  </script>
  <link href="<?= base_url() ?>assets_guest/icons/favicon.png" rel="shortcut icon" type="image/x-icon">
  <link href="<?= base_url() ?>assets_guest/icons/webclip.png" rel="apple-touch-icon">
</head>

<body>
  <div class="section-header position-absolute">
    <div class="container space-between align-middle">
      <div data-collapse="medium" data-animation="default" data-duration="400" class="navbar w-nav">
        <div class="navbar-container align-middle w-container">
          <div class="col lg-4 order-first no-padding-left no-margin-bottom flex-horizontal lg-2 md-4 xs-8">
            <div class="menu-and-logo-container order-first"><a data-w-id="7d050a59-b525-e710-dbfb-70b18fafaf10" href="#" class="offcanvas-button margin-right w-inline-block"><img src="<?= base_url() ?>assets_guest/images/burger-menu-icon-white.svg" alt=""></a>
              <a href="<?php echo base_url(); ?>" class="brand w-nav-brand">
                <h3 class="logotype on-dark">SIPEKA CREATOR</h3>
              </a>
            </div>
          </div>
          <div class="col lg-4 no-margin-bottom flexh-justify-center position-absolute-md lg-8">
            <nav role="navigation" class="nav-menu w-nav-menu">
              <a href="<?= base_url() ?>about" class="nav-link on-dark w-nav-link">About</a>
              <div data-hover="1" data-delay="0" data-w-id="7d050a59-b525-e710-dbfb-70b18fafaf1a" class="nav-dropdown w-dropdown">
                <div class="nav-link on-dark w-dropdown-toggle">
                  <div class="w-icon-dropdown-toggle"></div>
                  <div>Informasi</div>
                </div>
                <nav class="dropdown-list w-dropdown-list">
                  <a href="<?= base_url() ?>pelaku-ekraf" class="dropdown-link w-dropdown-link">Pelaku Ekraf</a>
                  <a href="<?= base_url() ?>event-ekraf" class="dropdown-link w-dropdown-link">Event Ekraf</a>
                  <a href="<?= base_url() ?>maps-wisata" class="dropdown-link w-dropdown-link">Maps Wisata</a>
                  <a href="<?= base_url() ?>daftar-wisata" class="dropdown-link w-dropdown-link">Daftar Wisata</a>
                  <a href="<?= base_url() ?>event-wisata" class="dropdown-link w-dropdown-link">Event Wisata</a>
                  <a href="<?= base_url() ?>informasi" class="dropdown-link w-dropdown-link">Informasi</a>
                </nav>
              </div>
              <a href="<?= base_url() ?>kontak" class="nav-link on-dark w-nav-link">Kontak</a>
          </div>
          <div class="menu-button w-nav-button"><img src="<?= base_url() ?>assets_guest/images/burger-menu-icon-white.svg" alt="" class="burger-menu-icon"></div>
          <div class="col lg-4 no-margin-bottom flexh-justify-end no-padding-right grow hidden-xs lg-2">
            <?php
            $CI = &get_instance();
            $CI->load->model('auth/admin_model', 'auth_model');

            $result = $CI->auth_model->current_user();
            if (!empty($result)) {
              echo '<div class="extra-menu"><a href="' . base_url() . 'admin/wisata" class="extra-menu-link margin-left nav-link on-dark">Dashboard</a></div>';
            } else {
              echo '<div class="extra-menu"><a href="' . base_url() . 'admin/login" class="extra-menu-link margin-left nav-link on-dark">Login Di Sini!</a></div>';
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>