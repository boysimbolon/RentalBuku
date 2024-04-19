<?php
// Pastikan file connection.php sudah berisi koneksi ke database
require_once "connection.php";
$idUser = $_GET["id"];
// Query untuk mengambil data dari tabel buku
$query = "SELECT b.*, u.namalengkap FROM buku AS b JOIN users AS u  WHERE u.id = $idUser";

$result = mysqli_query($koneksi, $query);

// Buat array untuk menyimpan data buku
$data_buku = array();

// Periksa apakah query berhasil dieksekusi
if ($result) {
    // Loop melalui hasil query dan simpan data buku ke dalam array
    while ($row = mysqli_fetch_assoc($result)) {
        $data_buku[] = $row;
    }
    // Konversi array menjadi format JSON
    $json_data = json_encode(array('result' => $data_buku));

    // Tampilkan data JSON
    echo $json_data;
} else {
    // Jika query tidak berhasil dieksekusi, tampilkan pesan kesalahan
    echo "Terjadi kesalahan: " . mysqli_error($koneksi);
}

// Tutup koneksi database
mysqli_close($koneksi);
?>
