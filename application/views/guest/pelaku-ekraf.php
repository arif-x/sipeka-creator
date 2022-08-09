<!-- <div class="section is-header bg-accent-dark img-blog overflow-hidden position-relative" style="background-image: url('http://localhost/wisata/upload/wisata/bg_wisata.png'); -->

<div class="section is-header bg-accent-dark img-blog overflow-hidden position-relative" style="background-image: url('<?= base_url('upload/wisata/bg_wisata.png') ?>');

  background-position: 47vw 50%;
  background-size: 1230px;
  background-repeat: no-repeat;">
  <div class="container flex-horizontal position-relative">
    <div class="col lg-7 md-12">
      <div class="breadcrumb margin-bottom-double"><a href="<?= base_url() ?>">Home</a><span class="fa margin-left-small margin-right-small is-xsmall"></span>Pelaku Ekraf</div>
      <div class="header-content-wrapper-3">
        <div class="c-gridpost__category"><a href="#"><?= $latest_single[0]['kategori'] ?></a></div>
        <a href="<?= base_url('pelaku-ekraf/detail/') . $latest_single[0]['id_pelaku_ekraf'] ?>" class="color-body-text white-md w-inline-block">
          <h1 class="margin-bottom-small"><?= $latest_single[0]['nama_lengkap'] ?></h1>
          <div class="margin-bottom text-large"></div>
        </a><a href="<?= base_url('pelaku-ekraf/detail/') . $latest_single[0]['id_pelaku_ekraf'] ?>" class="cta-link"><span class="margin-right">Lihat Lebih Lanjut</span> <span class="fa c-cta1_arrow-hovered"></span> <span class="fa c-cta1__arrow-normal"></span></a>
      </div>
    </div>
    <div class="col lg-5 no-margin-bottom"></div>
  </div>
  <div class="gradient-overlay hidden-only-lg"></div>
</div>


<div class="section">
  <div class="container flex-horizontal container-wrap">
    <?php foreach ($pelaku_ekraf as $key => $value) { ?>
      <div class="col lg-4 md-12 margin-bottom-quad"><a href="<?= base_url('pelaku-ekraf/detail/') . $value['id_pelaku_ekraf'] ?>" class="w-inline-block"><img src="<?= base_url() ?>assets_guest/person.png" alt="" class="margin-bottom img-news"></a>
        <div class="c-gridpost__category"><a href="#"><?= $value['kategori'] ?></a></div>
        <h3 class="margin-bottom-small"><?= $value['nama_lengkap'] ?></h3><a href="<?= base_url('pelaku-ekraf/detail/') . $value['id_pelaku_ekraf'] ?>" class="cta-link"><span class="margin-right">Lihat Lebih Lanjut</span> <span class="fa c-cta1_arrow-hovered"></span> <span class="fa c-cta1__arrow-normal"></span></a>
      </div>

    <?php } ?>

  </div>
  <div class="container">
    <div class="col lg-12 center-div">
      <?= $pagination ?>
    </div>
    <style type="text/css">
      /* Pagination styles */
      .pagination {
        display: flex;
        padding: 1em 0;
      }

      .pagination a,
      .pagination strong {
        border: 1px solid silver;
        border-radius: 8px;
        color: black;
        padding: 0.5em;
        margin-right: 0.5em;
        text-decoration: none;
      }

      .pagination a:hover,
      .pagination strong {
        border: 1px solid #009DAA;
        background-color: #009DAA;
        color: white;
      }
    </style>
  </div>
</div>