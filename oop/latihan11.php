<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 11</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f4f6;
            color: #333;
            margin: 0;
            padding: 20px;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 500px;
            margin-top: 20px;
        }

        h2,
        h3 {
            color: #4CAF50;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        td {
            padding: 8px;
            vertical-align: middle;
        }

        input[type="text"],
        input[type="number"],
        select {
            width: 100%;
            padding: 8px;
            margin-top: 4px;
            margin-bottom: 4px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
        }

        button:hover {
            background-color: #4CAF50;
        }

        center {
            display: flex;
            justify-content: center;
        }
        
    </style>
</head>

<body>
    <center>
        <form action="latihan11-2.php" method="post">
            <h2>Rapot Siswa</h2>
            <table>
                <tr>
                    <td>Nama</td>
                    <td> : </td>
                    <td><input type="text" name="nama" id=""></td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td> : </td>
                    <td><input type="text" name="kelas" id=""></td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td> : </td>
                    <td>
                        <select name="jurusan" id="" class="selection">
                            <option value="Rekayasa Perangkat Lunak">
                                Rekayasa Perangkat Lunak
                            </option>
                            <option value="Teknik Kendaraan Ringan Otomotif">
                                Teknik Kendaraan Ringan Otomotif
                            </option>
                            <option value="Teknik Bisnis Sepeda Motor">
                                Teknik Bisnis Sepeda Motor
                            </option>
                        </select>
                    </td>
                </tr>
            </table>

            <h3>Nilai Matematika</h3>
            <table>
                <tr>
                    <td>Nilai Harian</td>
                    <td> : </td>
                    <td><input type="number" name="nilaiHarian" id=""></td>
                </tr>
                <tr>
                    <td>Nilai Tugas</td>
                    <td> : </td>
                    <td><input type="number" name="nilaiTugas" id=""></td>
                </tr>
                <tr>
                    <td>Nilai UTS</td>
                    <td> : </td>
                    <td><input type="number" name="nilaiUTS" id=""></td>
                </tr>
                <tr>
                    <td>Nilai UAS</td>
                    <td> : </td>
                    <td><input type="number" name="nilaiUAS" id=""></td>
                </tr>
            </table>

            <h3>Nilai Indonesia</h3>
            <table>
                <tr>
                    <td>Nilai Harian</td>
                    <td> : </td>
                    <td><input type="number" name="nilaiHarian1" id=""></td>
                </tr>
                <tr>
                    <td>Nilai Tugas</td>
                    <td> : </td>
                    <td><input type="number" name="nilaiTugas1" id=""></td>
                </tr>
                <tr>
                    <td>Nilai UTS</td>
                    <td> : </td>
                    <td><input type="number" name="nilaiUTS1" id=""></td>
                </tr>
                <tr>
                    <td>Nilai UAS</td>
                    <td> : </td>
                    <td><input type="number" name="nilaiUAS1" id=""></td>
                </tr>
            </table>

            <h3>Nilai Inggris</h3>
            <table>
                <tr>
                    <td>Nilai Harian</td>
                    <td> : </td>
                    <td><input type="number" name="nilaiHarian2" id=""></td>
                </tr>
                <tr>
                    <td>Nilai Tugas</td>
                    <td> : </td>
                    <td><input type="number" name="nilaiTugas2" id=""></td>
                </tr>
                <tr>
                    <td>Nilai UTS</td>
                    <td> : </td>
                    <td><input type="number" name="nilaiUTS2" id=""></td>
                </tr>
                <tr>
                    <td>Nilai UAS</td>
                    <td> : </td>
                    <td><input type="number" name="nilaiUAS2" id=""></td>
                </tr>
            </table>

            <h3>Nilai Produktif</h3>
            <table>
                <tr>
                    <td>Nilai Harian</td>
                    <td> : </td>
                    <td><input type="number" name="nilaiHarian3" id=""></td>
                </tr>
                <tr>
                    <td>Nilai Tugas</td>
                    <td> : </td>
                    <td><input type="number" name="nilaiTugas3" id=""></td>
                </tr>
                <tr>
                    <td>Nilai UTS</td>
                    <td> : </td>
                    <td><input type="number" name="nilaiUTS3" id=""></td>
                </tr>
                <tr>
                    <td>Nilai UAS</td>
                    <td> : </td>
                    <td><input type="number" name="nilaiUAS3" id=""></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><button type="submit" name="kirim">SUBMIT</button></td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>