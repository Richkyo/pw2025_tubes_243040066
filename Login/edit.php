<?php
require 'config.php';

$id = $_GET['id'];
$data = query("SELECT * FROM emotionalart WHERE id = $id")[0];

if (isset($_POST['submit'])) {
    $judul = htmlspecialchars($_POST['judul']);
    $deskripsi = htmlspecialchars($_POST['deskripsi']);
    $tahun = $_POST['Tahun'];

    if ($_FILES['gambar']['error'] === 4) {
        // Tidak upload gambar baru
        $gambar = $data['gambar'];
    } else {
        $gambar = $_FILES['gambar']['name'];
        $tmp = $_FILES['gambar']['tmp_name'];
        move_uploaded_file($tmp, 'img/' . $gambar);
    }

    $query = "UPDATE emotionalart SET 
                judul = '$judul',
                deskripsi = '$deskripsi',
                tahun = '$tahun',
                gambar = '$gambar'
              WHERE id = $id";

    mysqli_query($conn, $query);
    header("Location: dashboard.php");
    exit;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit Karya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="p-5">
    <h2>Edit Karya</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="judul" class="form-control" value="<?= htmlspecialchars($data['judul']) ?>" required>
        </div>
        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control" rows="4" required><?= htmlspecialchars($data['deskripsi']) ?></textarea>
        </div>
        <div class="mb-3">
            <label>Tahun</label>
            <input type="number" name="Tahun" class="form-control" value="<?= $data['Tahun'] ?>" required>
        </div>
        <div class="mb-3">
            <label>Gambar Sekarang</label><br>
            <img src="img/<?= htmlspecialchars($data['gambar']) ?>" width="100"><br>
            <input type="file" name="gambar" class="form-control mt-2">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
        <a href="dashboard.php" class="btn btn-secondary">Batal</a>
    </form>
</body>

</html>