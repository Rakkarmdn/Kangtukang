<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>KANGTUKANG</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: QuickStart
  * Template URL: https://bootstrapmade.com/quickstart-bootstrap-startup-website-template/
  * Updated: Jun 14 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="#home" class="logo d-flex align-items-center me-auto">
        <img src="assets/img/favicon.png" alt="">
        <h1 class="sitename">KANGTUKANG</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#workers" class="active">Workers</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="<?= base_url('logout') ?>">Logout</a>

    </div>
  </header>

  <main class="main">

    <!-- Workers Section -->
    <section id="workers" class="featured-services section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Workers</h2>
        <p>Pekerja-pekerja ahli yang terpilih sesusai bidangnya</p>
      </div>
      <div class="container">

        <!-- Tampilkan Data Workers dalam Bentuk Tabel -->
        <div class="row gy-4">
          <div class="col-15" data-aos="fade-up" data-aos-delay="100">
          <div class="table-responsive">
            <table class="table custom-table ">
              <thead class="table-danger">
                <tr>
                  <th>Nama</th>
                  <th>Tempat Tanggal Lahir</th>
                  <th>Domisili</th>
                  <th>Pendidikan</th>
                  <th>Pengalaman Kerja</th>
                </tr>
              </thead>
              <tbody>
                <?php if(!empty($workers) && is_array($workers)): ?>
                  <?php foreach($workers as $worker): ?>
                    <tr class="table">
                      <td> <img class="image-edit" src="assets/img/account.png"><?= esc($worker['nama']); ?></td>
                      <td><?= esc($worker['ttl']); ?></td>
                      <td><?= esc($worker['domisili']); ?></td>
                      <td><?= esc($worker['pendidikan']); ?></td>
                      <td><?= esc($worker['pengalaman_kerja']); ?></td>
                    </tr>
                  <?php endforeach; ?>
                <?php else: ?>
                  <tr>
                    <td colspan="5" class="text-center">No workers found</td>
                  </tr>
                <?php endif; ?>
              </tbody>
            </table>
          </div>

          </div>
        </div>

      </div>

    </section><!-- /workers Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Hubungi kami jika membutuhkan pekerja yang diinginkan</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-geo-alt"></i>
              <h3>Address</h3>
              <p>Bekasi, Jln. Terus Sampe Mentok, No. 1</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3 col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-telephone"></i>
              <h3>Call Us</h3>
              <p>+62 8123456789</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3 col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-envelope"></i>
              <h3>Email Us</h3>
              <p>kangtukang@gmail.com</p>
            </div>
          </div><!-- End Info Item -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer position-relative">


    <div class="container copyright text-center mt-6">
      <p>© <span>2024 - </span> <strong class="px-1 sitename">KANGTUKANG</strong></p>
      <div class="credits">
      </div>
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
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
