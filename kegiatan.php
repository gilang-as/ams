<?php
include('setting/config.php');
require_once('function/kegiatan.php');
if(empty($_SESSION['status'])){
    header("location:".$domain."akun/masuk");
}
$json = file_get_contents('data/jenis_kegiatan.json');
$jenis_kegiatan = json_decode($json, TRUE);
if($_GET['halaman']=="edit"){
    if(isset($_POST['nama'])){
        $data = array(
            'ambalan'	=> $_SESSION['ambalan'],
            'angkatan'	=> $_SESSION['angkatan'],
            'kategori'	=> $_POST['kategori'],
            'nama'	=> $_POST['nama'],
            'waktu'	=> $_POST['waktu']
            );
        edit_kegiatan($data, "WHERE id = '".$_GET['id']."'");  
        header("Location:".$domain."kegiatan");
    }
    $kegiatan=detail_kegiatan($_SESSION['angkatan'], $_GET['id']);
    include('view/kegiatan/kegiatan-edit.php');
}elseif($_GET['halaman']=="detail" && isset($_GET['id'])){
    $kegiatan=detail_kegiatan($_SESSION['angkatan'], $_GET['id']);
    include('view/kegiatan/kegiatan-detail.php');
}elseif($_GET['halaman']=="hapus" && isset($_GET['id'])){
    hapus_kegiatan("WHERE id = '".$_GET['id']."'");
    header("Location:".$domain."kegiatan");
}else{
    if(isset($_POST['nama'])){
        $data = array(
            'ambalan'	=> $_SESSION['ambalan'],
            'angkatan'	=> $_SESSION['angkatan'],
            'kategori'	=> $_POST['kategori'],
            'nama'	=> $_POST['nama'],
            'waktu'	=> $_POST['waktu']
            );
        tambah_kegiatan($data);
        $beritahu=array(
            'tipe'	=> 'info', //info, danger, warning, success
            'judul'	=> 'Berhasil',
            'tulisan'	=> 'Data Berhasil Disimpan.',
            'posisi'	=> 'top-right', //top-right, top-center, top-left, bottom-right, bottom-center, bottom-left,
            'warna'	=> 'rgba(0,0,0,0.2)'
        );
    }
include('view/kegiatan/kegiatan-daftar.php');
}
?>