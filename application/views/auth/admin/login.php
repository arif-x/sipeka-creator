<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SIPEKA CREATOR | Login</title>
    <!-- core:css -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/core/core.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- end plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/fonts/feather-font/css/iconfont.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/demo_1/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="<?= base_url() ?>assets/images/favicon.png" />
</head>

<body>
    <div class="main-wrapper">
        <div class="page-wrapper full-page">
            <div class="page-content d-flex align-items-center justify-content-center">

                <div class="row w-100 mx-0 auth-page">
                    <div class="col-md-8 col-xl-6 mx-auto">
                        <div class="card">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="auth-left-wrapper" style="background-image: url('<?= base_url() ?>/assets_guest/images/auths.jpg')">
                                        
                                    </div>
                                </div>
                                <div class="col-md-8 pl-md-0">
                                    <div class="auth-form-wrapper px-4 py-5">
                                        <a href="#" class="noble-ui-logo d-block mb-2">SIPEKA <span>CREATOR</span></a>
                                        <h5 class="text-muted font-weight-normal mb-4">Selamat Datang Kembali</h5>
                                        <form class="forms-sample" action="<?= base_url() ?>admin/login" method="post">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input name="email" type="text" class="form-control" placeholder="Email">
                                            </div>
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input name="password" type="password" class="form-control" placeholder="Password">
                                            </div>
                                            <div class="mt-3">
                                                <button type="submit"
                                                class="btn btn-primary mr-2 mb-2 mb-md-0 text-white">Login</button>
                                                <a type="button" href="<?= base_url() ?>" 
                                                    class="btn btn-primary mr-2 mb-2 mb-md-0 text-white">Kembali ke Halaman Awal</a>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- core:js -->
        <script src="<?= base_url() ?>assets/vendors/core/core.js"></script>
        <!-- endinject -->
        <!-- plugin js for this page -->
        <!-- end plugin js for this page -->
        <!-- inject:js -->
        <script src="<?= base_url() ?>assets/vendors/feather-icons/feather.min.js"></script>
        <script src="<?= base_url() ?>assets/js/template.js"></script>
        <!-- endinject -->
        <!-- custom js for this page -->
        <!-- end custom js for this page -->
    </body>

    </html>
