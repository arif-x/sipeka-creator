  <div class="section is-header position-relative overflow-hidden">
    <div class="container position-relative">
      <div class="col lg-12">
        <div class="breadcrumb margin-bottom-double"><a href="<?= base_url() ?>">Home</a><span class="fa margin-left-small margin-right-small is-xsmall"></span><a href="<?= base_url('pelaku-ekraf') ?>">Pelaku Ekraf</a><span class="fa margin-left-small margin-right-small is-xsmall"></span><?= $pelaku[0]['nama_lengkap'] ?></div>
        <h1 class="heading-beta on-dark"><?= $pelaku[0]['nama_lengkap'] ?></h1>
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
                      <div class="pre-title is-left-aligned">Deskripsi Pelaku Ekraf</div>
                      <div class="pre-title-decoration"></div>
                    </div>
                    <h2><?= $pelaku[0]['nama_lengkap'] ?></h2>
                  </div>
                </div>
                <div class="container is-wrapped">
                  <div class="col lg-6 md-12">
                    <h4>Nama Wisata</h4>
                    <div><?= $pelaku[0]['nama_lengkap'] ?></div>
                  </div>
                
                  <div class="col lg-6 md-12">
                    <h4>Jenis Wisata</h4>
                    <div><?= $pelaku[0]['kategori'] ?></div>
                  </div>
                
                  <div class="col lg-6 md-12">
                    <h4>No. HP Wisata</h4>
                    <div><?= $pelaku[0]['email'] ?></div>
                  </div>
                
                  <div class="col lg-6 md-12">
                    <h4>Email Wisata</h4>
                    <div><?= $pelaku[0]['no_hp'] ?></div>
                  </div>
                
                  <div class="col lg-6 md-12">
                    <h4>Website Wisata</h4>
                    <div><?= $pelaku[0]['website'] ?></div>
                  </div>
                
                  <div class="col lg-6 md-12">
                    <h4>Alamat Wisata</h4>
                    <div><?= $pelaku[0]['alamat'] ?></div>
                  </div>
                
                  <div class="col lg-6 md-12">
                    <h4>Deskripsi Wisata</h4>
                    <div><?= $pelaku[0]['deskripsi'] ?></div>
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
        <div class="col lg-4 md-12"><img src="<?= base_url() ?>assets_guest/person.png" alt="" class="margin-bottom img-news">
          <div class="c-gridpost__category"><a href="#"><?= $value['kategori'] ?></a></div>
          <h3 class="margin-bottom-small"><?= $value['nama_lengkap'] ?></h3>
          <div class="margin-bottom"></div><a href="<?= base_url('pelaku-ekraf/').$value['id_pelaku_ekraf'] ?>" class="cta-link"><span class="margin-right">Lihat Lebih Lanjut</span> <span class="fa c-cta1_arrow-hovered"></span> <span class="fa c-cta1__arrow-normal"></span></a></div>
        <?php } ?>
      </div>
    </div>