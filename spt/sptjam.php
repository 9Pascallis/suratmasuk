<!DOCTYPE html>
<html lang="en">

<!--HEAD-->
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SPT Jam | Tata Usaha BMKG</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../public/img/logo.png" rel="icon">
  <link href="../public/img/logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- vendors CSS Files -->
  <link href="../public/vendors/aos/aos.css" rel="stylesheet">
  <link href="../public/vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../public/vendors/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../public/vendors/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../public/vendors/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../public/vendors/remixicon/remixicon.css" rel="stylesheet">
  <link href="../public/vendors/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../public/css/sptjam.css" rel="stylesheet">
</head>
<!--END HEAD-->



<!--BODY-->
<body>
  <!-- ======= Header1 ======= -->
  <header id="header1" class="fixed-top header1-inner-pages">
    <div class="container d-flex align-items-center justify-content-lg-between">
      <h1 class="logo me-auto me-lg-0"><a href="../index.php"><img src="../public/img/logo.png" style="width:40px;height:40px;"> BMKG <span>JUANDA</span></a></h1>
        <nav id="navbar1" class="navbar1 order-last order-lg-0">
          <ul>
            <li><a class="nav-link" href="../index.php">Home</a></li>
            <li class="dropdown"><a href="#"><span>Surat</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href="../login.php">Surat Masuk</a></li>
                <li><a href="../login.php">Surat Keluar</a></li>
              </ul>
            <li class="dropdown"><a href="#"><span>SPT</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href="sptjam.php">SPT Jam</a></li>
                <li><a href="sptharian.php">SPT Harian</a></li>
              </ul>
            </li>
            <li><a class="nav-link" href="https://juanda.jatim.bmkg.go.id/tata-usaha/usulan/login.php">Usulan</a></li>
            <li><a class="nav-link scrollto" href="https://juanda.jatim.bmkg.go.id/tata-usaha/cuti/index.php">Pengajuan Cuti</a></li>
            <li><a class="nav-link scrollto" href="https://docs.google.com/forms/d/1FFw69b9mUdI0VTd5VBa_yvCi5DoXNtH66P3r12tjrXE/viewform?edit_requested=true">IP ASN</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
    </div>
  </header>
  <!-- ======= End Header ======= -->



  <!-- ======= Main ======= -->
  <main id="main">
    <!-- ======= breadcrumbs1 ======= -->
    <section class="breadcrumbs1">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2><b>Tata Usaha | SPT Jam</b></h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>SPT Jam</li>
          </ol>
        </div>
      </div>
    </section>
    <!-- ======= End breadcrumbs1 ======= -->


    <!-- ======= Inner Page ======= -->
    <section class="inner-page">
      <div class="container">

        <br><br>
        <div style="text-align:center" >
          <div class="input-field-border-bottom" style="text-align:left" >
          <br>
          <h3 style="text-align:center"><b> INPUT SPT UNTUK KEGIATAN JAM</b></h3>
          <br><br>
            <label for="text">Nama Lengkap</label>
            <input type="text" placeholder="Masukkan nama lengkap" />
            <label for="message">Lokasi</label>
            <input type="text" placeholder="Masukkan Lokasi" />
            <div class="row">
              <div class="col-sm-4">
                  <div class="form-group row col-sm-12">
                      <label for="colFormLabel" class="col-sm-12 col-form-label">Tanggal</label>
                      <div class="col-sm-12">
                      <input type="text1" placeholder="Masukkan Tanggal">
                      </div>
                  </div>
              </div>
              <div class="col-sm-4">
                  <div class="form-group row col-sm-12">
                      <label for="colFormLabel" class="col-sm-12 col-form-label">Bulan</label>
                      <div class="col-sm-12">
                      <input type="text1" placeholder="Masukkan Bulan">
                      </div>
                  </div>
              </div>
              <div class="col-sm-4">
                  <div class="form-group row col-sm-12">
                      <label for="colFormLabel" class="col-sm-12 col-form-label">Nomor Bulan</label>
                      <div class="col-sm-12">
                      <input type="text1" placeholder="Masukkan Nomor Bulan">
                      </div>
                  </div>
              </div>
            </div>
            <label for="text">Durasi</label>
            <input type="text" placeholder="Ex: 1 Hari" />
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-12 col-form-label">Tanggal Berlangsung</label>
                        <div class="col-sm-12">
                        <input type="date" placeholder="">
                        </div>
                    </div>
                </div>
            </div>
            <label for="message">Tugas</label>
            <input type="text" placeholder="Ex: Mengikuti Pelatihan Teknisi" />
            <label for="text">Nama Pembuat SPT</label>
            <input type="text" placeholder="Masukkan Nama Lengkap Pembuat" />
            <label class="form-check-label">
            <input type="checkbox" class="form-check-input" /> Menggunakan SPPD </label>
            <br><br>
            <div style="text-align:right;">
              <button class="btn btn-warning"style="color:#fff">Cancel</button>
              <button type="submit" class="btn btn-primary me-2"> Submit </button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ======= End Inner Page ======= -->
  </main>
  <!-- ======= End Main ======= -->



  <!-- ======= Footer1 ======= -->
  <footer id="footer1">
    <div class="container">
      <div class="copyright1">
        &copy; Copyright <strong><span>2022 BMKG Juanda</span></strong>. All Rights Reserved.
      </div>
    </div>
  </footer>
  <!-- ======= End Footer1 ======= -->




  <!-- vendors JS Files -->
  <script src="public/vendors/purecounter/purecounter.js"></script>
  <script src="public/vendors/aos/aos.js"></script>
  <script src="public/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="public/vendors/glightbox/js/glightbox.min.js"></script>
  <script src="public/vendors/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="public/vendors/swiper/swiper-bundle.min.js"></script>
  <script src="public/vendors/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="public/js/main.js"></script>

</body>
<!--END BODY-->
</html>