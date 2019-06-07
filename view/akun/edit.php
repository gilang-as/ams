<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Hyper - Responsive Bootstrap 4 Admin Dashboard</title>
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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Akun</a></li>
                                            <li class="breadcrumb-item active">Edit</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Edit Profil</h4>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-3">Custom styles</h4>
                                        <form class="needs-validation" method="POST">
                                            <div class="form-group mb-3">
                                                <label for="validationCustom01">Nama</label>
                                                <input type="text" name="nama" class="form-control" id="validationCustom01" placeholder="Nama" value="<?php echo $profil['nama'];?>" required>
                                                <div class="valid-feedback">
                                                    Terisi!
                                                </div>
                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="validationCustom01">Jenis Kelamin</label>
                                                <select class="form-control" id="jekel" name="jekel">
                                                    <option value="0" <?php if(empty($profil['jekel'])){ echo "selected";}?>>Pilih Jenis Kelamin</option>
                                                    <option value="1" <?php if($profil['jekel']=="1"){ echo "selected";}?>>Laki-laki</option>
                                                    <option value="2" <?php if($profil['jekel']=="2"){ echo "selected";}?>>Perempuan</option>
                                                </select>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="validationCustom02">NIS</label>
                                                        <input type="text" name="nis" class="form-control" id="validationCustom02" placeholder="NIS" value="<?php echo $profil['nis'];?>" readonly>
                                                        <div class="valid-feedback">
                                                            Terisi!
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="validationCustom02">Email</label>
                                                        <input type="email" name="email" class="form-control" id="validationCustom02" placeholder="Email" value="<?php echo $profil['email'];?>">
                                                        <div class="valid-feedback">
                                                            Terisi!
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group mb-3">
                                                        <label for="validationCustom02">Handphone</label>
                                                        <input type="text" name="hp" class="form-control" id="validationCustom02" placeholder="Handphone" value="<?php echo $profil['hp'];?>">
                                                        <div class="valid-feedback">
                                                            Terisi!
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group mb-3">
                                                        <label for="validationCustom02">Whatsapp</label>
                                                        <input type="text" name="wa" class="form-control" id="validationCustom02" placeholder="Whatsapp" value="<?php echo $profil['whatsapp'];?>">
                                                        <div class="valid-feedback">
                                                            Terisi!
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group mb-3">
                                                        <label for="validationCustom02">Telegram</label>
                                                        <input type="text" name="telegram" class="form-control" id="validationCustom02" placeholder="Telegram" value="<?php echo $profil['telegram'];?>">
                                                        <div class="valid-feedback">
                                                            Terisi!
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group mb-3">
                                                        <label for="validationCustom02">Vlezo</label>
                                                        <input type="text" name="vlezo" class="form-control" id="validationCustom02" placeholder="Vlezo" value="<?php echo $profil['vlezo'];?>">
                                                        <div class="valid-feedback">
                                                            Terisi!
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group mb-3">
                                                        <label for="validationCustom02">Facebook</label>
                                                        <input type="text" name="fb" class="form-control" id="validationCustom02" placeholder="Facebook" value="<?php echo $profil['facebook'];?>">
                                                        <div class="valid-feedback">
                                                            Terisi!
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group mb-3">
                                                        <label for="validationCustomUsername">Instagram</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                            </div>
                                                            <input type="text" name="ig" class="form-control" id="validationCustomUsername" placeholder="Instagram" aria-describedby="inputGroupPrepend" value="<?php echo $profil['instagram'];?>">
                                                            <div class="invalid-feedback">
                                                                Please choose a username.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="validationCustom03">Kota</label>
                                                <input type="text" name="kabupaten" class="form-control" id="validationCustom03" placeholder="Kota" value="<?php echo $profil['kabupaten'];?>">
                                                <div class="invalid-feedback">
                                                    Please provide a valid city.
                                                </div>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="validationCustom04">Kecamatan</label>
                                                <input type="text" name="kecamatan" class="form-control" id="validationCustom04" placeholder="Kecamatan" value="<?php echo $profil['kecamatan'];?>">
                                                <div class="invalid-feedback">
                                                    Please provide a valid state.
                                                </div>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="validationCustom05">Desa</label>
                                                <input type="text" name="desa" class="form-control" id="validationCustom05" placeholder="Desa" value="<?php echo $profil['desa'];?>">
                                                <div class="invalid-feedback">
                                                    Please provide a valid zip.
                                                </div>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="foto">Foto Profil</label>
                                                <input type="file" name="foto" id="foto" class="form-control-file">
                                            </div>
                                            <div class="form-group mb-3">
                                                <div class="custom-control custom-checkbox form-check">
                                                    <input type="checkbox" class="custom-control-input" id="invalidCheck" required>
                                                    <label class="custom-control-label" for="invalidCheck">Agree to terms and conditions</label>
                                                    <div class="invalid-feedback">
                                                        You must agree before submitting.
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="btn btn-primary" type="submit">Submit form</button>
                                        </form>

                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
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
