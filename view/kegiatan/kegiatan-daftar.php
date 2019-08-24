<?php tema('notification');?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Kegiatan - Responsive Bootstrap 4 Admin Dashboard</title>
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
                    <!-- Start Content-->
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Kegiatan</a></li>
                                            <li class="breadcrumb-item active">Daftar</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Daftar Kegiatan</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row mb-2">
                            <div class="col-sm-4">
                                <button type="button" class="btn btn-danger btn-rounded mb-3" data-toggle="modal" data-target="#myModal"><i class="mdi mdi-plus"></i> Tambah Kegiatan</button>
                                <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModalLabel">Tambah Kegiatan</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                            <form method="POST">
                                                <div class="form-group mb-3">
                                                    <label for="nama">Nama Kegiatan</label>
                                                    <input type="text" id="nama" name="nama" class="form-control" required>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="kategori">Kategori</label>
                                                    <select class="form-control" id="kategori" name="kategori" required>
                                                    <?php foreach($jenis_kegiatan as $jenis) { ?>
                                                        <option value="<?php echo $jenis['no'];?>"><?php echo $jenis['isi'];?></option>
                                                    <?php } ?>
                                                    </select>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="waktu">Waktu</label>
                                                    <input type="text" class="form-control date" id="waktu" name="waktu" required>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-light" data-dismiss="modal">Tutup</button>
                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                </div>
                                            </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="text-sm-right">
                                    <div class="btn-group mb-3">
                                        <button type="button" class="btn btn-primary">Semua</button>
                                    </div>
                                    <div class="btn-group mb-3 ml-1">
                                        <button type="button" class="btn btn-light">Yang Akan Datang</button>
                                        <button type="button" class="btn btn-light">Selesai</button>
                                    </div>
                                    <div class="btn-group mb-3 ml-2 d-none d-sm-inline-block">
                                        <button type="button" class="btn btn-dark"><i class="dripicons-view-apps"></i></button>
                                    </div>
                                    <div class="btn-group mb-3 d-none d-sm-inline-block">
                                        <button type="button" class="btn btn-link text-dark"><i class="dripicons-checklist"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div> 

                        <div class="row">
                            <?php
                                $data = daftar_kegiatan($_SESSION['angkatan'], $_SESSION['ambalan']);
                                while($row=mysqli_fetch_array($data)){ 
                            ?>
                            <div class="col-md-6 col-xl-3">
                                <div class="card d-block">
                                    <img class="card-img-top" src="assets/images/projects/project-1.jpg" alt="project image cap">
                                    <div class="card-img-overlay">
                                        <div class="badge badge-secondary p-1">Akan Datang</div>
                                    </div>
                                    <div class="card-body position-relative">
                                        <h4 class="mt-0">
                                            <a href="<?php echo $domain.'kegiatan/detail/'.$row['id'];?>" class="text-dark"><?php echo $row['nama'];?></a>
                                        </h4>
                                        <p class="mb-3">
                                            <span class="pr-2 text-nowrap">
                                                <b><?php echo waktu($row['waktu'])["mulai"]["tanggal"];?></b>
                                            </span>
                                            <span class="pr-2 text-nowrap">
                                                <b><?php echo waktu($row['waktu'])["selesai"]["tanggal"];?></b>
                                            </span>
                                        </p>
                                        <div class="row">
                                            <a href="<?php echo $domain.'kegiatan/detail/'.$row['id'];?>" class="btn btn-primary col-md-12"><i class="mdi mdi-eye"></i> Lihat</a>
                                            <a href="<?php echo $domain.'kegiatan/hapus/'.$row['id'];?>" class="btn btn-danger col-md-6"><i class="mdi mdi-delete"></i> Hapus</a>
                                            <a href="<?php echo $domain.'kegiatan/edit/'.$row['id'];?>" class="btn btn-success col-md-6"><i class="mdi mdi-playlist-edit"></i> Ubah</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
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
        <?php
        notification($beritahu);
        ?>
    </body>
</html>
