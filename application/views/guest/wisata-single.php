  <div class="section is-header position-relative overflow-hidden">
    <div class="container position-relative">
      <div class="col lg-12">
        <div class="breadcrumb margin-bottom-double"><a href="<?= base_url() ?>">Home</a><span class="fa margin-left-small margin-right-small is-xsmall"></span><a href="<?= base_url('daftar-wisata') ?>">Wisata</a><span class="fa margin-left-small margin-right-small is-xsmall"></span><?= $wisata[0]['nama_wisata'] ?></div>
        <h1 class="heading-beta on-dark"><?= $wisata[0]['nama_wisata'] ?></h1>
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
      <div class="col lg-12 md-12">
        <div class="rich-text w-richtext">
          <div class="margin-bottom-double">
            <div class="container is-fullwidth flex-horizontal">
              <div class="col lg-6 md-12">
                <div class="container">
                  <div class="col lg-12">
                    <div class="pre-title-container">
                      <div class="pre-title is-left-aligned">Deskripsi Wisata</div>
                      <div class="pre-title-decoration"></div>
                    </div>
                    <h2><?= $wisata[0]['nama_wisata'] ?></h2>
                  </div>
                </div>
                <div class="container is-wrapped">
                  <div class="col lg-6 md-12">
                    <h4>Nama Wisata</h4>
                    <div><?= $wisata[0]['nama_wisata'] ?></div>
                  </div>
                
                  <div class="col lg-6 md-12">
                    <h4>Jenis Wisata</h4>
                    <div><?= $wisata[0]['kategori_wisata'] ?></div>
                  </div>
                
                  <div class="col lg-6 md-12">
                    <h4>No. HP Wisata</h4>
                    <div><?= $wisata[0]['no_hp_wisata'] ?></div>
                  </div>
                
                  <div class="col lg-6 md-12">
                    <h4>Email Wisata</h4>
                    <div><?= $wisata[0]['email_wisata'] ?></div>
                  </div>
                
                  <div class="col lg-6 md-12">
                    <h4>Website Wisata</h4>
                    <div><?= $wisata[0]['website_wisata'] ?></div>
                  </div>
                
                  <div class="col lg-6 md-12">
                    <h4>Alamat Wisata</h4>
                    <div><?= $wisata[0]['alamat_wisata'] ?></div>
                  </div>
                
                  <div class="col lg-6 md-12">
                    <h4>Maps Wisata</h4>
                    <div><?= $wisata[0]['latitude'] . ' - ' . $wisata[0]['longitude'] ?></div>
                  </div>
                
                  <div class="col lg-6 md-12">
                    <h4>Deskripsi Wisata</h4>
                    <div><?= $wisata[0]['deskripsi_wisata'] ?></div>
                  </div>
                
                  <div class="col lg-6 md-12">
                    <h4>Provinsi</h4>
                    <div><?= $wisata[0]['nama_provinsi'] ?></div>
                  </div>
                
                  <div class="col lg-6 md-12">
                    <h4>Kabupaten/Kota</h4>
                    <div><?= $wisata[0]['nama_kota_kab'] ?></div>
                  </div>
                
                  <div class="col lg-6 md-12">
                    <h4>Kabupaten/Kota</h4>
                    <div><?= $wisata[0]['nama_kota_kab'] ?></div>
                  </div>
                
                  <div class="col lg-6 md-12">
                    <h4>Kecamatan</h4>
                    <div><?= $wisata[0]['nama_kecamatan'] ?></div>
                  </div>
                
                  <div class="col lg-6 md-12">
                    <h4>Desa/Kelurahan</h4>
                    <div><?= $wisata[0]['nama_desa_kelurahan'] ?></div>
                  </div>
                </div>
              </div>
              <div class="col lg-6 md-12 order-first position-relative">
                <div class="image-w-stripe-container2" style="background-image: url('<?= $wisata[0]["img"] ?>'); background-repeat: no-repeat;">
                  <!-- <img src="<?= $wisata[0]['img'] ?>"> -->
                  <div data-w-id="f9f2bb5b-6ce5-7adb-0a16-77d28b901ea1" class="stripes2">
                  </div>
                </div>
              </div>
            </div>
          </div>

      </div>
    </div>
  </div>
  <div class="section">
    <div class="container">
      <div class="col lg-12">
        <div class="size-h2">Wisata Lainnya</div>
      </div>
    </div>
    <div class="container flex-horizontal">
      <?php foreach($latest as $key => $value){ ?>
        <div class="col lg-4 md-12"><img src="<?= $value['img'] ?>" alt="" class="margin-bottom img-news">
          <div class="c-gridpost__category"><a href="#"><?= $value['kategori_wisata'] ?></a></div>
          <h3 class="margin-bottom-small"><?= $value['nama_wisata'] ?></h3>
          <div class="margin-bottom"><!-- Nullam id dolor id nibh ultricies vehicula ut id elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. --></div><a href="<?= base_url('daftar-wisata/').$value['slug'] ?>" class="cta-link"><span class="margin-right">Lihat Lebih Lanjut</span> <span class="fa c-cta1_arrow-hovered"></span> <span class="fa c-cta1__arrow-normal"></span></a></div>
        <?php } ?>
      </div>
    </div>