<?php
require '../database/db.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<!-- ======= HEAD ======= -->
  <head>
    <title>TATA USAHA | SURAT MASUK</title>
      <?php require('../layout/head.php')?>
      <link href="../public/css/indexsuratmasuk.css" rel="stylesheet">
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
                <h2><b>TATA USAHA | SURAT MASUK</b></h2>
                <ol>
                  <li><a href="../index.php">Home</a></li>
                  <li>Surat Masuk</a></li>
                </ol>
              </div>
            </div>
          </section>
        <!-- ======= END BREADCRUMBS1 ======= -->

        <!-- ======= CONTAINER ======= -->
        <div class="fixlogin">
        <a href="proses-logout.php" style="display: block"><button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin Logout ?')">LOGOUT</button></a>
        </div>
          <div class="containerbox">
            <div class="table-responsive">
              <h3><p class="text-center"><b>BULAN MARET 2022</b></p></h3>
              <div class="table-wrapper">
                <br>
                <div class="row">
                  <div class="col-sm-2">
                    <div class="form-group row">
                        <div class="col-sm-9">
                            <a href="../suratmasuk/tambahsurat.php" style="display: block"><button type="submit" class="btn btn-primary">Tambah Surat</button></a>
                        </div>  
                    </div>
                  </div> 
                  <div class="col-sm-6">
                  </div> 
                  <div class="col-sm-4">
                    <form action="" method="post">
                    <div class="input-group">
                      <input type="text" name="keyword" class="form-control" placeholder="Masukan kata kunci pencarian" autocomplete="off" autofocus>
                      <div class="input-group-append"></div>
                          <button type="submit" name="cari" class="btn btn-success pl-4 pr-4">Cari</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <table class="table table-striped table-hover table-bordered">
                <thead>
                  <tr>
                      <th width="10px">No</th>
                      <th width="10px">No Agenda</th>
                      <th width="10px">Tanggal Agenda</th>
                      <th width="10px">Tingkat Keamanan</th>
                      <th width="10px">Tanggal Surat</th>
                      <th width="10px">No Surat</th>
                      <th>Asal Surat</th>
                      <th>Perihal</th>
                      <th>Lampiran</th>
                      <th>Disp</th>
                      <th width="120px">Actions</th>
                      <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                      $dataPerHal=70;
                      $banyakData=mysqli_num_rows(mysqli_query($conn,"SELECT * FROM surat_masuk"));
                      $banyakHal=ceil($banyakData/$dataPerHal);
                          if(isset($_GET['halaman'])){
                              $halAktif=$_GET['halaman'];
                          }else{
                              $halAktif=1;
                          }

                      $dataawal=($halAktif*$dataPerHal)-$dataPerHal;

                      $jumlahLink = 4;
                      if($halAktif > $jumlahLink){
                        $start_number = $halAktif - $jumlahLink;
                      }else{
                        $start_number = 1;
                      }

                      if($halAktif < ($banyakHal - $jumlahLink)){
                        $end_number = $halAktif + $jumlahLink;
                      }else{
                        $end_number = $banyakHal; 
                      }
                      
                      // <<<<<<<<<<<<<<<<<<<<<<<SEARCH>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
                      if(isset($_POST['cari'])){
                          $keyword = $_POST['keyword'];
                          $tampil = mysqli_query($conn,"SELECT*FROM surat_masuk WHERE no_agenda LIKE'%$keyword' OR
                          tk_keamanan LIKE '%$keyword' OR
                          tgl_agenda LIKE '%$keyword' OR
                          tgl_surat LIKE '%$keyword%' OR
                          no_surat like '%$keyword%' OR
                          asal_surat LIKE '%$keyword' OR
                          perihal like '%$keyword'
                          LIMIT $dataawal, $dataPerHal
                          ");
                        }
                        else{
                          $tampil = mysqli_query($conn,"SELECT * FROM surat_masuk LIMIT $dataawal, $dataPerHal ");
                            }

                      while($data = mysqli_fetch_array($tampil)){
                          $idMasuk=$data['id'];
                          $noAgenda=$data['no_agenda'];
                          $tglAgenda=$data['tgl_agenda'];
                          $tk=$data['tk_keamanan'];
                          $tglSurat=$data['tgl_surat'];
                          $noSurat=$data['no_surat'];
                          $asalSurat=$data['asal_surat'];
                          $per=$data['perihal'];
                          $lmpr=$data['lampiran'];
                  ?>
                    <tr>
                        <td><?=$idMasuk?></td>
                        <td><?=$noAgenda?></td>
                        <td><?=$tglAgenda?></td>
                        <td><?=$tk?></td>
                        <td><?=$tglSurat?></td>
                        <td><?=$noSurat?></td>
                        <td><?=$asalSurat?></td>
                        <td><?=$per?></td>
                        <td><?=$lmpr?></td>
                        <td>
                            <a href="../suratmasuk/disposisi.php" class="view" title="Read" data-toggle="tooltip"><i class="material-icons">&#xE431;</i></a>
                        </td>
                        <td>
                            <a href="#" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
                            <a href="../suratmasuk/editsurat.php?id=<?php echo $data['id'];?>" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a href="../suratmasuk/delete_masuk.php?id=<?php echo $data['id'];?>" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                        <td>
                            <div>
                                <span class="indicator online"></span> Online
                            </div>
                            
                            <div>
                                <span class="indicator offline"></span> Offline
                            </div>
                        </td>
                    </tr>
                  <?php
                      };
                  ?>        
                </tbody>
              </table>
              <nav>
                <ul class="pagination justify-content-center">
                  <!-- ============Previous============ -->
                  <?php
                  if($halAktif<=1){
                  ?>
                  <li class="page-item disabled"><a href="?halaman=<?php echo $halAktif-1; ?>" class="page-link">Previous</a></li>
                  <?php
                  }else{?>
                  <li class="page-item"><a href="?halaman=<?php echo $halAktif-1; ?>" class="page-link">Previous</a></li>
                  <?php
                  }
                  ?>
                  <!-- ==============end Previous=============== -->
                
                  <?php for($i=$start_number; $i<=$end_number; $i++){
                  ?>
                  <li class="pge-item"><a href="?halaman=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a></li>
                  <?php
                  }//end for
                  ?>

                  <!-- ============Next============ -->
                  <?php
                  if($halAktif >= $banyakHal){
                  ?>
                  <li class="page-item disabled"><a href="?halaman=<?php echo $halAktif+1; ?>" class="page-link">Next</a></li>
                  <?php
                  }else{?>
                  <li class="page-item"><a href="?halaman=<?php echo $halAktif+1; ?>" class="page-link">Next</a></li>
                  <?php
                  }
                  ?>
                  <!-- ==============end Next=============== -->
                </ul>
              </nav>            
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