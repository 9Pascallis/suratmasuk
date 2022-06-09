<!DOCTYPE html>
<html lang="en">

<!-- ======= HEAD ======= -->
  <head>
    <title>Tambah | Surat Masuk</title>
      <?php require('../layout/head.php')?>
      <link href="../public/css/tambahsurat.css" rel="stylesheet">
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
                <h2><b>Surat Masuk | Tambah Surat</b></h2>
                <ol>
                  <li><a href="../index.php">Home</a></li>
                  <li><a href="../suratmasuk/index.php">Surat Masuk</a></li>
                  <li>Tambah Surat</a></li>
                </ol>
              </div>
            </div>
          </section>
        <!-- ======= END BREADCRUMBS1 ======= -->

        <!-- ======= CONTAINER ======= -->
          <div class="containerbox">
            <div class="table-responsive">
              <div class="table-wrapper">

                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group row">
                      <label for="colFormLabel" class="col-sm-12 col-form-label">No Agenda Sebelumnya : </label>
                    </div>
                  </div>
                </div>

                <form method="post" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">No Agenda Sekarang</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="no_agenda" id="no_agenda" placeholder="">
                        </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group row">
                      <label for="colFormLabel" class="col-sm-2 col-form-label">No Surat</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="no_surat" id="no_surat" placeholder="">
                        </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group row">
                      <label for="colFormLabel" class="col-sm-4 col-form-label">Tanggal Agenda</label>
                      <div class="col-sm-7">
                        <input type="date" class="form-control" name="tgl_agenda" id="tgl_agenda" placeholder="">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group row">
                      <label for="colFormLabel" class="col-sm-3 col-form-label">Tanggal Surat</label>
                      <div class="col-sm-7">
                        <input type="date" class="form-control" name="tgl_surat" id="tgl_surat" placeholder="">
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group row">
                      <label for="colFormLabel" class="col-sm-2 col-form-label">Asal Surat</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="asal_surat" id="asal_surat" placeholder="">
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group row">
                      <label for="colFormLabel" class="col-sm-2 col-form-label">Perihal</label>
                      <div class="col-sm-9">
                        <textarea
                            class="form-control"
                            id="exampleTextarea1" name="perihal"
                            rows="4"
                          ></textarea>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group row">
                      <label for="colFormLabel" class="col-sm-2 col-form-label">Status</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="status_surat" id="status_surat" placeholder="">
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group row">
                      <label for="colFormLabel" class="col-sm-4 col-form-label" for="inlineFormCustomSelect">Tingkat Keamanan</label>
                      <div class="col-sm-7">
                        <select class="custom-select mr-sm-2" name="tk_keamanan" id="inlineFormCustomSelect">
                          <option selected>-</option>
                          <option value="1">Biasa</option>
                          <option value="2">Penting</option>
                          <option value="3">Segera</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group row">
                      <label for="colFormLabel" class="col-sm-3 col-form-label">Lampiran</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control" name="lampiran" id="colFormLabel" placeholder="">
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group row">
                      <label for="colFormLabel" class="col-sm-2 col-form-label">Dokumen</label>
                      <div class="col-sm-9">
                          <input type="file" class="form-control-file" name="file_pdf" id="colFormLabel">
                      </div>
                    </div>
                  </div>
                </div>
                <br>

                <div class="form-group row">
                  <div class="col-sm-12">
                    <button class="btn btn-primary" name="tambah">Tambah Surat</button>
                  </div>
                </div>
                </form>
              </div>
            </div>  
          </div>  
        <!-- ======= CONTAINER ======= -->  
      </main>
    <!-- ======= MAIN ======= -->
  </body> 
<!-- ======= BODY ======= -->


<!-- ======= FOOTER ======= -->
  <?php require('../layout/footer.php')?>
<!-- ======= END FOOTER ======= -->

</html>


<!-- ======= PHP ======= -->
  <?php
    require '../suratmasuk/function.php';
    //get last row from database
    $mhs = query("SELECT * FROM surat_masuk ORDER BY id DESC LIMIT 1")[0];
    $last_row = $mhs["no_agenda"];

    //cek apakah tombol submit ditekan atau belum
    if (isset($_POST["tambah"])) {

        //cek apaKah data berhasil di tambahkan atau tidak
        if (tambah($_POST) > 0) {
            echo "
                <script>
                    alert('data berhasil ditambah');
                    document.location.href = '../suratmasuk/index.php';
                </script>
                    ";
        } else {
            echo "
                <script>
                    alert('data gagal ditambah!!!');
                    document.location.href = '../suratmasuk/tambahsurat.php'';
                </script>
            ";
        }
    }
  ?>
<!-- ======= END PHP ======= -->