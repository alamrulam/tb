<?php

include '../koneksi.php';

$task = $_POST['task'];
$waktu = $_POST['date'];
$desc = $_POST['desc'];
$completed = $_POST['completed'];


$ini_query = "INSERT INTO todo VALUES(NULL, '$task', '$waktu', '$desc', '$completed')";

mysqli_query($koneksi, $ini_query);

header("Location: ../index.php");

exit;