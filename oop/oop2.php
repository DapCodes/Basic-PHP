<?php

class Ppdb
{

    public function data_diri($jurusan, $nama_lengkap, $jenis_kelamin, $tempat_lahir, $tanggal_lahir, $no_hp, $email)
    {
        echo "Jurusan : " . $jurusan . "<br>";
        echo "Nama Lengkap : " . $nama_lengkap . "<br>";
        echo "Jenis kelamin : " . $jenis_kelamin . "<br>";
        echo "Tempat Lahir : " . $tempat_lahir . "<br>";
        echo "Tanggal Lahir : " . $tanggal_lahir . "<br>";
        echo "No Hp : " . $no_hp . "<br>";
        echo "Email : " . $email . "<br><hr>";
    }

    public function alamat_calon_peserta($provinsi, $kabupaten, $kecamatan, $desa, $alamat, $kode_pos)
    {
        echo "Provinsi : " . $provinsi . "<br>";
        echo "Kabupaten : " . $kabupaten . "<br>";
        echo "Kecamatan : " . $kecamatan . "<br>";
        echo "Desa : " . $desa . "<br>";
        echo "Alamat : " . $alamat . "<br>";
        echo "Kode Pos : " . $kode_pos . "<br><hr>";
    }

    public function data_asal_sekolah($nama_asal_sekolah, $alamat_sekolah)
    {
        echo "Nama Asal Sekolah : " . $nama_asal_sekolah . "<br>";
        echo "Alamat Sekolah : " . $alamat_sekolah . "<br><hr>";
    }

    public function data_orang_tua($nama_lengkap_ortu, $pekerjaan, $no_hp_ortu, $alamat_ortu)
    {
        echo "Nama Lengkap Ayah/Ibu/Wali : " . $nama_lengkap_ortu . "<br>";
        echo "Pekerjaan Ayah/Ibu/Wali : " . $pekerjaan . "<br>";
        echo "No Hp : " . $no_hp_ortu . "<br>";
        echo "Alamat Lengkap : " . $alamat_ortu . "<br>";
    }
}


$ppdb = new Ppdb();

$ppdb->data_diri("RPL", "Andi Setiawan", "Laki-laki", "Jakarta", "12-01-2005", "081234567890", "andi@example.com");

$ppdb->alamat_calon_peserta("DKI Jakarta", "Jakarta Selatan", "Kebayoran Baru", "Pondok Indah", "Jl. Melati No. 7", "12345");

$ppdb->data_asal_sekolah("SMP Negeri 1 Jakarta", "Jl. Sudirman No. 5, Jakarta");

$ppdb->data_orang_tua("Budi Setiawan", "Wiraswasta", "081298765432", "Jl. Anggrek No. 9, Jakarta");
