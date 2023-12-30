<?php
include '../koneksi.php';

$id = $_POST['id'];
$task = $_POST['task'];
$waktu = $_POST['date'];
$desc = $_POST['desc'];

$query = "UPDATE todo SET task = ?, waktu = ?, `desc` = ? WHERE id = ?";
$stmt = mysqli_prepare($koneksi, $query);

mysqli_stmt_bind_param($stmt, "sssi", $task, $waktu, $desc, $id);
mysqli_stmt_execute($stmt);

header("Location: ../index.php");
exit;
?>
