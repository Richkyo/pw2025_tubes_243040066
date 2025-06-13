<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

require "config.php";

// Ambil semua data untuk tampilan awal
$data = query("SELECT * FROM emotionalart ORDER BY tahun DESC");
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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

    <div class="container mt-4">
        <h1 class="mb-4">Dashboard Art</h1>

        <!-- Live Search -->
        <div class="row justify-content-center mb-3">
            <div class="col-md-8">
                <input type="text" id="live_search" class="form-control" placeholder="Cari berdasarkan judul atau deskripsi...">
            </div>
        </div>

        <!-- Hasil pencarian -->
        <div id="search_result"></div>

        <!-- Tabel default (sembunyi saat search aktif) -->
        <table class="table table-bordered text-center align-middle" id="default_table">
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
                        <td><img src="../img/<?= htmlspecialchars($row['gambar']) ?>" width="70"></td>
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
    </div>

    <!-- jQuery & AJAX -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#live_search").on("input", function() {
                let input = $(this).val();
                if (input.length > 0) {
                    $.ajax({
                        url: "livesearch_dashboard.php",
                        method: "POST",
                        data: {
                            input: input
                        },
                        success: function(data) {
                            $("#search_result").html(data);
                            $("#default_table").hide();
                        }
                    });
                } else {
                    $("#search_result").html("");
                    $("#default_table").show();
                }
            });
        });
    </script>
</body>

</html>