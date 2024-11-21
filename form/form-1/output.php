<?php

if (isset($_POST['kirim'])) {
    $namaLengkap = $_POST['nama_lengkap'];
    $kelas = $_POST['kelas'];

    echo "Nama Lengkap : $namaLengkap <br>";
    echo "Kelas : $kelas <br>";

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="input.php">Kembali ke halaman awal</a>
</body>
</html>