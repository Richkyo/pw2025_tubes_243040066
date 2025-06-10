<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lyra's Album</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .hero {
      background: url('img/profile.jpg') no-repeat center center;
      background-size: cover;
      color: white;
      text-align: center;
      padding: 120px 15px;
    }

    .hero-overlay {
      background-color: rgba(0, 0, 0, 0.0);
      padding: 60px 15px;

    }

    .btn-daftar {
      background-color: orange;
      color: white;
      border: none;
    }

    .card {
      transition: border 0.0s ease;
    }

    .card:hover {
      border: 4px solid grey;
    }

    .card img {
      height: 200px;
      object-fit: cover;
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
          <li class="nav-item"><a class="nav-link" href="#">Beranda</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Emotional Art</a></li>
          <li class="nav-item"><a class="nav-link" href="#"></a></li>
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


  <!-- Hero Section -->
  <section class="hero d-flex align-items-center justify-content-center">
    <div class="container hero-overlay text-start">
      <img src="https://your-image-url.com/katarsis-logo.png" alt="" class="img-fluid mb-4" style="max-width: 300px;">
      <h1 class="display-5 fw-bold ">Lyra's Gallery</h1>
      <p>

      
        <!-- <a href=" #" class="text-light text-decoration-none">Beranda</a> -->
        </p>
        <a href="#" class="btn btn-daftar mt-2 px- py-2">Login</a>
    </div>
  </section>


  <!-- Fantasy Art Section -->
  <section class="section-padding mt-5">
    <div class="container">
      <div class="row">
        <!-- Keterangan -->
        <div class="col-lg-3 mb-4">
          <h2 class="fw-bold">Emotional Art</h2>
          <p><strong>Emotional art</strong> adalah jenis karya seni yang diciptakan untuk menyampaikan atau membangkitkan emosi tertentu, baik dari sang seniman maupun dari orang yang melihatnya. Emosi yang dimaksud bisa sangat beragam — seperti kesedihan, cinta, marah, takut, harapan, kesepian, kebahagiaan, dan lainnya..</p>
          <!-- <a href="#"><strong>Lihat Selengkapnya</strong></a> -->
        </div>

        <!-- Card 1 -->
        <div class="col-md-3 mb-4">
          <a href="https://your-target-url.com" target="_blank" class="text-decoration-none text-dark">
            <div class="card h-100">
              <img src="img/foto1.jpg" class="card-img-top" alt="Eudaimonic">
              <div class="card-body">
                <small class="text-warning">KATARSIS</small>
                <h5 class="fw-bold">Eudaimonic</h5>
                <p>Kebahagiaan eudaimonic adalah kebahagiaan yang tak dapat digantikan oleh materi...</p>
                <hr>
                <small>Ilustrasi | 2018</small>
              </div>
            </div>
          </a>
        </div>

        <!-- Card 2 -->
        <div class="col-md-3 mb-4">
          <a href="https://your-target-url.com" target="_blank" class="text-decoration-none text-dark">
            <div class="card h-100">
              <img src="img/foto2.jpg" class="card-img-top" alt="Kekecewaan">
              <div class="card-body">
                <small class="text-warning">KATARSIS</small>
                <h5 class="fw-bold">Kekecewaan</h5>
                <p>Kekecewaan yang berat dan terbawa sepanjang hidup adalah salah satu sisi dalam berkarya.</p>
                <hr>
                <small>Ilustrasi | 2018</small>
              </div>
            </div>
          </a>
        </div>

        <!-- Card 3 -->
        <div class="col-md-3 mb-4">
          <a href="https://your-target-url.com" target="_blank" class="text-decoration-none text-dark">
            <div class="card h-100">
              <img src="https://your-image-url.com/phobia.jpg" class="card-img-top" alt="Phobia">
              <div class="card-body">
                <small class="text-warning">KATARSIS</small>
                <h5 class="fw-bold">Phobia</h5>
                <p>Phobia hidup berdampingan bahkan menjadi bagian dari manusia. Menghindar, melawan, atau menerima?</p>
                <hr>
                <small>Ilustrasi | 2018</small>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>


    <!-- Fantasy Art Section -->
    <section class="section-padding">
      <div class="container">
        <div class="row">
          <!-- Keterangan -->
          <div class="col-lg-3 mb-4">
            <h2 class="fw-bold">Fantasy Art</h2>
            <p>Kuliah ini melatih mahasiswa memahami dirinya dengan mengenali rasa seperti Phobia, Kekecewaan dan Kebahagiaan masing-masing, faktor internal inilah yang dijadikan dasar dalam membuat karya Ilustrasi Fantasy Art, sehingga kedirian/personalisasi mahasiswa tampak.</p>
            <!-- <a href="#"><strong>Lihat Selengkapnya</strong></a> -->
          </div>

          <!-- Card 1 -->
          <div class="col-md-3 mb-4">
            <a href="https://your-target-url.com" target="_blank" class="text-decoration-none text-dark">
              <div class="card h-100">
                <img src="https://your-image-url.com/eudaimonic.jpg" class="card-img-top" alt="Eudaimonic">
                <div class="card-body">
                  <small class="text-warning">KATARSIS</small>
                  <h5 class="fw-bold">Eudaimonic</h5>
                  <p>Kebahagiaan eudaimonic adalah kebahagiaan yang tak dapat digantikan oleh materi...</p>
                  <hr>
                  <small>Ilustrasi | 2018</small>
                </div>
              </div>
            </a>
          </div>

          <!-- Card 2 -->
          <div class="col-md-3 mb-4">
            <a href="https://your-target-url.com" target="_blank" class="text-decoration-none text-dark">
              <div class="card h-100">
                <img src="https://your-image-url.com/kekecewaan.jpg" class="card-img-top" alt="Kekecewaan">
                <div class="card-body">
                  <small class="text-warning">KATARSIS</small>
                  <h5 class="fw-bold">Kekecewaan</h5>
                  <p>Kekecewaan yang berat dan terbawa sepanjang hidup adalah salah satu sisi dalam berkarya.</p>
                  <hr>
                  <small>Ilustrasi | 2018</small>
                </div>
              </div>
            </a>
          </div>

          <!-- Card 3 -->
          <div class="col-md-3 mb-4">
            <a href="https://your-target-url.com" target="_blank" class="text-decoration-none text-dark">
              <div class="card h-100">
                <img src="https://your-image-url.com/phobia.jpg" class="card-img-top" alt="Phobia">
                <div class="card-body">
                  <small class="text-warning">KATARSIS</small>
                  <h5 class="fw-bold">Phobia</h5>
                  <p>Phobia hidup berdampingan bahkan menjadi bagian dari manusia. Menghindar, melawan, atau menerima?</p>
                  <hr>
                  <small>Ilustrasi | 2018</small>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-light pt-5 pb-4">
      <div class="container text-md-left">
        <div class="row text-md-left">

          <!-- Logo dan Deskripsi -->
          <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
            <h5 class="text-uppercase mb-4 font-weight-bold text-white">Galeri Warna</h5>
            <p>
              Pameran seni tahunan yang menyatukan karya-karya inspiratif dari seniman lokal dan internasional.
            </p>
          </div>

          <!-- Navigasi -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
            <h5 class="text-uppercase mb-4 font-weight-bold text-white">Navigasi</h5>
            <p><a href="#beranda" class="text-light text-decoration-none">Beranda</a></p>
            <p><a href="#galeri" class="text-light text-decoration-none">Galeri</a></p>
            <p><a href="#seniman" class="text-light text-decoration-none">Seniman</a></p>
            <p><a href="#tiket" class="text-light text-decoration-none">Tiket</a></p>
          </div>

          <!-- Sosial Media -->
          <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
            <h5 class="text-uppercase mb-4 font-weight-bold text-white">Ikuti Kami</h5>
            <a href="#" class="text-light me-3"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="text-light me-3"><i class="fab fa-instagram"></i></a>
            <a href="#" class="text-light me-3"><i class="fab fa-twitter"></i></a>
            <a href="#" class="text-light me-3"><i class="fab fa-youtube"></i></a>
          </div>

          <!-- Newsletter -->
          <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mt-3">
            <h5 class="text-uppercase mb-4 font-weight-bold text-white">Newsletter</h5>
            <form>
              <div class="input-group mb-3">
                <input type="email" class="form-control" placeholder="Email kamu" aria-label="Email">
                <button class="btn btn-outline-light" type="submit">Kirim</button>
              </div>
            </form>
          </div>

        </div>

        <!-- Copyright -->
        <hr class="mb-4">
        <div class="row align-items-center">
          <div class="col-md-12 text-center">
            <p class="mb-0">&copy; 2025 Galeri Warna. Semua hak dilindungi.</p>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>