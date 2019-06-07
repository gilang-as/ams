<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Profil - Ambalan Management System</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Sistem Management Ambalan Pramuka Pada SMA di Indonesia" name="description" />
        <meta content="Cyine ID" name="author" />
        <link rel="shortcut icon" href="<?php echo $domain;?>assets/images/favicon.ico">
        <link href="<?php echo $domain;?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $domain;?>assets/css/app.min.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div class="wrapper">
            <?php tema('navbar');?>
            <div class="content-page">
                <div class="content">
                    <?php tema('header');?>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Akun</a></li>
                                            <li class="breadcrumb-item active">Profile</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Profile</h4>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card bg-primary">
                                    <div class="card-body profile-user-box">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div class="media">
                                                    <span class="float-left m-2 mr-4"><img src="<?php echo $domain;?>assets/images/users/avatar-2.jpg" style="height: 100px;" alt="" class="rounded-circle img-thumbnail"></span>
                                                    <div class="media-body">
                                                        <h4 class="mt-1 mb-1 text-white"><?php echo $profil['nama'];?></h4>
                                                        <p class="font-13 text-white-50"><?php echo $profil['ambalan'];?></p>

                                                        <ul class="mb-0 list-inline text-light">
                                                            <li class="list-inline-item mr-3">
                                                                <h5 class="mb-1">6739</h5>
                                                                <p class="mb-0 font-13 text-white-50">Total Nilai Akademik</p>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <h5 class="mb-1">5482</h5>
                                                                <p class="mb-0 font-13 text-white-50">Total Nilai Praktik</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="text-center mt-sm-0 mt-3 text-sm-right">
                                                    <a href="<?php echo $domain."akun/edit/".$_SESSION['nis'];?>" class="btn btn-light">
                                                        <i class="mdi mdi-account-settings-variant mr-1"></i> Edit Profil
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card text-white bg-info">
                                    <div class="card-body">
                                        <div class="toll-free-box text-center">
                                            <h4> <i class="mdi mdi-deskphone"></i> Bantara</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mt-0 mb-3">Informasi</h4>
                                        <p class="text-muted font-13">
                                            <?php echo $profil['catatan'];?>
                                        </p>
                                        <hr/>
                                        <div class="text-left">
                                            <p class="text-muted"><strong>Nama :</strong> <span class="ml-2"><?php echo $profil['nama'];?></span></p>
                                            <p class="text-muted"><strong>Email :</strong> <span class="ml-2"><?php echo $profil['email'];?></span></p>
                                            <p class="text-muted"><strong>Hp :</strong><span class="ml-2"><?php echo $profil['hp'];?></span></p>
                                            <p class="text-muted"><strong>Whatsapp :</strong><span class="ml-2"><?php echo $profil['whatsapp'];?></span></p>
                                            <p class="text-muted"><strong>Telegram :</strong><span class="ml-2"><?php echo $profil['telegram'];?></span></p>
                                            <p class="text-muted"><strong>Email :</strong> <span class="ml-2"><?php echo $profil['email'];?></span></p>
                                            <p class="text-muted"><strong>Desa :</strong> <span class="ml-2"><?php echo $profil['desa'];?></span></p>
                                            <p class="text-muted"><strong>Kecamatan :</strong> <span class="ml-2"><?php echo $profil['kecamatan'];?></span></p>
                                            <p class="text-muted"><strong>Kabupaten :</strong> <span class="ml-2"><?php echo $profil['kabupaten'];?></span></p>
                                            <p class="text-muted mb-0"><strong>Sosial Media :</strong>
                                                <a class="d-inline-block ml-2 text-muted" title="" data-placement="top" data-toggle="tooltip" href="<?php echo $profil['facebook'];?>" data-original-title="Facebook"><i class="mdi mdi-facebook"></i></a>
                                                <a class="d-inline-block ml-2 text-muted" title="" data-placement="top" data-toggle="tooltip" href="<?php echo $profil['instagram'];?>" data-original-title="Instagram"><i class="mdi mdi-twitter"></i></a>
                                                <a class="d-inline-block ml-2 text-muted" title="" data-placement="top" data-toggle="tooltip" href="<?php echo $profil['vlezo'];?>" data-original-title="Skype"><i class="mdi mdi-skype"></i></a>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-3">Statistik Kegiatan</h4>
                                        <div style="height: 260px;" class="chartjs-chart">
                                            <canvas id="high-performing-product"></canvas>
                                        </div>        
                                    </div>
                                </div>
                                
                        <div class="row">
                            <div class="col-md-6 col-lg-2">
                                <div class="card d-block">
                                    <img class="card-img-top" src="<?php echo $domain;?>assets/images/small/small-1.jpg" alt="Card image cap">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-2">
                                <div class="card d-block">
                                    <img class="card-img-top" src="<?php echo $domain;?>assets/images/small/small-1.jpg" alt="Card image cap">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-2">
                                <div class="card d-block">
                                    <img class="card-img-top" src="<?php echo $domain;?>assets/images/small/small-1.jpg" alt="Card image cap">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-2">
                                <div class="card d-block">
                                    <img class="card-img-top" src="<?php echo $domain;?>assets/images/small/small-1.jpg" alt="Card image cap">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-2">
                                <div class="card d-block">
                                    <img class="card-img-top" src="<?php echo $domain;?>assets/images/small/small-1.jpg" alt="Card image cap">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-2">
                                <div class="card d-block">
                                    <img class="card-img-top" src="<?php echo $domain;?>assets/images/small/small-1.jpg" alt="Card image cap">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-2">
                                <div class="card d-block">
                                    <img class="card-img-top" src="<?php echo $domain;?>assets/images/small/small-1.jpg" alt="Card image cap">
                                </div>
                            </div>
                        </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php tema('footer');?>
            </div>
        </div>
        <!-- App js -->
        <script src="<?php echo $domain;?>assets/js/app.min.js"></script>
        <!-- third party js -->
        <script src="<?php echo $domain;?>assets/js/vendor/Chart.bundle.min.js"></script>
        <!-- third party js ends -->
        <!-- demo app -->
        <script src="<?php echo $domain;?>assets/js/pages/demo.profile.js"></script>
        <!-- end demo js-->
    </body>
</html>
