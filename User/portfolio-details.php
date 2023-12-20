<?php
session_start();
include "connect.php";

if (!isset($_SESSION["login"])) {
  header("location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>e-Karangpakel - Product Details</title>
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
          <li><a class="nav-link scrollto active" href="index.php #portfolio" style="font-size: larger;">BACK</a></li>
        </ul>
      
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

  <section class="section product-details">
        <div class="container">

          <div class="row gy-2">
            <div class="col-lg-6">
            <div class="product-details-img">
              <?php
                $id = $_GET['id_pdt'];
                $pdetail = query("SELECT * FROM product WHERE id_pdt=$id");
                foreach($pdetail as $row):
                ?>
              <figure class="product-display">
                <img src="assets/img/portfolio/<?= $row['foto_pdt'];?>" width="80%" height="20%" loading="lazy"
                  alt="Non-starchy vegetables." class="cover" data-product-display>
              </figure>
            </div>
            </div>

            <div class="col-lg-6">
            <div class="product-details-content">
              <h2 class="product-title"><?= $row['name_pdt'];?></h2>

              <p align ="justify" class="description-text ">
                <?= $row['desc_pdt'];?>
              </p>
              <data class="product-price" value="<?= $row['price_pdt'];?>">Rp
                <?= $row['price_pdt'];?></data>
              <form method="POST" action="" class="form-group ">
                <br>
                <div class="row">
                  <div class="col d-flex justify-content-center">
                    <input type="number" name="quantity" value="1" min="1" max="50"
                      class="form-control product-qty-input">
                    <button type="submit" name="kirim" class="form-control  btn btn-success product-qty-input2 style" style="margin-left: 20px;">Add to cart</button>
                  </div>

                  <div class="col">
                  </div>
              </form>
              <?php
                  if(isset($_POST['kirim'])){
                    $cekid = query("SELECT * FROM cart WHERE id_pdt=".$row['id_pdt']."");
                foreach($cekid as $rw){
                  if($cekid){
                    $lastq = $_POST['quantity'] + $rw['jml_pdt'] ;
                    mysqli_query($conn, "UPDATE cart SET jml_pdt=$lastq,price_pdt=$lastq*".$row['price_pdt']." WHERE id_pdt=".$rw['id_pdt']."");
                    echo "<script>
                    window.addEventListener('load', function() { window.location.href=window.location.href;alert('Masuk ke keranjang');}, false);
                 </script>";
                    exit;
                  }
                }
                    mysqli_query($conn,"INSERT INTO cart(id_pdt,name_pdt,price_pdt,jml_pdt,foto_pdt) VALUES('".$row['id_pdt']."','".$row['name_pdt']."','".$row['price_pdt']*$_POST['quantity']."','".$_POST['quantity']."','".$row['foto_pdt']."') ");
                    echo "<script>
                    window.addEventListener('load', function() { window.location.href=window.location.href;alert('Masuk ke keranjang');}, false);
                 </script>";
                  }
                 
                  endforeach;
                  ?>
            </div>
                </div>
          </div>
        </div>
        </div>
      </section>

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
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>