<?php
include('setting/config.php');
$json = file_get_contents('data/sku_bantara.json');
$data = json_decode($json, TRUE);
//print_r($data);
include('view/sku/sku.php');
?>