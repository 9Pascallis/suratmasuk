<!DOCTYPE html>
<html lang="en">

<!--HEAD-->
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SPT Harian | Tata Usaha BMKG</title>
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

  <!-- Main CSS File -->
  <link href="../public/css/sptharian.css" rel="stylesheet">
</head>
<!--END HEAD-->



<!--BODY-->
<body>
  <!-- ======= Header1 ======= -->

  <!-- ======= End Header ======= -->



  <!-- ======= Main ======= -->
  <main id="main">
    <!-- ======= breadcrumbs1 ======= -->
    <section class="breadcrumbs1">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2><b>Tata Usaha | SPT Harian</b></h2>
          <ol>
            <li><a href="../index.php">Home</a></li>
            <li><a href="index.php">SPT</a></li>
            <li>SPT Harian</li>
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
          <div class="input-field-border-bottom" style="text-align:left; height:100%;" >
          <br>
          <h3 style="text-align:center"><b> INPUT SPT UNTUK KEGIATAN HARIAN</b></h3>
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
                        <label for="colFormLabel" class="col-sm-12 col-form-label">Tanggal Berangkat</label>
                        <div class="col-sm-12">
                        <input type="date" placeholder="">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-12 col-form-label">Tanggal Kembali</label>
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
              <button class="btn btn-warning"style="color:#fff" onclick="openDialog()"><a href="../index.php"style="color:white;">Cancel</a></button>
              <script>
                function openDialog() {
                  let customMsg = "CANCEL DATA SPT HARIAN";
                  if (confirm(customMsg)) {
                    console.log("User clicked YES");
                  } else {
                    console.log("User Clicked NO");
                  }
                }
              </script>
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