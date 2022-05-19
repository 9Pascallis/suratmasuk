<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Login | Tata Usaha BMKG</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="img/logo.png" rel="icon">
  <link href="img/logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="vendors/aos/aos.css" rel="stylesheet">
  <link href="vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendors/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="vendors/boxicons/css/boxicons.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Gp - v4.7.0
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">
      <h1 class="logo me-auto me-lg-0"><a href=""><img src="img/logo.png" style="width:40px;height:40px;"> BMKG <span>JUANDA</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-12 col-lg-6">
          <h1>TATA USAHA<span> BMKG JUANDA</span> </h1>
          <h2>SILAKAN LOGIN</h2>
        </div>
        </div>
          <form action="proses-login.php" method="POST" class="login-validation" novalidate="">

          <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                <div class="form-group col-md-12">
                    <label for="text"></label>
                    <input  type="text" class="form-control" name="username" placeholder="Username" required data-eye>
                    <div class="invalid-feedback">
                      Email is invalid
                    </div>
                  </div>
                  <div class="form-group col-md-12">
                    <label for="password"></label>
                    <input  type="password" class="form-control"  name="password" placeholder="Password" required data-eye>
                      <div class="invalid-feedback">
                        Password is required
                      </div>
                  </div>
                  <br>
                  <div class="form-group col-md-12">
                    <button type="submit" name="login" class="btn btn-primary btn-block">
                        <a href="home.php">Login Akun</a>
                    </button>
                  </div>
                </div>
                <div class="col-sm-4"></div>
            </div>

                  
            </form>
      </div>
  </section><!-- End Hero -->
  

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="vendors/purecounter/purecounter.js"></script>
  <script src="vendors/aos/aos.js"></script>
  <script src="vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendors/glightbox/js/glightbox.min.js"></script>
  <script src="vendors/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="vendors/swiper/swiper-bundle.min.js"></script>
  <script src="vendors/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="js/main.js"></script>

</body>

</html>