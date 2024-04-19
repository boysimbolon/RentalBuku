<?php
// Pastikan file connection.php sudah berisi koneksi ke database
require_once "connection.php";

// Ambil ID dari form menggunakan metode POST
$id = $_POST['id'];

// Prevent SQL injection
$id = mysqli_real_escape_string($koneksi, $id);

// Query untuk mengambil data dari tabel rental berdasarkan ID
$query = "SELECT * FROM rental WHERE id = '$id'";
$result = mysqli_query($koneksi, $query);

// Buat array untuk menyimpan data rental
$data_rental = array();

// Periksa apakah query berhasil dieksekusi
if ($result) {
    // Loop melalui hasil query dan simpan data rental ke dalam array
    while ($row = mysqli_fetch_assoc($result)) {
        $data_rental[] = $row;
    }

    // Konversi array menjadi format JSON
    $json_data = json_encode($data_rental);

    // Tampilkan data JSON
    echo $json_data;
} else {
    // Jika query tidak berhasil dieksekusi, tampilkan pesan kesalahan
    echo "Terjadi kesalahan: " . mysqli_error($koneksi);
}

// Tutup koneksi database
mysqli_close($koneksi);
?>
