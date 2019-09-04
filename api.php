<?php
include('setting/config.php');
$error = json_encode(array(
    "error"=> [
        "status" => 404,
        "messages" => ["API route not found."]
    ]
));
if($_GET["type"]=="v2" && $_GET["key"]==$apiKey){
    if($_GET["method"]=="auth"){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            if($_POST['nis']==1 && $_POST['pass']==1){
                echo '{"status":"true","pesan":"Login Berhasil","nis":"1010","nama":"Gilang"}';
            }else{
                echo '{"status":"false","pesan":"Maaf, NIS atau Kata Sandi Anda salah","nis":null,"nama":null}';
            }
        }else{
            echo $error;
        }
    }elseif($_GET["method"]=="presensi"){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            if($_POST['name']=="Nama" || $_POST['nis']=="NIS"){
                echo 'Data mohon disi terlebih dahulu.';
            }else{
                $data=array(
                    "id_presensi"=>$_POST["id_presensi"],
                    "nis"=>$_POST["nis"]
                );

                print_r($data);
            }
        }else{
            echo $error;
        }
    }else{
        echo $error;
    }
}else{
    echo $error;
}
?>