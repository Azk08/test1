<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbmalik"; //sesuaikan dengan nama database masing2
// Membuat Koneksi Ke Server Database
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if (isset($_POST['simpan'])) {
    $namabarang = $_POST['namabarang'];
    $harga = $_POST['harga'];
    $stock = $_POST['stock'];
    $gambar = $_POST['gambar'];
    $sql = "INSERT INTO `tblmalik` (`namabarang`, `stock`, `harga`, `gambar`) VALUES (
'$namabarang', '$harga', '$stock', '$gambar')";
    $hasil = mysqli_query($conn, $sql);
    if (!$hasil) {
        echo "data tidak berasil di simpan";
    } else {
        echo "data berasil di simpan";
    }
}
header("Location:inputbarang.php");
