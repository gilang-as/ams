<?php
error_reporting(1);
//Domain "http://localhost/"
$domain="http://project/ams/";
//Database
$hostname="localhost";
$username="root";
$password="";
$database="ams";
$connect = new mysqli($hostname, $username, $password, $database);
if (!$connect) {
    die ("connection failed: " . mysqli_connect_error());
} else {
    $connect->set_charset('utf8');
}
include('session.php');
include('function.php');
?>