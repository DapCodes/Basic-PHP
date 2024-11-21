<?php
$siswa = [
    [
        "nama" => "Daffa Ramadhan Maulana",
        "jenis_kelamin" => "Laki - Laki",
        "kelas" => "XI RPL 1" 
    ],
    [
        "nama" => "Dhea Febrianti",
        "jenis_kelamin" => "Perempuan",
        "kelas" => "XI RPL 1"
    ]
    ];

foreach ($siswa as $a) {
    echo "Nama : " . $a['nama'] . "<br>";
    echo "Jenis Kelamin : " . $a['jenis_kelamin'] . "<br>";
    echo "Kelas : " . $a['kelas'];
    echo "<hr>";
}

?>