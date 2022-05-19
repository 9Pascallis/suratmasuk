<?php
require 'function.php';

$id = $_GET["id"];
if (hapus($id) > 0) {
    echo "
            <script>
                alert('data berhasil dihapus');
                document.location.href = 'operator.php';
            </script>
                ";
} else {
    echo "
            <script>
                alert('data gagal ditambah!!!!');
                document.location.href = 'operator.php';
            </script>
                ";
}

// if(isset($_GET['id'])){
//     $hapus = mysqli_query($conn, "DELETE FROM surat_masuk WHERE id = '".$_GET['id']."'");
// }


// echo " <script>alert('Data berhasil dihapus!');</script>";
// echo " <script>location='operator.php';</script>";

?>