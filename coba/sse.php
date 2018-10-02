<?php
// Deklarasikan tipe header output
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');

// gunakan file koneksi yang sudah dibuat tadi
require 'koneksi.php';

// mulai logika pengecekan user pada database
$kueri = "select * from t_user";
$hasil = $conn->query($kueri);

if ($hasil->num_rows > 0) {
    // jika tabel user memiliki data / tidak kosong maka jumlah = hasil
    $jumlah = $hasil->num_rows;
} else {
    // jika tabel user tidak ada data / kosong maka jumlah = 0
    $jumlah = "0";
}

// data $output ini yang akan kita return pada SSE event
$output = $jumlah;

// disini proses output berlangsung
echo "data: $output\n\n";
ob_flush();
flush();