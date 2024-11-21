<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <center>
        <h1> Form Biodata</h1>
        <form action="output.php" method="post">
            <table>
                <tr>
                    <td>Nama Lengkap</td>
                    <td> : </td>
                    <td><input type="text" name="nama_lengkap" value="" required></td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td> : </td>
                    <td><input type="text" name="kelas" value="" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><button type="submit" name="kirim" value="kirim">Kirim</button></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>
