<?php
    function kegiatan($waktu){
        switch (true) {
            case $waktu == "pagi": 
            return "Coding";
            break;
            case $waktu == "siang": 
            return "Coding";
            break;
            case $waktu == "sore": 
            return "Coding";
            break;
            default:
            return "Coding";
            break;
        }
    }
    echo "Gilang Sedang ".kegiatan("malam");
?>