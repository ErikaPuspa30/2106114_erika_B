<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $alamat = $_POST["alamat"];
    $jenis_seni = $_POST["jenis_seni"];
    $pengalaman = $_POST["pengalaman"];

    // Lakukan sesuatu dengan data yang telah diterima, misalnya simpan ke database

    // Tampilkan pesan sukses atau arahkan ke halaman lain
    echo "Pendaftaran berhasil! Terima kasih, $nama, telah mendaftar untuk jenis seni $jenis_seni.";
} else {
    // Jika bukan metode POST, tampilkan pesan error atau arahkan ke halaman lain
    echo "Akses tidak valid.";
}
?>
