<?php

session_start();

if( !isset($_SESSION['username']) ){
  $_SESSION['msg'] = 'anda harus login untuk mengakses halaman ini';
  header('Location: login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Balqiz Prycilia-UTS SKD</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

 

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href=#>balqizzp@students.uns.ac.id</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>087762239366</span></i>
      </div>

      <div class="cta d-none d-md-flex align-items-center">
        <a href="#about" class="scrollto">CALA CAFE</a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="index.html">CALA CAFE</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li class="dropdown"><a href="#"><span>Information</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="vigenere.php">Vigenere Chiper</a></li>
              <li><a href="caesar.php">Caesar Chiper</a></li>
            </ul>
            <li><a class="nav-link scrollto" href="logout.php">Logout</a></li>
             
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container" data-aos="fade-in">
      <h1>Welcome to Cala Cafe</h1>
      <h2>Diet kamu adalah rekening bank. Pilihan makanan yang baik adalah investasi yang baik.</h2>
      <div class="d-flex align-items-center">
        <i class="bx bxs-right-arrow-alt get-started-icon"></i>
        <a href="#about" class="btn-get-started scrollto">Go Cala Cafe</a>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">
          <div class="col-xl-4 col-lg-5" data-aos="fade-up">
            <div class="content">
              <h3>Kenapa memilih Cala Cafe?</h3>
              <p>
                Cala Cafe merupakan website yang menampilkan menu menu yang ada di cafe kita.
              </p>
              <div class="text-center">
                <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-xl-8 col-lg-7 d-flex">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4>KIMCHI</h4>
                    <p>Makanan korea ini merupakan sayuran yang difermentasi dengan bumbu khas sehingga menghasilkan rasa yang pedas dan asam. Bagi masyarakat Korea, rasanya kurang sempurna jika saat makan tidak ada kimchi. Karena merupakan makanan yang difermentasikan, maka dari itu tentu makanan ini sangat tahan lama.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-cube-alt"></i>
                    <h4>SANNAKJI</h4>
                    <p>Untuk jenis makanan korea yang satu ini tidak semua orang sanggup memakannya. Bahkan ada beberapa orang Korea yang mengaku juga tidak bisa memakannya. Sannakji adalah makanan yang berasal dari gurita hidup yang dimakan dengan minyak atau biji wijen. Saat Anda memakannya, gurita yang sudah disajikan dalam bentuk potongan-potongan ini akan terasa menggeliat-geliat di lidah Anda maka dari itulah tidak semua orang bisa memakannya.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-images"></i>
                    <h4>KIMBAB</h4>
                    <p>Nasi yang digulung dengan gim atau rumput laut kering yang di dalamnya berisi sayuran seperti wortel, bayam, timun, kemudian telur dan daging itu disebut dengan kimbab. Belakangan ini makanan korea ini juga sangat populer di Indonesia dan Anda pun bisa membuatnya sendiri di rumah, karena sekarang sama sekali tidak sulit untuk mendapatkan gim atau rumput laut kering dan penggulung kimbab di Indonesia, sedangkan bahan-bahan di dalamnya semua bisa Anda temukan dengan mudah di pasar atau supermarket.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><

    <section id="about" class="about section-bg">
      <div class="container">

        <div class="row">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative" data-aos="fade-right">
           
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <h4 data-aos="fade-up">About us</h4>
            <h3 data-aos="fade-up">CALA CAFE</h3>
            <p data-aos="fade-up">Halo, aku Balqiz Prycilia, owner dari CALA CAFE. Aku membuat website ini karena tertarik ingin mengembangkan bisnis cafe aku . Aku lulusan dari D3 Teknik Informatika UNS. Maka dari itu aku ingin mengembangkan ilmu yang kupelajari ketika kuliah melalui pembuatan website yang aku rancang sendiri ini sekaligus mengembangkan bisnis cafe aku.</p>

          </div>
        </div>

      </div>
    </section>

  

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-up">Contact</h2>
          <p data-aos="fade-up">Anda dapat menghubungi kami melalui :</p>
        </div>

        <div class="row justify-content-center">

          <div class="col-xl-3 col-lg-4 mt-4" data-aos="fade-up">
            <div class="info-box">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p>Magetan, Indonesia</p>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 mt-4" data-aos="fade-up" data-aos-delay="100">
            <div class="info-box">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>balqizzp@students.uns.ac.id</p>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 mt-4" data-aos="fade-up" data-aos-delay="200">
            <div class="info-box">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>087762239366</p>
            </div>
          </div>
        </div>

        </div>

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>CALA CAFE</h3>
            <p>
              Magetan <br>
              Indonesia<br>
            </p>
          </div>


        </div>
      </div>
    </div>

    <div class="container d-lg-flex py-4">

      <div class="me-lg-auto text-center text-lg-start">
        <div class="copyright">
          &copy; Copyright <strong><span>CALA CAFE</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexor-free-multipurpose-bootstrap-template/ -->
          Designed by <a href=#>Balqiz Prycilia</a>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>