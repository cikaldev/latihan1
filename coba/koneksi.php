<?php

// Silahkan sesuaikan dengan pengaturan server anda
$conn = new mysqli('localhost','root','','cdev_sse');

// Cek apakah koneksi berhasil? jika gagal tampilkan pesan berikut
if ($conn->connect_error) {
    die("Koneksi Gagal: " . $conn->connect_error);
}

/* End of file koneksi.php */
/* Location: .//C/xampp/htdocs/cdev/latihan1/koneksi.php */