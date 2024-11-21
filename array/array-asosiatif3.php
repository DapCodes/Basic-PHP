<?php
$siswa = [
    [
        "nis" => "1001",
        "nama" => "Daffa",
        "kelas" => "XI RPL 1",
        "ekskul" => [
            ["nama_ekskul" => "Renang"],
            ["nama_ekskul" => "Basket"],
            ["nama_ekskul" => "Voli"]
        ]
    ],
    [
        "nis" => "1002",
        "nama" => "Dhea",
        "kelas" => "XI RPL 1",
        "ekskul" => [
            ["nama_ekskul" => "PMR"],
            ["nama_ekskul" => "English Club"],
            ["nama_ekskul" => "Jurnalistik"]
        ]
    ]
];

foreach ($siswa as $key) {
    echo "NIS : " . $key['nis'] . "<br>";
    echo "Nama : " . $key['nama'] . "<br>";
    echo "Kelas : " . $key['kelas'] . "<br>";

    echo "Ekskul : <br>";
    foreach ($key["ekskul"] as $ekskul) {
        echo "<ul><li>" . $ekskul['nama_ekskul'] . "</ul></li>";
    }
    echo "<hr>";
}
