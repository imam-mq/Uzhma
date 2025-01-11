<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- Favicons -->
  <title>Uzhma Wipala Mahasinuhu</title>
  <link href="<?php echo base_url('assets/img/uzhma1.png'); ?>" rel="icon">
  <link href="<?php echo base_url(
      'assets/img/uzhma1.png'
  ); ?>" rel="apple-touch-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />

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
      'assets/vendor/aos/aos.css'
  ); ?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">

  <!-- Modernizr JS -->
	<script src="<?php echo base_url(
     'theme/js/modernizr-2.6.2.min.js'
 ); ?>"></script>
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
  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container d-flex">
      <div class="logo mr-auto">
        <h5 class="text-light"><a href="<?php echo base_url('home');?>"><span><img style="width:40px;" src="<?php echo base_url(
            'assets/img/uzhma1.png'
        ); ?>" alt="" class="img-fluid mb-3"> 
        <b style="color: #fff;">Uzhma Wipala Mahasinuhu</b></span></a></h5>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="<?php echo base_url('home'); ?>">Beranda</a></li>
          <li><a href="<?php echo base_url('home'); ?>">Tentang Kami</a></li>
          <li><a href="<?php echo base_url('tem'); ?>">Tim</a></li>
          <li><a href="<?php echo base_url('home/#portfolio'); ?>">Galeri</a></li>
          <li><a href="<?php echo base_url('home/#contact'); ?>"> Kontak</a></li>
          <li><a href="<?php echo base_url('portfolio'); ?>">Portofolio</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
  <br>
  <!-- ======= Contact Section ======= -->
  <section id="services" class="team section-bg">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-up">Tim</h2>
        </div>

        <div class="row">
        <?php foreach ($data->result_array() as $j):

            $post_id = $j['port_id'];
            $port_judul = $j['port_judul'];
            $port_deskripsi = $j['port_deskripsi'];
            $port_image = $j['port_image'];
            ?>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-5" data-aos="fade-up">
            <div class="member">
              <div class="member-img">
                <img src="<?php echo base_url() .
                    'assetsadm/images/' .
                    $port_image; ?>" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                  <h4 class="description"><?php echo $port_judul; ?></h4>
                  <h4 class="description"><?php echo $port_deskripsi; ?></h4>
                  <!-- <span>Chief Executive Officer</span> -->
              </div>
            </div>
          </div>
          <?php
        endforeach; ?>
        </div>
      </div>
    </section>
<!-- End Produk Section -->







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
