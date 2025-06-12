<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "artngame";

$koneksi = new mysqli($host, $user, $pass, $dbname);
if ($koneksi->connect_error) {
  die("Koneksi gagal: " . $koneksi->connect_error);
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lyra's Album</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    html,
    body {
      height: 100%;
      margin: 0;
    }

    body {
      display: flex;
      flex-direction: column;
      min-height: 100vh;
      background-color: rgb(95, 93, 93);
    }

    main {
      flex: 1;
    }

    .hero {
      background: url('img/profile.jpg') no-repeat center center;
      background-size: cover;
      color: white;
      text-align: center;
      padding: 120px 15px;
    }

    .hero-overlay {
      background-color: rgba(0, 0, 0, 0);
      padding: 60px 15px;
    }

    .btn-daftar {
      background-color: orange;
      color: white;
      border: none;
    }

    p {
      text-align: justify;
      margin-right: 20px;
    }

    .card {
      transition: border 0.0s ease;
      background-color: rgb(190, 184, 184);
    }

    .card:hover {
      border: 4px solid white;
    }

    .card-img-top {
      height: 200px;
      object-fit: cover;
      width: 100%;
    }

    .card-body small {
      display: block;
      margin-top: 10px;
    }

    .text-warning {
      color: orange !important;
    }

    .section-padding {
      padding: 60px 0;
    }

    footer {
      width: 100%;
      background-color: #212529;
      color: white;
    }

    @media (max-width: 768px) {
      .card1 .card {
        min-height: 550px;
      }

      .card-img-top {
        height: auto;
        width: 100%;
        object-fit: contain;
      }
    }
  </style>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-secondary fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Lyra's Art & Gallery</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="#hero">Beranda</a></li>
          <li class="nav-item"><a class="nav-link" href="#EmotionalArt">Emotional Art</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Kabar</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Riset</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Galeri</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Jurnal</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Alumni</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Kontak</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <main>
    <!-- Hero Section -->
    <section class="hero d-flex align-items-center justify-content-center" id="hero">
      <div class="container hero-overlay text-start">
        <h1 class="display-5 fw-bold">Lyra's Gallery</h1>
        <a href="login/login.php" class="btn btn-daftar mt-2 px-4 py-2">Login Admin</a>
      </div>
    </section>

    <!-- Emotional Art Section -->
    <section class="EmotionalArt section-padding mt-5" id="EmotionalArt">
      <div class="container">
        <div class="row">
          <!-- Deskripsi -->
          <div class="col-lg-3 mb-4">
            <h2 class="fw-bold text-white">Emotional Art</h2>
            <p class="text-white">
              <strong>Emotional art</strong> adalah bentuk seni yang diciptakan untuk menyampaikan dan membangkitkan emosi—baik dari sang seniman maupun dari orang yang melihatnya. Lewat goresan, warna, bentuk, atau simbol, karya ini membawa pesan yang mendalam: kesedihan, cinta, harapan, amarah, kesepian, dan berbagai nuansa perasaan lainnya.
            </p>
          </div>

          <!-- Card Loop (copy-paste loop kamu di sini) -->
          <?php
          for ($i = 1; $i <= 3; $i++) {
            $query = "SELECT * FROM emotionalart WHERE id = $i";
            $result = $koneksi->query($query);
            if ($result && $result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                $deskripsi = strip_tags($row['deskripsi']);
                $short = substr($deskripsi, 0, 250) . (strlen($deskripsi) > 250 ? "..." : "");
          ?>
                <div class="col-md-3 mb-4 card1">
                  <a href="tampilanfoto.jpg/foto<?= $i ?>.php" class="text-decoration-none text-dark">
                    <div class="card h-100">
                      <img src="img/<?= htmlspecialchars($row['gambar']); ?>" class="card-img-top" alt="<?= htmlspecialchars($row['judul']); ?>">
                      <div class="card-body">
                        <h5 class="fw-bold"><?= htmlspecialchars($row['judul']); ?></h5>
                        <p class="card-text"><?= htmlspecialchars($short); ?></p>
                        <hr>
                        <small>Ilustrasi | <?= htmlspecialchars($row['Tahun']); ?></small>
                      </div>
                    </div>
                  </a>
                </div>
          <?php
              }
            }
          }
          ?>
        </div>
      </div>
    </section>
  </main>

  <!-- Footer -->
  <footer class="footer pt-5 pb-4">
    <div class="container text-md-left">
      <div class="row text-md-left">
        <div class="col-md-3">
          <h5 class="text-uppercase mb-4 font-weight-bold">Lyra's Gallery</h5>
          <p>Seni yang saya buat</p>
        </div>
        <div class="col-md-2">
          <h5 class="text-uppercase mb-4 font-weight-bold">Navigasi</h5>
          <p><a href="#beranda" class="text-light text-decoration-none">Beranda</a></p>
          <p><a href="#galeri" class="text-light text-decoration-none">Galeri</a></p>
          <p><a href="#seniman" class="text-light text-decoration-none">Seniman</a></p>
          <p><a href="#tiket" class="text-light text-decoration-none">Tiket</a></p>
        </div>
        <div class="col-md-3">
          <h5 class="text-uppercase mb-4 font-weight-bold">Ikuti Kami</h5>
          <a href="#" class="text-light me-3"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="text-light me-3"><i class="fab fa-instagram"></i></a>
          <a href="#" class="text-light me-3"><i class="fab fa-twitter"></i></a>
          <a href="#" class="text-light me-3"><i class="fab fa-youtube"></i></a>
        </div>
        <div class="col-md-4">
          <h5 class="text-uppercase mb-4 font-weight-bold">Newsletter</h5>
          <form>
            <div class="input-group mb-3">
              <input type="email" class="form-control" placeholder="Email kamu" aria-label="Email">
              <button class="btn btn-outline-light" type="submit">Kirim</button>
            </div>
          </form>
        </div>
      </div>
      <hr class="mb-4">
      <div class="text-center">
        <p class="mb-0">&copy; 2025 Lyra's Art.</p>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>