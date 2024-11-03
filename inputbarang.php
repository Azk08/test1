<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>input data barang</title>
</head>

<body>
    <form action="simpandata.php" method="post">
        <center>
            <table border="1" cellspacing="0" cellpadding="5">
                <tr>
                    <td colspan="2">
                        <center>Input Data Barang</center>
                    </td>
                </tr>
                <tr>
                    <td>nama barang</td>
                    <td><input type="text" name="namabarang"></td>
                </tr>
                <tr>
                    <td>harga</td>
                    <td><input type="number" name="harga"></td>
                </tr>
                <tr>
                    <td>stock</td>
                    <td><input type="number" name="stock"></td>
                </tr>
                <tr>
                    <td>gambar</td>
                    <td><input type="text" name="gambar"> </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <center>
                            <input type="submit" value="simpan" name="simpan">
                        </center>
                    </td>
                </tr>
            </table>
        </center>
    </form>
</body>

</html>