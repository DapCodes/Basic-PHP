<?php


$dataJson = '[
    {
        "nama": "Daffa",
        "alamat": "Bandung"
    },
    {
        "nama": "Dhea",
        "alamat": "Jakarta"
    }
]';

$list = json_decode($dataJson);

foreach ($list as $mahasiswa) {
    echo "Nama : {$mahasiswa->nama} <br>";
    echo "Alamat : {$mahasiswa->alamat} <br>";
    echo "<hr>";
}

?>