<?php
require_once "connection.php";

$idUser = $_POST["idUser"];
$idBuku = $_POST["idBuku"];

$query = "DELETE FROM rental WHERE idBuku = '$idBuku' AND idUser = '$idUser'";

// Lakukan query
if (mysqli_query($koneksi, $query)) {
    echo "Berhasil DIHAPUS";
} else {
    echo "Terjadi kesalahan: " . mysqli_error($koneksi);
}

// Tutup koneksi database
mysqli_close($koneksi);


?>