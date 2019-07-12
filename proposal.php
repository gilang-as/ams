<?php
require_once('setting/config.php');
require_once('function/proposal.php');
require_once('function/kegiatan.php');
if(empty($_SESSION['status'])){
    header("location:".$domain."akun/masuk");
}
if($_GET['halaman']=="tambah"){
    if(isset($_POST['kegiatan']) && isset($_POST['keterangan'])){
        if($_FILES['file']['tmp_name']!=''){
            $ekstensi_diperbolehkan	= array('pdf','doc','docx');
            $nama = $_SESSION['angkatan']."_".$_FILES['file']['name'];
            $x = explode('.', $nama);
            $ekstensi = strtolower(end($x));
            $ukuran	= $_FILES['file']['size'];
            $file_tmp = $_FILES['file']['tmp_name'];
            
            if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
                if($ukuran < 1044070){			
                    move_uploaded_file($file_tmp, 'upload/proposal/'.$nama);
                }else{
                    echo 'UKURAN FILE TERLALU BESAR';
                    Break;
                }
            }else{
                echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
                Break;
            }
        }else{
            $nama=null;
        }
        $data = array( 
      'ambalan'	=> $_SESSION['ambalan'],
      'angkatan'	=> $_SESSION['angkatan'],
      'kegiatan'	=> $_POST['kegiatan'],
      'keterangan'	=> $_POST['keterangan'],
      'file'	=> $nama
      );
      tambah_proposal($data);  
      header("Location:".$domain."proposal");        
    }
    include('view/proposal/tambah.php');
}elseif($_GET['halaman']=="edit" && isset($_GET['id'])){
    $proposal=detail_proposal($_SESSION['angkatan'], $_SESSION['ambalan'], $_GET['id']);
    if(isset($_POST['kegiatan']) && isset($_POST['keterangan'])){
            if($_FILES['file']['tmp_name']!=''){
                $ekstensi_diperbolehkan	= array('pdf','doc','docx');
                $nama = $_SESSION['angkatan']."_".$_FILES['file']['name'];
                $x = explode('.', $nama);
                $ekstensi = strtolower(end($x));
                $ukuran	= $_FILES['file']['size'];
                $file_tmp = $_FILES['file']['tmp_name'];
                
                if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
                    if($ukuran < 1044070){
                        unlink('upload/proposal/'.$proposal['file']);	
                        move_uploaded_file($file_tmp, 'upload/proposal/'.$nama);
                    }else{
                        echo 'UKURAN FILE TERLALU BESAR';
                        Break;
                    }
                }else{
                    echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
                    Break;
                }
            }else{
                $nama=$proposal['file'];
            }
        $data = array( 
            'ambalan'	=> $_SESSION['ambalan'],
            'angkatan'	=> $_SESSION['angkatan'],
            'kegiatan'	=> $_POST['kegiatan'],
            'keterangan'	=> $_POST['keterangan'],
            'file'	=> $nama
          );
          edit_proposal($data, "WHERE id = '".$_GET['id']."'");  
          header("Location:".$domain."proposal");        
        }
    include('view/proposal/edit.php');
}elseif($_GET['halaman']=="hapus" && isset($_GET['id'])){
    $proposal=detail_proposal($_SESSION['angkatan'], $_SESSION['ambalan'], $_GET['id']);
    unlink('upload/proposal/'.$proposal['file']);
    hapus_proposal("WHERE id = '".$_GET['id']."' AND angkatan = '".$_SESSION['angkatan']."' AND ambalan  = '".$_SESSION['ambalan']."'");
    header("Location:".$domain."proposal");
}else{
    include('view/proposal/proposal.php');
}
?>