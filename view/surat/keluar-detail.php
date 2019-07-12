<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Detail Surat Keluar - Ambalan Management System</title>
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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Surat</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Keluar</a></li>
                                            <li class="breadcrumb-item active">Detail</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Detail Surat Keluar</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <!-- Invoice Logo-->
                                        <div class="clearfix">
                                            <div class="float-left mb-3">
                                                <img src="<?php echo $domain;?>assets/images/logo-dark.png" alt="" height="18">
                                            </div>
                                            <div class="float-right">
                                                <h4 class="m-0 d-print-none"><?php echo $surat['dari'];?></h4>
                                            </div>
                                        </div>

                                        <!-- Invoice Detail-->
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="float-left mt-3">
                                                    <p><b>Keterangan</b></p>
                                                    <p class="text-muted font-13"><?php echo $surat['keterangan'];?></p>
                                                </div>
            
                                            </div><!-- end col -->
                                            <div class="col-sm-4 offset-sm-2">
                                                <div class="mt-3 float-sm-right">
                                                    <p class="font-13"><strong>No Surat: </strong> <span class="float-right"><?php echo $surat['no_surat'];?></span></p>
                                                    <p class="font-13"><strong>Tanggal: </strong> <?php echo $surat['tanggal'];?></p>
                                                    <p class="font-13"><strong>Jenis: </strong> <span class="badge badge-success float-right"><?php echo array_jenis_surat($surat['jenis']);?></span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="table-responsive">
                                                    <table class="table mt-4">
                                                        <thead>
                                                        <tr><th>#</th>
                                                            <th>File</th>
                                                            <th>Unduh</th>
                                                        </tr></thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>
                                                                <b><?php echo $surat['file'];?></b>
                                                            </td>
                                                            <td><a href="<?php echo $domain.'upload/surat/masuk/'.$surat['file'];?>" class="btn btn-info"><i class="mdi mdi-arrow-down-bold-box"></i></a></td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-print-none mt-4">
                                            <div class="text-right">
                                                <a href="javascript:window.print()" class="btn btn-primary"><i class="mdi mdi-printer"></i> Print</a>
                                                <a href="javascript: void(0);" class="btn btn-info">Submit</a>
                                            </div>
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
    </body>
</html>
