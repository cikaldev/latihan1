<?php
include 'koneksi.php';

$sql = "delete from t_user where uid='".$_GET['id']."'";

if ($conn->query($sql) === TRUE) {
    header('Location: index.php');
} else {
    die($conn->error);
}
?>