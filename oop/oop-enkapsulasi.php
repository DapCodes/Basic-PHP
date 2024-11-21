<?php
class Kucing {
    // atribut hanya bisa di panggil di dalam class "Kucing"
    private $nama = "Chico";
    private $jenis = "Persia";

    // method yang bisa di tampilkan di luar class
    // termasuk atribut yang private bila di sisipkan ke dalam method yang bersifat publik. menjadi dapat di panggil dari luar class
    public function identitasKucing() {
        echo "Nama kucing ini " . $this->nama . "<br>";
        echo "Jenis kucing ini " . $this->jenis;
    }

}

$cetak = new Kucing();
echo $cetak->identitasKucing();

?>