<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Daftar Surat Keluar - Ambalan Management System</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo $domain;?>assets/images/favicon.ico">
        <!-- third party css -->
        <link href="<?php echo $domain;?>assets/css/vendor/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $domain;?>assets/css/vendor/responsive.bootstrap4.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $domain;?>assets/css/vendor/buttons.bootstrap4.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $domain;?>assets/css/vendor/select.bootstrap4.css" rel="stylesheet" type="text/css" />
        <!-- App css -->
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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Beranda</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Surat</a></li>
                                            <li class="breadcrumb-item active">Keluar</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Surat Keluar</h4>
                                </div>
                            </div>
                        </div> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Daftar Surat Keluar</h4>
                                        <p class="text-muted font-14 mb-4">Daftar Surat Keluar yang sudah di inputkan oleh pengguna yang memiliki akses.</p>
                                        <table id="datatable-buttons" class="table table-striped dt-responsive nowrap" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Kegiatan</th>
                                                    <th>Tujuan</th>
                                                    <th>No Surat</th>
                                                    <th>Tanggal</th>
                                                    <th>Perihal</th>
                                                    <th>Pengaturan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $data = daftar_surat_keluar($_SESSION['angkatan']);
                                                $no=1;
                                                while($row=mysqli_fetch_array($data)){ 
                                                ?>
                                                <tr>
                                                    <td><?php echo $no;?></td>
                                                    <td><?php echo $row['kegiatan'];?></td>
                                                    <td><?php echo $row['tujuan'];?></td>
                                                    <td><?php echo $row['no_surat'];?></td>
                                                    <td><?php echo $row['tanggal'];?></td>
                                                    <td><?php echo $row['perihal'];?></td>
                                                    <td>
                                                        <div class="btn-group mb-2">
                                                            <a href="<?php echo $domain.'surat/keluar/hapus/'.$row['id'];?>" class="btn btn-danger"><i class="mdi mdi-delete"></i></a>
                                                            <a href="<?php echo $domain.'surat/keluar/detail/'.$row['id'];?>" class="btn btn-primary"><i class="mdi mdi-eye"></i></a>
                                                            <a href="<?php echo $domain.'surat/keluar/edit/'.$row['id'];?>" class="btn btn-success"><i class="mdi mdi-playlist-edit"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <?php
                                                $no++;
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="card widget-flat bg-success text-white">
                                                                <div class="card-body">
                                                                    <div class="float-right">
                                                                        <i class="mdi mdi-account-multiple widget-icon bg-white text-success"></i>
                                                                    </div>
                                                                    <h6 class="text-uppercase mt-0" title="Customers">Total Surat Keluar</h6>
                                                                    <h3 class="mt-3 mb-3"><?php echo total_surat_keluar($_SESSION['angkatan']);?></h3>
                                                                    <p class="mb-0">
                                                                        <span class="text-nowrap">Berdasarkan Angkatan</span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="card widget-flat bg-success text-white">
                                                                <div class="card-body">
                                                                    <div class="float-right">
                                                                        <i class="mdi mdi-account-multiple widget-icon bg-white text-success"></i>
                                                                    </div>
                                                                    <h6 class="text-uppercase mt-0" title="Customers">Total Surat</h6>
                                                                    <h3 class="mt-3 mb-3"><?php echo total_surat();?></h3>
                                                                    <p class="mb-0">
                                                                        <span class="text-nowrap">Semua</span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="card widget-flat bg-success text-white">
                                                                <div class="card-body">
                                                                    <div class="float-right">
                                                                        <i class="mdi mdi-account-multiple widget-icon bg-white text-success"></i>
                                                                    </div>
                                                                    <h6 class="text-uppercase mt-0" title="Customers">Total Surat Masuk</h6>
                                                                    <h3 class="mt-3 mb-3"><?php echo total_surat_masuk($_SESSION['angkatan']);?></h3>
                                                                    <p class="mb-0">
                                                                        <span class="text-nowrap">Berdasarkan Angkatan</span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="card widget-flat bg-success text-white">
                                                                <div class="card-body">
                                                                    <div class="float-right">
                                                                        <i class="mdi mdi-account-multiple widget-icon bg-white text-success"></i>
                                                                    </div>
                                                                    <h6 class="text-uppercase mt-0" title="Customers">Total Surat</h6>
                                                                    <h3 class="mt-3 mb-3"><?php echo total_surat_angkatan($_SESSION['angkatan']);?></h3>
                                                                    <p class="mb-0">
                                                                        <span class="text-nowrap">Berdasarkan Angkatan</span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="card text-white bg-info">
                                                <div class="card-body">
                                                    <div class="toll-free-box text-center">
                                                        <h4> <i class="mdi mdi-deskphone"></i> Toll Free : 1-234-567-8901</h4>
                                                    </div>
                                                </div> <!-- end card-body-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="header-title">Cetak Daftar Surat Keluar</h4>
                                        <p class="text-muted">
                                            Cetak daftar surat keluar yang sudah di inputkan berdasarkan tahun angkatan.
                                        </p>

                                        <form>
                                            <div class="form-group mb-3">
                                                <label for="example-input-small">Small</label>
                                                <input type="text" id="example-input-small" name="example-input-small" class="form-control form-control-sm" placeholder=".input-sm">
                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="example-input-normal">Normal</label>
                                                <input type="text" id="example-input-normal" name="example-input-normal" class="form-control" placeholder="Normal">
                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="example-input-large">Large</label>
                                                <input type="text" id="example-input-large" name="example-input-large" class="form-control form-control-lg" placeholder=".input-lg">
                                            </div>

                                            <div class="form-group mb-2">
                                                <label for="example-gridsize">Grid Sizes</label>
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <input type="text" id="example-gridsize" class="form-control" placeholder=".col-sm-4">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <?php tema('footer');?>
            </div>

        </div>
        <!-- END wrapper -->

        <!-- App js -->
        <script src="<?php echo $domain;?>assets/js/app.min.js"></script>
        <!-- third party js -->
        <script src="<?php echo $domain;?>assets/js/vendor/jquery.dataTables.js"></script>
        <script src="<?php echo $domain;?>assets/js/vendor/dataTables.bootstrap4.js"></script>
        <script src="<?php echo $domain;?>assets/js/vendor/dataTables.responsive.min.js"></script>
        <script src="<?php echo $domain;?>assets/js/vendor/responsive.bootstrap4.min.js"></script>
        <script src="<?php echo $domain;?>assets/js/vendor/dataTables.buttons.min.js"></script>
        <script src="<?php echo $domain;?>assets/js/vendor/buttons.bootstrap4.min.js"></script>
        <script src="<?php echo $domain;?>assets/js/vendor/buttons.html5.min.js"></script>
        <script src="<?php echo $domain;?>assets/js/vendor/buttons.flash.min.js"></script>
        <script src="<?php echo $domain;?>assets/js/vendor/buttons.print.min.js"></script>
        <script src="<?php echo $domain;?>assets/js/vendor/dataTables.keyTable.min.js"></script>
        <script src="<?php echo $domain;?>assets/js/vendor/dataTables.select.min.js"></script>
        <!-- demo app -->
        <script src="<?php echo $domain;?>assets/js/pages/demo.datatable-init.js"></script>
    </body>
</html>
