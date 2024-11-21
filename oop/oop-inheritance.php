<?php
class Kendaraan {
    protected $warna = "Biru";

    protected function a() {
        echo "Saya Adalah Kendaraan";
    }
}


    class Mobil extends Kendaraan{
        public function b() {
            echo $this->a() . "<br>";
            echo "Warna saya : " . $this->warna;
        }
    }

$cetak = new Mobil();
echo $cetak->b();
?>