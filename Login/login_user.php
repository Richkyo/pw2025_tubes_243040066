<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "artngame";

$koneksi = new mysqli($host, $user, $pass, $dbname);

if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
session_start();
include "config.php";

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Amankan input
    $username = $koneksi->real_escape_string($username);

    // Cek user
    $query = "SELECT * FROM users WHERE username='$username'";
    $result = $koneksi->query($query);

    if ($result && $result->num_rows == 1) {
        $user = $result->fetch_assoc();

        if (password_verify($password, $user['password'])) {
            $_SESSION['username'] = $user['username'];
            $_SESSION['login'] = true;
            header("Location:../index.php"); // 👈 Redirect ke index.php
            exit;
        } else {
            $error = "Password salah!";
        }
    } else {
        $error = "Username tidak ditemukan!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Login User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: rgb(95, 93, 93);
        }
    </style>
</head>

<body class="d-flex justify-content-center align-items-center vh-100">

    <div class="card shadow p-4" style="width: 24rem;">
        <h4 class="mb-3 text-center">Login User</h4>
        <?php if (isset($error)): ?>
            <div class="alert alert-danger">Username atau password salah!</div>
        <?php endif; ?>
        <form method="POST" action="">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" name="username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Kata Sandi</label>
                <input type="password" class="form-control" name="password" required>
            </div>
            <button type="submit" name="login" class="btn btn-primary w-100">Masuk</button>
            <p class="text-center mt-3">Belum punya akun? <a href="register_user.php">Daftar di sini</a></p>

        </form>
    </div>

</body>

</html>