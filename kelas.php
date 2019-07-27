<?php
include('setting/config.php');
require_once('function/kelas.php');
if(empty($_SESSION['status'])){
    header("location:".$domain."akun/masuk");
}
if($_GET['halaman']=="edit"){
    if(isset($_POST['nama'])){
        $data = array(
            'nama'	=> $_POST['nama']
            );
        edit_kelas($data, "WHERE id = '".$_GET['id']."'");  
        header("Location:".$domain."kelas");
    }
    $kelas=detail_kelas($_GET['id']);
    include('view/kelas/edit.php');
}elseif($_GET['halaman']=="hapus" && isset($_GET['id'])){
    hapus_kelas("WHERE id = '".$_GET['id']."'");
    header("Location:".$domain."kelas");
}else{
    if(isset($_POST['nama'])){
        $data = array(
            'nama'	=> $_POST['nama']
            );
        tambah_kelas($data);
    }
include('view/kelas/daftar.php');
}
?>