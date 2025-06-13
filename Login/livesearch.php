<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "artngame";

$koneksi = new mysqli($host, $user, $pass, $dbname);
if ($koneksi->connect_error) {
  die("Koneksi gagal: " . $koneksi->connect_error);
}

if (isset($_POST['input'])) {
  $input = $koneksi->real_escape_string($_POST['input']);
  $query = "SELECT * FROM emotionalart WHERE judul LIKE '%$input%' OR deskripsi LIKE '%$input%'";
  $result = $koneksi->query($query);

  if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      echo '
        <div class="col-md-4 mb-3">
          <div class="card">
            <img src="img/' . htmlspecialchars($row['gambar']) . '" class="card-img-top" alt="' . htmlspecialchars($row['judul']) . '">
            <div class="card-body">
              <h5>' . htmlspecialchars($row['judul']) . '</h5>
              <p>' . substr(strip_tags($row['deskripsi']), 0, 100) . '...</p>
              <small>Ilustrasi | ' . htmlspecialchars($row['Tahun']) . '</small>
            </div>
          </div>
        </div>
      ';
    }
  } else {
    echo '<p class="text-white">Tidak ada hasil ditemukan.</p>';
  }
}
?>
