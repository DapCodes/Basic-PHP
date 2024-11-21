<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP FORM</title>
</head>

<body style="padding: 0; margin:0;">
    <center>
        <h2>Menghitung Luas Persegi Panjang</h2>
        <form method="post">
            <table>
                <tr>
                    <td>Panjang</td>
                    <td> : </td>
                    <td><input type="number" name="panjang" id=""></td>
                </tr>
                <tr>
                    <td>Lebar</td>
                    <td> : </td>
                    <td><input type="number" name="lebar" id=""></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <marquee behavior="" direction="left">
                            <button type="submit" name="hitung">SUBMIT</button>
                        </marquee>
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>


<?php
if (isset($_POST['hitung'])) {
    $panjang = $_POST['panjang'];
    $lebar = $_POST['lebar'];

    class PersegiPanjang
    {
        public $luas;

        public function luasPersegiPanjang($panjang2, $lebar2)
        {
            $this->luas = $panjang2 * $lebar2;

            echo "Panjang : " . $panjang2 . "<br>";
            echo "Lebar : " . $lebar2 . "<br>";
            echo "Luas : " . $this->luas . "<br>";
        }
    }

    $cetak = new PersegiPanjang();
    echo $cetak->luasPersegiPanjang($panjang, $lebar);
}
?>