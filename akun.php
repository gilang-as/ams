<?php
include('setting/config.php');
if($_GET['halaman']=="masuk"){
    include('view/akun/masuk.php');
}elseif($_GET['halaman']=="keluar"){
    include('view/akun/keluar.php');
}elseif($_GET['halaman']=="profil"){
    include('view/akun/profil.php');
}
?>