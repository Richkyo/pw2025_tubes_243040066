<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-dark bg-primary">
        <div class="container-fluid">
            <span class="navbar-brand">Dashboard</span>
            <span class="text-white">
                Halo, <?= htmlspecialchars($_SESSION['username']) ?> |
                <a href="logout.php" class="text-white text-decoration-underline">Logout</a>
            </span>
        </div>
    </nav>

    <div class="container mt-4">
        <h2>Selamat datang, <?= htmlspecialchars($_SESSION['username']) ?>!</h2>
    </div>

</body>

</html>