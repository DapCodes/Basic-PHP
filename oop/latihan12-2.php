<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output Pendaftaran</title>
    <style>
        /* Styling untuk layout card */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            color: #333;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
        }

        .card {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            padding: 20px;
        }

        .card h3 {
            color: #007bff;
            margin-top: 0;
        }

        .card p {
            margin: 5px 0;
            line-height: 1.6;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php
        if (isset($_POST['kirim'])) {
            class Pendaftaran
            {
                private $jurusan;
                private $namaSiswa;
                private $jenisKelamin;
                private $tempatLahir;
                private $noHP;
                private $email;
                private $provinsi;
                private $kabupaten_kota;
                private $kecamatan;
                private $desa;
                private $alamat;
                private $kodePos;
                private $nama_asal_sekolah;
                private $alamat_sekolah;
                private $hubungan;
                private $nama_lengkap;
                private $pekerjaan;
                private $nomor_hp;
                private $alamat_lengkap;

                public function __construct($data)
                {
                    $this->jurusan = $data['jurusan'];
                    $this->namaSiswa = $data['namaSiswa'];
                    $this->jenisKelamin = $data['jenisKelamin'];
                    $this->tempatLahir = $data['tempatLahir'];
                    $this->noHP = $data['noHP'];
                    $this->email = $data['email'];
                    $this->provinsi = $data['provinsi'];
                    $this->kabupaten_kota = $data['kabupaten_kota'];
                    $this->kecamatan = $data['kecamatan'];
                    $this->desa = $data['desa'];
                    $this->alamat = $data['alamat'];
                    $this->kodePos = $data['kodePos'];
                    $this->nama_asal_sekolah = $data['nama_asal_sekolah'];
                    $this->alamat_sekolah = $data['alamat_sekolah'];
                    $this->hubungan = $data['hubungan'];
                    $this->nama_lengkap = $data['nama_lengkap'];
                    $this->pekerjaan = $data['pekerjaan'];
                    $this->nomor_hp = $data['nomor_hp'];
                    $this->alamat_lengkap = $data['alamat_lengkap'];
                }

                public function dataDiriCalonPendaftar()
                {
                    echo "<div class='card'>";
                    echo "<h3>Data Diri Calon Pendaftar</h3>";
                    echo "<p>Jurusan: $this->jurusan</p>";
                    echo "<p>Nama Lengkap: $this->namaSiswa</p>";
                    echo "<p>Jenis Kelamin: $this->jenisKelamin</p>";
                    echo "<p>Tempat Lahir: $this->tempatLahir</p>";
                    echo "<p>No HP: $this->noHP</p>";
                    echo "<p>Email: $this->email</p>";
                    echo "</div>";
                }

                public function alamatCalonPendaftar()
                {
                    echo "<div class='card'>";
                    echo "<h3>Alamat Calon Pendaftar</h3>";
                    echo "<p>Provinsi: $this->provinsi</p>";
                    echo "<p>Kabupaten/Kota: $this->kabupaten_kota</p>";
                    echo "<p>Kecamatan: $this->kecamatan</p>";
                    echo "<p>Desa: $this->desa</p>";
                    echo "<p>Alamat: $this->alamat</p>";
                    echo "<p>Kode Pos: $this->kodePos</p>";
                    echo "</div>";
                }

                public function dataAsalSekolah()
                {
                    echo "<div class='card'>";
                    echo "<h3>Data Asal Sekolah</h3>";
                    echo "<p>Nama Asal Sekolah: $this->nama_asal_sekolah</p>";
                    echo "<p>Alamat Sekolah: $this->alamat_sekolah</p>";
                    echo "</div>";
                }

                public function dataOrangTua()
                {
                    echo "<div class='card'>";
                    echo "<h3>Data Orang Tua / Wali</h3>";
                    echo "<p>Nama Lengkap $this->hubungan: $this->nama_lengkap</p>";
                    echo "<p>Pekerjaan: $this->pekerjaan</p>";
                    echo "<p>Nomor HP: $this->nomor_hp</p>";
                    echo "<p>Alamat Lengkap: $this->alamat_lengkap</p>";
                    echo "</div>";
                }
            }

            $pendaftaran = new Pendaftaran($_POST);
            $pendaftaran->dataDiriCalonPendaftar();
            $pendaftaran->alamatCalonPendaftar();
            $pendaftaran->dataAsalSekolah();
            $pendaftaran->dataOrangTua();
        }
        ?>
    </div>
</body>

</html>