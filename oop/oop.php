<?php

class Kucing {
    var $warna;
    var $jenis;

    public function makan() {
        echo "Kucing suka makan Whiskas";
    }

    public function minum() {
        echo "Kucing suka minum Air";
    }
}

$cetak = new Kucing();

echo $cetak -> makan();
echo "<br>";
echo $cetak -> minum();
echo "<br>";
echo $cetak -> warna = "Kuning";
echo "<br>";
echo $cetak -> jenis = "Anggora";

?>