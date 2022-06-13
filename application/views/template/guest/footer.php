
<div class="section section-footer-dark padding-bottom-16">
  <div class="container margin-bottom">
    <div class="col lg-2 md-12 md-order-first">
      <h3 class="logotype on-dark">SIPEKA CREATOR</h3>
    </div>
    <div class="col lg-6 md-12 no-margin-bottom">
      <div class="container container-nested">
        <div class="col lg-4 md-12">
          <h4>Service</h4><a href="#" class="footer-nav-link on-dark">Development team</a><a href="#" class="footer-nav-link on-dark">Mobile app</a><a href="#" class="footer-nav-link on-dark">Enterprise software</a><a href="#" class="footer-nav-link on-dark">DevOps</a></div>
          <div class="col lg-4 md-12">
            <h4>Company</h4><a href="#" class="footer-nav-link on-dark">About</a><a href="#" class="footer-nav-link on-dark">Our Work</a><a href="#" class="footer-nav-link on-dark">News</a><a href="#" class="footer-nav-link on-dark">Career</a></div>
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
            <div class="md-order-last">©2019 Etan Kali, Co. All rights reserved. </div><a href="#" class="footer-bottom-link">Privacy Policy</a><a href="#" class="footer-bottom-link">Term Of Service</a></div>
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