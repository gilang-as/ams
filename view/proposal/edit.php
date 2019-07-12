<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Ubah Proposal - Responsive Bootstrap 4 Admin Dashboard</title>
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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Proposal</a></li>
                                            <li class="breadcrumb-item active">Ubah</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Ubah Proposal</h4>
                                </div>
                            </div>
                        </div>     
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Ubah Proposal</h4>
                                        <p class="text-muted">
                                            Mengubah Proposal.
                                        </p>
                                        <form method="POST"  enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group mb-3">
                                                        <label for="kegiatan">Kegiatan</label>
                                                        <select class="form-control" id="kegiatan" name="kegiatan" required>
                                                        <?php
                                                            $data = daftar_kegiatan($_SESSION['angkatan'], $_SESSION['ambalan']);
                                                            while($row=mysqli_fetch_array($data)){ 
                                                        ?>
                                                            <option value="<?php echo $row['id'];?>" <?php if($row['id']==$proposal['kegiatan']){ echo "selected";};?>><?php echo $row['nama'];?></option>
                                                        <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group mb-3">
                                                        <label for="file">File</label>
                                                        <input type="file" id="file" name="file" class="form-control-file">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group mb-3">
                                                        <label for="keterangan">Keterangan</label>
                                                        <input class="form-control" id="keterangan" type="text" name="keterangan" value="<?php echo $proposal['keterangan'];?>" required>
                                                    </div>
                                                    <a href="<?php echo $domain.'proposal';?>" class="btn btn-danger float-left">Batal</a>
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
