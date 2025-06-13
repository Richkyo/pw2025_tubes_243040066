<?php
include "config.php";

$success = "";
$error = "";

if (isset($_POST['register'])) {
    $username = trim($_POST['username']);
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];

    // Validasi input
    if ($password !== $confirm) {
        $error = "Konfirmasi password tidak cocok!";
    } elseif (strlen($password) < 6) {
        $error = "Password minimal 6 karakter!";
    } else {
        $username = $conn->real_escape_string($username);
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Cek apakah username sudah dipakai
        $cek = $conn->query("SELECT * FROM users WHERE username='$username'");
        if ($cek->num_rows > 0) {
            $error = "Username sudah digunakan!";
        } else {
            $insert = $conn->query("INSERT INTO users (username, password) VALUES ('$username', '$hashed_password')");
            if ($insert) {
                $success = "Registrasi berhasil! Silakan login.";
            } else {
                $error = "Terjadi kesalahan saat menyimpan data!";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Registrasi User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: rgb(95, 93, 93);
        }
    </style>
</head>

<body class="d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow" style="width: 24rem; background: transparent;">

        <?php if ($success): ?>
            <div class="alert alert-success mt-3"><?= $success ?></div>
        <?php elseif ($error): ?>
            <div class="alert alert-danger mt-3"><?= $error ?></div>
        <?php endif; ?>

        <form method="post" class="card p-4 mt-3 shadow-sm">
            <h2 class="text-center">Registrasi User</h2>
            <div class="mb-3">
                <label for="username" class="form-label">Username:</label>
                <input type="text" name="username" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password:</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="confirm" class="form-label">Konfirmasi Password:</label>
                <input type="password" name="confirm" class="form-control" required>
            </div>

            <button type="submit" name="register" class="btn btn-success w-100">Daftar</button>
            <p class="text-center mt-3">Sudah punya akun? <a href="login_user.php">Login di sini</a></p>
        </form>
    </div>
</body>

</html>