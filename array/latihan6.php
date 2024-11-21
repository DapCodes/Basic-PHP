<?php

$novel = [
    [
        "judul" => "Night",
        "penulis" => "Febryansyah",
        "tanggal_rilis" => "20 Agustus 1999",
        "penerbit" => "Gramedia",
    ],
    [
        "judul" => "Glows",
        "penulis" => "Cindy",
        "tanggal_rilis" => "24 Mei 2009",
        "penerbit" => "Airlangga",
    ],
    [
        "judul" => "Dreams",
        "penulis" => "Viki",
        "tanggal_rilis" => "27 Januari 2019",
        "penerbit" => "Gramedia",
    ],
    [
        "judul" => "Start the Love",
        "penulis" => "Daffa Ramadhan",
        "tanggal_rilis" => "1 Juni 2024",
        "penerbit" => "Gramedia",
    ],
    [
        "judul" => "Ghost",
        "penulis" => "Dhea Febrianti",
        "tanggal_rilis" => "24 februari 2024",
        "penerbit" => "Airlangga",
    ],
];

foreach ($novel as $key) {
    ?>
    <p>Judul : <?= $key['judul'] ?></p>
    <p>Penulis : <?= $key['penulis'] ?></p>
    <p>Tanggal Rilis : <?= $key['tanggal_rilis'] ?></p>
    <p>Penerbit : <?= $key['penerbit'] ?></p>
    <hr>
    <?php
}

?>