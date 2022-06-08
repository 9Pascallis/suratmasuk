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

  <title>Home | Surat Masuk</title>
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
  <link href="../public/css/indexsuratmasuk.css" rel="stylesheet">
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
          <h2><b>Surat Masuk | Daftar Surat</b></h2>
          <ol>
            <li><a href="../index.php">Home</a></li>
            <li>Surat Masuk</a></li>
          </ol>
        </div>
      </div>
    </section>
    <!-- ======= End breadcrumbs1 ======= -->

    <!-- ======= Inner Page ======= -->
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
                        <th>File</th>
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
</div>   
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