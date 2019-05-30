<?php
function tema($file){
    global $connect;
    global $domain;
    include("view/include/".$file.".php");
}
function domain($url){
    global $domain;
    echo $domain.$url;
}
?>