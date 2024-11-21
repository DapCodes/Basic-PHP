<?php
function biodata($nama, $tmplhir, $tgllhir, $jk, $agama, $alamat, $hibi) {
    echo "Nama : $nama <br>";
    echo "Tempat Lahir : $tmplhir <br>";
    echo "Tanggal Lahir : $tgllhir <br>";
    echo "Jenis Kelamin : $jk <br>";
    echo "Agama : $agama <br>";
    echo "Alamat : $alamat <br>";
    echo "Hobi : $hibi <br>";
}

function menghitung($a, $b) {
    $hasil = $a + $b;
    echo "Bilangan 1 : $a <br>";
    echo "Bilangan 2 : $b <br>";  
    echo "Hasilnya $hasil <br>";
}

biodata("Daffa", "Bandung", "7 Oktober 2007", "Laki-Laki", "Islam", "Cangkuang", "Lari");
echo "<hr>";
menghitung(20,10);

?>