<?php
include '../koneksi.php';

$id = isset($_GET['id']) ? $_GET['id'] : die('ID tidak didefinisikan');

$query = "DELETE FROM todo WHERE id = $id";
mysqli_query($koneksi, $query);

header("Location: ../index.php");
exit;
?>
