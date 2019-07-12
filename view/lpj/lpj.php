<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Daftar Laporan Pertanggung Jawaban - Ambalan Management System</title>
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
                                            <li class="breadcrumb-item active">LPJ</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Laporan Pertanggung Jawaban</h4>
                                </div>
                            </div>
                        </div> 
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Daftar LPJ</h4>
                                        <p class="text-muted font-14 mb-4">Daftar LPJ yang sudah di inputkan</p>
                                        <table id="datatable-buttons" class="table table-striped dt-responsive nowrap" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Kegiatan</th>
                                                    <th>Keterangan</th>
                                                    <th>Unduh</th>
                                                    <th>Pengaturan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $data = daftar_lpj($_SESSION['angkatan'], $_SESSION['ambalan']);
                                                $no=1;
                                                while($row=mysqli_fetch_array($data)){ 
                                                ?>
                                                <tr>
                                                    <td><?php echo $no;?></td>
                                                    <td><?php echo $row['nama'];?></td>
                                                    <td><?php echo $row['keterangan'];?></td>
                                                    <td>
                                                    <a href="<?php echo $domain.'upload/lpj/'.$row['file'];?>" class="btn btn-primary"><i class="mdi mdi-download"></i></a>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group mb-2">
                                                            <a href="<?php echo $domain.'lpj/hapus/'.$row['id'];?>" class="btn btn-danger"><i class="mdi mdi-delete"></i></a>
                                                            <a href="<?php echo $domain.'lpj/edit/'.$row['id'];?>" class="btn btn-success"><i class="mdi mdi-playlist-edit"></i></a>
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
                    </div>
                </div>
                <?php tema('footer');?>
            </div>

        </div>
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
