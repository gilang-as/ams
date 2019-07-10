<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Ubah Surat Masuk - Ambalan Management System</title>
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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Masuk</a></li>
                                            <li class="breadcrumb-item active">Ubah</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Surat Masuk</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Ubah Surat</h4>
                                        <p class="text-muted">
                                            Merubah surat masuk.
                                        </p>
                                        <form method="POST" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <label for="dari">Dari</label>
                                                    <input type="text" class="form-control" id="dari" name="dari" placeholder="Dari" value="<?php echo $surat['dari'];?>" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group mb-3">
                                                    <label for="no_surat">No Surat</label>
                                                    <input type="text" class="form-control" id="no_surat" name="no_surat" placeholder="No Surat" value="<?php echo $surat['no_surat'];?>" required>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="perihal">Perihal</label>
                                                    <input type="text" class="form-control" id="perihal" name="perihal" placeholder="Perihal" value="<?php echo $surat['perihal'];?>" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                    <div class="form-group mb-3">
                                                        <label for="jenis">Jenis Surat</label>
                                                        <select class="form-control" id="jenis" name="jenis">
                                                        <?php foreach($jenis_surat as $jenis) { ?>
                                                            <option value="<?php echo $jenis['no'];?>" <?php if($jenis['no']==$surat['perihal']){ echo "selected";};?>><?php echo $jenis['isi'];?></option>
                                                        <?php } ?>
                                                        </select>
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label for="tanggal">Tanggal</label>
                                                        <input class="form-control" type="date" id="tanggal" name="tanggal" value="<?php echo $surat['tanggal'];?>"  required>
                                                    </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <label for="keteragan">Keterangan</label>
                                                    <textarea class="form-control" rows=5 id="keterangan" name="keterangan"><?php echo $surat['keterangan'];?></textarea>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="file">File</label>
                                                    <input type="file" class="form-control-file" id="file" name="file">
                                                </div>
                                                    <a href="<?php echo $domain.'surat/masuk';?>" class="btn btn-danger float-left">Batal</a>
                                                    <button type="submit" class="btn btn-primary float-right">Simpan</button>
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
        <!-- App js -->
        <script src="<?php echo $domain;?>assets/js/app.min.js"></script>
    </body>
</html>
