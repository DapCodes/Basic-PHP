<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Biodata Diri</title>
</head>

<body>
    <center>
        <img src="smk.png" alt="" style="width: 200px;">
        <h2>Form Biodata Diri</h2>
        <form method="POST">
            <table>
                <tr>
                    <td>Nama</td>
                    <td> : </td>
                    <td><input type="text" name="nama" required></td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td> : </td>
                    <td><input type="text" name="tempat_lahir" required></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td> : </td>
                    <td><input type="date" name="tanggal_lahir" required></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td> : </td>
                    <td>
                        <input type="radio" id="laki_laki" name="jenis_kelamin" value="Laki-laki" required>
                        <label for="laki_laki">Laki-laki</label>
                        <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan" required>
                        <label for="perempuan">Perempuan</label>
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td> : </td>
                    <td><textarea name="alamat" rows="3" required></textarea></td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td> : </td>
                    <td>
                        <select name="agama" required>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Buddha">Buddha</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Pendidikan Terakhir</td>
                    <td> : </td>
                    <td>
                        <select name="pendidikan" required>
                            <option value="SD">SD</option>
                            <option value="SMP">SMP</option>
                            <option value="SMA">SMA</option>
                            <option value="D3">D3</option>
                            <option value="S1">S1</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td> : </td>
                    <td>
                        <select name="status" required>
                            <option value="Sudah Menikah">Sudah Menikah</option>
                            <option value="Belum Menikah">Belum Menikah</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Hobi</td>
                    <td> : </td>
                    <td>
                        <input type="checkbox" id="membaca" name="hobi[]" value="Membaca">
                        <label for="membaca">Membaca</label>
                        <input type="checkbox" id="menulis" name="hobi[]" value="Menulis">
                        <label for="menulis">Menulis</label>
                        <input type="checkbox" id="ngepush" name="hobi[]" value="Ngepush">
                        <label for="ngepush">Ngepush</label>
                    </td>
                </tr>
                <tr>
                    <td>Cita-cita</td>
                    <td> : </td>
                    <td>
                        <select name="cita_cita" required>
                            <option value="Programmer">Programmer</option>
                            <option value="Dokter">Dokter</option>
                            <option value="Guru">Guru</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Kata-kata Bijak</td>
                    <td> : </td>
                    <td><textarea name="kata_bijak" rows="3"></textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <input type="submit" value="KIRIM">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $agama = $_POST['agama'];
    $pendidikan = $_POST['pendidikan'];
    $status = $_POST['status'];
    $hobi = isset($_POST['hobi']) ? implode(", ", $_POST['hobi']) : 'Tidak ada hobi';
    $cita_cita = $_POST['cita_cita'];
    $kata_bijak = $_POST['kata_bijak'];

    echo "<center>";
    echo "<h2>Hasil Biodata Diri</h2>";
    echo "<table>";
    echo "<tr><td>Nama</td><td> : </td><td>$nama</td></tr>";
    echo "<tr><td>Tempat Lahir</td> <td> : </td> <td>$tempat_lahir</td></tr>";
    echo "<tr><td>Tanggal Lahir</td> <td> : </td> <td>$tanggal_lahir</td></tr>";
    echo "<tr><td>Jenis Kelamin</td> <td> : </td> <td>$jenis_kelamin</td></tr>";
    echo "<tr><td>Alamat</td> <td> : </td> <td>$alamat</td></tr>";
    echo "<tr><td>Agama</td> <td> : </td> <td>$agama</td></tr>";
    echo "<tr><td>Pendidikan Terakhir</td> <td> : </td> <td>$pendidikan</td></tr>";
    echo "<tr><td>Status</td> <td> : </td> <td>$status</td></tr>";
    echo "<tr><td>Hobi</td> <td> : </td> <td>$hobi</td></tr>";
    echo "<tr><td>Cita-cita</td> <td> : </td> <td>$cita_cita</td></tr>";
    echo "<tr><td>Kata-kata Bijak</td> <td> : </td> <td>$kata_bijak</td></tr>";
    echo "</table>";
    echo "</center>";
}
?>