<?php
require '../database/db.php';
session_start();
if (!isset($_SESSION["login"])) {
  echo "<script>alert('silahkan login dahulu');</script>";
  header("Location: login.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<!-- ======= HEAD ======= -->
  <head>
    <title>Surat Masuk | Halaman Disposisi</title>
      <?php require('../layout/head.php')?>
      <link href="../public/css/kepala.css" rel="stylesheet">
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
                <h2><b>Surat Masuk | Halaman Disposisi</b></h2>
                <ol>
                  <li><a href="../index.php">Home</a></li>
                  <li>Halaman Disposisi</a></li>
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
              <h3><p class="text-center"><b>Bulan Maret 2022</b></p></h3>
              <div class="table-wrapper">
                <br>
                <div class="row">
                  <div class="position-relative">
                    <div class="position-absolute top-0 end-0">
                      <div class="input-group">
                        <input type="text" name="keyword" size="40" placeholder="Masukkan kata pencarian" autocomplete="off" id="keyword">
                        <p>&ensp;&ensp;</p>
                        <select name="pilihTahun" id="formTahun">
                            <option value=''>Pilih Tahun</option>
                            <?php
                            $sql = "SELECT YEAR(tgl_agenda) FROM `surat_masuk` GROUP BY YEAR(tgl_agenda)";
                            $hasil = mysqli_query($conn, $sql);
                            while ($data = mysqli_fetch_array($hasil)) :
                            ?>
                                <option value="<?= $data[0]; ?>"><?= $data[0]; ?></option>
                            <?php endwhile; ?>
                        </select>
                        <p>&ensp;&ensp;</p>
                        <select name="pilihBulan" id="formBulan" required class="formBulan"></select>
                        <p>&ensp;&ensp;</p>
                        <input type="button" onclick="tableToExcel('testTable', 'Daftar Alat')" value="Export to Excel">
                      </div>
                    </div>
                  </div>
                  <br><br>
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
                          <th>Hasil</th>
                          <th width="120px">Disposisi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        $dataPerHal=70;
                        $banyakData=mysqli_num_rows(mysqli_query($conn,"SELECT * FROM surat_masuk ORDER BY id DESC"));
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
                            ORDER BY id DESC
                            LIMIT $dataawal, $dataPerHal
                            ");
                          }
                          else{
                            $tampil = mysqli_query($conn,"SELECT * FROM surat_masuk ORDER BY id DESC LIMIT $dataawal, $dataPerHal ");
                              }

                        $noUrut = 1;

                        while($data = mysqli_fetch_array($tampil)){

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
                      <?php if ($data['file_pdf'] === null || trim($data['file_pdf']) === "") { ?>
                      <tr style="background-color:#FFC07C;color:#994F01;">
                      <?php } else { ?>
                      <tr><?php } ?>
                          <td><?=$noUrut++?></td>
                          <td><?=$noAgenda?></td>
                          <td><?=$tglAgenda?></td>
                          <td><?=$tk?></td>
                          <td><?=$tglSurat?></td>
                          <td><?=$noSurat?></td>
                          <td><?=$asalSurat?></td>
                          <td><?=$per?></td>
                          <td><?=$lmpr?></td>
                          <td>
                              <a href="#" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
                          </td>
                          <td>
                          <a href="../suratmasuk/disposisi.php?id=<?=$data['id']?>" class="view" title="Read" data-toggle="tooltip"><i class="material-icons">&#xE431;</i></a>
                          <a href="../suratmasuk/editsurat.php?id=<?php echo $data['id'];?>"class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
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