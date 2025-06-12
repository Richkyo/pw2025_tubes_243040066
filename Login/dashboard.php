<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';
$title = 'Form Tambah Data Mahasiswa';
?>

<?php require('partials/header.php'); ?>

<?php require('partials/nav.php'); ?>
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: rgb(95, 93, 93);
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-dark bg-black">
        <div class="container-fluid">
            <span class="navbar-brand">Dashboard</span>
            <span class="text-white">
                Halo, <?= htmlspecialchars($_SESSION['username']) ?>
                <a href="logout.php" class="text-white text-decoration-underline">Logout</a>
            </span>
        </div>
    </nav>

    <div class="container mt-4 text-white">
        <h2>Selamat datang, <?= htmlspecialchars($_SESSION['username']) ?>!</h2>
    </div>


    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1 class="mb-3">Form Tambah Data Mahasiswa</h1>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" required autofocus>
                    </div>
                    <div class="mb-3">
                        <label for="nim" class="form-label">NIM</label>
                        <input type="text" class="form-control" id="nim" name="nim" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="jurusan" class="form-label">Jurusan</label>
                        <input type="text" class="form-control" id="jurusan" name="jurusan" required>
                    </div>
                    <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar</label>
                        <input type="text" class="form-control" id="gambar" name="gambar" value="nophoto.jpg" readonly>
                    </div>
                    <div class="my-4 d-grid gap-2">
                        <button type="submit" name="submit" class="btn btn-primary">Tambah Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php require('partials/footer.php'); ?>

</body>

</html>