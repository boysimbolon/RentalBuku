<?php
require_once "connection.php";
$sewa = $_POST["sewa"];
$harga = $_POST["harga"];
$idUser = $_POST["idUser"];
$idBuku = $_POST["idBuku"];
$tenggat = $_POST["Tenggat"];

$query = "UPDATE rental 
          SET tanggalSewa = '$sewa', 
              tanggalpengembalian = '$tenggat', 
              Harga = '$harga' 
          WHERE idBuku = '$idBuku' AND idUser = '$idUser'";
// Lakukan query
if (mysqli_query($koneksi, $query)) {
    echo "Berhasil UPDATE";
} else {
    echo "Terjadi kesalahan: " . mysqli_error($koneksi);
}

// Tutup koneksi database
mysqli_close($koneksi);


?>