<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Daftar Surat Masuk - Ambalan Management System</title>
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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Surat</a></li>
                                            <li class="breadcrumb-item active">Keluar</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Surat Keluar</h4>
                                </div>
                            </div>
                        </div> 

                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="header-title">Daftar Surat Keluar</h4>
                                        <p class="text-muted font-14 mb-4">
                                            Daftar Surat Keluar yang sudah di inputkan oleh pengguna yang memiliki akses.
                                        </p>
                                        <div class="table-responsive-sm">
                                        <div class="app-search-table">
                                            <form>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Search...">
                                                    <span class="mdi mdi-magnify"></span>
                                                    <div class="input-group-append">
                                                        <select class="form-control">
                                                            <option>Angkatan</option>
                                                        </select>
                                                    </div>
                                                    <div class="input-group-append">
                                                        <button class="btn btn-primary" type="submit">Search</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                            <table class="table table-striped table-centered mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Account No.</th>
                                                        <th>Balance</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Kategori</td>
                                                        <td>Keterangan</td>
                                                        <td class="table-action">
                                                            <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-pencil"></i></a>
                                                            <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-pencil"></i></a>
                                                            <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div> <!-- end table-responsive-->

                                    </div> <!-- end card body-->
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
                                                                    <h6 class="text-uppercase mt-0" title="Customers">Customers</h6>
                                                                    <h3 class="mt-3 mb-3">36,254</h3>
                                                                    <p class="mb-0">
                                                                        <span class="badge badge-light-lighten mr-1">
                                                                            <i class="mdi mdi-arrow-up-bold"></i> 5.27%</span>
                                                                        <span class="text-nowrap">Since last month</span>
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
                                                                    <h6 class="text-uppercase mt-0" title="Customers">Customers</h6>
                                                                    <h3 class="mt-3 mb-3">36,254</h3>
                                                                    <p class="mb-0">
                                                                        <span class="badge badge-light-lighten mr-1">
                                                                            <i class="mdi mdi-arrow-up-bold"></i> 5.27%</span>
                                                                        <span class="text-nowrap">Since last month</span>
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
                                                                    <h6 class="text-uppercase mt-0" title="Customers">Customers</h6>
                                                                    <h3 class="mt-3 mb-3">36,254</h3>
                                                                    <p class="mb-0">
                                                                        <span class="badge badge-light-lighten mr-1">
                                                                            <i class="mdi mdi-arrow-up-bold"></i> 5.27%</span>
                                                                        <span class="text-nowrap">Since last month</span>
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
                                                                    <h6 class="text-uppercase mt-0" title="Customers">Customers</h6>
                                                                    <h3 class="mt-3 mb-3">36,254</h3>
                                                                    <p class="mb-0">
                                                                        <span class="badge badge-light-lighten mr-1">
                                                                            <i class="mdi mdi-arrow-up-bold"></i> 5.27%</span>
                                                                        <span class="text-nowrap">Since last month</span>
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
    </body>
</html>
