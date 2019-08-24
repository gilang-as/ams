<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Daftar Presensi - Ambalan Management System</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo $domain;?>assets/images/favicon.ico">
        <!-- third party css -->
        <link href="<?php echo $domain;?>assets/css/vendor/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $domain;?>assets/css/vendor/responsive.bootstrap4.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $domain;?>assets/css/vendor/buttons.bootstrap4.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $domain;?>assets/css/vendor/select.bootstrap4.css" rel="stylesheet" type="text/css" />
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
                                            <li class="breadcrumb-item active">Presensi</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Daftar Presensi</h4>
                                </div>
                            </div>
                        </div> 

                        <div class="row">
                        <div class="col-sm-4">
                                <button type="button" class="btn btn-danger btn-rounded mb-3" data-toggle="modal" data-target="#myModal"><i class="mdi mdi-plus"></i> Tambah Sangga</button>
                                <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModalLabel">Tambah Presensi</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                            <form method="POST">
                                                <div class="row">
                                                    <div class="form-group mb-3 col-md-6">
                                                        <label for="nama">Nama Presensi</label>
                                                        <input type="text" id="nama" name="nama" class="form-control" required>
                                                    </div>
                                                    <div class="form-group mb-3 col-md-6">
                                                            <label for="kegiatan">Kegiatan atau Acara</label>
                                                            <select class="form-control" id="kegiatan" name="kegiatan" required>
                                                            <?php
                                                                $data = daftar_kegiatan($_SESSION['angkatan'], $_SESSION['ambalan']);
                                                                while($row=mysqli_fetch_array($data)){ 
                                                            ?>
                                                                <option value="<?php echo $row['id'];?>"><?php echo $row['nama'];?></option>
                                                            <?php } ?>
                                                            </select>
                                                    </div>
                                                    <div class="form-group mb-3 col-md-6">
                                                            <label for="status">Status</label>
                                                            <select class="form-control" id="status" name="status" required>
                                                                <option value="0">Belum Mulai</option>
                                                                <option value="1">Mulai</option>
                                                                <option value="2">Selesai</option>
                                                            </select>
                                                    </div>
                                                    <div class="form-group mb-3 col-md-6">
                                                        <label for="waktu">Waktu</label>
                                                        <input type="text" class="form-control date" id="waktu" name="waktu" required>
                                                    </div>
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
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Daftar Presensi</h4>
                                        <p class="text-muted font-14 mb-4">Presensi yang sudah di inputkan</p>
                                        <table id="datatable-buttons" class="table table-striped dt-responsive nowrap" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Kegiatan</th>
                                                    <th>Nama</th>
                                                    <th>Pengaturan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $data = daftar_presensi($_SESSION['ambalan'],$_SESSION['angkatan']);
                                                $no=1;
                                                while($row=mysqli_fetch_array($data)){ 
                                                ?>
                                                <tr>
                                                    <td><?php echo $no;?></td>
                                                    <td><?php echo $row['id_kegiatan'];?></td>
                                                    <td><?php echo $row['nama'];?></td>
                                                    <td>
                                                        <div class="btn-group mb-2">
                                                            <a href="<?php echo $domain.'presensi/hapus/'.$row['id'];?>" class="btn btn-danger"><i class="mdi mdi-delete"></i></a>
                                                            <a href="<?php echo $domain.'presensi/edit/'.$row['id'];?>" class="btn btn-success"><i class="mdi mdi-playlist-edit"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <?php
                                                $no++;
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                        
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
        <!-- third party js -->
        <script src="<?php echo $domain;?>assets/js/vendor/jquery.dataTables.js"></script>
        <script src="<?php echo $domain;?>assets/js/vendor/dataTables.bootstrap4.js"></script>
        <script src="<?php echo $domain;?>assets/js/vendor/dataTables.responsive.min.js"></script>
        <script src="<?php echo $domain;?>assets/js/vendor/responsive.bootstrap4.min.js"></script>
        <script src="<?php echo $domain;?>assets/js/vendor/dataTables.buttons.min.js"></script>
        <script src="<?php echo $domain;?>assets/js/vendor/buttons.bootstrap4.min.js"></script>
        <script src="<?php echo $domain;?>assets/js/vendor/buttons.html5.min.js"></script>
        <script src="<?php echo $domain;?>assets/js/vendor/buttons.flash.min.js"></script>
        <script src="<?php echo $domain;?>assets/js/vendor/buttons.print.min.js"></script>
        <script src="<?php echo $domain;?>assets/js/vendor/dataTables.keyTable.min.js"></script>
        <script src="<?php echo $domain;?>assets/js/vendor/dataTables.select.min.js"></script>
        <!-- demo app -->
        <script src="<?php echo $domain;?>assets/js/pages/demo.datatable-init.js"></script>

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
