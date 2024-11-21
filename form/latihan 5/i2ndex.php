<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Gaji</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">
        <form action="insertdb.php" method="POST">
            <center>
                <img src="images.png" alt="">
                <h2>Penggajihan Guru/Karyawan Yayasan Assalaam</h2>
            </center> <br>
            <h3>Data Penggajihan</h3>

            <label>No</label>
            <input type="text" name="no" required>

            <label>Nama</label>
            <input type="text" name="nama" required>

            <label>Unit Pendidikan</label>
            <select name="unit" required>
                <option value="SMK">SMK</option>
                <option value="SMP">SMP</option>
                <option value="SD">SD</option>
                <option value="TK">TK</option>
            </select>

            <label>Tanggal Gaji</label>
            <input type="date" name="tanggal" required>

            <h3>Gaji</h3>
            <div class="row">
                <div>
                    <label>Jabatan</label>
                    <select name="jabatan" required>
                        <option value="Kepala Sekolah">Kepala Sekolah</option>
                        <option value="Wakasek">Wakasek</option>
                        <option value="Guru">Guru</option>
                        <option value="OB">OB</option>
                    </select>
                </div>

                <div>
                    <label>Lama Kerja</label>
                    <input type="number" name="lama_kerja" required>
                </div>
            </div>

            <div class="row">
                <div>
                    <label>Status Kerja</label>
                    <select name="status" required>
                        <option value="Tetap">Tetap</option>
                        <option value="Kontrak">Kontrak</option>
                    </select>
                </div>
            </div>

            <h3>Potongan</h3>
            <div class="row">
                <div>
                    <label>BPJS</label>
                    <input type="number" name="bpjs" required>
                </div>

                <div>
                    <label>Pinjaman</label>
                    <input type="number" name="pinjaman" required>
                </div>
            </div>

            <div class="row">
                <div>
                    <label>Tabungan</label>
                    <input type="number" name="tabungan" required>
                </div>

                <div>
                    <label>Lainnya</label>
                    <input type="number" name="lainnya" required>
                </div>
            </div>

            <button type="submit" name="proses">Proses</button>
        </form>
    </div>

</body>

</html>