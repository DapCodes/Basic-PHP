<?php
$jurusan = "RPL";
$kelas = "10 TKRO";

if ($jurusan == "RPL") {

    echo "Selamat datang di jurusan RPL <br>";

    if ($kelas == "10 RPL") {
        echo "Ini kelas 10 RPL";
    } elseif ($kelas == "11 RPL") {
        echo "Ini kelas 11 RPL";
    } elseif ($kelas == "12 RPL") {
        echo "Ini kelas 12 RPL";
    } else {
        echo "Kelas tidak tersedia";
    }

} elseif ($jurusan == "TKRO") {

    echo "Selamat datang di jurusan TKRO <br>";

    if ($kelas == "10 TKRO") {
        echo "Ini kelas 10 TKRO";
    } elseif ($kelas == "11 TKRO") {
        echo "Ini kelas 11 TKRO";
    } elseif ($kelas == "12 TKRO") {
        echo "Ini kelas 12 TKRO";
    } else {
        echo "Kelas tidak tersedia";
    }
    
} elseif ($jurusan == "TBSM") {

    echo "Selamat datang di jurusan TBSM <br>";

    if ($kelas == "10 TBSM") {
        echo "Ini kelas 10 TBSM";
    } elseif ($kelas == "11 TBSM") {
        echo "Ini kelas 11 TBSM";
    } elseif ($kelas == "12 TBSM") {
        echo "Ini kelas 12 TBSM";
    } else {
        echo "Kelas tidak tersedia";
    }
    
} else {
    echo "Jurusan tidak tersedia";
}


?>