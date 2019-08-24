<?php
include('setting/config.php');
require_once('function/presensi.php');
require_once('function/kegiatan.php');
if(empty($_SESSION['status'])){
    header("location:".$domain."akun/masuk");
}
if($_GET['halaman']=="edit" && isset($_GET['id'])){
    if(isset($_POST['nama'])){
        $data = array(
            'id_kegiatan'	=> $_POST['kegiatan'],
            'nama'	=> $_POST['nama'],
            'waktu'	=> $_POST['waktu'],
            'status'	=> $_POST['status']
            );
        edit_presensi($data, "WHERE id = '".$_GET['id']."'");  
        header("Location:".$domain."presensi");
    }
    $presensi=detail_presensi($_GET['id']);
    include('view/presensi/edit.php');
}elseif($_GET['halaman']=="hapus" && isset($_GET['id'])){
    hapus_presensi("WHERE id = '".$_GET['id']."'");
    header("Location:".$domain."presensi");
}else{
    if(isset($_POST['nama'])){
        $data = array(
            'id_kegiatan'	=> $_POST['kegiatan'],
            'ambalan'	=> $_SESSION['ambalan'],
            'angkatan'	=> $_SESSION['angkatan'],
            'nama'	=> $_POST['nama'],
            'waktu'	=> $_POST['waktu'],
            'status'	=> $_POST['status']
            );
        tambah_presensi($data);
    }
include('view/presensi/daftar.php');
}
?>