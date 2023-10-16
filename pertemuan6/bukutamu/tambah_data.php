<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Membuat Buku Tamu</title>
</head>
<body>
    <h2>Form Pencatatan Buku Tamu</h2>
    Silakan Masukkan Komentar Anda
    <br /><br />
    <form action="proses_tambah.php" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" maxlength="50" size="50"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" maxlength="50" size="50"></td>
            </tr>
            <tr>
                <td>URL</td>
                <td><input type="text" name="url" maxlength="50" size="50"></td>
            </tr>
            <tr>
                <td valign="top">Komentar</td>
                <td><textarea name="komentar" cols="50" rows="6"></textarea></td>
            </tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="kirim" value="Kirim"></td>
            </tr>
        </table>
    </form>
</body>
</html>