<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Daftar Proposal - Ambalan Management System</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo $domain;?>assets/images/favicon.ico">

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
                                            <li class="breadcrumb-item active">Proposal</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Proposal</h4>
                                </div>
                            </div>
                        </div> 
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Daftar Surat Masuk</h4>
                                        <p class="text-muted font-14 mb-4">Daftar surat masuk yang sudah di inputkan</p>
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
                                                $data = daftar_proposal($_SESSION['angkatan']);
                                                $no=1;
                                                while($row=mysqli_fetch_array($data)){ 
                                                ?>
                                                <tr>
                                                    <td><?php echo $no;?></td>
                                                    <td><?php echo $row['tanggal'];?></td>
                                                    <td><?php echo $row['perihal'];?></td>
                                                    <td>
                                                        <div class="btn-group mb-2">
                                                            <a href="<?php echo $domain.'surat/masuk/hapus/'.$row['id'];?>" class="btn btn-danger"><i class="mdi mdi-delete"></i></a>
                                                            <a href="<?php echo $domain.'surat/masuk/detail/'.$row['id'];?>" class="btn btn-primary"><i class="mdi mdi-eye"></i></a>
                                                            <a href="<?php echo $domain.'surat/masuk/edit/'.$row['id'];?>" class="btn btn-success"><i class="mdi mdi-playlist-edit"></i></a>
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
        <!-- END wrapper -->

        <!-- App js -->
        <script src="<?php echo $domain;?>assets/js/app.min.js"></script>
    </body>
</html>
