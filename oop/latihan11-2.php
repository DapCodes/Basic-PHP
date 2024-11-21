<?php
if (isset($_POST['kirim'])) {
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];

    // nilai mtk
    $nilaiharian = $_POST['nilaiHarian'];
    $nilaiTugas = $_POST['nilaiTugas'];
    $nilaiUTS = $_POST['nilaiUTS'];
    $nilaiUAS = $_POST['nilaiUAS'];

    // nilai Indonesia
    $nilaiharian1 = $_POST['nilaiHarian1'];
    $nilaiTugas1 = $_POST['nilaiTugas1'];
    $nilaiUTS1 = $_POST['nilaiUTS1'];
    $nilaiUAS1 = $_POST['nilaiUAS1'];

    // nilai Inggris
    $nilaiharian2 = $_POST['nilaiHarian2'];
    $nilaiTugas2 = $_POST['nilaiTugas2'];
    $nilaiUTS2 = $_POST['nilaiUTS2'];
    $nilaiUAS2 = $_POST['nilaiUAS2'];

    // nilai Produktif
    $nilaiharian3 = $_POST['nilaiHarian3'];
    $nilaiTugas3 = $_POST['nilaiTugas3'];
    $nilaiUTS3 = $_POST['nilaiUTS3'];
    $nilaiUAS3 = $_POST['nilaiUAS3'];

    class Nilai
    {
        public $rataRata;
        public $grade;

        public function menghitungRataRata($nilaiharian, $nilaiTugas, $nilaiUTS, $nilaiUAS)
        {
            $this->rataRata = ($nilaiharian + $nilaiTugas + $nilaiUTS + $nilaiUAS) / 4;

            if ($this->rataRata >= 75) {
                $this->grade = "Lulus";
            } else {
                $this->grade = "Tidak Lulus";
            }
        }

        public function menghitungRataRataKeseluruhan($rataMatematika, $rataIndonesia, $rataInggris, $rataProduktif)
        {
            return ($rataMatematika + $rataIndonesia + $rataInggris + $rataProduktif) / 4;
        }
    }

    $cetak = new Nilai();

    // Calculate averages for each subject
    $cetak->menghitungRataRata($nilaiharian, $nilaiTugas, $nilaiUTS, $nilaiUAS);
    $rataMatematika = $cetak->rataRata;

    $cetak->menghitungRataRata($nilaiharian1, $nilaiTugas1, $nilaiUTS1, $nilaiUAS1);
    $rataIndonesia = $cetak->rataRata;

    $cetak->menghitungRataRata($nilaiharian2, $nilaiTugas2, $nilaiUTS2, $nilaiUAS2);
    $rataInggris = $cetak->rataRata;

    $cetak->menghitungRataRata($nilaiharian3, $nilaiTugas3, $nilaiUTS3, $nilaiUAS3);
    $rataProduktif = $cetak->rataRata;

    // Calculate overall average
    $overallAverage = $cetak->menghitungRataRataKeseluruhan($rataMatematika, $rataIndonesia, $rataInggris, $rataProduktif);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Nilai</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        h2 {
            color: #333;
        }

        table {
            width: 100%;
            max-width: 600px;
            margin: 20px auto;
            border-collapse: collapse;
            background: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        a {
            display: inline-block;
            margin: 20px 0;
            color: #007BFF;
            text-decoration: none;
            transition: color 0.3s;
        }

        a:hover {
            color: #0056b3;
        }
    </style>
</head>

<body>
    <center>
        <h2>Data Nilai</h2>
        <table>
            <tr>
                <td>Nama</td>
                <td> : </td>
                <td><?= $nama ?></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td> : </td>
                <td><?= $kelas ?></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td> : </td>
                <td><?= $jurusan ?></td>
            </tr>
        </table>
        <table>
            <tr>
                <th>Mapel</th>
                <th>Harian</th>
                <th>Tugas</th>
                <th>UTS</th>
                <th>UAS</th>
                <th>Rata Rata</th>
                <th>Grade</th>
            </tr>
            <tr>
                <td>Matematika</td>
                <td><?= $nilaiharian ?></td>
                <td><?= $nilaiTugas ?></td>
                <td><?= $nilaiUTS ?></td>
                <td><?= $nilaiUAS ?></td>
                <td><?= $rataMatematika ?></td>
                <td><?= ($rataMatematika >= 75) ? 'Lulus' : 'Tidak Lulus' ?></td>
            </tr>
            <tr>
                <td>Indonesia</td>
                <td><?= $nilaiharian1 ?></td>
                <td><?= $nilaiTugas1 ?></td>
                <td><?= $nilaiUTS1 ?></td>
                <td><?= $nilaiUAS1 ?></td>
                <td><?= $rataIndonesia ?></td>
                <td><?= ($rataIndonesia >= 75) ? 'Lulus' : 'Tidak Lulus' ?></td>
            </tr>
            <tr>
                <td>Inggris</td>
                <td><?= $nilaiharian2 ?></td>
                <td><?= $nilaiTugas2 ?></td>
                <td><?= $nilaiUTS2 ?></td>
                <td><?= $nilaiUAS2 ?></td>
                <td><?= $rataInggris ?></td>
                <td><?= ($rataInggris >= 75) ? 'Lulus' : 'Tidak Lulus' ?></td>
            </tr>
            <tr>
                <td>Produktif</td>
                <td><?= $nilaiharian3 ?></td>
                <td><?= $nilaiTugas3 ?></td>
                <td><?= $nilaiUTS3 ?></td>
                <td><?= $nilaiUAS3 ?></td>
                <td><?= $rataProduktif ?></td>
                <td><?= ($rataProduktif >= 75) ? 'Lulus' : 'Tidak Lulus' ?></td>
            </tr>
            <tr>
                <th colspan="5">Rata Rata Keseluruhan</th>
                <td><?= number_format($overallAverage, 2) ?></td>
                <td><?= ($overallAverage >= 75) ? 'Lulus' : 'Tidak Lulus' ?></td>
            </tr>
        </table>
        <a href="latihan11.php">Kembali ke pengisian data..</a>
    </center>
</body>

</html>