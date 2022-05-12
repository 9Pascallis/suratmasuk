<?php
require 'database/db.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Surat Masuk</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/operator.css">
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
        <br><h4 class="header1 font-weight-bold">Daftar Surat Masuk BMKG Juanda</h4>
    </div>
</div>

<div class="containerbox">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">	
            <h4><p class="text-center">Bulan Maret 2022</p></h4>
            <br>
                <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <a href="tambahsurat.php" style="display: block"><button type="submit" class="btn btn-primary">Tambah Surat</button></a>
                                    
                                </div>
                            </div>
                         </div> 
                        <div class="col-sm-6">
                            <form action="" method="post">
                            <div class="input-group">
                                <input type="text" name="keyword" class="form-control" placeholder="Masukan kata kunci pencarian" autocomplete="off" autofocus>
                                <div class="input-group-append"></div>
                                    <button type="submit" name="cari" class="btn btn-secondary pl-4 pr-4">Cari</button>
                                </div>
                                </form>
                        </div>
                </div>
            </div>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th width="50px">No</th>
                        <th width="10px">No Agenda</th>
                        <th width="10px">Tanggal Agenda</th>
                        <th width="10px">Tingkat Keamanan</th>
                        <th width="10px">Tanggal Surat</th>
                        <th width="30px">No Surat</th>
                        <th>Asal Surat</th>
                        <th>Perihal</th>
                        <th>Lampiran</th>
                        <th>File</th>
                        <th width="300px">Actions</th>
                        <th width="50px">Status</th>
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
                            <a href="#" class="view" title="Read" data-toggle="tooltip"><i class="material-icons">&#xE431;</i></a>
                        </td>
                        <td>
                            <a href="#" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
                            <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a href="delete_masuk.php?id=<?php echo $data['id'];?>" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
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
</div>   
</body>
</html>