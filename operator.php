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
                <div class="row">
                    <div class="col-sm-8"><h2>Bulan Maret 2022</h2></div>
                    <div class="col-sm-4">
                        <div class="search-box">
                            <i class="material-icons">&#xE8B6;</i>
                            <input type="text" class="form-control" placeholder="Search&hellip;">
                        </div>
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
                    $no=1;
                    $tampil = mysqli_query($conn,"SELECT * FROM surat_masuk");
                    while($data = mysqli_fetch_array($tampil)){

                ?>
                    <tr>
                        <td><?=$data['id']?></td>
                        <td><?=$data['no_agenda']?></td>
                        <td><?=$data['tgl_agenda']?></td>
                        <td><?=$data['tk_keamanan']?></td>
                        <td><?=$data['tgl_surat']?></td>
                        <td><?=$data['no_surat']?></td>
                        <td><?=$data['asal_surat']?></td>
                        <td><?=$data['perihal']?></td>
                        <td><?=$data['lampiran']?></td>
                        <td>
                            <a href="#" class="view" title="Read" data-toggle="tooltip"><i class="material-icons">&#xE431;</i></a>
                        </td>
                        <td>
                            <a href="#" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
                            <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
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
            
        </div>
    </div>  
</div>   
</body>
</html>