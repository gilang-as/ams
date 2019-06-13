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

    <body>

        <!-- Begin page -->
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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Keluar</a></li>
                                            <li class="breadcrumb-item active">Tambah</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Surat Keluar</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Tambah Keluar</h4>
                                        <p class="text-muted">
                                            Tambahkan surat keluar.
                                        </p>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group mb-3">
                                                        <label for="example-select">Jenis Surat</label>
                                                        <select class="form-control" id="example-select">
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                        </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <form>
        
                                                    

                                                    <div class="form-group mb-3">
                                                        <label for="example-multiselect">Multiple Select</label>
                                                        <select id="example-multiselect" multiple class="form-control">
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                        </select>
                                                    </div>
        
                                                    <div class="form-group mb-3">
                                                        <label for="example-fileinput">Default file input</label>
                                                        <input type="file" id="example-fileinput" class="form-control-file">
                                                    </div>
        
                                                    <div class="form-group mb-3">
                                                        <label for="example-date">Date</label>
                                                        <input class="form-control" id="example-date" type="date" name="date">
                                                    </div>
        
                                                    <div class="form-group mb-3">
                                                        <label for="example-month">Month</label>
                                                        <input class="form-control" id="example-month" type="month" name="month">
                                                    </div>
        
                                                    <div class="form-group mb-3">
                                                        <label for="example-time">Time</label>
                                                        <input class="form-control" id="example-time" type="time" name="time">
                                                    </div>
        
                                                    <div class="form-group mb-3">
                                                        <label for="example-week">Week</label>
                                                        <input class="form-control" id="example-week" type="week" name="week">
                                                    </div>
        
                                                    <div class="form-group mb-3">
                                                        <label for="example-number">Number</label>
                                                        <input class="form-control" id="example-number" type="number" name="number">
                                                    </div>
        
                                                    <div class="form-group mb-3">
                                                        <label for="example-color">Color</label>
                                                        <input class="form-control" id="example-color" type="color" name="color" value="#727cf5">
                                                    </div>
        
                                                    <div class="form-group mb-0">
                                                        <label for="example-range">Range</label>
                                                        <input class="custom-range" id="example-range" type="range" name="range" min="0" max="100">
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
                <?php tema('footer');?>
            </div>
        </div>


        <!-- App js -->
        <script src="<?php echo $domain;?>assets/js/app.min.js"></script>
    </body>
</html>
