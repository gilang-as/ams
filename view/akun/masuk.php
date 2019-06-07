<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Masuk - Ambalan Management System</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Sistem Management Ambalan Pramuka Pada SMA di Indonesia" name="description" />
        <meta content="Cyine ID" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo $domain;?>assets/images/favicon.ico">
        <!-- App css -->
        <link href="<?php echo $domain;?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $domain;?>assets/css/app.min.css" rel="stylesheet" type="text/css" />

    </head>
    <body class="auth-fluid-pages pb-0">
        <div class="auth-fluid">
            <div class="auth-fluid-form-box">
                <div class="align-items-center d-flex h-100">
                    <div class="card-body">
                        <div class="auth-brand text-center text-lg-left">
                            <a href="index.html">
                                <span><img src="<?php echo $domain;?>assets/images/logo-dark.png" alt="" height="18"></span>
                            </a>
                        </div>
                        <h4 class="mt-0">Masuk</h4>
                        <p class="text-muted mb-4">Masukkan NIS atau Email and kata sandi untuk mengakses akun.</p>
                        <form method="POST">
                            <div class="form-group">
                                <label for="emailaddress">NIS / Alamat email</label>
                                <input class="form-control" type="text" id="nismail" name="nismail" placeholder="NIS atau Email">
                            </div>
                            <div class="form-group">
                                <a href="pages-recoverpw-2.html" class="text-muted float-right"><small>Lupa Kata Sandi?</small></a>
                                <label for="password">Kata Sandi</label>
                                <input class="form-control" type="password" name="password" id="password" placeholder="Masukkan Sandi">
                            </div>
                            <div class="form-group mb-3">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="checkbox-signin">
                                    <label class="custom-control-label" for="checkbox-signin">Ingat Selalu</label>
                                </div>
                            </div>
                            <div class="form-group mb-0 text-center">
                                <button class="btn btn-primary btn-block" type="submit"><i class="mdi mdi-login"></i> Masuk </button>
                            </div>
                            <!-- social-->
                            <div class="text-center mt-4">
                                <p class="text-muted font-16">Masuk dengan</p>
                                <ul class="social-list list-inline mt-3">
                                    <li class="list-inline-item">
                                        <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i class="mdi mdi-facebook"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="mdi mdi-google"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript: void(0);" class="social-list-item border-info text-info"><i class="mdi mdi-twitter"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-github-circle"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </form>
                        <footer class="footer footer-alt">
                            <p class="text-muted">Belum mempunyai akun? <a href="pages-register-2.html" class="text-dark ml-1"><b>Daftar</b></a></p>
                        </footer>
                    </div>
                </div>
            </div>
            <div class="auth-fluid-right text-center">
                <div class="auth-user-testimonial">
                    <h2 class="mb-3">Cintai Dunia!</h2>
                    <p class="lead"><i class="mdi mdi-format-quote-open"></i> Dunia bukan untuk dirusak. Cintailah dengan sepenuh hati. <i class="mdi mdi-format-quote-close"></i>
                    </p>
                    <p>
                        - Gilang Adi S
                    </p>
                </div>
            </div>
        </div>
        <!-- App js -->
        <script src="<?php echo $domain;?>assets/js/app.min.js"></script>
    </body>
</html>