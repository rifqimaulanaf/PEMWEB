<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport"content="width=device-width,initial-scale=1">
  <title>WEB PRIBADI</title>
  <link rel="stylesheet" type="text/css"href="css/style.css">
  <link rel="stylesheet" type="text/css"href="css/stylelogin.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
  <div class="topnav" id="myTopnav">
    <a href="index.php" class="active">Home</a>
    <a href="login.php">Login</a>
    <a href="#contact">Contact</a>
    <a href="about.php">About</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
  <i class="fa fa-bars"></i>
  </a>
</div>
</head>
<body>
	<br/>
	<br/>
	<center><h2>Login</h2></center>
	<br/>
	<div class="login">
	<br/>
		<form action="login1.php" method="post" onSubmit="return validasi()">
			<div>
				<label>Username:</label>
				<input type="text" name="username" id="username" />
			</div>
			<div>
				<label>Password:</label>
				<input type="password" name="password" id="password" />
			</div>
			<div>
				<input type="submit" value="Login" class="tombol">
			</div>
		</form>
	</div>
</body>

<script type="text/javascript">
	function validasi() {
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;
		if (username != "" && password!="") {
			return true;
		}else{
			alert('Username dan Password harus di isi !');
			return false;
		}
	}

</script>
</html>
