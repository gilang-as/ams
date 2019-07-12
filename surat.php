<?php
require_once('setting/config.php');
require_once('function/surat.php');
require_once('function/kegiatan.php');
if(empty($_SESSION['status'])){
    header("location:".$domain."akun/masuk");
}
$json = file_get_contents('data/jenis_surat.json');
$jenis_surat = json_decode($json, TRUE);
if($_GET['halaman']=="masuk"){
    if($_GET['aksi']=="tambah"){
        if(isset($_POST['no_surat']) && isset($_POST['jenis']) && isset($_POST['perihal']) && isset($_POST['tanggal']) && isset($_POST['keterangan'])){
            if($_FILES['file']['tmp_name']!=''){
                $ekstensi_diperbolehkan	= array('png','jpg','pdf','doc','docx');
                $nama = $_SESSION['angkatan']."_".$_FILES['file']['name'];
                $x = explode('.', $nama);
                $ekstensi = strtolower(end($x));
                $ukuran	= $_FILES['file']['size'];
                $file_tmp = $_FILES['file']['tmp_name'];
                
                if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
                    if($ukuran < 1044070){			
                        move_uploaded_file($file_tmp, 'upload/surat/masuk/'.$nama);
                    }else{
                        //echo 'UKURAN FILE TERLALU BESAR';
                    }
                }else{
                    //echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
                }
            }else{
                $nama=null;
            }
            $data = array( 
          'dari'	=> $_POST['dari'],
          'ambalan'	=> $_SESSION['ambalan'],
          'jenis'	=> $_POST['jenis'],
          'angkatan'	=> $_SESSION['angkatan'],
          'tanggal'	=> $_POST['tanggal'],
          'no_surat'	=> $_POST['no_surat'],
          'perihal'	=> $_POST['perihal'],
          'keterangan'	=> $_POST['keterangan'],
          'file'	=> $nama
          );
          tambah_surat_masuk($data);  
          header("Location:".$domain."surat/masuk");        
        }
        include('view/surat/masuk-tambah.php');
    }elseif($_GET['aksi']=="edit" && isset($_GET['id'])){
        $surat=detail_surat_masuk($_SESSION['angkatan'], $_GET['id']);
        if(isset($_POST['no_surat']) && isset($_POST['jenis']) && isset($_POST['perihal']) && isset($_POST['tanggal']) && isset($_POST['keterangan'])){
            if($_FILES['file']['tmp_name']!=''){
                $ekstensi_diperbolehkan	= array('png','jpg','pdf','doc','docx');
                $nama = $_SESSION['angkatan']."_".$_FILES['file']['name'];
                $x = explode('.', $nama);
                $ekstensi = strtolower(end($x));
                $ukuran	= $_FILES['file']['size'];
                $file_tmp = $_FILES['file']['tmp_name'];
                
                if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
                    if($ukuran < 1044070){
                        unlink('upload/surat/masuk/'.$surat['file']);	
                        move_uploaded_file($file_tmp, 'upload/surat/masuk/'.$nama);
                    }else{
                        //echo 'UKURAN FILE TERLALU BESAR';
                    }
                }else{
                    //echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
                }
            }else{
                $nama=$surat['file'];
            }
        $data = array( 
          'dari'	=> $_POST['dari'],
          'ambalan'	=> $_SESSION['ambalan'],
          'jenis'	=> $_POST['jenis'],
          'angkatan'	=> $_SESSION['angkatan'],
          'tanggal'	=> $_POST['tanggal'],
          'no_surat'	=> $_POST['no_surat'],
          'perihal'	=> $_POST['perihal'],
          'keterangan'	=> $_POST['keterangan'],
          'file'	=> $nama
          );
          edit_surat_masuk($data, "WHERE id = '".$_GET['id']."'");  
          header("Location:".$domain."surat/masuk");        
        }
        include('view/surat/masuk-edit.php');
    }elseif($_GET['aksi']=="hapus" && isset($_GET['id'])){
        $surat=detail_surat_masuk($_SESSION['angkatan'], $_GET['id']);
        unlink('upload/surat/masuk/'.$surat['file']);
        hapus_surat_masuk("WHERE id = '".$_GET['id']."'");
        header("Location:".$domain."surat/masuk");
    }elseif($_GET['aksi']=="detail" && isset($_GET['id'])){
        $surat=detail_surat_masuk($_SESSION['angkatan'], $_GET['id']);
        include('view/surat/masuk-detail.php');
    }else{
        include('view/surat/masuk-daftar.php');
    }
}elseif($_GET['halaman']=="keluar"){
    if($_GET['aksi']=="tambah"){
        if(isset($_POST['no_surat']) && isset($_POST['jenis']) && isset($_POST['perihal']) && isset($_POST['tanggal']) && isset($_POST['keterangan'])){
            if($_FILES['file']['tmp_name']!=''){
                $ekstensi_diperbolehkan	= array('png','jpg','pdf','doc','docx');
                $nama = $_SESSION['angkatan']."_".$_FILES['file']['name'];
                $x = explode('.', $nama);
                $ekstensi = strtolower(end($x));
                $ukuran	= $_FILES['file']['size'];
                $file_tmp = $_FILES['file']['tmp_name'];
                
                if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
                    if($ukuran < 1044070){			
                        move_uploaded_file($file_tmp, 'upload/surat/keluar/'.$nama);
                    }else{
                        //echo 'UKURAN FILE TERLALU BESAR';
                    }
                }else{
                    //echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
                }
            }else{
                $nama=null;
            }
            $data = array( 
          'tujuan'	=> $_POST['tujuan'],
          'kegiatan'	=> $_POST['kegiatan'],
          'ambalan'	=> $_SESSION['ambalan'],
          'jenis'	=> $_POST['jenis'],
          'angkatan'	=> $_SESSION['angkatan'],
          'tanggal'	=> $_POST['tanggal'],
          'no_surat'	=> $_POST['no_surat'],
          'perihal'	=> $_POST['perihal'],
          'keterangan'	=> $_POST['keterangan'],
          'file'	=> $nama
          );
          tambah_surat_keluar($data);  
          header("Location:".$domain."surat/keluar");        
        }
        include('view/surat/keluar-tambah.php');
    }elseif($_GET['aksi']=="edit"  && isset($_GET['id'])){
        $surat=detail_surat_keluar($_SESSION['angkatan'], $_GET['id']);
        if(isset($_POST['no_surat']) && isset($_POST['jenis']) && isset($_POST['perihal']) && isset($_POST['tanggal']) && isset($_POST['keterangan'])){
            if($_FILES['file']['tmp_name']!=''){
                $ekstensi_diperbolehkan	= array('png','jpg','pdf','doc','docx');
                $nama = $_SESSION['angkatan']."_".$_FILES['file']['name'];
                $x = explode('.', $nama);
                $ekstensi = strtolower(end($x));
                $ukuran	= $_FILES['file']['size'];
                $file_tmp = $_FILES['file']['tmp_name'];
                
                if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
                    if($ukuran < 1044070){
                        unlink('upload/surat/keluar/'.$surat['file']);	
                        move_uploaded_file($file_tmp, 'upload/surat/keluar/'.$nama);
                    }else{
                        //echo 'UKURAN FILE TERLALU BESAR';
                    }
                }else{
                    //echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
                }
            }else{
                $nama=$surat['file'];
            }
        $data = array( 
            'tujuan'	=> $_POST['tujuan'],
            'kegiatan'	=> $_POST['kegiatan'],
            'ambalan'	=> $_SESSION['ambalan'],
            'jenis'	=> $_POST['jenis'],
            'angkatan'	=> $_SESSION['angkatan'],
            'tanggal'	=> $_POST['tanggal'],
            'no_surat'	=> $_POST['no_surat'],
            'perihal'	=> $_POST['perihal'],
            'keterangan'	=> $_POST['keterangan'],
            'file'	=> $nama
          );
          edit_surat_keluar($data, "WHERE id = '".$_GET['id']."'");  
          header("Location:".$domain."surat/keluar");        
        }
        include('view/surat/keluar-edit.php');
    }elseif($_GET['aksi']=="hapus"  && isset($_GET['id'])){
        $surat=detail_surat_keluar($_SESSION['angkatan'], $_GET['id']);
        unlink('upload/surat/keluar/'.$surat['file']);
        hapus_surat_keluar("WHERE id = '".$_GET['id']."'");
        header("Location:".$domain."surat/keluar");
    }elseif($_GET['aksi']=="detail" && isset($_GET['id'])){
        $surat=detail_surat_keluar($_SESSION['angkatan'], $_GET['id']);
        include('view/surat/keluar-detail.php');
    }else{
        include('view/surat/keluar-daftar.php');
    }
}else{
    include('view/surat/surat.php');
}
?>