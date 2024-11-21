<?php
$propinsi = "Jawa Timur";
$kota = "Malang";

if ($propinsi == "Jawa Barat") {
    echo "Selamat datang di Jawa Barat <br>";
    
    if ($kota == "Bandung") {
        echo "Selamat datang di kota Bandung";
    } elseif ($kota == "Cimahi") {
        echo "Selamat datang di kota Cimahi";
    } elseif ($kota == "Bogor") {
        echo "Selamat datang di kota Bogor";
    } elseif ($kota == "Bekasi") {
        echo "Selamat datang di kota Bekasi";
    } elseif ($kota == "Depok") {
        echo "Selamat datang di kota Depok";
    } else {
        echo "Kota Tidak Sesuai";
    }

} elseif ($propinsi == "Jawa Timur") {
    echo "Selamat datang di Jawa Timur <br>";

    if ($kota == "Batu") {
        echo "Selamat datang di kota Batu";
    } elseif ($kota == "Blitar") {
        echo "Selamat datang di kota Blitar";
    } elseif ($kota == "Kediri") {
        echo "Selamat datang di kota Kediri";
    } elseif ($kota == "Madiun") {
        echo "Selamat datang di kota Madiun";
    } elseif ($kota == "Malang") {
        echo "Selamat datang di kota Malang";
    } else {
        echo "Kota Tidak Sesuai";
    }

} elseif ($propinsi == "Jawa Tengah") {
    echo "Selamat datang di Jawa Tengah <br>    ";

    if ($kota == "Magelang") {
        echo "Selamat datang di kota Magelang";
    } elseif ($kota == "Pekalongan") {
        echo "Selamat datang di kota Pekalongan";
    } elseif ($kota == "Salatiga") {
        echo "Selamat datang di kota Salatiga";
    } elseif ($kota == "Semarang") {
        echo "Selamat datang di kota Semarang";
    } elseif ($kota == "Surakarta") {
        echo "Selamat datang di kota Surakarta";
    } else {
        echo "Kota Tidak Sesuai";
    }

} else {
    echo "Provinsi Tidak Sesuai";
}