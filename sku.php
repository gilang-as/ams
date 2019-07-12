<?php
include('setting/config.php');
if(empty($_SESSION['status'])){
    header("location:".$domain."akun/masuk");
}
$json = file_get_contents('data/sku_bantara.json');
$data = json_decode($json, TRUE);
//print_r($data);
include('view/sku/sku.php');
?>