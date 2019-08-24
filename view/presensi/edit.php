<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Ubah Presensi - Responsive Bootstrap 4 Admin Dashboard</title>
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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Presensi</a></li>
                                            <li class="breadcrumb-item active">Ubah</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Ubah Presensi</h4>
                                </div>
                            </div>
                        </div>     
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Ubah Presensi</h4>
                                        <p class="text-muted">
                                            Mengubah Presensi.
                                        </p>
                                        <form method="POST">
                                            <div class="row">
                                            <div class="form-group mb-3 col-md-6">
                                                    <label for="nama">Nama Presensi</label>
                                                    <input type="text" id="nama" name="nama" value="<?php echo $presensi["nama"];?>" class="form-control" required>
                                                </div>
                                                <div class="form-group mb-3 col-md-6">
                                                    <label for="waktu">Waktu</label>
                                                    <input type="text" class="form-control date" id="waktu" name="waktu" value="<?php echo $presensi["waktu"];?>"  required>
                                                </div>
                                                <div class="form-group mb-3 col-md-6">
                                                        <label for="kegiatan">Kegiatan atau Acara</label>
                                                        <select class="form-control" id="kegiatan" name="kegiatan" required>
                                                        <?php
                                                            $data = daftar_kegiatan($_SESSION['angkatan'], $_SESSION['ambalan']);
                                                            while($row=mysqli_fetch_array($data)){ 
                                                        ?>
                                                            <option <?php if($presensi["kegiatan"]==$row['id']){ echo"selected";}?> value="<?php echo $row['id'];?>"><?php echo $row['nama'];?></option>
                                                        <?php } ?>
                                                        </select>
                                                </div>
                                                <div class="form-group mb-3 col-md-6">
                                                        <label for="status">Status</label>
                                                        <select class="form-control" id="status" name="status" required>
                                                            <option <?php if($presensi["kegiatan"]==0){ echo"selected";}?> value="0">Belum Mulai</option>
                                                            <option <?php if($presensi["kegiatan"]==1){ echo"selected";}?> value="1">Mulai</option>
                                                            <option <?php if($presensi["kegiatan"]==2){ echo"selected";}?> value="2">Selesai</option>
                                                        </select>
                                                </div>
                                                <div class="col-lg-12">
                                                    <a href="<?php echo $domain.'kelas';?>" class="btn btn-danger float-left">Batal</a>
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
                format: 'DD/MM/YYYY hh:mm'
                }
            });
            });
        </script>
    </body>
</html>
