<?php
session_start();
include_once('database/db.php');

if (isset($_SESSION['user_logged'])) {
	header('location: ../pages-admin/dashboard.php');
}
 
if (isset($_POST['login'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	$cek = mysqli_query($conn, "SELECT * FROM user WHERE 
								  username = '" . $username . "' 
								  AND password = '" . $password . "'");
	if (mysqli_num_rows($cek) > 0) {
		$user = mysqli_fetch_assoc($cek);

		$_SESSION['user_logged'] = true;
		$_SESSION['user_id'] = $user['Id'];
		$_SESSION['user_name'] = $user['username'];
		$_SESSION['user_role'] = $user['role'];

		if ($user['role'] == 'user') {
			header('location:user/operator.html');
        } elseif ($user['role'] == 'tu') {
			header('location:tu/operator.html');
		} elseif ($user['role'] == 'admin') {
			header('location:admin/operator.html');
		}		
	} else {
		echo '<script>alert("Username atau Password salah!");location.href="login.php"</script>';
	}
}
?>