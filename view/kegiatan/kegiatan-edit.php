<?php tema('notification');?>
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
                                        <h4 class="header-title">Ubah Kegiatan</h4>
                                        <p class="text-muted">
                                            Merubah Kegiatan.
                                        </p>
                                        <form method="POST" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                    <label for="nama">Nama Kegiatan</label>
                                                    <input type="text" id="nama" name="nama" class="form-control" value="<?php echo $kegiatan['nama']?>" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group mb-3">
                                                    <label for="kategori">Kategori</label>
                                                    <select class="form-control" id="kategori" name="kategori" required>
                                                    <?php foreach($jenis_kegiatan as $jenis) { ?>
                                                        <option value="<?php echo $jenis['no'];?>"><?php echo $jenis['isi'];?></option>
                                                    <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group mb-3">
                                                    <label for="waktu">Waktu</label>
                                                    <input type="text" class="form-control date" id="waktu" name="waktu" value="<?php echo $kegiatan['waktu']?>" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <a href="<?php echo $domain.'kegiatan';?>" class="btn btn-danger float-left">Batal</a>
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
        <script>
            $(function() {
            $('input[name="waktu"]').daterangepicker({
                timePicker: true,
                startDate: moment().startOf('hour'),
                endDate: moment().startOf('hour').add(32, 'hour'),
                timePicker24Hour: true,
                locale: {
                format: 'MM/DD/YYYY HH:MM'
                }
            });
            });
        </script>
        <?php
        notification($beritahu);
        ?>
    </body>
</html>
