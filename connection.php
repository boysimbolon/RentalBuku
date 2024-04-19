<?php 
// Lakukan koneksi ke database (Anda perlu mengganti nilainya sesuai dengan informasi database Anda)
$host = "localhost"; // Hostname
$user = "root"; // Username
$password = ""; // Password
$database = "rentalbuku"; // Nama database

$koneksi = mysqli_connect($host, $user, $password, $database);

// Periksa koneksi  
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal: " . mysqli_connect_error();
    exit();
}

?>