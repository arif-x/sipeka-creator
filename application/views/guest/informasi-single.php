  <div class="section is-header position-relative overflow-hidden">
    <div class="container position-relative">
      <div class="col lg-12">
        <div class="breadcrumb margin-bottom-double"><a href="<?= base_url() ?>">Home</a><span class="fa margin-left-small margin-right-small is-xsmall"></span><a href="<?= base_url('informasi') ?>">Informasi</a><span class="fa margin-left-small margin-right-small is-xsmall"></span><?= $informasi[0]['judul_informasi'] ?></div>
        <h1 class="heading-beta on-dark"><?= $informasi[0]['judul_informasi'] ?></h1>
      </div>
    </div>
    <div class="container flex-horizontal margin-bottom-double position-relative zindex5 on-dark">
      <div class="col lg-6 md-12">
        <div>
          <div class="text-medium weight-is-black margin-bottom"></div>
        </div>
      </div>
      <div class="col lg-2 no-margin-bottom"></div>
      <div class="col lg-4 md-12 md-order-last"></div>
      <div class="single-post-header-bg"></div>
    </div>
    <!-- <div class="container margin-bottom-double">
      <div class="col lg-12">
        <div class="c-article__date">June 7, 2019</div>
        <div class="c-article__date-divider"></div>
      </div>
    </div> -->
    <div class="container">
      <div class="col lg-12">
        <div class="c-article__date-divider"></div>
      </div>
    </div>
    <div class="container">
      <div class="col lg-12 md-12">
        <div class="rich-text w-richtext">
          <div class="margin-bottom-double">
            <img src="<?= $informasi[0]['img_informasi'] ?>" class="img-news img-center">
          </div>
          <?= $informasi[0]['konten'] ?>
        </div>
      </div>
    </div>
  </div>
  <div class="section">
    <div class="container">
      <div class="col lg-12">
        <div class="size-h2">Informasi Terbaru</div>
      </div>
    </div>
    <div class="container flex-horizontal">
      <?php foreach($latest as $key => $value){ ?>
        <div class="col lg-4 md-12"><img src="<?= $value['img_informasi'] ?>" alt="" class="margin-bottom img-news">
          <div class="c-gridpost__category"><a href="#"><?= $value['kategori_informasi'] ?></a></div>
          <h3 class="margin-bottom-small"><?= $value['judul_informasi'] ?></h3>
          <div class="margin-bottom"><!-- Nullam id dolor id nibh ultricies vehicula ut id elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. --></div><a href="<?= base_url('informasi/').$value['slug'] ?>" class="cta-link"><span class="margin-right">Lihat Lebih Lanjut</span> <span class="fa c-cta1_arrow-hovered"></span> <span class="fa c-cta1__arrow-normal"></span></a></div>
        <?php } ?>
      </div>
    </div>
