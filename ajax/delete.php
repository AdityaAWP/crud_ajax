<?php
include '../includes/connect.php';
$id = $_POST['id'];
$sql = "DELETE FROM siswa WHERE id=$id";
$result = mysqli_query($conn, $sql);
