<?php
require 'config.php';

if (isset($_POST['submit'])) {
    $judul = htmlspecialchars($_POST['judul']);
    $deskripsi = htmlspecialchars($_POST['deskripsi']);
    $tahun = $_POST['tahun'];

    // Upload gambar
    if ($_FILES['gambar']['error'] === 0) {
        $gambar = $_FILES['gambar']['name'];
        $tmp = $_FILES['gambar']['tmp_name'];
        move_uploaded_file($tmp, 'img/' . $gambar);
    } else {
        $gambar = ''; // atau kasih default image
    }

    // Simpan ke database
    $query = "INSERT INTO emotionalart (gambar, judul, deskripsi, tahun)
              VALUES ('$gambar', '$judul', '$deskripsi', '$tahun')";
    mysqli_query($conn, $query);

    header("Location: dashboard.php");
    exit;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Tambah Karya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="p-5">
    <h2>Tambah Karya Baru</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="judul" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control" rows="4" required></textarea>
        </div>
        <div class="mb-3">
            <label>Tahun</label>
            <input type="number" name="tahun" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Upload Gambar</label>
            <input type="file" name="gambar" class="form-control" required>
        </div>
        <button type="submit" name="submit" class="btn btn-success">Tambah Karya</button>
        <a href="dashboard.php" class="btn btn-secondary">Kembali</a>
    </form>
</body>

</html>