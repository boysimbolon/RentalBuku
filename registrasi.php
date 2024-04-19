<?php 
// Pastikan file connection.php sudah berisi koneksi ke database
require_once "connection.php";

// Ambil data dari form
$email = $_POST['email'];
$password = $_POST['password'];
$namaLengkap = $_POST['nama'];
$alamat = $_POST['alamat'];
$noTelepon = $_POST['phone'];


// Query untuk memasukkan data ke dalam tabel user
$query = "INSERT INTO users (email, password, namalengkap, Alamat, noTelepon) VALUES ('$email', '$password', '$namaLengkap', '$alamat', '$noTelepon')";

// Lakukan query
if (mysqli_query($koneksi, $query)) {
    echo "Berhasil Mendaftar";
} else {
    echo "Terjadi kesalahan: " . mysqli_error($koneksi);
}

// Tutup koneksi database
mysqli_close($koneksi);
?>
