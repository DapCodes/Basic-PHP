<html style="font-family: monospace;">
<?php
$nama = "Dudi Similikiti";
$kelas = "XI RPL 1";
$nilai1 = 80;
$nilai2 = 70;
$nilai3 = 80;
$nilai4 = 90;
$nilai5 = 80;
$jumlah = $nilai1 + $nilai2 + $nilai3 + $nilai4 + $nilai5;
$rataRata = $jumlah / 5;
?>

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
</table>
<table>
    <tr>
        <td>Nilai B.Indonesia</td>
        <td> : </td>
        <td><?= $nilai1 ?></td>
    </tr>
    <tr>
        <td>Nilai B.Inggris</td>
        <td> : </td>
        <td><?= $nilai2 ?></td>
    </tr>
    <tr>
        <td>Matematika</td>
        <td> : </td>
        <td><?= $nilai3 ?></td>
    </tr>
    <tr>
        <td>Produktif</td>
        <td> : </td>
        <td><?= $nilai4 ?></td>
    </tr>
    <tr>
        <td>Rata-rata</td>
        <td> : </td>
        <td><?= $rataRata ?></td>
    </tr>
</table>
<h4 style="position: relative; bottom:18px; left: 3px;">-----------------------</h4>
<?php
if ($rataRata > 75 && $rataRata <= 100) {
    ?> <p style="position: relative; bottom:35px; left:3px;">Status : *Anda Lulus*</p> <?php
} else {
    ?> <p style="position: relative; bottom:35px; left:3px;">Status : *Anda Gagal*</p> <?php
}
?>
</html>