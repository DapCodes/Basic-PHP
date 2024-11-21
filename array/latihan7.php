<?php
$manusia = [
    [
        "nama" => "Daffa",
        "buah_kesukaan" => [
            [
                "nama_buah" => "Anggur",
                "jenis_buah" => [
                    "Anggur Hijau",
                    "Anggur Putih"
                ]
            ]
        ]

    ],
    [
        "nama" => "Dhea",
        "buah_kesukaan" => [
            [
                "nama_buah" => "Alpukat",
                "jenis_buah" => [
                    "Alpukat Mentega",
                    "Alpukat Biasa"
                ]
            ],
            [
                "nama_buah" => "Apel",
                "jenis_buah" => [
                    "Apel Merah",
                    "Apel Hijau"
                ]
            ]

        ]

    ]
];

foreach ($manusia as $orang) {
    echo "Nama : " . $orang['nama'] . "<br>";

    echo "Daftar Buah Kesukaan : <br>";
    echo "<ul> ";
    foreach ($orang['buah_kesukaan'] as $buah_kesukaan) {
        echo "<li> " . $buah_kesukaan['nama_buah'] . "</li>";

        echo "  Jenis: <br>";
        echo "<ul>";
        foreach ($buah_kesukaan['jenis_buah'] as $jenis) {
            echo "<li>" . $jenis . "</li>";
        }
        echo "</ul> ";
    }
    echo "</ul> ";
    echo "<hr>";
}

?>