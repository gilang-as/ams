<?php
include('setting/config.php');
if(empty($_SESSION['status'])){
    header("location:".$domain."akun/masuk");
}
include('view/dashboard/dashboard.php');
?>