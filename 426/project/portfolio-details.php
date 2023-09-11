<!DOCTYPE html>
<?php
    require_once("classes/Client.class.php");
    $productid = base64_decode($_GET["productid"]);
    //echo $productid;

    $productResult = $client->getSingleProducts($productid);

    while($productRow = $productResult->fetch_assoc()){
        $productname = $productRow["productname"];
        $category = $productRow["categoryname"];
        $description = $productRow["description"];
        $price = $productRow["price"];
        $material = $productRow["material"];
        $packaging = $productRow["packaging"];
        $batchno = $productRow["batchno"];
    }
?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php echo $productname; ?></title>
  <?php
    require_once("commons/meta.php");
  ?>

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

 
</head>

<body>

 <!-- ======= Header ======= -->
 <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
    <div class="logo">
        <h1><a href="index.html">Selecao</a></h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="index.php#about">About</a></li>
          <li><a class="nav-link scrollto" href="index.php#services">Services</a></li>
          <li><a class="nav-link scrollto " href="index.php#portfolio">Products</a></li>
          <li><a class="nav-link scrollto" href="index.php#team">Team</a></li>
          <li><a class="nav-link scrollto" href="index.php#career">Career</a></li>
          <li><a class="nav-link scrollto" href="index.php#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2><?php echo $productname; ?></h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Portfolio Details</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <?php
                    $imagesResult = $client->getProductImages($productid);

                    if($imagesResult->num_rows > 0){
                        while($imageRow = $imagesResult->fetch_assoc()){
                          if($imageRow["mainimage"] == 1){
                            echo "<div class='swiper-slide active'>
                                <img src='admin/$imageRow[imagepath]' alt=''>
                            </div>";    
                          }else{
                            echo "<div class='swiper-slide'>
                                <img src='admin/$imageRow[imagepath]' alt=''>
                            </div>";    
                          }
                        }
                    }else{
                        echo "<div class='swiper-slide'>
                            <img src='admin/img/productsimages/dummy.jpg' alt=''>
                        </div>";
                    }
                ?>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Project information</h3>
              <ul>
                <li><strong>Category</strong>: <?php echo $category; ?></li>
                <li><strong>Price</strong>: <?php echo $price; ?></li>
                <li><strong>Material</strong>: <?php echo $material; ?></li>
                <li><strong>Packaging</strong>: <?php echo $packaging; ?></li>
                <li><strong>Batch No.</strong>: <?php echo $batchno; ?></li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>Description</h2>
              <p>
                <?php echo $description; ?>
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php require_once("commons/footer.php"); ?>
  <!-- End Footer -->
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