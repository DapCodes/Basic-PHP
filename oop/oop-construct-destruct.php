<?php

class Kucing
{
    var $warna;
    var $jenis;

    public function makan()
    {
        echo "Kucing suka makan Whiskas";
    }

    public function minum()
    {
        echo "Kucing suka minum Air";
    }

    public function __construct()
    {
        echo "Bissmillah <br>";
    }

    public function __destruct()
    {
        echo "Alhamdhulillah";
    }
}

$cetak = new Kucing();

echo $cetak->makan();
echo "<br>";
echo $cetak->minum();
echo "<br>";
echo $cetak->warna = "Kuning";
echo "<br>";
echo $cetak->jenis = "Anggora <br>";
