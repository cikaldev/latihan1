<?php
// meng include kan file koneksi
include_once 'koneksi.php';

// buat pemanggilan data pada tabel t_user
$sql = "select * from t_user";
$res = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Latihan 1 (Server)</title>
    <style>
        body {
            max-width: 500px;
            margin: auto;
            padding: 10px;
        }
        .info {
            border: 1px solid orange;
            border-radius: 0 8px 0 8px;
            padding: 14px;
            text-align: justify;
            font-style: italic;
        }
        code {
            color: red;
            background-color: #eee;
            padding: 0 4px;
            border-radius: 2px;
        }
        mark {
            padding: 3px;
        }
    </style>
</head>

<body>

    <p class="info">Silahkan lakukan tambah dan hapus <code>user</code>, untuk memastikan latihan sukses dijalankan pada client dan server.</p>

    <table cellpadding="5" width="100%" style="border-collapse: collapse; border:1px solid #000">
        <tr>
            <!-- tampilkan jumlah data -->
            <td align="left">Jumlah user : <mark><?=$res->num_rows?></mark> user.</td>
            <!-- link untuk tambah data -->
            <td align="right"><a href="tambah.php">Tambah User</a></td>
        </tr>
    </table>

    <br>

    <table border="1" cellpadding="5" width="100%" style="border-collapse: collapse">
        <thead>
            <tr>
                <th width="20%">No</th>
                <th>Nama</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
                // tampilkan data
                $no = 1;
                while ($r = $res->fetch_assoc()) {
                    echo '<tr>
                        <td>' . $no++ . '</td>
                        <td>' . $r['uname'] . '</td>
                        <td><a href="hapus.php?id=' . $r['uid'] . '">Hapus</a></td>
                    </tr>';
                }
            ?>
        </tbody>
    </table>

</body>
</html>