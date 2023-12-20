<?php
session_start();
include "connect.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>e-Karangpakel</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

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

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div id="logo">
        <h1>
        <a href="index.php"><img src="assets/img/logo.png" alt=""></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">HOME</a></li>
          <li><a class="nav-link scrollto" href="#promo">PROMO</a></li>
          <li class="dropdown"><a href="#portfolio"><span>CATEGORI</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#portfolio">Makanan</a></li>
              <li><a href="#portfolio">Minuman</a></li>
              <li><a href="#portfolio">Kerajinan</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#services">NEWS</a></li>
          <li><a class="nav-link scrollto" href="#video">VIDEO</a></li>
          <li><a class="nav-link scrollto" href="#contact">CONTACT</a></li>
          <li><a href="cart.php"><i class="bi bi-basket" style="font-size: x-large; margin-top: -5px;"></i></a></li>
          <li class="dropdown"><a href="#portfolio"><span>ACCOUNT</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="register.php">Register</a></li>
              <li><a href="login.php">login</a></li>
              <li><a href="logout.php">Logout</a></li>
            </ul>
          </li>
        </ul>
      
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= hero Section ======= -->
  <section id="hero">

    <div class="hero-content" data-aos="fade-up">
      <h2>Belanja di<br><span>e-Karangpakel</span> aja!</h2>
    </div>

    <div class="hero-slider swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide" style="background-image: url('assets/img/hero-carousel/1.jpg');"></div>
        <div class="swiper-slide" style="background-image: url('assets/img/hero-carousel/2.jpg');"></div>
        <div class="swiper-slide" style="background-image: url('assets/img/hero-carousel/3.jpg');"></div>
        <div class="swiper-slide" style="background-image: url('assets/img/hero-carousel/4.jpg');"></div>
        <div class="swiper-slide" style="background-image: url('assets/img/hero-carousel/5.jpg');"></div>
      </div>
    </div>

  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-6 about-img">
            <img src="assets/img/thinking.png" alt="">
          </div>

          <div class="col-lg-6 content">
            <h2>Kenapa anda harus membeli produk e-Karangpakel?</h2>

            <ul>
              <li><i class="bi bi-check-circle"></i> Produk terjamin</li>
              <li><i class="bi bi-check-circle"></i> Harga relatif murah</li>
              <li><i class="bi bi-check-circle"></i> Pengiriman cepat</li>
              <li><i class="bi bi-check-circle"></i> Gratis ongkir ke semua wilayah Indonesia</li>

            </ul>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    
    <!-- ======= Promo Section ======= -->
    <section id="promo">
      <div class="container" data-aos="zoom-out">
        <div class="row">
          <div class="col-lg-6 text-center text-lg-start">
            <h3 class="cta-title">PROMO</h3>
            <p class="cta-text">Segera registrasi akun Anda untuk mendapatkan diskon hingga 15%</p>
          </div>
          <div class="col-lg-6 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="register.php">Register</a>
          </div>
        </div>
      </div>
    </section><!-- End Promo Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Product</h2>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active" id="pall"><b>All</b></li>
              <li data-filter=".filter-app" id="pmakanan"><b>Makanan</b></li>
              <li data-filter=".filter-card" id="pminuman"><b>Minuman</b></li>
              <li data-filter=".filter-web" id="pkerajinan"><b>Kerajinan</b></li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

        <div id="all" class="row">  
        <?php
        $makanan=query("SELECT * FROM product ");
        foreach($makanan as $row):
        ?>
            <div class="col-lg-4 col-md-6 portfolio-item filter-active">
                <div class="image">
                    <img src="assets/img/portfolio/<?=$row['foto_pdt']?>" style="objet-fit:cover;width:100%;height:300px;" class="img-fluid" alt="">
                </div>
                <div class="content">
                <div class="portfolio-info">
                  <h4><?=$row['name_pdt']?></h4>
                  <div class="price">Rp <?=$row['price_pdt']?> </div>
                  <a href="assets/img/portfolio/<?=$row['foto_pdt']?>" data-gallery="portfolioGallery"></a>
                  <a href="portfolio-details.php?id_pdt=<?=$row['id_pdt']?>" class="details-link" title="More Details"><i class="bx bx-plus"></i></a>
                </div>
                </div>
            </div>
        <?php
        endforeach;
        ?>
        </div>

        <div id="makanan" class="row d-none">
        <?php
        $makanan=query("SELECT * FROM product WHERE ctg_product=1");
        foreach($makanan as $row):
        ?>
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="image">
                    <img src="assets/img/portfolio/<?=$row['foto_pdt']?>"  style="objet-fit:cover;width:100%;height:300px;" class="img-fluid" alt="">
                </div>
                <div class="content">
                <div class="portfolio-info">
                    <h4><?=$row['name_pdt']?></h4>
                    <div class="price">Rp <?=$row['price_pdt']?> </div>
                    <a href="assets/img/portfolio/<?=$row['foto_pdt']?>" data-gallery="portfolioGallery"></a>
                    <a href="portfolio-details.php?id_pdt=<?=$row['id_pdt']?>" class="details-link" title="More Details"><i class="bx bx-plus"></i></a>               
                </div>
                </div>
            </div>
        <?php
        endforeach;
        ?>
        </div>

        <div id="minuman" class="row d-none">
        <?php
        $makanan=query("SELECT * FROM product WHERE ctg_product=2");
        foreach($makanan as $row):
        ?>
            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="image">
                    <img src="assets/img/portfolio/<?=$row['foto_pdt']?>"  style="objet-fit:cover;width:100%;height:300px;" class="img-fluid" alt="">
                </div>
                <div class="content">
                <div class="portfolio-info">
                    <h4><?=$row['name_pdt']?></h4>
                    <div class="price">Rp <?=$row['price_pdt']?> </div>
                    <a href="assets/img/portfolio/<?=$row['foto_pdt']?>" data-gallery="portfolioGallery"></a>
                    <a href="portfolio-details.php?id_pdt=<?=$row['id_pdt']?>" class="details-link" title="More Details"><i class="bx bx-plus"></i></a>
                </div>
                </div>
              </div>
        <?php
        endforeach;
        ?>
        </div>

        <div id="kerajinan" class="row d-none">
        <?php
        $makanan=query("SELECT * FROM product WHERE ctg_product=3");
        foreach($makanan as $row):
        ?>
            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="image">
                    <img src="assets/img/portfolio/<?=$row['foto_pdt']?>"  style="objet-fit:cover;width:100%;height:300px;" class="img-fluid" alt="">
                </div>
                <div class="content">
                <div class="portfolio-info">
                    <h4><?=$row['name_pdt']?></h4>
                    <div class="price">Rp <?=$row['price_pdt']?> </div>
                    <a href="assets/img/portfolio/<?=$row['foto_pdt']?>" data-gallery="portfolioGallery"></a>
                    <a href="portfolio-details.php?id_pdt=<?=$row['id_pdt']?>" class="details-link" title="More Details"><i class="bx bx-plus"></i></a>
                </div>
                </div>
            </div>
        <?php
        endforeach;
        ?>
        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Berita Section ======= -->
    <section id="services">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>News</h2>
          <p>Berikut merupakan berita terkait Desa Karangpakel</p>
        </div>

        <div class="row gy-4">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
              <?php
              $berita=query("SELECT * FROM berita WHERE id_berita=1");
              foreach($berita as $row):
              ?>
          <div class="content">
            <div class="box">
              <h4 class="title"><a href="https://www.antaranews.com/video/2363682/kilas-nusantara-siang"><?=$row['name_berita']?></a></h4>
              <p class="description"><?=$row['isi_berita']?></p>
            </div>
          </div>
              <?php
            endforeach;
            ?>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
              <?php
                  $berita=query("SELECT * FROM berita WHERE id_berita=2");
                  foreach($berita as $row):
                  ?>
          <div class="content">
            <div class="box">
              <h4 class="title"><a href="https://www.solopos.com/pamit-kerja-kendarai-motor-pemudi-asal-trucuk-klaten-belum-pulang-hingga-kini-1480680"><?=$row['name_berita']?></a></h4>
              <p class="description"><?=$row['isi_berita']?></p>
            </div>
          </div>
              <?php
            endforeach;
            ?>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
              <?php
                  $berita=query("SELECT * FROM berita WHERE id_berita=3");
                  foreach($berita as $row):
                  ?>
          <div class="content">
            <div class="box">
              <h4 class="title"><a href="https://www.solopos.com/kisah-mustakim-peraih-emas-pon-yang-suka-ngarit-saat-pulang-klaten-1172675"><?=$row['name_berita']?></a></h4>
              <p class="description"><?=$row['isi_berita']?></p>
            </div>
          </div>
              <?php
            endforeach;
            ?>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
          <?php
                  $berita=query("SELECT * FROM berita WHERE id_berita=4");
                  foreach($berita as $row):
                  ?>
          <div class="content">
            <div class="box">
              <h4 class="title"><a href="https://www.solopos.com/hujan-disertai-angin-kencang-sejumlah-pohon-di-klaten-tumbang-1034526"><?=$row['name_berita']?></a></h4>
              <p class="description"><?=$row['isi_berita']?></p>
            </div>
          </div>
          <?php
            endforeach;
            ?>
          </div>

        </div>

      </div>
    </section><!-- End Berita Section -->

    <!-- ======= Video Section ======= -->
    <section id="video">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Video</h2>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <?php
              $video=query("SELECT * FROM video WHERE id_video=1");
              foreach($video as $row):
              ?>
            <p><?=$row['link_video']?></p>
            <?php
            endforeach;
            ?>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <?php
              $video=query("SELECT * FROM video WHERE id_video=2");
              foreach($video as $row):
              ?>
            <p><?=$row['link_video']?></p>
            <?php
            endforeach;
            ?>        
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <?php
              $video=query("SELECT * FROM video WHERE id_video=3");
              foreach($video as $row):
              ?>
            <p><?=$row['link_video']?></p>
            <?php
            endforeach;
            ?>
          </div>

        </div>

      </div>
    </section><!-- End Video Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Contact Us</h2>
        </div>

        <div class="row contact-info">

          <div class="col-md-2">
            <div class="contact-email">
              <i class="bi bi-phone"></i>
              <h3>Call</h3>
              <p>+62 8235 67934 56</a></p>
            </div>
          </div>

          <div class="col-md-2">
            <div class="contact-email">
              <i class="bi bi-envelope"></i>
              <h3>Email</h3>
              <p>karangpakel@gmail.com</a></p>
            </div>
          </div>

          <div class="col-md-2">
            <div class="contact-email">
              <i class="bi bi-instagram"></i>
              <h3>Instagram</h3>
              <p>@karangpakel</p>
            </div>
          </div>

          <div class="col-md-2">
            <div class="contact-email">
              <i class="bi bi-twitter"></i>
              <h3>Twitter</h3>
              <p>@karangpakel</p>
            </div>
          </div>

          <div class="col-md-2">
            <div class="contact-email">
              <i class="bi bi-facebook"></i>
              <h3>Facebook</h3>
              <p>@karangpakel</p>
            </div>
          </div>

          <div class="col-md-2">
            <div class="contact-email">
              <i class="bi bi-youtube"></i>
              <h3>YouTube</h3>
              <p>e-Karangpakel</p>
            </div>
          </div>


        </div>
      </div>

      <div class="container mb-4">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15814.237878600827!2d110.63277472174532!3d-7.730321148063424!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a46f2ba0e29b3%3A0x5027a76e355a150!2sKarangpakel%2C%20Kec.%20Trucuk%2C%20Kabupaten%20Klaten%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1672799585623!5m2!1sid!2sid" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>

      <div class="container">
        <div class="form">
          <form action="" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="form-group col-md-6 mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>

            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>

            <div class="text-center"><button type="submit" name="kirim">Send Message</button></div>
          </form>

          <?php
          if(isset($_POST['kirim'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];
            mysqli_query($conn, "INSERT INTO contact (name_ct,email_ct,subject_ct,message_ct) VALUE('$name','$email','$subject','$message')");
          }
          ?>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>e-Karangpakel</strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by Aurel Putri Widyanti A11.2022.14494</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
  <script src="assets/js/jquery.js"></script>

</body>

</html>