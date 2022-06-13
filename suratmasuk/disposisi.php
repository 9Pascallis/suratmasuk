<?php
session_start();
// require '../suratmasuk/function.php';
if (isset($_GET['id'])) {
  $id_srt  = $_GET['id'];
} else {
  die("Error. No ID Selected!");
}
include("../suratmasuk/function.php");

$suratmasuk = mysqli_query($conn, "SELECT * FROM surat_masuk WHERE id ='$id_srt'");
$ambil_data = mysqli_fetch_array($suratmasuk);

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
              <form action="" method="post">
                <div class="row">
                    <div class="col-sm-12">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">No Agenda</label>
                            <label for="colFormLabel" class="col-sm-1 col-form-label">:<?= $ambil_data['no_agenda'] ?></label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">TIngkat Keamanan</label>
                            <label for="colFormLabel" class="col-sm-1 col-form-label">:<?= $ambil_data['tk_keamanan'] ?></label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Tanggal Penerimaan</label>
                            <label for="colFormLabel" class="col-sm-1 col-form-label">:<?= $ambil_data['tgl_agenda'] ?></label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Nomor Surat</label>
                            <label for="colFormLabel" class="col-sm-1 col-form-label">:<?= $ambil_data['no_surat'] ?></label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Tanggal Surat</label>
                            <label for="colFormLabel" class="col-sm-1 col-form-label">:<?= $ambil_data['tgl_surat'] ?></label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Asal Surat</label>
                            <label for="colFormLabel" class="col-sm-1 col-form-label">:<?= $ambil_data['asal_surat'] ?></label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Perihal</label>
                            <label for="colFormLabel" class="col-sm-1 col-form-label">:<?= $ambil_data['perihal'] ?><label>
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
                                  <input type="checkbox" class="form-check-input" value="Kasubagtu" name="diteruskan[]" /> Kasubag tata usaha </label>
                              </div>
                  </div>
                  <div class="col-sm-2">
                              <div class="form-check form-check-primary">
                                <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input" name="diteruskan[]" value="koorbiddatin" /> KoorBid Datin </label>
                              </div>
                  </div>
                  <div class="col-sm-2">
                              <div class="form-check form-check-primary">
                                <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input" name="diteruskan[]" value="koorbidobservasi" /> KoorBid Observasi </label>
                              </div>
                  </div>
                  <div class="col-sm-2">
                              <div class="form-check form-check-primary">
                                <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input" name="diteruskan[]" value="pkk"/> PPK </label>
                              </div>
                  </div>
                  <div class="col-sm-2">
                              <div class="form-check form-check-primary">
                                <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input" name="diteruskan[]" value="lainnya"/> Lainnya </label>
                              </div>
                  </div>
                  <div class="col-sm-1"></div>
              </div><br><br>
              <div class="row" style="color:black;">
                <div class="col-md-3">
                  <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" name ="pilihan[]" value="TL"/><h5 class="card-title"><b>Tindak Lanjut</b></h5></label>
                  </div>
                  <p class="card-description"> Masukkan yang ingin dicentang </p>
                    <div class="form-group">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" name="opsi[]" value="HaMewakil" /> Harap Mewakili </label>
                      </div>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" name="opsi[]" value="HaMeng"/> Hadir Menghadiri </label>
                      </div>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" name="opsi[]" value="SegDitin" /> Segera DitindakLanjuti </label>
                      </div>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" name="opsi[]" value="saran"/> Mohon Tanggapan/saran/masukan </label>
                      </div>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" name="opsi[]" value="fasilitas" /> Fasilitasi sesuai Ketentuan Berlaku </label>
                      </div>
                    </div>
                </div>
                <div class="col-md-3">
                  <h4 class="card-title"></h4>
                  <p class="card-description"><br><br></p>
                  <div class="form-group">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="opsi[]" value="dikonsul"/> Dikonsultasikan dengan </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="opsi[]" value="dibuat"/> Dibuat Surat Jawaban </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="opsi[]" value="bahanmonitoring"/> Bahan Monitoring </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="opsi[]" value="BSE"/> Buat Surat Edaran </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="opsi[]" value="UDST"/> Untuk Dibuat Surat Tugas </label>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" name="pilihan[]" value="diket"/><h5 class="card-title"><b>Diketahui</b></h5></label>
                  </div>
                  <p class="card-description"> Masukkan yang ingin dicentang </p>
                  <div class="form-group">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="opsi[]" value="diteruskan"/> Untuk Diteruskan </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="opsi[]" value="diselesaikan"/> Untuk diselesaikan </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="opsi[]" value="dipelajari"/> Untuk dipelajari </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="opsi[]" value="diket"/> Untuk diketahui </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="opsi[]" value="direkap"/> Untuk direkap </label>
                    </div>
                </div>
                </div>
                <div class="col-md-3">
                  <h4 class="card-title"></h4>
                  <p class="card-description"><br><br></p>
                  <div class="form-group">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="opsi[]" /> Untuk dimonitor </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="opsi[]" /> Untuk dijadikan bahan masukan </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="opsi[]"/> Untuk didiskusikan dengan </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="opsi[]"/> Untuk dikoordinasikan dengan </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="opsi[]"/> Untuk diarsipkan </label>
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
                      rows="5" name="catatan"
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
                  <button type="submit" name="kirim" class="btn btn-primary me-2"> Disposisi  </button>
                </div>
              </form>
              <?php
        if (isset($_POST['kirim'])) {
          $id_dis  = $_GET['id'];
          $diteruskan = implode(",", $_POST['diteruskan']);
          $pilihan = implode(",", $_POST['pilihan']);
          $opsi = implode(",", $_POST['opsi']);
          $catatan = $_POST['catatan'];
  
          $query = ("update surat_masuk set diteruskan='$diteruskan', pilihan='$pilihan', opsi='$opsi', catatan='$catatan' where id='$id_dis'");
          mysqli_query($conn, $query);
          // echo "<pre>";
          // print_r($query);
          // echo "</pre>";
          if ($query) {
            echo "<script>alert( 'disposisi berhasil diinput!' );</script>";
            echo "<script>location = 'index.php';</script>";
           } 
        }
       ?>
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