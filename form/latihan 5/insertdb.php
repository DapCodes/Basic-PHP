<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";  // Sesuaikan dengan username database Anda
$password = "";  // Sesuaikan dengan password database Anda
$dbname = "latuhan_5";

// Membuat koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if (isset($_POST['proses'])) {
    $no = $_POST['no'];
    $nama = $_POST['nama'];
    $unit = $_POST['unit'];
    $tanggal = $_POST['tanggal'];
    $jabatan = $_POST['jabatan'];
    $lama_kerja = $_POST['lama_kerja'];
    $status = $_POST['status'];
    $bpjs = $_POST['bpjs'];
    $pinjaman = $_POST['pinjaman'];
    $tabungan = $_POST['tabungan'];
    $lainnya = $_POST['lainnya'];

    // Gaji berdasarkan jabatan
    $gaji = 0;
    switch ($jabatan) {
        case 'Kepala Sekolah':
            $gaji = 10000000;
            break;
        case 'Wakasek':
            $gaji = 7500000;
            break;
        case 'Guru':
            $gaji = 5000000;
            break;
        case 'OB':
            $gaji = 2500000;
            break;
    }

    // Tunjangan lama kerja
    $tunjangan_lama_kerja = 0;
    if ($lama_kerja > 5) {
        $tunjangan_lama_kerja = 1000000;
    }

    // Bonus berdasarkan status kerja
    $bonus = 0;
    if ($status == "Tetap") {
        $bonus = 500000;
    }

    // Gaji Kotor
    $gaji_kotor = $gaji + $tunjangan_lama_kerja + $bonus;

    // Total potongan
    $total_potongan = $bpjs + $pinjaman + $tabungan + $lainnya;

    // Gaji Bersih
    $gaji_bersih = $gaji_kotor - $total_potongan;

    // Query untuk memasukkan data ke tabel data_penggajihan
    $sql = "INSERT INTO data_penggajihan (no, nama, unit_pendidikan, tanggal_gaji, jabatan, gaji, lama_kerja, tunjangan_lama_kerja, status_kerja, bonus, gaji_kotor, total_potongan, gaji_bersih)
            VALUES ('$no', '$nama', '$unit', '$tanggal', '$jabatan', '$gaji', '$lama_kerja', '$tunjangan_lama_kerja', '$status', '$bonus', '$gaji_kotor', '$total_potongan', '$gaji_bersih')";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil dimasukkan ke database.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Menutup koneksi
    $conn->close();
}
