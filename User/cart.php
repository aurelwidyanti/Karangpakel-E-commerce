<?php
session_start();
include "connect.php";
if(!isset($_SESSION["login"])){
    header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>e-Karangpakel - Cart</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">

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

  <!-- =======================================================
  * Template Name: Day - v4.10.0
  * Template URL: https://bootstrapmade.com/day-multipurpose-html-template-for-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div id="logo">
        <h1>
        <a href="index.php"><img src="assets/img/logo.png" alt=""></a>
        <a style="color: #c8102e; font-size: large; margin-top: 20px; font-weight: bold;">KERANJANG</a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php" style="font-size: larger;">BACK</a></li>
        </ul>
      
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

  <section class="h-100" style="background-color: black;">
  <div class="container h-100 py-5">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-10">

        <?php
            $crt = query("SELECT *,SUM(price_pdt) AS price_crt,SUM(jml_pdt) AS jml_crt FROM cart GROUP BY id_pdt"); 
            if(!$crt){
          $_SESSION['co'] = false;
          echo '<div class="text-center"><h1 >Tidak ada barang di keranjang <a class="text-primary"href="./">silahkan berbelanja</a></h1></div>';  
        }
        else{
              $_SESSION['co'] = true;
   
        }
            foreach ($crt as $row):
            ?>
        
        <div class="card rounded-3 mb-4" style="font-size:large">
          <div class="card-body p-4">
            <div class="row d-flex justify-content-between align-items-center">

              <div class="col-md-3 col-lg-3 col-xl-3">
                <img src="assets/img/portfolio/<?=$row['foto_pdt'];?>" 
                class="img-fluid rounded-3" alt="">
              </div>

              <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                <form action="" method="post">
                <input type="number" class="d-none" name="id_pdt" value="<?=$row['id_pdt'];?>">
                <input style="font-size:large" id="form1" min="1" name="quantity" value="<?=$row['jml_crt'];?>" type="number" 
                class="form-control form-control-sm"/>
              </div>

              <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                <h5 class="mb-0" style="color: black; font-size:large;">Rp <?=$row['price_pdt'];?></h5>
              </div>
              <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                  </form>
              </div>
           </div>
          </div>
        </div>
        <?php endforeach;?>
        <?php
        if(isset($_POST['upd'])){
            $update_value = $_POST['quantity'];
            $update_id = $_POST['id_pdt'];
            $realprice = query("SELECT price_pdt FROM product WHERE id_pdt=$update_id");
            foreach($realprice as $row){
                $harga = $row['price_pdt'];
                $up=mysqli_query($conn, "UPDATE cart SET jml_pdt = '$update_value',price_pdt = $harga*$update_value WHERE id_pdt = '$update_id'");
            }
            if($up){
                echo "<script>
                    window.addEventListener('load', function() { window.location.href=window.location.href;}, false);
                 </script>";
            };
          
         };
         if(!$crt){
          $dnone = "d-none";
  }
        ?>
        <div class="card <?= $dnone;?>">
          <div class="card-body d-flex justify-content-between">
          <a href="co.php" name="checkout" class="btn btn-warning btn-block btn-lg">Checkout</a>
            
            <?php
            $crt = query("SELECT SUM(price_pdt) AS price_crt FROM cart");
            foreach($crt as $row):
            ?>
            <p style="color: black; font-size:large;">Total : <b>Rp <?=$row['price_crt'];?></b></p>
            <?php    
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