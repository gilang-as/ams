<?php
include('setting/config.php');
require_once('function/siswa.php');
$ambalan=json_decode(file_get_contents("data/ambalan.json"), true);
$tku=json_decode(file_get_contents("data/tku.json"), true);
$jekel=json_decode(file_get_contents("data/jekel.json"), true);
$kelas=mysqli_query($connect,"SELECT * FROM cyi_kelas");
if(empty($_SESSION['status'])){
    header("location:".$domain."akun/masuk");
}
if($_GET['halaman']=="edit" && isset($_GET['nis'])){
    if(isset($_POST['nama'])){
        if($_POST["password"]){
            $data = array(
                'nama'	=> $_POST['nama'],
                'nis'	=> $_POST['nis'],
                'email'	=> $_POST['email'],
                'jekel'	=> $_POST['jekel'],
                'ambalan'	=> $_POST['ambalan'],
                'tku'	=> $_POST['tku'],
                'kelas'	=> $_POST['kelas'],
                'angkatan'	=> $_POST['angkatan'],
                'status'	=> 1,
                'password'	=> md5($_POST['password'])
                );
        }else{
            $data = array(
                'nama'	=> $_POST['nama'],
                'nis'	=> $_POST['nis'],
                'email'	=> $_POST['email'],
                'jekel'	=> $_POST['jekel'],
                'ambalan'	=> $_POST['ambalan'],
                'tku'	=> $_POST['tku'],
                'kelas'	=> $_POST['kelas'],
                'angkatan'	=> $_POST['angkatan'],
                'status'	=> 1
                ); 
        }
        edit_siswa($data, "WHERE nis = '".$_GET['nis']."'");  
        header("Location:".$domain."siswa");
    }
    $siswa=detail_siswa($_GET['nis']);
    include('view/siswa/edit.php');
}elseif($_GET['halaman']=="hapus" && isset($_GET['id'])){
    hapus_siswa("WHERE id = '".$_GET['id']."'");
    header("Location:".$domain."siswa");
}else{
    if(isset($_POST['nama'])){
        $data = array(
            'nama'	=> $_POST['nama'],
            'nis'	=> $_POST['nis'],
            'email'	=> $_POST['email'],
            'jekel'	=> $_POST['jekel'],
            'ambalan'	=> $_POST['ambalan'],
            'tku'	=> $_POST['tku'],
            'kelas'	=> $_POST['kelas'],
            'angkatan'	=> $_POST['angkatan'],
            'status'	=> 1,
            'password'	=> md5($_POST['password'])
            );
        tambah_siswa($data);
    }
include('view/siswa/daftar.php');
}
?>