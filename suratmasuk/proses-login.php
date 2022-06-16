<?php 
include "../database/db.php";
session_start();

if (isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = mysqli_query($conn,"select * from user where username='$username' and password='$password'");
    $hitung = mysqli_num_rows($query);
    $_SESSION["login"] = true;
    if($hitung > 0){
        //Data ditemukan
        $ambildatarole = mysqli_fetch_array($query);
        $role = $ambildatarole['role'];

        if($role == 'kstu'){
            $_SESSION['log'] = 'Logged';
            $_SESSION['role'] = 'kstu';
            echo "<script type ='text/javascript'>alert('Selamat datang KSTU!');
            location.href=\"kepala.php\"
            ;</script>";
        }else if($role == 'kdat'){
            $_SESSION['log'] = 'Logged';
            $_SESSION['role'] = 'kdat';
            echo "<script type ='text/javascript'>alert('Selamat datang KDAT!');
            location.href=\"kepala.php\"
            ;</script>";
        }else if($role == 'kobs'){
            $_SESSION['log'] = 'Logged';
            $_SESSION['role'] = 'kdat';
            echo "<script type ='text/javascript'>alert('Selamat datang KOBS!');
            location.href=\"kepala.php\"
            ;</script>";
        }else if($role == 'ppk'){
            $_SESSION['log'] = 'Logged';
            $_SESSION['role'] = 'kdat';
            echo "<script type ='text/javascript'>alert('Selamat datang PPK!');
            location.href=\"kepala.php\"
            ;</script>";
        }else if($role == 'admin'){
            $_SESSION['log'] = 'Logged';
            $_SESSION['role'] = 'admin';
            echo "<script type ='text/javascript'>alert('Selamat datang Admin!');
            location.href=\"admin.php\"
            ;</script>";
        }else if($role == 'operator'){
            $_SESSION['log'] = 'Logged';
            $_SESSION['role'] = 'operator';
            echo "<script type ='text/javascript'>alert('Selamat datang Operator!');
            location.href=\"admin.php\"
            ;</script>";
        }else{
            echo "<script type ='text/javascript'>alert('Username atau Password salah!!!');
        location.href=\"login.php\"
        ;</script>";
        }
    }else{

        echo "<script type ='text/javascript'>alert('Username atau Password salah!!!');
        location.href=\"login.php\"
        ;</script>";
    }
    }
    // if(mysqli_num_rows($query) !== 0){
    //     $_SESSION["user"] = $query->fetch_assoc();
    //     header("location:index.php");

    // }else{
    //     echo '<script>alert("LOGIN GAGAL");location.href="login.php"</script>';
    // }
    // }else{
    // header("location:login.php?pesan=gagal");

?>