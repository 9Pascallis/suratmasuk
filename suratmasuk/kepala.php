<?php
require '../database/db.php';
session_start();
?>

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
                  <li><a href="../suratmasuk/kepala.php">Surat Masuk</a></li>
                  <li>Tambah Surat</a></li>
                </ol>
              </div>
            </div>
          </section>
        <!-- ======= END BREADCRUMBS1 ======= -->

        <!-- ======= CONTAINER ======= -->
          <div class="containerbox">
            <div class="table-responsive">
              <h3><p class="text-center"><b>Bulan Maret 2022</b></p></h3>
              <br><br>
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
                          <th>Hasil</th>
                          <th width="120px">Disposisi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        $dataPerHal=30;
                        $banyakData=mysqli_num_rows(mysqli_query($conn,"SELECT * FROM surat_masuk"));
                        $banyakHal=ceil($banyakData/$dataPerHal);
                            if(isset($_GET['halaman'])){
                                $halAktif=$_GET['halaman'];
                            }else{
                                $halAktif=1;
                            }
                        $dataawal=($halAktif*$dataPerHal)-$dataPerHal;
                          
                        // <<<<<<<<<<<<<<<<<<<<<<<SEARCH>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
                        if(isset($_POST['cari'])){
                            $keyword = $_POST['keyword'];
                            $tampil = mysqli_query($conn,"SELECT*FROM surat_masuk WHERE no_agenda LIKE'%$keyword' OR
                            tk_keamanan LIKE '%$keyword' OR
                            tgl_agenda LIKE '%$keyword' OR
                            tgl_surat LIKE '%$keyword%' OR
                            asal_surat LIKE '%$keyword' 
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
                              <a href="../suratmasuk/disposisi.php" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
                          </td>
                          <td>
                          <a href="../suratmasuk/disposisi.php" class="view" title="Read" data-toggle="tooltip"><i class="material-icons">&#xE431;</i></a>
                              <a href="../suratmasuk/editsurat.php?id=<?php echo $data['id'];?>" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                              <a href="../suratmasuk/delete_masuk.php?id=<?php echo $data['id'];?>" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
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
                    
                      <?php for($i=1; $i<=$banyakHal; $i++){
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