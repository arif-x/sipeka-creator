<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Thu Sep 05 2019 02:31:37 GMT+0000 (UTC)  -->
<html data-wf-page="5d68c92e8dfed95df459a334" data-wf-site="5d68c92e8dfed9e8e859a331">

<head>
  <meta charset="utf-8">
  <title>SIPEKA CREATOR</title>
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
                <a href="#" class="brand w-nav-brand">
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
                    <a href="<?= base_url() ?>maps-wisata" class="dropdown-link w-dropdown-link">Maps Wisata</a>
                    <a href="<?= base_url() ?>daftar-wisata" class="dropdown-link w-dropdown-link">Daftar Wisata</a>
                    <a href="<?= base_url() ?>informasi-wisata" class="dropdown-link w-dropdown-link">Informasi Wisata</a>
                    <a href="<?= base_url() ?>event-wisata" class="dropdown-link w-dropdown-link">Event Wisata</a>
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
      <div class="section is-header _100vh position-relative flexv-justify-end">
        <div data-poster-url="<?= $slider[0]['slider'] ?>" data-video-urls="<?= $slider[0]['slider'] ?>,<?= $slider[0]['slider'] ?>" data-autoplay="true" data-loop="true" data-wf-ignore="true" class="bg-video w-background-video w-background-video-atom">
          <video autoplay="" loop="" style="background-image:url(&quot;<?= $slider[0]['slider'] ?>)" muted="" playsinline="" data-wf-ignore="true">
            <source src="<?= $slider[0]['slider'] ?>" data-wf-ignore="true">
              <source src="<?= $slider[0]['slider'] ?>" data-wf-ignore="true">
              </video>
            </div>
            <div data-delay="4000" data-animation="outin" data-autoplay="1" data-duration="500" data-infinite="1" data-w-id="ba5d81d6-f355-4907-f1e1-029f7110022c" style="opacity:0" class="c-hero1__slider relative-zindex10 on-dark w-slider">
              <div class="w-slider-mask">

            <?php
            foreach ($slider_text as $key => $value) {
            ?>
                <div data-w-id="3f5eea81-9fb1-a721-0d1d-72982ce34d08" class="w-slide">
                  <div class="container container-nested flex-horizontal">
                    <div class="col lg-7 md-12">
                      <h1 class="heading-beta on-dark">SIPEKA CREATOR</h1>
                    </div>
                    <div class="col lg-5 md-12 flexv-justify-end">
                      <p style="-webkit-transform:translate3d(0, 27PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 27PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 27PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 27PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0" class="text-large weight-is-thin"><?= $value['slider_text'] ?></p>
                    </div>
                  </div>
                  <div class="container container-nested">
                    <div class="col lg-12"><a href="<?= base_url() ?>admin/login" class="cta-link on-dark"><span class="margin-right">Login</span><span class="fa c-cta1_arrow-hovered"></span> <span class="fa c-cta1__arrow-normal"></span></a></div>
                  </div>
                </div>
                
            <?php } ?>
              </div>
              <div class="c-hero1__left-arrow w-slider-arrow-left">
                <div class="c-hero1__left-arrow-icon w-icon-slider-left"></div>
              </div>
              <div class="c-hero1__right-arrow w-slider-arrow-right">
                <div class="c-hero1__right-arrow-icon w-icon-slider-right"></div>
              </div>
              <div class="slide-nav w-slider-nav w-slider-nav-invert w-round"></div>
            </div>
            <div class="gradient-overlay"></div>
          </div>

          <div class="section">
            <div class="container">
              <div class="col lg-5 alignself-center md-12 no-margin-bottom-lg">
                <div class="pre-title-container">
                  <div class="pre-title is-left-aligned">Kategori</div>
                  <div class="pre-title-decoration"></div>
                </div>
                <h2>Kategori Pariwisata Populer</h2>
                <p class="margin-bottom-double">Berikut kategori populer pariwisata bagi anda untuk dikunjungi</p>
                <div class="container container-nested is-wrapped">
                  <?php foreach($kategori_populer as $key => $value){ ?>
                    <div class="col lg-6 md-12">
                      <img src="<?= $value['img_kategori_wisata'] ?>" alt="" class="img-resizer margin-bottom">
                      <h4 class="no-margin-bottom"><?= $value['kategori_wisata'] ?></h4>
                      <!-- <div>Deskripsi Pariwisata Kategori Danau</div> -->
                    </div>
                  <?php } ?>
                </div>
              </div>
              <div class="col lg-1 no-margin-bottom"></div>
              <div class="col lg-6 md-12 order-first md-margin-bottom-quad">
                <div class="image-w-stripe-container text-align-center">
                  <div data-w-id="fd7c503d-e1d8-b8ed-60dc-4039e8a9b3e9" class="stripes hidden-md"></div><img src="<?= base_url() ?>assets_guest/images/bali-beach.jpg" srcset="<?= base_url() ?>assets_guest/images/bali-beach.jpg, <?= base_url() ?>assets_guest/images/bali-beach.jpg" sizes="(max-width: 479px) 90vw, (max-width: 767px) 719px, (max-width: 773px) 93vw, (max-width: 991px) 719px, 45vw" alt="">
                </div>
              </div>
            </div>
          </div>

          <div class="section bg-accent">
            <div class="container flex-horizontal">
              <div class="col lg-4 flexv-space-between md-12">
                <div>
                  <div class="pre-title-container">
                    <div class="pre-title is-left-aligned">Who we are</div>
                    <div class="pre-title-decoration"></div>
                  </div>
                  <div class="size-h2">At Etan Consulting Network we&#x27;re all about you, so you can be about your business</div>
                </div><a href="#" class="cta-link"><span class="margin-right">let&#x27;s talk</span><span class="fa c-cta1_arrow-hovered"></span> <span class="fa c-cta1__arrow-normal"></span></a>
              </div>
              <div class="col lg-1 no-margin-bottom"></div>
              <div class="col lg-7 no-margin-bottom-lg md-12">
                <div class="margin-bottom-double text-large">Your business has its own unique challenges and opportunities when it comes to helping people connect, share and get work done. At Etan, we start with your end goals in mind, and work alongside you to achieve them. You’ll be amazed by what we can accomplish together.</div>
                <div class="container container-nested">
                  <div class="col lg-6 md-12 md-margin-bottom-small">
                    <div>Etan is one of the fastest growing business consulting groups in the U.S. with a strong local focus throughout the west. When you need assistance, we show up with a problem-solving attitude and a mind for innovation. </div>
                  </div>
                  <div class="col lg-6 md-12 no-margin-bottom-md">
                    <div class="no-margin-bottom-lg">We’re great communicators when it comes to assessing your needs and laying out your options. We also carry the highest levels of engineering certifications and recognitions.</div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="section position-relative overflow-hidden">
            <div class="background-img img1 align-left push-to-lg-3"></div>
            <div class="container">
              <div class="col lg-3 md-12"></div>
              <div class="col md-12">
                <div class="pre-title-container">
                  <div class="pre-title is-left-aligned">Populer</div>
                  <div class="pre-title-decoration"></div>
                </div>
                <h2>Tempat Pariwisata Populer</h2>
              </div>
            </div>
            <div class="container flex-horizontal is-wrapping">
              <?php foreach ($wisata_populer as $key => $value) { ?>
                <div class="col lg-3 md-12">
                  <img src="<?= $value['img'] ?>" alt="" class="img-resizer margin-right margin-bottom">
                  <h4 class="no-margin-bottom"><?= $value['nama_wisata'] ?></h4>
                  <div class="margin-bottom"><?= $value['deskripsi_wisata'] ?></div>
                </div>
              <?php } ?>
            </div>
          </div>

          <div class="section position-relative bg-accent">
            <div class="background-img img1 align-left push-to-lg-8 hidden-md"></div>
            <div class="container">
              <div class="col lg-8 md-12 no-margin-bottom"></div>
              <div class="col lg-4 no-margin-bottom md-12">
                <div class="pre-title-container">
                  <div class="pre-title is-left-aligned">Premium partners</div>
                  <div class="pre-title-decoration"></div>
                </div>
                <h2>World-class global brand organization</h2>
              </div>
            </div>
            <div class="container">
              <div class="col lg-7 md-12 no-margin-bottom">
                <div class="w-layout-grid c-grid4x2">
                  <?php foreach ($count as $key => $value) { ?>
                    <div class="text-align-center margin-top">
                      <h2><?= $value['jumlah'] ?></h2>
                      <?= $value['kategori_wisata'] ?>
                    </div>
                  <?php } ?>
                </div>
              </div>
              <div class="col lg-1"></div>
              <div class="col lg-4 flexv-space-between md-12">
                <div>
                  <div class="margin-bottom-double">We&#x27;ve succesfully helped Fortune 500 companies and enterprise clients untangle complex issues that always emerge during their digital evolution journey. Since 2017 we have been a visionary and a reliable software engineering partner for world-class brands.</div>
                </div><a href="#" class="cta-link"><span class="margin-right">Talk to our team</span><span class="fa c-cta1_arrow-hovered"></span> <span class="fa c-cta1__arrow-normal"></span></a>
              </div>
            </div>
          </div>

          <div class="section overflow-hidden">
            <div class="container is-fullwidth flex-horizontal">
              <div class="col lg-6 md-12">
                <div class="container">
                  <div class="col lg-12">
                    <div class="pre-title-container">
                      <div class="pre-title is-left-aligned">Persebaran Wisata</div>
                      <div class="pre-title-decoration"></div>
                    </div>
                    <h2>Persebaran Wisata</h2>
                  </div>
                </div>
                <div class="container is-wrapped">
                  <?php foreach($persebaran_wisata as $key => $value){ ?>
                    <div class="col lg-6 md-12">
                      <img src="<?= $value['img'] ?>" alt="" class="img-resizer margin-right margin-bottom">
                      <h4 class="no-margin-bottom"><?= $value['nama_wisata'] ?></h4>
                      <div class="margin-bottom"><?= $value['deskripsi_wisata'] ?></div>
                    </div>
                  <?php } ?>
                </div>
              </div>
              <div class="col lg-6 md-12 order-first position-relative">
                <div class="image-w-stripe-container2">
                  <script src='https://api.mapbox.com/mapbox.js/v3.3.1/mapbox.js'></script>
                  <link href='https://api.mapbox.com/mapbox.js/v3.3.1/mapbox.css' rel='stylesheet' />
                  <div class="image-as-bg" id="map">
                    <script type="text/javascript">
                      L.mapbox.accessToken = 'pk.eyJ1IjoiYXJpcG9uIiwiYSI6ImNrbjV3cmZ5NTA4aDUyd25zenk3MmlwYzgifQ.YbJ_Ir794eD8VlrVvpX64g';
                      var map = L.mapbox.map('map')
                      .setView([-7.9666204, 112.6326321], 7)
                      .addLayer(L.mapbox.styleLayer('mapbox://styles/mapbox/streets-v11'));
                      <?php foreach ($maps as $key => $value) { ?>
                        var marker = L.marker([<?= $value['latitude'] ?>, <?= $value['longitude'] ?>], {
                          icon: L.mapbox.marker.icon({
                            'marker-color': '#9c89cc'
                          })
                        })

                        .bindPopup("<strong><?= $value['nama_wisata'] ?></strong><br><img class='img-maps' src='<?= $value['img'] ?>'><br>")
                        .addTo(map);   
                      <?php } ?> 
                    </script>
                  </div>
                  <div data-w-id="f9f2bb5b-6ce5-7adb-0a16-77d28b901ea1" class="stripes2">
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="section">
            <div class="container">
              <div class="col lg-12">
                <div class="pre-title-container">
                  <div class="pre-title is-left-aligned position-relative">Informasi & Berita</div>
                  <div class="pre-title-decoration"></div>
                </div>
              </div>
            </div>
            <div class="container">
              <div class="col lg-12">
                <h2>Informasi & Berita</h2>
                <div class="w-layout-grid c-grid2">
                  <?php foreach ($informasi as $key => $value) { ?>
                    <a id="w-node-6c39528a0eb5-f459a334" href="<?= base_url('informasi-wisata/').$value['slug'] ?>" class="c-grid1__item w-inline-block" style="background-image: url('<?= $value['img_informasi'] ?>');background-position: 50% 50%; background-size: cover;">
                      <div class="c-grid1__overlay">
                        <div class="c-grid__category"><?= $value['kategori_informasi'] ?></div>
                        <div class="c-grid1__title"><?= $value['judul_informasi'] ?></div>
                      </div>
                    </a>
                  <?php }?>
                </div>
              </div>
            </div>
          </div>

          <div class="section section-footer-dark padding-bottom-16">
            <div class="container margin-bottom">
              <div class="col lg-2 md-12 md-order-first">
                <h3 class="logotype on-dark">SIPEKA CREATOR</h3>
              </div>
              <div class="col lg-6 md-12 no-margin-bottom">
                <div class="container container-nested">
                  <div class="col lg-4 md-12">
                    <h4>Service</h4><a href="#" class="footer-nav-link on-dark">Development team</a><a href="#" class="footer-nav-link on-dark">Mobile app</a><a href="#" class="footer-nav-link on-dark">Enterprise software</a><a href="#" class="footer-nav-link on-dark">DevOps</a>
                  </div>
                  <div class="col lg-4 md-12">
                    <h4>Company</h4><a href="#" class="footer-nav-link on-dark">About</a><a href="#" class="footer-nav-link on-dark">Our Work</a><a href="#" class="footer-nav-link on-dark">News</a><a href="#" class="footer-nav-link on-dark">Career</a>
                  </div>
                  <div class="col lg-4 no-margin-bottom-lg md-12">
                    <h4>Let&#x27;s connect</h4>
                    <a href="#" class="footer-nav-link-2 on-dark w-inline-block">
                      <div><span class="fa-brand w24"></span> LinkedIn</div>
                    </a>
                    <a href="#" class="footer-nav-link-2 on-dark w-inline-block">
                      <div><span class="fa-brand w24"></span> Youtube</div>
                    </a>
                    <a href="#" class="footer-nav-link-2 on-dark w-inline-block">
                      <div><span class="fa-brand w24"></span> Facebook</div>
                    </a>
                    <a href="#" class="footer-nav-link-2 on-dark w-inline-block">
                      <div><span class="fa-brand w24"></span> Instagram</div>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col lg-4 md-12 no-margin-bottom">
                <h4 class="margin-bottom">Subscribe</h4>
                <div class="margin-bottom w-form">
                  <form id="email-form" name="email-form" data-name="Email Form" class="flexh-align-center"><input type="email" class="form-input-text is-grey margin-right-small no-margin-bottom md-margin-bottom w-input" maxlength="256" name="email-2" data-name="Email 2" placeholder="Enter your email address" id="email-2" required=""><input type="submit" value="Subscribe" data-wait="Please wait..." class="button-primary button-primary-small w-button"></form>
                  <div class="w-form-done">
                    <div>Thank you! Your submission has been received!</div>
                  </div>
                  <div class="w-form-fail">
                    <div>Oops! Something went wrong while submitting the form.</div>
                  </div>
                </div>
                <div class="margin-bottom low-text-contrast text-small">Join our newsletter to stay up to date on features and releases</div>
              </div>
            </div>
            <div class="container">
              <div class="col lg-12 margin-bottom">
                <div class="hr"></div>
              </div>
            </div>
            <div class="container">
              <div class="col lg-6 no-margin-bottom md-12 md-order-last">
                <div class="low-text-contrast text-small flexh-space-between md-flex-vertical">
                  <div class="md-order-last">©2019 Etan Kali, Co. All rights reserved. </div><a href="#" class="footer-bottom-link">Privacy Policy</a><a href="#" class="footer-bottom-link">Term Of Service</a>
                </div>
              </div>
              <div class="col lg-6 no-margin-bottom md-12">
                <div class="w100 text-align-right footer-bottom md-text-align-left margin-bottom">Made in Surabaja, Indonesia</div>
              </div>
            </div>
          </div>
          <div class="offcanvas-overlay">
            <div class="offcanvas-menu-list">
              <div data-w-id="b972cccf-195b-c621-4be6-a86d09c1bdb0" class="fa on-dark close-button-offcanvas"></div>
              <div class="offcanvas-menu-item-wrapper"><a href="<?= base_url() ?>" class="offcanvas-menu-item item1">Home</a></div>
              <div class="offcanvas-menu-item-wrapper"><a href="<?= base_url() ?>maps-wisata" class="offcanvas-menu-item item1">Maps Wisata</a></div>
              <div class="offcanvas-menu-item-wrapper"><a href="<?= base_url() ?>daftar-wisata" class="offcanvas-menu-item item2">Daftar Wisata</a></div>
              <div class="offcanvas-menu-item-wrapper"><a href="<?= base_url() ?>informasi-wisata" class="offcanvas-menu-item item3">Informasi Wisata</a></div>
              <div class="offcanvas-menu-item-wrapper"><a href="<?= base_url() ?>event-wisata" class="offcanvas-menu-item item4">Event Wisata</a></div>
              <?php
              $CI = &get_instance();
              $CI->load->model('auth/admin_model', 'auth_model');

              $result = $CI->auth_model->current_user();
              if (!empty($result)) {
                echo '<div class="offcanvas-menu-item-wrapper"><a href="'.base_url().'admin/wisata" class="offcanvas-menu-item item4">Dashboard</a></div>';
              } else {
                echo '<div class="offcanvas-menu-item-wrapper"><a href="'.base_url().'admin/login" class="offcanvas-menu-item item4">Login</a></div>';
              }
              ?>
            </div>
          </div>
          <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.4.1.min.220afd743d.js" type="text/javascript" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
          <script src="<?= base_url() ?>assets_guest/js/webflow.js" type="text/javascript"></script>
          <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
          </body>

          </html>