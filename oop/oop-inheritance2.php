<?php
class BangunDatar {
    public $luas_Persegi;
    public $luas_Persegi_panjang;
    public $luas_segitiga;
    public $luas_lingkaran;
    public $keliling_Persegi;
    public $keliling_Persegi_panjang;
    public $keliling_segitiga;
    public $keliling_lingkaran;
}

    class Luas extends BangunDatar {
        // Fungsi untuk menghitung luas persegi
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


    class Keliling extends BangunDatar {
        // Fungsi untuk menghitung Keliling persegi
        public function keliling_Persegi($sisi)
        {
            return $this->keliling_Persegi = $sisi * 4;
        }

        // Fungsi untuk menghitung keliling persegi panjang
        public function keliling_PersegiPanjang($panjang, $lebar)
        {
            return $this->keliling_Persegi_panjang = 2 * ($panjang + $lebar);
        }

        // Fungsi untuk menghitung keliling segitiga
        public function keliling_Segitiga($sisi1, $sisi2, $sisi3)
        {
            return $this->keliling_segitiga = $sisi1 + $sisi2 + $sisi3;
        }

        // Fungsi untuk menghitung keliling lingkaran
        public function keliling_Lingkaran($jariJari)
        {
            return $this->keliling_lingkaran = 2 * pi() * $jariJari;
        }
    }

// Inisialisasi kelas Luas dan Keliling
$luas = new Luas();
$keliling = new Keliling();

// Menghitung luas bangun datar
echo "Luas Persegi (sisi = 4): " . $luas->luasPersegi(4) . "<br>";
echo "Luas Persegi Panjang (panjang = 5, lebar = 3): " . $luas->luasPersegiPanjang(5, 3) . "<br>";
echo "Luas Segitiga (alas = 6, tinggi = 4): " . $luas->luasSegitiga(6, 4) . "<br>";
echo "Luas Lingkaran (jari-jari = 7): " . $luas->luasLingkaran(7) . "<br>";

// Menghitung keliling bangun datar
echo "Keliling Persegi (sisi = 4): " . $keliling->keliling_Persegi(4) . "<br>";
echo "Keliling Persegi Panjang (panjang = 5, lebar = 3): " . $keliling->keliling_PersegiPanjang(5, 3) . "<br>";
echo "Keliling Segitiga (sisi1 = 3, sisi2 = 4, sisi3 = 5): " . $keliling->keliling_Segitiga(3, 4, 5) . "<br>";
echo "Keliling Lingkaran (jari-jari = 7): " . $keliling->keliling_Lingkaran(7) . "<br>";

?>

