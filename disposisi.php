<?php
require 'database/db.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Tambah Surat Masuk</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/tambah.css">
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
        <br><h4 class="header1 font-weight-bold">Disposisi</h4>
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
            <form>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">No Agenda Sekarang</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" id="colFormLabel" placeholder="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">No Surat</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" id="colFormLabel" placeholder="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-4 col-form-label">Tanggal Agenda</label>
                        <div class="col-sm-7">
                        <input type="date" class="form-control" id="colFormLabel" placeholder="">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-3 col-form-label">Tanggal Surat</label>
                        <div class="col-sm-7">
                        <input type="date" class="form-control" id="colFormLabel" placeholder="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">Asal Surat</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" id="colFormLabel" placeholder="">
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
                            id="exampleTextarea1"
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
                        <input type="text" class="form-control" id="colFormLabel" placeholder="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-4 col-form-label" for="inlineFormCustomSelect">Tingkat Keamanan</label>
                        <div class="col-sm-7">
                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
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
                        <input type="text" class="form-control" id="colFormLabel" placeholder="">
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
                            <input type="file" class="custom-file-input" id="inputGroupFile01">
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                        
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="form-group row">
                <div class="col-sm-12">
                <button type="submit" class="btn btn-primary">Tambah Surat</button>
                </div>
            </div>
            </form>
        </div>
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
            <form>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">No Agenda Sekarang</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" id="colFormLabel" placeholder="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">No Surat</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" id="colFormLabel" placeholder="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-4 col-form-label">Tanggal Agenda</label>
                        <div class="col-sm-7">
                        <input type="date" class="form-control" id="colFormLabel" placeholder="">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-3 col-form-label">Tanggal Surat</label>
                        <div class="col-sm-7">
                        <input type="date" class="form-control" id="colFormLabel" placeholder="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">Asal Surat</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" id="colFormLabel" placeholder="">
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
                            id="exampleTextarea1"
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
                        <input type="text" class="form-control" id="colFormLabel" placeholder="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-4 col-form-label" for="inlineFormCustomSelect">Tingkat Keamanan</label>
                        <div class="col-sm-7">
                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
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
                        <input type="text" class="form-control" id="colFormLabel" placeholder="">
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
                            <input type="file" class="custom-file-input" id="inputGroupFile01">
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                        
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="form-group row">
                <div class="col-sm-12">
                <button type="submit" class="btn btn-primary">Tambah Surat</button>
                </div>
            </div>
            </form>
        </div>
    </div>  
</div>   
</body>
</html>