<?php
include '../includes/connect.php';

$id = $_POST['id'];
$nama = htmlspecialchars($_POST['nama']);
$jurusan = htmlspecialchars($_POST['jurusan']);
$kelas = htmlspecialchars($_POST['kelas']);
$query = "UPDATE siswa SET nama='$nama',jurusan='$jurusan',kelas='$kelas' WHERE id='$id'";
mysqli_query($conn, $query);
