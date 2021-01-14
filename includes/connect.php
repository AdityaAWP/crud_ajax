<?php
$serverName = "localhost";
$username = "root";
$password = "";
$dbName = "p1";

$conn = mysqli_connect($serverName, $username, $password, $dbName);

if (!$conn) {
    die("Connection Failed" . mysqli_connect_error());
}
