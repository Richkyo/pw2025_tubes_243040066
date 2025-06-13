<?php
$host = "localhost";
$user = "root"; // sesuaikan
$pass = "";     // sesuaikan
$db   = "artngame";

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;}

$conn = new mysqli($host, $user, $pass, $db,);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
