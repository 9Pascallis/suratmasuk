<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="shortcut icon" href="../public/img/logo.png" />
	<title>Login | Surat Masuk</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../public/css/login.css">
</head>

<div class="login-box">
    <img src="../public/img/logo.png" alt="logo" height="70px" width="70px" class="center">
    <br>
  <h2><b>LOGIN</b></h2>
  <h4>SURAT MASUK</h4>
  <form action="proses-login.php" method="POST" class="login-validation" novalidate="">
  <br><br>
  <form>
    <div class="user-box">
      <input type="text" name="username" required="" autocomplete="off">
      <label>Username</label>
    </div>
    <div class="user-box">
      <input type="password" name="password" required="">
      <label>Password</label>
    </div>
    <div class="text-center">
        <button type="submit" name="login" class="btn btn-primary btn-block">Login</button>
    </div>
  </form>
</div>

</body>
</html>