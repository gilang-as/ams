<?php
include('setting/config.php');
if($_GET['halaman']=="masuk"){
    if(isset($_POST['nismail']) && isset($_POST['password'])){
        $nismail = $_POST['nismail'];
        $password = md5($_POST['password']);
        $profil_qry="SELECT * FROM cyi_akun WHERE (nis='".$nismail."' OR email='".$nismail."') AND password='".$password."'";
        $profil=mysqli_fetch_assoc(mysqli_query($connect,$profil_qry));
        $cek=mysqli_num_rows(mysqli_query($connect,$profil_qry));
        if($cek > 0){
            $_SESSION['nis'] = $profil['nis'];
            $_SESSION['nama'] = $profil['nama'];
            $_SESSION['ambalan'] = $profil['ambalan'];
            $_SESSION['angkatan'] = $profil['angkatan'];
            //$_SESSION['foto'] = $profil['foto'];
            $_SESSION['status'] = "masuk";
            header("location:".$domain."akun/profil/".$profil['nis']);
        }else{
           header("location:".$domain."akun/masuk");
            $natif='Galal Masuk';	
        }
    }elseif(isset($_SESSION['status'])){
        header("location:".$domain."akun/profil/".$_SESSION['nis']);
    }
    include('view/akun/masuk.php');
}elseif($_GET['halaman']=="keluar"){
    session_destroy();
    include('view/akun/keluar.php');
}elseif($_GET['halaman']=="profil" && isset($_GET['akun'])){
    $profil_qry="SELECT * FROM cyi_akun WHERE nis='".$_SESSION['nis']."'";
	$profil=mysqli_fetch_assoc(mysqli_query($connect,$profil_qry));
    include('view/akun/profil.php');
}elseif($_GET['halaman']=="edit" && isset($_GET['akun'])){
    if(isset($_POST['nama'])){
        $foto=rand(0,99999)."_".$_FILES['foto']['name'];	 
       //Main Image
	   $tpath1='upload/profil/'.$foto; 			 
       compress_image($_FILES["foto"]["tmp_name"], $tpath1, 80);

        $data = array( 
          'nama'	    => $_POST['nama'],
          'foto'        => $foto,
          'jekel'	    => $_POST['jekel'],
          //'nis'	    => $_POST['nis'],
          'email'	    => $_POST['email'],
          'hp'	        => $_POST['hp'],
          'whatsapp'    => $_POST['wa'],
          'telegram'	=> $_POST['telegram'],
          'vlezo'	    => $_POST['vlezo'],
          'facebook'    => $_POST['fb'],
          'instagram'   => $_POST['ig'],
          'kabupaten'	=> $_POST['kabupaten'],
          'kecamatan'	=> $_POST['kecamatan'],
          'desa'	    => $_POST['desa']
          );    
        Update('cyi_akun', $data, "WHERE nis = '".$_SESSION['nis']."'");
        print_r($_POST);
        //header("location:".$domain."akun/profil/".$_SESSION['nis']);
    }
    $profil_qry="SELECT * FROM cyi_akun WHERE nis='".$_SESSION['nis']."'";
	$profil=mysqli_fetch_assoc(mysqli_query($connect,$profil_qry));
    include('view/akun/edit.php');
}
?>