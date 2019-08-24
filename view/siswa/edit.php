<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Ubah Siswa - Responsive Bootstrap 4 Admin Dashboard</title>
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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Siswa</a></li>
                                            <li class="breadcrumb-item active">Ubah</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Ubah Siswa</h4>
                                </div>
                            </div>
                        </div>     
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Ubah Siswa</h4>
                                        <p class="text-muted">
                                            Mengubah Siswa.
                                        </p>
                                        <form method="POST">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group mb-3">
                                                                <label for="nama">Nama Siswa</label>
                                                                <input type="text" id="nama" value="<?php echo $siswa["nama"]?>" name="nama" class="form-control">
                                                            </div>
                                                            <div class="form-group mb-3">
                                                                <label for="email">Email</label>
                                                                <input type="mail" id="email" value="<?php echo $siswa["email"]?>" name="email" class="form-control">
                                                            </div>
                                                            <div class="form-group mb-3">
                                                                <label for="nis">NIS</label>
                                                                <input type="number" id="nis" value="<?php echo $siswa["nis"]?>"  name="nis" class="form-control">
                                                            </div>
                                                            <div class="form-group mb-3">
                                                                <label for="jekel">Jenis Kelamin</label>
                                                                <select class="form-control" name="jekel" id='jekel'>
                                                                    <option disabled selected>Jenis Kelamin</option>
                                                                    <option <?php if($siswa["jekel"]==1){echo "selected";}?> value='1'>Laki-laki</option>
                                                                    <option <?php if($siswa["jekel"]==2){echo "selected";}?> value='2'>Perempuan</option>
                                                                </select>    
                                                            </div>
                                                            <div class="form-group mb-3">
                                                                <label for="angkatan">Angkatan</label>
                                                                <select class="form-control" name="angkatan" id='angkatan'>
                                                                    <option disabled selected>Angkatan</option>
                                                                    <?php for($date=date(Y); $date>=1999; $date--){ ?>
                                                                    <option <?php if($siswa["angkatan"]==$date){echo "selected";}?>  value='<?php echo $date?>'><?php echo $date?></option>
                                                                    <?php } ?>
                                                                </select>    
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group mb-3">
                                                                <label for="password">Password</label>
                                                                <input type="password" id="password" name="password" class="form-control">
                                                            </div>
                                                            <div class="form-group mb-3">
                                                                <label for="ambalan">Ambalan</label>
                                                                <select class="form-control" name="ambalan" id='ambalan'>
                                                                    <option disabled selected>Nama Ambalan</option>
                                                                    <?php foreach($ambalan as $data => $isi){ ?>
                                                                    <option <?php if($siswa["ambalan"]==$data){echo "selected";}?>  value='<?php echo $data ?>'><?php echo $isi['isi'] ?></option>
                                                                    <?php }?>
                                                                </select>   
                                                            </div>
                                                            <div class="form-group mb-3">
                                                                <label for="tku">TKU</label>
                                                                <select class="form-control" name="tku" id='tku' required>
                                                                    <option disabled selected>TKU</option>
                                                                    <?php foreach($tku as $data => $isi){ ?>
                                                                    <option <?php if($siswa["tku"]==$data){echo "selected";}?>  value='<?php echo $data ?>'><?php echo $isi['isi'] ?></option>
                                                                    <?php }?>
                                                                </select> 
                                                            </div>
                                                            <div class="form-group mb-3">
                                                                <label for="kelas">Kelas</label>
                                                                <select class="form-control" name="kelas" id='kelas' required>
                                                                    <option disabled selected>Kelas</option>
                                                                    <?php while($data=mysqli_fetch_array($kelas)){ ?>
                                                                    <option <?php if($siswa["kelas"]==$data["id"]){echo "selected";}?>  value='<?php echo $data['id'] ?>'><?php echo $data['nama'] ?></option>
                                                                    <?php }?>
                                                                </select> 
                                                            </div>
                                                        </div>
                                                    </div>
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
    </body>
</html>
