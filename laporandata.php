<!DOCTYPE html>
<html>

<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dbtoko";
    // Membuat Koneksi Ke Server Database
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    //Menentukan Nama-nama Fieldnya dari tabel yg akan ditampilkan datanya 
    $sql = "SELECT id, namabarang, harga, stok, gambar FROM tblbarang";
    $result = mysqli_query($conn, $sql);
    ?>
    <center>
        <h2>DATA STOK BARANG</h2>
        <table border="1">
            <tr>
                <td>ID</td>
                <td>NAMABARANG</td>
                <td>HARGA</td>
                <td>STOK</td>
                <td>GAMBAR</td>
            </tr>
            <?php
            //Menampilkan isi data 
            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                    <tr>
                        <td><?php echo $row["id"]; ?></td>
                        <td><?php echo $row["namabarang"]; ?></td>
                        <td><?php echo $row["harga"]; ?></td>
                        <td><?php echo $row["stok"]; ?></td>
                        <td><?php echo $row["gambar"]; ?></td>
                    </tr>
            <?php
                }
            }
            mysqli_close($conn);
            ?>
    </center>
</body>

</html>