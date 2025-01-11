<!DOCTYPE html>
<html lang="en">

<head>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- Favicons -->
  <title>Uzhma Wipala Mahasinuhu</title>
  <link href="<?php echo base_url('assets/img/uzhma1.png'); ?>" rel="icon">
  <link href="<?php echo base_url('assets/img/uzhma1.png'); ?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url(
      'assets/vendor/bootstrap/css/bootstrap.min.css'
  ); ?>" rel="stylesheet">
  <link href="<?php echo base_url(
      'assets/vendor/icofont/icofont.min.css'
  ); ?>" rel="stylesheet">
  <link href="<?php echo base_url(
      'assets/vendor/boxicons/css/boxicons.min.css'
  ); ?>" rel="stylesheet">
  <link href="<?php echo base_url(
      'assets/vendor/venobox/venobox.css'
  ); ?>" rel="stylesheet">
  <link href="<?php echo base_url(
      'assets/vendor/owl.carousel/assets/owl.carousel.min.css'
  ); ?>" rel="stylesheet">
  <link href="<?php echo base_url(
      'assets/vendor/aos/aos.css" rel="stylesheet'
  ); ?>">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">

  <!-- Modernizr JS -->
	<script src="<?php echo base_url() .
     'theme/js/modernizr-2.6.2.min.js'; ?>"></script>
	<?php
 error_reporting(0);
 function limit_words($string, $word_limit)
 {
     $words = explode(' ', $string);
     return implode(' ', array_splice($words, 0, $word_limit));
 }
 ?>

	</head>
	<body>

  <!-- =======================================================
  * Template Name: Flexor - v2.0.0
  * Template URL: https://bootstrapmade.com/flexor-free-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container d-flex">
      <div class="logo mr-auto">
        <h5 class="text-light"><a href="<?php echo base_url('home');?>"><span><img style="width:40px;" src="<?php echo base_url('assets/img/uzhma1.png'); ?>" alt="" class="img-fluid mb-3"> 
        <b style="color: #fff;">Uzhma Wipala Mahasinuhu</b></span></a></h5>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#beranda">Beranda</a></li>
          <li><a href="#tentang">Tentang Kami</a></li>
          <li><a href="<?php echo base_url('tem'); ?>">Tim</a></li>
          <li><a href="#portfolio">Galeri</a></li>
          <li><a href="#contact"> Kontak</a></li>
          <li><a href="<?php echo base_url('portfolio'); ?>">Portofolio</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container" data-aos="fade-in">
      <h1 id="moving-text">Selamat Datang Di Uzhma</h1>
      <br>
      <div class="d-flex align-items-center">
        <i class="bx bxs-right-arrow-alt get-started-icon"></i>
        <a href="#tentang" class="btn-get-started scrollto">Mari Berkenalan</a>
      </div>
    </div>
  </section><!-- End Hero -->

    <!-- ======= About Section ======= -->
    <section id="tentang" class="about">
    <div class="container" style="margin-top: 150px;">
        <div class="row">
            <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
                <!-- Pindahkan h3 ke sini secara default untuk desktop -->
                <h3 data-aos="fade-up">Tentang Uzhma Wipala Mahasinuhu</h3>


                <div class="icon-box" data-aos="fade-up">
                    <div class="icon"><i class="bx bx-rocket"></i></div>
                    <h4 class="title"><a href="">Visi</a></h4>
                    <p class="description">Menjadi market leader dalam menyediakan solusi branding, marketing, dan selling</p>
                </div>

                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon"><i class="bx bx-star"></i></div>
                    <h4 class="title"><a href="">Misi</a></h4>
                    <ol class="alpha">
                        <li>Mengembangkan kolaborasi bisnis berdasarkan prinsip saling memberi manfaat sehingga tercipta rasa saling percaya dan peningkatan bisnis yang berkesinambungan.</li>
                        <li>Memiliki, menciptakan, mengembangkan produk-produk unggul yang diterima pasar baik online maupun offline.</li>
                        <li>Menjadi rumah nyaman bagi SDM unggul yang berintegritas dan memiliki daya juang tinggi.</li>
                        <li>Membangun budaya dan sistem yang kuat, disiplin pada target dan konsisten pada pertumbuhan.</li>
                    </ol>
                </div>
            </div>

            <div class="col-xl-5 col-lg-6 video-box" data-aos="fade-left" style="position: relative;">
                <!-- Gambar -->
                <img src="assets/img/About.jpg" alt="Tentang Uzhma Wipala Mahasinuhu" style="width: 100%; border-radius: 10px;">
            </div>
        </div>
    </div>
</section>

    <!-- End About Section -->

    <!-- ======= Services Section ======= -->
   

    <!-- ======= Gallery Section ======= -->
    <section id="portfolio" class="Portfolio">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-up">Galeri</h2>
        </div>

        <div class="row portfolio-container mt-5" data-aos="fade-up" data-aos-delay="200">
        <?php foreach ($galeri->result_array() as $j):

            $galeri_image = $j['galeri_gambar'];
            $galeri_judul = $j['galeri_judul'];
            ?>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img style="border-radius:10px; width: 100%; max-width: 350px" src="assetsadm/images/<?= $galeri_image ?>" class="img-fluid" alt="">
            <div class="portfolio-info">
              <p><b><?= $galeri_judul ?></b></p>
              <a href="assetsadm/images/<?= $galeri_image ?>" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
            </div>
          </div>
              <?php
        endforeach; ?>
        </div>
      </div>
    </section>
  <!-- End Portfolio Section -->

    <!-- ======= Karir Section ======= -->
    
    <!-- End Karir Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-up">Kontak</h2>
        </div>

        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="300">
        
          <div class="col-xl-9 col-lg-12 mt-4">
            <form action="<?php echo base_url() .
                'kontak/kirim_pesan'; ?>" method="post" role="form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="nama" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Nama Anda" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Email Anda" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="pesan" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Kirim Pertanyaan, Kritik / Saran"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
              <div class="text-center"> <button type="submit" name="input" id="btn-add" class="btn btn-danger text-white btn-block"><i class= 'fa fa-ticket'></i> KIRIM PESAN </button> </div>
            </form>
          </div>
        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <footer id="footer">
  <div class="footer-top">
    <div class="container d-flex justify-content-center align-items-center flex-column">
      <div class="row justify-content-center">
        <div class="col-lg-3 col-md-6 footer-contact">
          <h3>Uzhma Wipala Mahasinuhu</h3>
          <p>
            Jl. Nitikan Baru Gang Leo No. 1 Sorosutan, Kec. Umbulharjo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55162<br><br>
            <strong>Phone:</strong> +62813-9034-0197<br>
            <strong>Email:</strong> info@mahasinuhu.com<br>
          </p>
        </div>

        <div class="col-xl-15 col-lg-15 footer-newsletter d-flex justify-content-center">
          <iframe 
            style="width:400px; height:300px" 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.6993868732484!2d110.37989165975682!3d-7.8216088276453455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a57114eb49b4b%3A0xb9543ed419edac75!2sPT.%20Uzhma%20Wipala%20Mahasinuhu!5e0!3m2!1sid!2sid!4v1715087279597!5m2!1sid!2sid">
          </iframe>
        </div>
      </div>
    </div>
  </div> 

  <div class="container d-flex flex-column justify-content-center align-items-center py-4">
    <div class="text-center">
      <div class="copyright">
        &copy; Copyright <strong><span>Uzhma Wipala Mahasinuhu</span></strong>
      </div>
    </div>
    <div class="social-links d-flex justify-content-center pt-3">
      <a href="https://www.instagram.com/mahasinuhu" class="instagram"><i class="bx bxl-instagram"></i></a>
      <a href="https://www.linkedin.com/company/mahasinuhu/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
    </div>
  </div>
</footer>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url(
      'assets/vendor/jquery/jquery.min.js'
  ); ?>"></script>
  <script src="<?php echo base_url(
      'assets/vendor/bootstrap/js/bootstrap.bundle.min.js'
  ); ?>"></script>
  <script src="<?php echo base_url(
      'assets/vendor/jquery.easing/jquery.easing.min.js'
  ); ?>"></script>
  <script src="<?php echo base_url(
      'assets/vendor/php-email-form/validate.js'
  ); ?>"></script>
  <script src="<?php echo base_url(
      'assets/vendor/jquery-sticky/jquery.sticky.js'
  ); ?>"></script>
  <script src="<?php echo base_url(
      'assets/vendor/venobox/venobox.min.js'
  ); ?>"></script>
  <script src="<?php echo base_url(
      'assets/vendor/owl.carousel/owl.carousel.min.js'
  ); ?>"></script>
  <script src="<?php echo base_url(
      'assets/vendor/isotope-layout/isotope.pkgd.min.js'
  ); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/aos/aos.js'); ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url('assets/js/main.js'); ?>"></script>
  <script>
    document.addEventListener('DOMContentLoaded', (event) => {
    const textElement = document.getElementById('moving-text');
    const text = textElement.textContent;
    textElement.textContent = ''; // Clear the text content initially
    let index = 0;

    function typeWriter() {
      if (index < text.length) {
        const char = text.charAt(index);
        textElement.textContent += char;
        if (char === ' ') {
          textElement.style.borderRight = 'none';
        } else {
          textElement.style.borderRight = '.15em solid orange';
        }
        index++;
        setTimeout(typeWriter, 150); // Adjust the speed of typing here (in milliseconds)
      }
    }

    typeWriter();
  });

  </script>
  
</body>
</html>