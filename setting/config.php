<?php
error_reporting(0);
date_default_timezone_set('UTC');
//Domain "http://localhost/"
$domain="http://project/ams/";
//Key API
$apiKey="5a0643580c864c3a9bb934529b055402";
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