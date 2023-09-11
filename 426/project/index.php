<?php
session_start();
require_once("classes/Client.class.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Project</title>
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
  <link href="assets/vendor/fontawesome-free/css/all.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center  header-transparent ">
    <div class="container d-flex align-items-center justify-content-between">
      <?php require_once("commons/navbar.php"); ?>
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
    <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

      <?php
      $sliderResult = $client->getSlider();
      $count = 0;
      //echo $sliderResult->num_rows;
      if ($sliderResult->num_rows > 0) {
        while ($sliderRow = $sliderResult->fetch_assoc()) {
          if ($count == 0) {
            echo "<div class='carousel-item active'>
          <div class='carousel-container'>
            <img src='admin/$sliderRow[imagepath]' class='h-100 w-100 my-3'>
            <p class='animate__animated fanimate__adeInUp'>$sliderRow[description]</p>
          </div>
        </div>";
            $count++;
          } else {
            echo "<div class='carousel-item'>
          <div class='carousel-container'>
            <img src='admin/$sliderRow[imagepath]' class='h-100 w-100 my-3'>
            <p class='animate__animated fanimate__adeInUp'>$sliderRow[description]</p>
          </div>
        </div>";
        $count++;
          }
        }
      } else {
        while ($sliderRow = $sliderResult->fetch_assoc()) {
          echo $count;
          if ($count == 0) {
            echo "<div class='carousel-item active'>
          <div class='carousel-container'>
            <h2 class='animate__animated animate__fadeInDown'>Welcome to <span>Selecao $count</span></h2>
            <p class='animate__animated fanimate__adeInUp'>Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
            <a href='#about' class='btn-get-started animate__animated animate__fadeInUp scrollto'>Read More</a>
          </div>
        </div>";
            $count++;
          } else {
            echo "<div class='carousel-item active'>
          <div class='carousel-container'>
            <h2 class='animate__animated animate__fadeInDown'>Welcome to <span>Selecao $count</span></h2>
            <p class='animate__animated fanimate__adeInUp'>Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
            <a href='#about' class='btn-get-started animate__animated animate__fadeInUp scrollto'>Read More</a>
          </div>
        </div>";
          }
        }
      }

      ?>


      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      </a>

    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>About</h2>
          <p>Who we are</p>
        </div>

        <div class="row content" data-aos="fade-up">
          <div class="col-lg-6">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
              <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <a href="#" class="btn-learn-more">Learn More</a>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container">

        <ul class="nav nav-tabs row d-flex">
          <li class="nav-item col-3" data-aos="zoom-in">
            <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">
              <i class="ri-gps-line"></i>
              <h4 class="d-none d-lg-block">Modi sit est dela pireda nest</h4>
            </a>
          </li>
          <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="100">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-2">
              <i class="ri-body-scan-line"></i>
              <h4 class="d-none d-lg-block">Unde praesenti mara setra le</h4>
            </a>
          </li>
          <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="200">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-3">
              <i class="ri-sun-line"></i>
              <h4 class="d-none d-lg-block">Pariatur explica nitro dela</h4>
            </a>
          </li>
          <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="300">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-4">
              <i class="ri-store-line"></i>
              <h4 class="d-none d-lg-block">Nostrum qui dile node</h4>
            </a>
          </li>
        </ul>

        <div class="tab-content" data-aos="fade-up">
          <div class="tab-pane active show" id="tab-1">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
                <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p>
                <ul>
                  <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                  <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                  <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                </ul>
                <p>
                  Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                  culpa qui officia deserunt mollit anim id est laborum
                </p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/features-1.png" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-2">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Neque exercitationem debitis soluta quos debitis quo mollitia officia est</h3>
                <p>
                  Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                  culpa qui officia deserunt mollit anim id est laborum
                </p>
                <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p>
                <ul>
                  <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                  <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                  <li><i class="ri-check-double-line"></i> Provident mollitia neque rerum asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</li>
                  <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/features-2.png" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-3">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Voluptatibus commodi ut accusamus ea repudiandae ut autem dolor ut assumenda</h3>
                <p>
                  Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                  culpa qui officia deserunt mollit anim id est laborum
                </p>
                <ul>
                  <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                  <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                  <li><i class="ri-check-double-line"></i> Provident mollitia neque rerum asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</li>
                </ul>
                <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/features-3.png" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-4">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Omnis fugiat ea explicabo sunt dolorum asperiores sequi inventore rerum</h3>
                <p>
                  Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                  culpa qui officia deserunt mollit anim id est laborum
                </p>
                <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p>
                <ul>
                  <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                  <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                  <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/features-4.png" alt="" class="img-fluid">
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="row" data-aos="zoom-out">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>Call To Action</h3>
            <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Call To Action</a>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Services</h2>
          <p>What we do offer</p>
        </div>

        <div class="row">
          <?php
          $servicesResult = $client->getServices();

          $colors = ["red", "green", "blue", "purple", "yellow", "brown", "violet", "pink"];

          while ($servicesRow = $servicesResult->fetch_assoc()) {
            $colorkey = array_rand($colors);
            echo "<div class='col-lg-4 col-md-6'>
              <div class='icon-box' data-aos='zoom-in-left'>
                <div class='icon' style='color:$colors[$colorkey];'>
                  $servicesRow[icon]
                </div>
                <h4 class='title'><a href=''>$servicesRow[title]</a></h4>
                <p class='description'>$servicesRow[description]</p>
              </div>
            </div> ";
          }
          ?>
        </div>
      </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Portfolio</h2>
          <p>What we've done</p>
        </div>

        <ul id="portfolio-flters" class="d-flex justify-content-center flex-wrap align-content-stretch" data-aos="fade-up" style="overflow-x: scroll;">
          <li data-filter="*" class="filter-active">All</li>
          <?php
          $categoryResult = $client->getAllCategory();

          while ($categoryRow = $categoryResult->fetch_assoc()) {
            echo "<li data-filter='.filter-$categoryRow[classname]'>$categoryRow[categoryname]</li>";
          }
          ?>
        </ul>

        <div class="row portfolio-container" data-aos="fade-up">


          <?php
          $productResult = $client->getAllProducts();

          while ($productRow = $productResult->fetch_assoc()) {
            $encproductid = base64_encode($productRow["productid"]);
            $productImage = $client->getProductImage($productRow["productid"]);

            if($productImage == "default"){
              $productImage = "img/productsimages/dummy.jpg";
            }
            
            /// echo $productImage;

            echo "<div class='col-lg-4 col-md-6 portfolio-item filter-$productRow[classname]'>
              <div class='portfolio-img'><img src='admin/$productImage' class='img-fluid' alt=''></div>
              <div class='portfolio-info'>
                <h4>$productRow[productname] Rs. $productRow[price]</h4>
                <p>$productRow[categoryname]</p>
                <a href='admin/$productImage' data-gallery='portfolioGallery' class='portfolio-lightbox preview-link' title='$productRow[productname] from $productRow[categoryname] price $productRow[price]'><i class='bx bx-plus'></i></a>
                <a href='portfolio-details.php?productid=$encproductid' class='details-link' title='More Details'><i class='bx bx-link'></i></a>
              </div>
            </div>";
          }
          ?>
        </div>

      </div>
    </section><!-- End Portfolio Section -->


    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>F.A.Q</h2>
          <p>Frequently Asked Questions</p>
        </div>

        <ul class="faq-list">

          <?php
          $faqResult = $client->getFAQ();

          while ($faqRow = $faqResult->fetch_assoc()) {
            echo "<li>
                <div data-bs-toggle='collapse' class='collapsed question' href='#faq$faqRow[faqid]'>$faqRow[question] <i class='bi bi-chevron-down icon-show'></i><i class='bi bi-chevron-up icon-close'></i></div>
                <div id='faq$faqRow[faqid]' class='collapse' data-bs-parent='.faq-list'>
                  <p>
                    $faqRow[answer]
                  </p>
                </div>
              </li>";
          }
          ?>

        </ul>
      </div>
    </section><!-- End F.A.Q Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Team</h2>
          <p>Our Hardworking Team</p>
        </div>

        <div class="row">

          <?php
          $teamResult = $client->getTeam();

          while ($teamRow = $teamResult->fetch_assoc()) {
            echo "<div class='col-lg-3 col-md-6 d-flex align-items-stretch'>
            <div class='member' data-aos='fade-up'>
              <div class='member-img'>
                <img src='admin/$teamRow[teamimage]' class='img-fluid' alt=''>
                <div class='social'>";
            if ($teamRow["twitter"] != "") {
              echo "<a href='$teamRow[twitter]'><i class='bi bi-twitter'></i></a>";
            }
            if ($teamRow["facebook"] != "") {
              echo "<a href='$teamRow[facebook]'><i class='bi bi-facebook'></i></a>";
            }
            if ($teamRow["instagram"] != "") {
              echo "<a href='$teamRow[instagram]'><i class='bi bi-instagram'></i></a>";
            }
            if ($teamRow["linkedin"] != "") {
              echo "<a href='$teamRow[linkedin]'><i class='bi bi-linkedin'></i></a>";
            }


            echo "</div></div>
              <div class='member-info'>
                <h4>$teamRow[membername]</h4>
                <span>$teamRow[designation]</span>
              </div>
            </div>
          </div>";
          }
          ?>
        </div>
      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="career" class="career">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Career</h2>
          <p>Join Us</p>
        </div>

        <div class="row mt-5">
          <div class="col-lg-12 mt-5 mt-lg-0" data-aos="fade-left">
            <?php
            if (isset($_SESSION["careermsg"])) {
              echo $_SESSION["careermsg"];
              unset($_SESSION["careermsg"]);
            }
            ?>
            <form action="career.php" method="post" role="form" enctype="multipart/form-data">
              <div class="row">
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" required>
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-md-6">
                  <input type="text" name="phone" class="form-control" id="phone" placeholder="Your Phone Number" required pattern="\d{10,15}">
                </div>
                <div class="col-md-6">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>

              <div class="form-group mt-3">
                <input type="text" class="form-control" name="qualification" id="qualification" placeholder="Qualification" required>
              </div>

              <div class="form-group mt-3">
                <input type="text" class="form-control" name="experience" id="experience" placeholder="Experience" required>
              </div>

              <div class="form-group mt-3">
                <input type="file" class="form-control" name="resume" id="resume" placeholder="Select Resume" required accept=".pdf">
              </div>

              <div class="text-center"><button type="submit" class='btn btn-primary mt-3'>Apply Now</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>
        <?php
        $contactResult = $client->getContact();

        while ($contactRow = $contactResult->fetch_assoc()) {
          $contactPerson = $contactRow["contactperson"];
          $address = $contactRow["address"];
          $email1 = $contactRow["email1"];
          $email2 = $contactRow["email2"];
          $phone1 = $contactRow["phone1"];
          $phone2 = $contactRow["phone2"];
          $email1 = $contactRow["email1"];
          $whatsapp = $contactRow["whatsapp"];
        }
        ?>
        <div class="row mt-5">

          <div class="col-lg-4" data-aos="fade-right">
            <div class="info">

              <div class="address mb-5">
                <i class="bi bi-person"></i>
                <h4>Contact Person</h4>
                <p><?php echo $contactPerson; ?></p>
              </div>

              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p><?php echo $address; ?></p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <?php
                if ($email1 !== "") {
                  echo "<p>
                    <a href='mailto:$email1'>$email1</a>
                    </p>";
                }
                if ($email2 !== "") {
                  echo "<p class='mt-3'>
                      <a href='mailto:$email2'>$email2</a>
                    </p>";
                }
                ?>

              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <?php
                if ($phone1 !== "") {
                  echo "<p>
                    <a href='tel:$phone1'>$phone1</a>
                    </p>";
                }
                if ($phone2 !== "") {
                  echo "<p class='mt-3'>
                      <a href='tel:$phone2'>$phone2</a>
                    </p>";
                }
                ?>
              </div>


              <div class="phone">
                <i class="bi bi-whatsapp"></i>
                <h4>Whatsapp:</h4>
                <?php
                if ($whatsapp !== "") {
                  echo "<p>
                    <a href='https://wa.me/$whatsapp?text=Hello,' target='_blank'>$whatsapp</a>
                    </p>";
                }

                ?>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left">
            <?php
            if (isset($_SESSION["msg"])) {
              echo $_SESSION["msg"];
              unset($_SESSION["msg"]);
            }
            ?>
            <form action="contact.php" method="post" role="form" class="php-email-form1">
              <div class="row">
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" required>
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-md-6">
                  <input type="text" name="phone" class="form-control" id="phone" placeholder="Your Phone Number" required pattern="\d{10,15}">
                </div>
                <div class="col-md-6">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>

              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required style="resize: none;"></textarea>
              </div>

              <div class="text-center"><button type="submit" class='btn btn-primary mt-3'>Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

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