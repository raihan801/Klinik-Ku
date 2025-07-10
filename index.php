<?php 
  session_start();
  if (isset($_SESSION['success'])) {
    echo '<div class="alert alert-success alert-dismissible fade show">' . 
    $_SESSION['success'] .
    '  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>' .
    '</div>';
    unset($_SESSION['success']);
  }
  
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Klinik-ku</title>
    

    <!-- Favicons -->
    <link href="../assets/img/favicon.png" rel="icon" />
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" />
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet" />
  </head>

  <body class="index-page">
    <header id="header" class="header sticky-top">
      <div class="branding d-flex align-items-center">
        <div class="container position-relative d-flex align-items-center justify-content-between">
          <a href="index.php" class="logo d-flex align-items-center me-auto">
            <h1 class="sitename">Klinik-ku</h1>
          </a>

          <nav id="navmenu" class="navmenu">
            <ul>
              <li>
                <a href="#hero" class="active">Home<br /></a>
              </li>
              <li><a href="#about">About</a></li>
              <li><a href="#services">Layanan</a></li>
              <li><a href="daftarDokter/dokter.php">Daftar Dokter</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
          </nav>

 <?php if (isset($_SESSION['username'])): ?>
              <div class="d-flex align-items-center ms-4">
                <strong class="me-3">Hai, <?php echo htmlspecialchars($_SESSION['username']); ?></strong>
                <a class="btn btn-danger" href="auth/logout.php">Logout</a>
              </div>
          <?php else: ?>
              <a class="cta-btn d-none d-sm-block" href="auth/loginn.php">Login</a>
          <?php endif; ?>
        </div>
      </div>
    </header>

    <main class="main">
      <!-- Hero Section -->
      <section id="hero" class="hero section light-background">
        <img src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in" />

        <div class="container position-relative">
          <div class="welcome position-relative">
            <h2>WELCOME TO Klinik-ku</h2>
            <p>Website penyedia layanan kesehatan</p>
          </div>
          <!-- End Welcome -->

          <div class="content row gy-4">
            <div class="col-lg-6 d-flex align-items-stretch">
              <div class="why-box" data-aos="zoom-out" data-aos-delay="200">
                <h3>Mengapa memilih Klinik-ku</h3>
                <p>
                  Klinik-ku hadir sebagai aplikasi berbasis web yang dirancang khusus untuk memudahkan masyarakat dalam mengakses berbagai layanan medis secara online. Mulai dari pendaftaran konsultasi dengan dokter, melihat jadwal praktik,
                  hingga mengakses hasil rekam medis, semua bisa dilakukan dengan cepat, praktis, dan tanpa ribet.
                </p>
                <div class="text-center">
                  <a href="#about" class="more-btn"><span>Learn More</span> <i class="bi bi-chevron-right"></i></a>
                </div>
              </div>
            </div>
            <!-- End Why Box -->
          </div>
          <!-- End  Content-->
        </div>
      </section>
      <!-- /Hero Section -->

      <!-- About Section -->
      <section id="about" class="about section">
        <div class="container">
          <div class="row gy-4 gx-5">
            <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="200">
              <img src="assets/img/about.jpg" class="img-fluid" alt="" />
            </div>

            <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
              <h3>Tentang Kami</h3>
              <p>
                Klinik-ku adalah aplikasi layanan kesehatan berbasis web yang dikembangkan untuk mempermudah masyarakat dalam mengakses fasilitas klinik secara online. Kami memahami bahwa antrean panjang, informasi yang tidak terpusat, dan
                proses manual bisa jadi kendala saat pasien ingin mendapatkan layanan medis. Karena itu, Klinik-ku hadir sebagai solusi modern yang praktis dan efisien.
              </p>
              <ul>
                <li>
                  <i class="fa-solid fa-calendar"></i>
                  <div>
                    <h5>Booking Konsultasi</h5>
                    <p>Dengan fitur ini, pengguna tidak perlu mengantri ke klinik untuk mendapatkan nomor antrian sehingga menghemat banyak waktu</p>
                  </div>
                </li>
                <li>
                  <i class="fa-solid fa-medkit"></i>
                  <div>
                    <h5>Fitur Rekam Medis</h5>
                    <p>Seluruh riwayat kesehatan pasien tercatat secara digital, sehingga dokter danpengguna dapat dengan mudah memantau kondisi pasien dari waktu ke waktu.</p>
                  </div>
                </li>
                <li>
                  <i class="fa-solid fa-bed"></i>
                  <div>
                    <h5>Ketersediaan Ruangan</h5>
                    <p>Sistem menampilkan daftar ruangan yang aktif, sedang digunakan, atau kosong, untuk mempermudah pengelolaan fasilitas klinik secara digital.</p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <!-- /About Section -->

      <!-- Services Section -->
      <section id="services" class="services section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Daftar Layanan</h2>
          <p>Pilih layanan yang ingin anda gunakan</p>
        </div>
        <!-- End Section Title -->

        <div class="container">
          <div class="row gy-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
              <div class="service-item position-relative">
                <a href="<?php echo isset($_SESSION['username']) ? 'booking/booking_konsultasi.php' : 'auth/loginn.php'; ?>" class="stretched-link">
                  <h3>Booking Konsultasi</h3>
                </a>
              </div>
            </div>
            <!-- End Service Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
              <div class="service-item position-relative">
                <a href="daftarDokter/dokter.php" class="stretched-link">
                  <h3>Daftar Dokter</h3>
                </a>
              </div>
            </div>
            <!-- End Service Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
              <div class="service-item position-relative">
                <a href="<?php echo isset($_SESSION['username']) ? 'rekamMedis/rekammedis.php' : 'auth/loginn.php'; ?>" class="stretched-link">
                  <h3>Rekam Medis</h3>
                </a>
              </div>
            </div>
            <!-- End Service Item -->

            <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="400">
              <div class="service-item position-relative">
                <a href="ruangan/ruangan.php" class="stretched-link">
                  <h3>Ruangan Tersedia</h3>
                </a>
              </div>
            </div>
            <!-- End Service Item -->

            <!-- End Service Item -->

            <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="400">
              <div class="service-item position-relative">
                <a href="<?php echo isset($_SESSION['username']) ? 'riwayatkonsultasi/riwayat_konsultasi.php' : 'auth/loginn.php'; ?>" class="stretched-link">
                  <h3>Riwayat Konsultasi </h3>
                </a>
              </div>
            </div>
            <!-- End Service Item -->
           
          </div>
        </div>
      </section>
      <!-- /Services Section -->

      
    </main>

    <footer id="footer" class="footer light-background">
      <div class="container copyright text-center mt-4">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">Klinik-ku</strong> <span>All Rights Reserved</span></p>
      </div>
    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
  </body>
</html>
