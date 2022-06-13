<?php
require '../database/db.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<!-- ======= HEAD ======= -->
  <head>
    <title>SURAT MASUK | DISPOSISI</title>
      <?php require('../layout/head.php')?>
      <link href="../public/css/disposisi.css" rel="stylesheet">
      <script src="public/js/main.js"></script>
  </head>
<!-- ======= END HEAD ======= -->


<!-- ======= BODY ======= -->
  <body>
    <!-- ======= HEADER ======= -->
      <?php require('../layout/navbar.php')?>
    <!-- ======= MAIN ======= -->
      <main id="main">
        <!-- ======= BREADCRUMBS1 ======= -->
          <section class="breadcrumbs1">
            <div class="container">

              <div class="d-flex justify-content-between align-items-center">
                <h2><b>SURAT MASUK | DISPOSISI</b></h2>
                <ol>
                  <li><a href="../index.php">Home</a></li>
                  <li>Disposisi</a></li>
                </ol>
              </div>
            </div>
          </section>
        <!-- ======= END BREADCRUMBS1 ======= -->

        <!-- ======= CONTAINER ======= -->
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
                  <br><h5 class="header1 font-weight-bold" style="color:black;">Diteruskan Kepada Yth:</h5><br>
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
              </div><br><br>
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
                  <button class="btn btn-warning"style="color:#fff" onclick="openDialog()"><a href="../suratmasuk/kepala.php"style="color:white;">Cancel</a></button>
                  <script>
                    function openDialog() {
                      let customMsg = "CANCEL DISPOSISI";
                      if (confirm(customMsg)) {
                        console.log("User clicked YES");
                      } else {
                        console.log("User Clicked NO");
                      }
                    }
                  </script>
                  <button type="submit" class="btn btn-primary me-2"> Disposisi  </button>
                </div>
              </form>
              </div>
            </div>  
          </div>   
        <!-- ======= END CONTAINER ======= -->
      </main>
    <!-- ======= END MAIN ======= -->
  </body>
<!-- ======= END BODY ======= -->


<!-- ======= FOOTER ======= -->
<?php require('../layout/footer.php')?>
<!-- ======= END FOOTER ======= -->

</html>