<?php
include('setting/config.php');
require_once('function/sangga.php');
if(empty($_SESSION['status'])){
    header("location:".$domain."akun/masuk");
}
if($_GET['halaman']=="edit" && isset($_GET['id'])){
    if(isset($_POST['nama'])){
        $data = array(
            'nama'	=> $_POST['nama']
            );
        edit_sangga($data, "WHERE id = '".$_GET['id']."'");  
        header("Location:".$domain."sangga");
    }
    $sangga=detail_sangga($_GET['id']);
    include('view/sangga/edit.php');
}elseif($_GET['halaman']=="hapus" && isset($_GET['id'])){
    hapus_sangga("WHERE id = '".$_GET['id']."'");
    header("Location:".$domain."sangga");
}else{
    if(isset($_POST['nama'])){
        $data = array(
            'nama'	=> $_POST['nama']
            );
        tambah_sangga($data);
    }
include('view/sangga/daftar.php');
}
?>