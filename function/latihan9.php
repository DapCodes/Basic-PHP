<?php
// Fungsi untuk menghitung luas persegi
function luasPersegi($sisi)
{
    return $sisi * $sisi;
}

// Fungsi untuk menghitung luas persegi panjang
function luasPersegiPanjang($panjang, $lebar)
{
    return $panjang * $lebar;
}

// Fungsi untuk menghitung luas segitiga
function luasSegitiga($alas, $tinggi)
{
    return 0.5 * $alas * $tinggi;
}

// Fungsi untuk menghitung luas lingkaran
function luasLingkaran($jariJari)
{
    return pi() * $jariJari * $jariJari;
}

// Contoh penggunaan fungsi
$sisi = 5;
echo "<h4>Luas Persegi</h4>";
echo "Sisi : " . $sisi . "<br>";
echo "Luas Persegi: " . luasPersegi($sisi) . " cm² <br><hr>";

$panjang = 8;
$lebar = 4;
echo "<h4>Luas Persegi Panjang</h4>";
echo "Panjang : " . $panjang . "<br>";
echo "Lebar : " . $lebar . "<br>";
echo "Luas Persegi Panjang: " . luasPersegiPanjang($panjang, $lebar) . " cm² <br><hr>";

$alas = 6;
$tinggi = 4;
echo "<h4>Luas Segitiga</h4>";
echo "Alas : " . $alas . "<br>";
echo "Tinggi : " . $tinggi . "<br>";
echo "Luas Segitiga: " . luasSegitiga($alas, $tinggi) . " cm² <br><hr>";

$jariJari = 7;
echo "<h4>Luas Persegi</h4>";
echo "Jari - jari : " . $jariJari . "<br>";
echo "Luas Lingkaran: " . luasLingkaran($jariJari) . " cm² <br><hr>";

?>