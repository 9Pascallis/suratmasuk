<?php
require '../database/db.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<!--HEAD-->
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tambah | Surat Masuk</title>
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
  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="shortcut icon" href="public/img/logo.png" />
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

  <!-- Main CSS File -->
  <link href="../public/css/tambahsurat.css" rel="stylesheet">
</head>
<!--END HEAD-->

<script>
$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
}); 
</script>

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
                <li><a href="../suratmasuk/login.php">Surat Masuk</a></li>
                <li><a href="../suratmasuk/login.php">Surat Keluar</a></li>
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
          <h2><b>Surat Masuk | Tambah Surat</b></h2>
          <ol>
            <li><a href="../index.php">Home</a></li>
            <li>Tambah Surat</a></li>
          </ol>
        </div>
      </div>
    </section>
    <!-- ======= End breadcrumbs1 ======= -->

    <div class="containerbox">
    <div class="table-responsive">
    <h3><p class="text-center"><b>DISPOSISI</b></p></h3>
        <div class="table-wrapper">
            <form>
            <div class="row">
                <div class="col-sm-12">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">No Agenda</label>
                        <label for="colFormLabel" class="col-sm-1 col-form-label">:</label>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">TIngkat Keamanan</label>
                        <label for="colFormLabel" class="col-sm-1 col-form-label">:</label>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">Tanggal Penerimaan</label>
                        <label for="colFormLabel" class="col-sm-1 col-form-label">:</label>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">Nomor Surat</label>
                        <label for="colFormLabel" class="col-sm-1 col-form-label">:</label>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">Tanggal Surat</label>
                        <label for="colFormLabel" class="col-sm-1 col-form-label">:</label>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">Asal Surat</label>
                        <label for="colFormLabel" class="col-sm-1 col-form-label">:</label>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">Perihal</label>
                        <label for="colFormLabel" class="col-sm-1 col-form-label">:</label>
                </div>
            </div>
            <hr class="new4">
            <div class="header text-center">
              <br><h5 class="header1 font-weight-bold" style="color:black;">Diteruskan Kepada Yth:</h5>
              <br>
            </div>
            <div class="row" style="color:black;">
                <div class="col-sm-1"></div>
                <div class="col-sm-2">
                            <div class="form-check form-check-primary">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input"  /> Kasubag tata usaha </label>
                            </div>
                </div>
                <div class="col-sm-2">
                            <div class="form-check form-check-primary">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input"  /> KoorBid Datin </label>
                            </div>
                </div>
                <div class="col-sm-2">
                            <div class="form-check form-check-primary">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input"  /> KoorBid Observasi </label>
                            </div>
                </div>
                <div class="col-sm-2">
                            <div class="form-check form-check-primary">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input"  /> PPK </label>
                            </div>
                </div>
                <div class="col-sm-2">
                            <div class="form-check form-check-primary">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input"  /> Lainnya </label>
                            </div>
                </div>
                <div class="col-sm-1"></div>
            </div>
            <br><br>
            <div class="row" style="color:black;">
                        <div class="col-md-3">
                        <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" /><h5 class="card-title"><b>Tindak Lanjut</b></h5></label>
                        </div>
                          <p class="card-description"> Masukkan yang ingin dicentang </p>
                          <div class="form-group">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" /> Harap Mewakili </label>
                            </div>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" /> Hadir Menghadiri </label>
                            </div>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" /> Segera DitindakLanjuti </label>
                            </div>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" /> Mohon Tanggapan/saran/masukan </label>
                            </div>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" /> Fasilitasi sesuai Ketentuan Berlaku </label>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <h4 class="card-title"></h4>
                          <p class="card-description"><br><br></p>
                          <div class="form-group">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" /> Dikonsultasikan dengan </label>
                            </div>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" /> Dibuat Surat Jawaban </label>
                            </div>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" /> Bahan Monitoring </label>
                            </div>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" /> Buat Surat Edaran </label>
                            </div>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" /> Untuk Dibuat Surat Tugas </label>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3">
                        <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" /><h5 class="card-title"><b>Diketahui</b></h5></label>
                        </div>
                          <p class="card-description"> Masukkan yang ingin dicentang </p>
                          <div class="form-group">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" /> Untuk Diteruskan </label>
                            </div>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" /> Untuk diselesaikan </label>
                            </div>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" /> Untuk dipelajari </label>
                            </div>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" /> Untuk diketahui </label>
                            </div>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" /> Untuk direkap </label>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <h4 class="card-title"></h4>
                          <p class="card-description"><br><br></p>
                          <div class="form-group">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" /> Untuk dimonitor </label>
                            </div>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" /> Untuk dijadikan bahan masukan </label>
                            </div>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" /> Untuk didiskusikan dengan </label>
                            </div>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" /> Untuk dikoordinasikan dengan </label>
                            </div>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" /> Untuk diarsipkan </label>
                            </div>
                          </div>
                          <br>
                          
                          
                        </div>
                      </div>

                        <div class="col-md-12" style="color:black;">
                          <p class="card-description"> Catatan khusus: </p>
                          <div class="form-group row">
                            <div class="col-sm-12">
                              <textarea
                              class="form-control"
                              id="exampleTextarea1"
                              rows="5"
                            ></textarea>
                            </div>
                          </div>
                        </div>
                        <br>
                      <div style="text-align:right;">
                        <button class="btn btn-light">Cancel</button>
                          <button type="submit" class="btn btn-primary me-2"> Submit </button>
                      </div>
            </form>
        </div>
    </div>  
</div>   

    <!-- ======= Inner Page ======= -->
    
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