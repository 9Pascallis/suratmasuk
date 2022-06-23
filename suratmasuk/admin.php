<?php
require '../database/db.php';
session_start();
if (!isset($_SESSION["user"])) {
  echo "<script>alert('silahkan login dahulu');</script>";
  header("Location: login.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<!-- ======= HEAD ======= -->
  <head>
    <title>Surat Masuk | Halaman Admin</title>
      <?php require('../layout/head.php')?>
      <link href="../public/css/indexsuratmasuk.css" rel="stylesheet">
      <script src="public/js/main.js"></script>
      <script scr="public/js/jquery.min.js"></script>
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
                <h2><b>Surat Masuk | Halaman Admin</b></h2>
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
                <div class="position-relative">
                    <div class="position-absolute top-0 start-0">
                      <div class="form-group row">
                          <a href="../suratmasuk/tambahsurat.php" style="display: block"><button type="submit" class="btn btn-primary">Tambah Surat</button></a>
                      </div> 
                    </div>
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
                      <th style="text-align:center;">File</th>
                      <th style="text-align:center;">Disposisi</th>
                      <th style="text-align:center;" width="120px">Actions</th>
                  </tr>
                </thead>
                <tbody id="tampil">
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
                          $file=$data['file_pdf'];
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
                        <?php if ($data['file_pdf'] === null || trim($data['file_pdf']) === "") { ?>
                        <td style="text-align:center;">-</td>
                        <?php } else { ?>
                         <td style="text-align:center;"><a href="<?= "../berkas/" . $data['file_pdf']; ?>" target="_blank">&#x1F4C1;</a></td>
                        <?php } ?>
                        </td>
                        <td style="text-align:center;">
                          <a href="../suratmasuk/cetak_disposisi.php?id=<?=$data['id']?>" target="_blank" class="view"  data-toggle="tooltip"><i class="material-icons">&#xE431;</i></a>
                        </td>
                        <td style="text-align:center;">
                            <a href="../suratmasuk/disposisi.php?id=<?=$data['id']?>" target="_blank" class="view"  data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
                            <a href="../suratmasuk/editsurat.php?id=<?php echo $data['id'];?>" class="edit"  data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a href="../suratmasuk/delete_masuk.php?id=<?php echo $data['id'];?>" class="delete"  data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
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

    <!-- ======= Live Search =======-->
    <script>
      $(document).ready(function(){
        $("#keyword").keyup(function(){
          $.ajax({
            type: 'POST',
            url: 'search.php',
            data: {
              keyword: $(this).val()
            },
            cache: false,
            success: function(data){
              $("#tampil").html(data);
            }
        });
        });
      });
    </script>
  </body>
<!-- ======= END BODY ======= -->

<!-- ======= FOOTER ======= -->
<?php require('../layout/footer.php')?>
<!-- ======= END FOOTER ======= -->

</html>