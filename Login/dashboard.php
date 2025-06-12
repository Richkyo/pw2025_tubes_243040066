<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

require "config.php";

// simpan ke variable mahasiswa
$data = query("SELECT * FROM emotionalart ORDER BY tahun DESC");
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
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



    <h1 class="mb-4">Galeri Emotional Art</h1>

    <table class="table table-bordered text-center align-middle">
        <thead class="table-dark">
            <tr>
                <th>No.</th>
                <th>Gambar</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Tahun</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;
            foreach ($data as $row) : ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><img src="../img/<?=htmlspecialchars($row['gambar']) ?>" width="70"></td>
                    <td><?= htmlspecialchars($row['judul']) ?></td>
                    <td><?= htmlspecialchars($row['deskripsi']) ?></td>
                    <td><?= htmlspecialchars($row['Tahun']) ?></td>
                    <td>
                        <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">✏️</a>
                        <a href="hapus.php?id=<?= $row['id'] ?>" class="btn btn-outline-danger btn-sm" onclick="return confirm('Yakin ingin menghapus karya ini?')">🗑️</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>