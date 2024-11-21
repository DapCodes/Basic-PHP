<?php

class Gaji {
    public $gaji;
    public $tunjangan;
    public $totalPotongan;
    public $gajiBersih;

    public function gajiJabatan($nama, $jabatan) {
        if ($jabatan == "Direktur") {
            $this->gaji = 10000000;

            echo "Nama Karyawan : $nama <br>";
            echo "Jabatan : $jabatan <br>";
            echo "Gaji : " . $this->gaji . "<hr>"; 

        } elseif ($jabatan == "Manager") {
            $this->gaji = 7500000;

            echo "Nama Karyawan : $nama <br>";
            echo "Jabatan : $jabatan <br>";
            echo "Gaji : " . $this->gaji . "<hr>";

        } elseif ($jabatan == "Karyawan") {
            $this->gaji = 5000000;

            echo "Nama Karyawan : $nama <br>";
            echo "Jabatan : $jabatan <br>";
            echo "Gaji : " . $this->gaji . "<hr>";
            
        } elseif ($jabatan == "OB") {
            $this->gaji = 2500000;

            echo "Nama Karyawan : $nama <br>";
            echo "Jabatan : $jabatan <br>";
            echo "Gaji : " . $this->gaji . "<hr><br>";
            
        } else {
            $this->gaji = 0;
            echo "Input Tunjangan Salah : " . $this->tunjangan . "<hr>";
        }
    }

    public function tunjanganPendidikan($pendidikan) {
        if ($pendidikan == "S1") {
            $this->tunjangan = 1000000;

            echo "Pendidikan : $pendidikan <br>";
            echo "Tunjangan : " . $this->tunjangan . "<hr>";
            
        } elseif ($pendidikan == "SMA") {
            $this->tunjangan = 750000;

            echo "Pendidikan : $pendidikan <br>";
            echo "Tunjangan : " . $this->tunjangan . "<hr>";
            
        } elseif ($pendidikan == "SMP") {
            $this->tunjangan = 500000;

            echo "Pendidikan : $pendidikan <br>";
            echo "Tunjangan : " . $this->tunjangan . "<hr>";
            
        } elseif ($pendidikan == "SD") {
            $this->tunjangan = 250000;

            echo "Pendidikan : $pendidikan <br>";
            echo "Tunjangan : " . $this->tunjangan . "<hr>";
            
        } else {
            $this->tunjangan = 0;
            echo "Input Tunjangan Pendidikan Salah : " . $this->tunjangan . "<hr>";
        }
    }

    public function potongan($pinjaman, $tabungan) {
        $this->totalPotongan = $pinjaman + $tabungan;

        echo "Tabungan : $tabungan <br>";
        echo "Pinjaman : $pinjaman <br>";
        echo "Total Potongan : " . $this->totalPotongan . "<hr>";
            
    }

    public function gajiBersihPekerja() {
        $this->gajiBersih = $this->gaji + $this->tunjangan - $this->totalPotongan;

        echo "Total Gaji Bersih : " . $this->gajiBersih . "<hr>";
    }
}

$penggajihan = new Gaji();
?>

<center>
    <h4>Penggajihan Karyawan</h4>
</center>

<h4>Gaji Pokok</h4>
<?= $penggajihan->gajiJabatan("Daffa", "Direktur") ?>

<h4>Tunjangan</h4>
<?= $penggajihan->tunjanganPendidikan("S1") ?>

<h4>Potongan</h4>
<?= $penggajihan->potongan(200000, 1000000) ?>

<h4>Total Gaji Bersih</h4>
<?= $penggajihan->gajiBersihPekerja() ?>