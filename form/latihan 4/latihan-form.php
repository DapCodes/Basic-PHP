<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Nilai Ujian Nasional</title>
</head>

<body>
    <center>
        <h2>Nilai Ujian Nasional</h2>
        <form action="" method="post">
            <table>
                <tr>
                    <td>Nama</td>
                    <td> : </td>
                    <td><input type="text" name="nama" required></td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td> : </td>
                    <td><input type="text" id="kelas" name="kelas" required></td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td> : </td>
                    <td>
                        <select id="jurusan" name="jurusan" required>
                            <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                            <option value="Teknik Kendaraan Ringan Otomotif">Teknik Kendaraan Ringan Otomotif</option>
                            <option value="Teknik Bisnis Sepeda Motor">Teknik Bisnis Sepeda Motor</option>
                        </select>
                    </td>
                </tr>
            </table>
            <br>
            <h3>Nilai Ujian</h3>
            <table>
                <tr>
                    <td>Nilai B.Indonesia</td>
                    <td> : </td>
                    <td><input type="number" name="nilaiBindo" required></td>
                </tr>
                <tr>
                    <td>Nilai B.Inggris</td>
                    <td> : </td>
                    <td><input type="number" name="nilaiBinggris" required></td>
                </tr>
                <tr>
                    <td>Nilai Matematika</td>
                    <td> : </td>
                    <td><input type="number" name="nilaiMatematika" required></td>
                </tr>
                <tr>
                    <td>Nilai Produktif</td>
                    <td> : </td>
                    <td><input type="number" name="nilaiProduktif" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><button type="submit" name="kirim">Simpan</button></td>
                </tr>
            </table>
        </form>

        <script>
            document.getElementById('kelas').addEventListener('input', function() {
                let kelasInput = this.value.toLowerCase();
                let jurusanSelect = document.getElementById('jurusan');

                if (kelasInput.includes('rpl')) {
                    jurusanSelect.value = 'Rekayasa Perangkat Lunak';
                } else if (kelasInput.includes('tkr')) {
                    jurusanSelect.value = 'Teknik Kendaraan Ringan Otomotif';
                } else if (kelasInput.includes('tbsm')) {
                    jurusanSelect.value = 'Teknik Bisnis Sepeda Motor';
                }
            });
        </script>
    </center>

</body>

</html>
<?php
if (isset($_POST['kirim'])) {
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];
    $nilaiBindo = $_POST['nilaiBindo'];
    $nilaiBinggris = $_POST['nilaiBinggris'];
    $nilaiMatematika = $_POST['nilaiMatematika'];
    $nilaiProduktif = $_POST['nilaiProduktif'];

    $total = $nilaiBindo + $nilaiBinggris + $nilaiMatematika + $nilaiProduktif;
    $rataRata = $total / 4;

    if ($rataRata > 75 && $rataRata <= 100) {
        $status = "Tuntas";
    } elseif ($rataRata < 75 && $rataRata >= 0) {
        $status = "Belum Tuntas";
    } else {
        $status = "Nilai Rata Rata melebihi batas maksimum";
    }

    echo "<center>";
    echo "<div class='result-table'>";
    echo "<h3>Hasil UN</h3>";
    echo "<table>";
    echo "<tr><td>Nama</td><td> : </td><td>$nama</td></tr>";
    echo "<tr><td>Kelas</td> <td> : </td> <td>$kelas</td></tr>";
    echo "<tr><td>Jurusan</td> <td> : </td> <td>$jurusan</td></tr>";
    echo "<tr><td>Nilai B.Indonesia</td> <td> : </td> <td>$nilaiBindo</td></tr>";
    echo "<tr><td>Nilai B.Inggris</td> <td> : </td> <td>$nilaiBinggris</td></tr>";
    echo "<tr><td>Nilai Matematika</td> <td> : </td> <td>$nilaiMatematika</td></tr>";
    echo "<tr><td>Nilai Produktif</td> <td> : </td> <td>$nilaiProduktif</td></tr>";
    echo "<tr><td>Rata Rata</td> <td> : </td> <td>$rataRata</td></tr>";
    echo "<tr><td>Status</td> <td> : </td> <td>$status</td></tr>";
    echo "</table>";
    echo "</div>";
    echo "</center>";
}
?>