<?php
$dataJson = '[
    {
        "no": "1001",
        "judul": "Dilan 1991",
        "genre": "Romance",
        "penulis": "Pidi Baiq",
        "penerbit": "Airlangga",
        "tahun_rilis": "2014"
    },
    {
        "no": "1002",
        "judul": "Perahu Kertas",
        "genre": "Romance",
        "penulis": "Dewi Lestari",
        "penerbit": "Treudee Pustaka dan Bentang Pustaka",
        "tahun_rilis": "2010"
    },
    {
        "no": "1003",
        "judul": "London Love Story",
        "genre": "Romance",
        "penulis": "Tisa TS dan Stanley Maulen",
        "penerbit": "Loveable",
        "tahun_rilis": "2015"
    },
    {
        "no": "1004",
        "judul": "Supernova: Ksatria, Puteri, dan Bintang Jatuh",
        "genre": "Science Fiction",
        "penulis": "Dewi Lestari",
        "penerbit": "Bentang Pustaka",
        "tahun_rilis": "2001"
    },
    {
        "no": "1005",
        "judul": "Laskar Pelangi",
        "genre": "Drama",
        "penulis": "Andrea Hirata",
        "penerbit": "Bentang Pustaka",
        "tahun_rilis": "2005"
    },
    {
        "no": "1006",
        "judul": "Bumi Manusia",
        "genre": "Historical",
        "penulis": "Pramoedya Ananta Toer",
        "penerbit": "Hasta Mitra",
        "tahun_rilis": "1980"
    },
    {
        "no": "1007",
        "judul": "Cantik Itu Luka",
        "genre": "Magical Realism",
        "penulis": "Eka Kurniawan",
        "penerbit": "Gramedia Pustaka Utama",
        "tahun_rilis": "2002"
    },
    {
        "no": "1008",
        "judul": "Sebuah Seni untuk Bersikap Bodo Amat",
        "genre": "Self-Help",
        "penulis": "Mark Manson",
        "penerbit": "Gramedia Pustaka Utama",
        "tahun_rilis": "2018"
    },
    {
        "no": "1009",
        "judul": "Ayat-Ayat Cinta",
        "genre": "Romance",
        "penulis": "Habiburrahman El Shirazy",
        "penerbit": "Republika",
        "tahun_rilis": "2004"
    },
    {
        "no": "1010",
        "judul": "Rectoverso",
        "genre": "Short Stories",
        "penulis": "Dewi Lestari",
        "penerbit": "Bentang Pustaka",
        "tahun_rilis": "2008"
    },
    {
        "no": "1011",
        "judul": "Kambing dan Hujan",
        "genre": "Drama",
        "penulis": "Mahfud Ikhwan",
        "penerbit": "Marjin Kiri",
        "tahun_rilis": "2015"
    },
    {
        "no": "1012",
        "judul": "Hujan",
        "genre": "Science Fiction",
        "penulis": "Tere Liye",
        "penerbit": "Gramedia Pustaka Utama",
        "tahun_rilis": "2016"
    },
    {
        "no": "1013",
        "judul": "Negeri 5 Menara",
        "genre": "Drama",
        "penulis": "A. Fuadi",
        "penerbit": "Gramedia Pustaka Utama",
        "tahun_rilis": "2009"
    },
    {
        "no": "1014",
        "judul": "Orang-Orang Biasa",
        "genre": "Fiction",
        "penulis": "Andrea Hirata",
        "penerbit": "Bentang Pustaka",
        "tahun_rilis": "2019"
    },
    {
        "no": "1015",
        "judul": "Cinta Brontosaurus",
        "genre": "Comedy",
        "penulis": "Raditya Dika",
        "penerbit": "GagasMedia",
        "tahun_rilis": "2006"
    },
    {
        "no": "1016",
        "judul": "Garis Waktu",
        "genre": "Romance",
        "penulis": "Fiersa Besari",
        "penerbit": "Mediakita",
        "tahun_rilis": "2016"
    },
    {
        "no": "1017",
        "judul": "Sabtu Bersama Bapak",
        "genre": "Family",
        "penulis": "Adhitya Mulya",
        "penerbit": "GagasMedia",
        "tahun_rilis": "2014"
    },
    {
        "no": "1018",
        "judul": "Rindu",
        "genre": "Historical",
        "penulis": "Tere Liye",
        "penerbit": "Republika",
        "tahun_rilis": "2014"
    },
    {
        "no": "1019",
        "judul": "Pulang",
        "genre": "Fiction",
        "penulis": "Leila S. Chudori",
        "penerbit": "Kepustakaan Populer Gramedia",
        "tahun_rilis": "2012"
    },
    {
        "no": "1020",
        "judul": "Filosofi Kopi",
        "genre": "Short Stories",
        "penulis": "Dewi Lestari",
        "penerbit": "Bentang Pustaka",
        "tahun_rilis": "2006"
    }
]';

$list = json_decode($dataJson);
?>
<center style="font-family: monospace;">
    <h1>Kumpulan Novel Terbaru</h1>
    <table border="1" cellspacing="0" width="80%">
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Genre</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Tahun Rilis</th>
        </tr>
        <?php
        foreach ($list as $buku) {
        ?>

            <tr>
                <td><?= $buku->no ?></td>
                <td> <?= $buku->judul ?></td>
                <td><?= $buku->genre ?></td>
                <td><?= $buku->penulis ?></td>
                <td><?= $buku->penerbit ?></td>
                <td><?= $buku->tahun_rilis ?></td>
            </tr>
        <?php
        }

        ?>
    </table>
</center>
<?php
