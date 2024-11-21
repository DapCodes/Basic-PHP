<?php

$nama = "Hana";
$jenisKelamin = "Perempuan";
$jenis = "Makanan";
$menu = "Nasi Goreng";
$jumlah = 2;


if ($jenis == "Makanan") {
    
    if ($menu == "Nasi Goreng") {
        $harga = 10000;
    }elseif ($menu == "Mie Goreng") {
        $harga = 15000;
    }elseif ($menu == "Ayam Goreng") {
        $harga = 20000;
    }else {
        echo "Daftar menu tidak ada";
    }

} elseif ($jenis == "Minuman") {
    if ($menu == "Air Mineral") {
        $harga = 5000;
    }elseif ($menu == "Fresh Tea") {
        $harga = 7000;
    }elseif ($menu == "Jus") {
        $harga = 12000;
    }else {
        echo "Daftar menu tidak ada";
    }
} else {
        echo "Daftar Jenis tidak ada";
    }


$total = $harga * $jumlah;

if ($total >= 50000) {
    $diskon = $total * 0.20;
    $totalBayar = $total - $diskon;
} else {
    $totalBayar = $total;
    $diskon = "Tidak ada diskon";
}



?>

<!DOCTYPE html>
<html lang="en" style="font-family:monospace;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Restoran Selalu Rame</h3>
    <hr>
    <table> 
        <tr>
            <td>Nama</td>
            <td> : </td>
            <td><?= $nama ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td> : </td>
            <td><?= $jenisKelamin ?></td>
        </tr>
        <tr>
            <td>Jenis</td>
            <td> : </td>
            <td><?= $jenis ?></td>
        </tr>
        <tr>
            <td>Menu</td>
            <td> : </td>
            <td><?= $menu ?></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td> : </td>
            <td><?= $harga ?></td>
        </tr>
        <tr>
            <td>Jumlah</td>
            <td> : </td>
            <td><?= $jumlah ?></td>
        </tr>
    </table>
    <hr>
    <table>
        <tr>
            <td>Total</td>
            <td> : </td>
            <td><?= $total ?></td>
        </tr>
        <tr>
            <td>Diskon 20%</td>
            <td> : </td>
            <td><?= $diskon ?></td>
        </tr>
    </table>
    <hr>
    <table>
        <tr>
            <td>Total Bayar</td>
            <td> : </td>
            <td><?= $totalBayar ?></td>
        </tr>
    </table>
</body>
</html>