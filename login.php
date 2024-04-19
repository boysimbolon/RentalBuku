<?php
require_once "connection.php";
$email =$_POST["email"];
$password = $_POST["password"];

// Query untuk mencari user berdasarkan email dan password
$query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$result = mysqli_query($koneksi, $query);

// Periksa apakah query berhasil dieksekusi
if ($result) {
    // Periksa apakah ada baris yang cocok
    if (mysqli_num_rows($result) == 1) {
        // Ambil ID pengguna dari baris yang cocok
        $row = mysqli_fetch_assoc($result);
        $userId = $row["id"];
        echo $userId;
    } else {
        // Jika tidak ada baris yang cocok, beri tahu pengguna bahwa login gagal
        echo "Login gagal. Email atau password yang Anda masukkan salah.";
    }
}
else {
    // Jika query tidak berhasil dieksekusi, tampilkan pesan kesalahan
    echo "Terjadi kesalahan saat mengakses database. Silakan coba lagi nanti.";
}

// Tutup koneksi database
mysqli_close($koneksi);
?>
