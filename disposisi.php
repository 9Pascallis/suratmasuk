<?php
require 'database/db.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Surat Masuk | Disposisi</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/disposisi.css">
<link rel="shortcut icon" href="img/logo.png" />
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


<script>
$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
}); 
</script>
</head>
<body>
<!-- Bootstrap Static Header -->
<div style="background: url(img/bg.jpg)" img src="img/bg.jpg" class="bg-cover text-white">
    <div class="header text-center">
        <br><h4 class="header1 font-weight-bold">DISPOSISI</h4>
    </div>
</div>

<div class="containerbox">
    <div class="table-responsive">
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
              <br><h5 class="header1 font-weight-bold">Diteruskan Kepada Yth:</h5>
            </div>
            <div class="row">
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
            <div class="row">
                        <div class="col-md-3">
                        <h4 class="card-title">Tidak Lanjut</h4>
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
                          <h4 class="card-title">Diketahui</h4>
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

            <div class="col-md-12">
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
            
                        <button class="btn btn-light">Cancel</button>
                          <button type="submit" class="btn btn-primary me-2"> Submit </button>
            </form>
        </div>
    </div>  
</div>   


<div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <form>

                    </form>
                  </div>
                </div>      
              </div>
</body>
</html>