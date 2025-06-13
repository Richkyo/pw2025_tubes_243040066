<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "artngame";

$koneksi = new mysqli($host, $user, $pass, $dbname);
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

$sql = "SELECT * FROM emotionalart WHERE gambar = 'foto6.jpg' LIMIT 1";
$result = $koneksi->query($sql);
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <!-- <title>Galeri Karya</title> -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: rgb(95, 93, 93);
            margin: 0;
            padding: 20px;
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
        }

        .grid-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .card {
            width: 420px;
            background-color: rgb(190, 184, 184);
            border-radius: 10px;
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease;
            text-decoration: none;
            color: black;
        }

        .card:hover {
            transform: scale(1.03);
        }

        .card img {
            width: 100%;
            height: auto;
            object-fit: contain;
            background-color: #eee;
        }


        .card-body {
            padding: 20px;
        }

        .card-title {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .card-description {
            font-size: 1rem;
            color: #333;
            line-height: 1.4;
            white-space: normal;
            margin-bottom: 10px;
        }


        .card-footer {
            margin-top: 15px;
            font-size: 0.85rem;
            color: #777;
            border-top: 1px solid #eee;
            padding-top: 10px;
        }
    </style>
</head>

<body>

    <!-- <h2>Galeri Karya</h2> -->

    <div class="grid-container">
        <?php if ($result && $result->num_rows > 0): ?>
            <?php while ($row = $result->fetch_assoc()): ?>
                <div class="card">
                    <img src="../img/<?php echo htmlspecialchars($row['gambar']); ?>" alt="<?php echo htmlspecialchars($row['judul']); ?>">
                    <div class="card-body">
                        <div class="card-title"><?php echo htmlspecialchars($row['judul']); ?></div>
                        <div class="card-description"><?php echo nl2br(htmlspecialchars($row['deskripsi'])); ?></div>
                        <div class="card-footer">Ilustrasi | <?php echo htmlspecialchars($row['Tahun']); ?></div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <p>Tidak ada data ditemukan.</p>
        <?php endif; ?>
    </div>

</body>

</html>