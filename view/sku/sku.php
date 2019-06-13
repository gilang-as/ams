<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>SKU - Ambalan Management System</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Sistem Management Ambalan Pramuka Pada SMA di Indonesia" name="description" />
        <meta content="Cyine ID" name="author" />
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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                            <li class="breadcrumb-item active">SKU</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">SKU</h4>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Syarat Kecakapan Umum</h4>
                                        <p class="text-muted font-14 mb-4">
                                            Use contextual classes to color table rows or individual cells.
                                        </p>

                                        <div class="table-responsive-sm">
                                            <table class="table table-centered mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Soal</th>
                                                        <th>Tanggal</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach($data as $sku) { ?>
                                                    <tr class="bg-danger text-white">
                                                        <td><?php echo $sku['no']; ?></td>
                                                        <td><?php echo $sku['isi']; ?></td>
                                                        <td>02 Agustus 2015</td>
                                                        <td><i class="mdi mdi-circle text-success"></i> Selesai</td>
                                                    </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
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
