<?php
require "config.php";

if (isset($_POST['input'])) {
    $input = $conn->real_escape_string($_POST['input']);

    $query = "SELECT * FROM emotionalart 
              WHERE judul LIKE '%$input%' 
              OR deskripsi LIKE '%$input%' 
              ORDER BY tahun DESC";

    $result = $conn->query($query);

    if ($result && $result->num_rows > 0) {
        echo '
        <table class="table table-bordered text-center align-middle mt-4">
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
            <tbody>';
        $i = 1;
        while ($row = $result->fetch_assoc()) {
            echo '
                <tr>
                    <td>' . $i++ . '</td>
                    <td><img src="../img/' . htmlspecialchars($row['gambar']) . '" width="70"></td>
                    <td>' . htmlspecialchars($row['judul']) . '</td>
                    <td>' . htmlspecialchars($row['deskripsi']) . '</td>
                    <td>' . htmlspecialchars($row['Tahun']) . '</td>
                    <td>
                        <a href="edit.php?id=' . $row['id'] . '" class="btn btn-warning btn-sm">✏️</a>
                        <a href="hapus.php?id=' . $row['id'] . '" class="btn btn-outline-danger btn-sm" onclick="return confirm(\'Yakin ingin menghapus karya ini?\')">🗑️</a>
                    </td>
                </tr>';
        }
        echo '</tbody></table>';
    } else {
        echo '<p class="text-white bg-dark p-3 mt-3">Tidak ada hasil ditemukan.</p>';
    }
}
