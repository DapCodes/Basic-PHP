<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        form {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 20px 40px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 80%;
            max-width: 600px;
        }

        h3 {
            color: #007bff;
            border-bottom: 2px solid #007bff;
            padding-bottom: 5px;
            margin-bottom: 15px;
        }

        table {
            width: 100%;
            margin-bottom: 20px;
        }

        table td {
            padding: 8px 0;
            vertical-align: top;
        }

        label,
        select,
        input[type="text"],
        input[type="tel"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 8px;
            margin: 4px 0 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
        }

        select {
            appearance: none;
            cursor: pointer;
        }

        input[type="radio"] {
            margin-right: 5px;
        }

        textarea {
            resize: vertical;
        }

        button {
            background-color: #007bff;
            color: #ffffff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 100%;
            margin-top: 20px;
        }

        button:hover {
            background-color: #0056b3;
        }

        img {
            display: block;
            margin: 0 auto 20px;
            width: 100px;
            height: auto;
        }
    </style>
</head>

<body>
    <form action="latihan12-2.php" method="post">
        <!-- Data Calon PDB -->
        <h3>Data Diri Calon Pendaftar</h3>
        <table>
            <tr>
                <td>Jurusan</td>
                <td>
                    <select name="jurusan" class="selection">
                        <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                        <option value="Teknik Kendaraan Ringan Otomotif">Teknik Kendaraan Ringan Otomotif</option>
                        <option value="Teknik Bisnis Sepeda Motor">Teknik Bisnis Sepeda Motor</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td><input type="text" name="namaSiswa"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <input type="radio" name="jenisKelamin" value="Laki - Laki"> Laki - Laki <br>
                    <input type="radio" name="jenisKelamin" value="Perempuan"> Perempuan
                </td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td><input type="text" name="tempatLahir"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td><input type="text" name="tanggalLahir"></td>
            </tr>
            <tr>
                <td>No HP Siswa</td>
                <td><input type="tel" name="noHP"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email"></td>
            </tr>
        </table>

        <!-- Alamat Calon PDB -->
        <h3>Alamat Calon Pendaftar</h3>
        <table>
            <tr>
                <td>Provinsi</td>
                <td>
                    <select name="provinsi" id="" class="selection">
                        <option value="-">Pilih Provinsi</option>
                        <option value="Aceh">Aceh</option>
                        <option value="Sumatera Utara">Sumatera Utara</option>
                        <option value="Sumatera Barat">Sumatera Barat</option>
                        <option value="Riau">Riau</option>
                        <option value="Kepulauan Riau">Kepulauan Riau</option>
                        <option value="Jawa Barat">Jawa Barat</option>
                        <option value="Jawa Tengah">Jawa Tengah</option>
                        <option value="Jawa Timur">Jawa Timur</option>
                        <option value="Bali">Bali</option>
                        <option value="Papua">Papua</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Kabupaten/Kota</td>
                <td>
                    <select name="kabupaten_kota" id="" class="selection">
                        <option value="-">Pilih Kota</option>
                        <option value="Bandung">Bandung</option>
                        <option value="Bandung Barat">Bandung Barat</option>
                        <option value="Bekasi">Bekasi</option>
                        <option value="Bogor">Bogor</option>
                        <option value="Ciamis">Ciamis</option>
                        <option value="Cianjur">Cianjur</option>
                        <option value="Cimahi">Cimahi</option>
                        <option value="Cirebon">Cirebon</option>
                        <option value="Garut">Garut</option>
                        <option value="Indramayu">Indramayu</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Kecamatan</td>
                <td>
                    <select name="kecamatan" id="" class="selection">
                        <option value="-">Pilih Kabupaten</option>
                        <option value="Andir">Andir</option>
                        <option value="Antapani">Antapani</option>
                        <option value="Arcamanik">Arcamanik</option>
                        <option value="Astanaanyar">Astanaanyar</option>
                        <option value="Babakan Ciparay">Babakan Ciparay</option>
                        <option value="Bandung Kidul">Bandung Kidul</option>
                        <option value="Bandung Kulon">Bandung Kulon</option>
                        <option value="Bandung Wetan">Bandung Wetan</option>
                        <option value="Batununggal">Batununggal</option>
                        <option value="Bojongloa Kaler">Bojongloa Kaler</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Desa</td>
                <td>
                    <select name="desa" id="" class="selection">
                        <option value="-">Pilih Desa</option>
                        <option value="Ciburial">Ciburial</option>
                        <option value="Cileunyi">Cileunyi</option>
                        <option value="Ciparay">Ciparay</option>
                        <option value="Margaluyu">Margaluyu</option>
                        <option value="Mekarsari">Mekarsari</option>
                        <option value="Cangkuang">Cangkuang</option>
                        <option value="Pangalengan">Pangalengan</option>
                        <option value="Rancamanyar">Rancamanyar</option>
                        <option value="Sukamaju">Sukamaju</option>
                        <option value="Sukasari">Sukasari</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><textarea name="alamat"></textarea></td>
            </tr>
            <tr>
                <td>Kode Pos</td>
                <td><input type="text" name="kodePos"></td>
            </tr>
        </table>

        <h3>Alamat Asal Sekolah</h3>

        <label for="nama_asal_sekolah">Nama Asal Sekolah</label><br>
        <input type="text" id="nama_asal_sekolah" name="nama_asal_sekolah" required><br><br>

        <label for="alamat_sekolah">Alamat Sekolah</label><br>
        <textarea id="alamat_sekolah" name="alamat_sekolah" rows="4" required></textarea><br><br>


        <h3>Data Orang Tua</h3>
        <label for="nama_orang_tua">Nama Lengkap Ayah / Ibu / Wali</label><br>
        <select name="hubungan" id="hubungan" required>
            <option value="Ayah">Ayah</option>
            <option value="Ibu">Ibu</option>
            <option value="Wali">Wali</option>
        </select><br><br>

        <label for="nama_lengkap">Nama Lengkap</label><br>
        <input type="text" id="nama_lengkap" name="nama_lengkap" required><br><br>

        <label for="pekerjaan">Pekerjaan</label><br>
        <input type="text" id="pekerjaan" name="pekerjaan" required><br><br>

        <label for="nomor_hp">Nomor HP</label><br>
        <input type="tel" id="nomor_hp" name="nomor_hp" pattern="[0-9]{10,15}" required><br><br>

        <label for="alamat_lengkap">Alamat Lengkap</label><br>
        <textarea id="alamat_lengkap" name="alamat_lengkap" rows="4" required></textarea><br><br>

        <button type="submit" name="kirim">Kirim Data</button>
    </form>
</body>

</html>