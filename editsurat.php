<?php
session_start();

require 'function.php';

//ambil data di URL
$id = $_GET["id"];
//query data mahasiswa
$mhs = query("SELECT * FROM surat_masuk WHERE id = $id")[0];


//cek apakah tombol submit ditekan atau belum
if (isset($_POST["edit"])) {
    // var_dump($_POST);
    //cek apaah data berhasil di ubah atau tidak

    if (ubah($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil ubah');
                document.location.href = 'operator.php';
            </script>
                ";
    } else {
        echo "
            <script>
                alert('data gagal ubah!!!');
                document.location.href = 'index.php';
            </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Edit | Surat Masuk</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/edit.css">
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
        <br><h4 class="header1 font-weight-bold">EDIT SURAT MASUK</h4>
    </div>
</div>

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
            <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
            <input type="hidden" name="pdfLama" value="<?= $mhs["file_pdf"]; ?>">
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">No Agenda Sekarang</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" name="no_agenda" id="no_agenda" placeholder=""value="<?= $mhs["no_agenda"]; ?>">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">No Surat</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" name="no_surat" id="no_surat" placeholder=""value="<?= $mhs["no_surat"]; ?>">
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
                        <input type="date" class="form-control" name="tgl_surat" id="tgl_surat" placeholder=""value="<?= $mhs["tgl_surat"]; ?>">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">Asal Surat</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" name="asal_surat" id="asal_surat" placeholder=""value="<?= $mhs["asal_surat"]; ?>">
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
                            rows="4"required><?= $mhs["perihal"];?>
                          </textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" name="status_surat" id="status_surat" placeholder=""value="<?= $mhs["status_surat"]; ?>">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-4 col-form-label" for="inlineFormCustomSelect">Tingkat Keamanan</label>
                        <div class="col-sm-7">
                        <select class="custom-select mr-sm-2" name="tk_keamanan" id="inlineFormCustomSelect"value="<?= $mhs["tk_keamanan"]; ?>">
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
                        <input type="text" class="form-control" name="lampiran" id="colFormLabel" placeholder=""value="<?= $mhs["lampiran"]; ?>">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">Dokumen</label>
                        <div class="col-sm-9">
                        <div class="custom-file">
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            <input type="file" class="custom-file-input" name="file_pdf" id="colFormLabel"value="<?= $mhs["file_pdf"]; ?>">
                        </div>
                        
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="form-group row">
                <div class="col-sm-12">
                <button class="btn btn-primary" name="edit">Edit Surat</button>
                </div>
            </div>
            </form>
        </div>
    </div>  
</div>   
</body>