<?php
include 'koneksi.php';

if (isset($_POST['tambah'])) {
    $sql = "INSERT INTO t_user(uname) VALUES('" . $_POST['nama'] . "')";
    if ($conn->query($sql) === TRUE) {
        header('Location: index.php');
    } else {
        die($conn->error);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Latihan 1 (Server)</title>
</head>
<body>
    <form method="post">
        <input type="text" name="nama" placeholder="Masukkan Nama" required autofocus>
        <button type="submit" name="tambah">Tambah</button>
    </form>
</body>
</html>