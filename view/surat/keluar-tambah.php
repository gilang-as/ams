<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Tambah Surat Keluar - Ambalan Management System</title>
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
                                        <h4 class="header-title">Tambah Surat</h4>
                                        <p class="text-muted">
                                            Tambahkan surat masuk.
                                        </p>
                                        <form method="POST" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <label for="tujuan">Tujuan</label>
                                                    <input type="text" class="form-control" id="tujuan" name="tujuan" placeholder="Tujuan" required>
                                                </div>
                                                <div class="form-group mb-3">
                                                        <label for="kegiatan">Kegiatan atau Acara</label>
                                                        <select class="form-control" id="kegiatan" name="kegiatan">
                                                        <?php
                                                            $data = daftar_kegiatan($_SESSION['angkatan']);
                                                            while($row=mysqli_fetch_array($data)){ 
                                                        ?>
                                                            <option value="<?php echo $row['id'];?>"><?php echo $row['nama'];?></option>
                                                        <?php } ?>
                                                        </select>
                                                    </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group mb-3">
                                                    <label for="no_surat">No Surat</label>
                                                    <input type="text" class="form-control" id="no_surat" name="no_surat" placeholder="No Surat" required>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="perihal">Perihal</label>
                                                    <input type="text" class="form-control" id="perihal" name="perihal" placeholder="Perihal" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                    <div class="form-group mb-3">
                                                        <label for="jenis">Jenis Surat</label>
                                                        <select class="form-control" id="jenis" name="jenis">
                                                        <?php foreach($jenis_surat as $jenis) { ?>
                                                            <option value="<?php echo $jenis['no'];?>"><?php echo $jenis['isi'];?></option>
                                                        <?php } ?>
                                                        </select>
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label for="tanggal">Tanggal</label>
                                                        <input class="form-control" type="date" id="tanggal" name="tanggal" required>
                                                    </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <label for="keteragan">Keterangan</label>
                                                    <textarea class="form-control" rows=5 id="keterangan" name="keterangan"></textarea>
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
