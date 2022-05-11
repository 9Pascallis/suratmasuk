<?php
require 'database/db.php';
session_start();

if(isset($_GET['id'])){
    $hapus = mysqli_query($conn, "DELETE FROM surat_masuk WHERE id = '".$_GET['id']."'");
}


echo " <script>alert('Data berhasil dihapus!');</script>";
echo " <script>location='operator.php';</script>";

?>