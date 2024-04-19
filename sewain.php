<?php
require_once "connection.php";
$sewa =$_POST["sewa"];
$harga = $_POST["harga"];
$idUser= $_POST["idUser"];
$idBuku = $_POST["idBuku"];
$tenggat = $_POST["Tenggat"];
$query = "INSERT INTO rental (idUser, idBuku,tanggalSewa, tanggalpengambalian, Harga,status) VALUES ('$idUser', '$idBuku', '$sewa', '$tenggat', '$harga',null)";
// Lakukan query
if (mysqli_query($koneksi, $query)) {
    echo "Berhasil Mendaftar";
} else {
    echo "Terjadi kesalahan: " . mysqli_error($koneksi);
}

// Tutup koneksi database
mysqli_close($koneksi);


?>