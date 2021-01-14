<?php
include '../includes/connect.php';
if (isset($_POST["nama"]) && isset($_POST["jurusan"]) && isset($_POST["kelas"])) {
    $nama = htmlspecialchars($_POST['nama']);
    $jurusan = htmlspecialchars($_POST['jurusan']);
    $kelas = htmlspecialchars($_POST['kelas']);

    $sql =  "INSERT INTO siswa (nama,jurusan,kelas) VALUES ('$nama','$jurusan','$kelas')";
    $result = mysqli_query($conn, $sql);
}
