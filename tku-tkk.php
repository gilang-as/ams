<?php
include('setting/config.php');
if(empty($_SESSION['status'])){
    header("location:".$domain."akun/masuk");
}
$json_tku = file_get_contents('data/tku.json');
$data_tku = json_decode($json_tku, TRUE);
include('view/tku-tkk/tku-tkk.php');
?>