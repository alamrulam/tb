<?php
include '../koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "UPDATE todo SET completed = 1 WHERE id = $id";
    mysqli_query($koneksi, $query);

    header("Location: ../index.php");
    exit;
} else {
    echo "ID tidak valid.";
}
?>