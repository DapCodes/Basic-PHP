<?php

class Bangun_datar {
    public $luas_Persegi;
    public $luas_Persegi_panjang;
    public $luas_segitiga;
    public $luas_lingkaran;
    
    public function luasPersegi($sisi)
    {
        return $this->luas_Persegi = $sisi * $sisi;
    }

    // Fungsi untuk menghitung luas persegi panjang
    public function luasPersegiPanjang($panjang, $lebar)
    {
        return $this->luas_Persegi_panjang = $panjang * $lebar;
    }

    // Fungsi untuk menghitung luas segitiga
    public function luasSegitiga($alas, $tinggi)
    {
        return $this->luas_segitiga = 0.5 * $alas * $tinggi;
    }

    // Fungsi untuk menghitung luas lingkaran
    public function luasLingkaran($jariJari)
    {
        return $this->luas_lingkaran = pi() * $jariJari * $jariJari;
    }
}


$bangunDatar = new Bangun_datar;
$sisi = 5;
echo "<h4>Luas Persegi</h4>";
echo "Sisi : " . $sisi . "<br>";
echo "Luas Persegi: " . $bangunDatar->luasPersegi($sisi) . " cm² <br><hr>";

$panjang = 8;
$lebar = 4;
echo "<h4>Luas Persegi Panjang</h4>";
echo "Panjang : " . $panjang . "<br>";
echo "Lebar : " . $lebar . "<br>";
echo "Luas Persegi Panjang: " . $bangunDatar->luasPersegiPanjang($panjang, $lebar) . " cm² <br><hr>";

$alas = 6;
$tinggi = 4;
echo "<h4>Luas Segitiga</h4>";
echo "Alas : " . $alas . "<br>";
echo "Tinggi : " . $tinggi . "<br>";
echo "Luas Segitiga: " . $bangunDatar->luasSegitiga($alas, $tinggi) . " cm² <br><hr>";

$jariJari = 7;
echo "<h4>Luas Persegi</h4>";
echo "Jari - jari : " . $jariJari . "<br>";
echo "Luas Lingkaran: " . $bangunDatar->luasLingkaran($jariJari) . " cm² <br><hr>";

?>