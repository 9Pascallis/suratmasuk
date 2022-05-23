<?php 
include "database/db.php";
session_start();

if (isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = mysqli_query($conn,"select * from user where username='$username' and password='$password'");
    if(mysqli_num_rows($query) !== 0){
        $_SESSION["user"] = $query->fetch_assoc();
        header("location:suratmasuk/index.php");

    }else{
        echo '<script>alert("Login Gagal!!!");location.href="login.php"</script>';
    }
    }else{
    header("location:login.php?pesan=gagal");
}

?>
