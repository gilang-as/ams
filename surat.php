<?php
include('setting/config.php');
if($_GET['halaman']=="masuk"){

    if($_GET['aksi']=="tambah"){
        include('view/surat/masuk-tambah.php');
    }elseif($_GET['aksi']=="edit"){
        include('view/surat/masuk-edit.php');
    }elseif($_GET['aksi']=="hapus"){
    
    }else{
        include('view/surat/masuk-daftar.php');
    }

}elseif($_GET['halaman']=="keluar"){

    if($_GET['aksi']=="tambah"){
        include('view/surat/keluar-tambah.php');
    }elseif($_GET['aksi']=="edit"){
        include('view/surat/keluar-edit.php');
    }elseif($_GET['aksi']=="hapus"){
    
    }else{
        include('view/surat/keluar-daftar.php');
    }

}else{
    include('view/surat/surat.php');
}
?>