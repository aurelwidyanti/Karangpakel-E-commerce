<?php
session_start();
include "./connect.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>e-Karangpakel Admin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.5.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
 <!-- ======= Header ======= -->
 <header id="header" class="header fixed-top d-flex align-items-center">

<div class="d-flex align-items-center justify-content-between">
  <a href="index.php" class="logo d-flex align-items-center">
    <img src="assets/img/logo.png" alt="">
    <span class="d-none d-lg-block">Admin</span>
  </a>
  <i class="bi bi-list toggle-sidebar-btn"></i>
</div><!-- End Logo -->

<div class="search-bar">
  <form class="search-form d-flex align-items-center" method="POST" action="#">
    <input type="text" name="query" placeholder="Search" title="Enter search keyword">
    <button type="submit" title="Search"><i class="bi bi-search"></i></button>
  </form>
</div><!-- End Search Bar -->

<nav class="header-nav ms-auto">
  <ul class="d-flex align-items-center">

    <li class="nav-item d-block d-lg-none">
      <a class="nav-link nav-icon search-bar-toggle " href="#">
        <i class="bi bi-search"></i>
      </a>
    </li><!-- End Search Icon-->

  </ul>
</nav><!-- End Icons Navigation -->

</header><!-- End Header -->

<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link " href="index.php">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-people"></i><span>User</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="components-alerts.php">
          <i class="bi bi-circle"></i><span>Kelola User</span>
        </a>
      </li>
      <li>
        <a href="components-accordion.php">
          <i class="bi bi-circle"></i><span>Tambahkan User</span>
        </a>
      </li>
     
    </ul>
  </li><!-- End Components Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-newspaper"></i><span>Berita</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="forms-elements.php">
          <i class="bi bi-circle"></i><span>Kelola Berita</span>
        </a>
      </li>
      <li>
        <a href="forms-layouts.php">
          <i class="bi bi-circle"></i><span>Tambahkan Berita</span>
        </a>
      </li>
    </ul>
  </li><!-- End Forms Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-layout-text-window-reverse"></i><span>Product</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="tables-data.php">
          <i class="bi bi-circle"></i><span>Tambahkan Product</span>
        </a>
      </li>
    </ul>
  </li><!-- End Tables Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-basket"></i><span>Pesanan</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="charts-chartjs.php">
          <i class="bi bi-circle"></i><span>Kelola Pesanan</span>
        </a>
      </li>
    </ul>
  </li><!-- End Charts Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-youtube"></i><span>Video</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="icons-bootstrap.php">
          <i class="bi bi-circle"></i><span>Kelola Video</span>
        </a>
      </li>
      <li>
        <a href="icons-remix.php">
          <i class="bi bi-circle"></i><span>Tambahkan Video</span>
        </a>
      </li>
    </ul>
  </li><!-- End Icons Nav -->

  
</ul>

</aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Kelola Berita</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Berita</li>
          <li class="breadcrumb-item active">Kelola Berita</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

        <div class="card">
            <div class="card-body">
            <div class="content-wrap">
              <div class="main">
                       <div class="container">
                                        <table class="table table-striped">                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Judul Berita</th>
                    <th scope="col">Isi Berita</th>
                    <th scope="col">Tanggal Dibuat</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $berita = query("SELECT * FROM berita");
                  $i = 1;
                  foreach($berita as $row):
                  ?>
                  <tr>
                    <th scope="row"><?=$i?></th>
                    <td><?=$row['name_berita']?></td>
                    <td><?=$row['isi_berita']?></td>
                    <td><?=$row['create_date']?></td>
                    <td><button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal"data-bs-target="#editModal<?= $i;?>">Edit</button>
                    <a href="deletebrt.php?id_berita=<?= $row['id_berita'];?>" class="btn btn-danger btn-sm">Hapus</a></td>
                  </tr> 
                  <!-- Modal -->
            <div class="modal fade" id="editModal<?= $i;?>" tabindex="-1" aria-labelledby="editModalLabel<?= $i;?>"
              aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editModalLabel<?= $i;?>">Edit Berita</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <form action="" method="POST"  enctype="multipart/form-data">
                  <div class="modal-body">

                    <div class="form-floating mb-4">
                      <input id="uname" type="text" class="form-control d-none" name="id_berita" value="<?= $row['id_berita']?>">
                      <input id="uname" type="text" class="form-control" name="name_berita" value="<?= $row['name_berita']?>">
                      <label for="uname">Judul:</label>
                  </div>

                  <div class="mb-4">
                    <input class="form-control" type="file" name="foto" id="formFile">
                  </div>
                    <div class="form-floating mb-4">
                      <input id="isi berita" type="text" class="form-control" name="isi_berita" value="<?= $row['isi_berita']?>">
                      <label for="isi berita">Isi Berita:</label>
                    </div>
                    
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="simpan" class="btn btn-primary" data-bs-dismiss="modal">Save</button>
                  </div>
                  </form>
                </div>
              </div>
            </div>
                  <?php
                  $i++;
                endforeach;
                if(isset($_POST['simpan'])){
                    $id = $_POST['id_berita'];
                    $name_berita = $_POST['name_berita'];
                    $isi_berita = $_POST['isi_berita'];
                    $edit=  mysqli_query($conn, "UPDATE berita SET name_berita='$name_berita',isi_berita='$isi_berita' WHERE id_berita='$id'");
                }
                ?>
                </tbody>
              </table>
            
              </div>
        </div>
    </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>