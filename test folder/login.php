<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>
    <body>
      <center><?php
        include('inc.php');
       ?></center>
    	<br/>
    	<br/>
    	<center><h2>Login</h2></center>
    	<br/>
    	<div class="login">
    	<br/>
      <form action="login1.php" method="post">
        <div>
        <center><label>Username:</label></center><!--menampilkan username pada form awal-->
          <center><input type="text" name="username" id="username"required /></center>
        </div>
        <div>
        <center><label>Email:</label></center><!--menampilkan email pada form awal-->
          <center><input type="Email" name="Email" id="Email"required /></center>
        </div>
        <div>
          <center><label>Password:</label></center>
          <center><input type="password" name="password" id="password" required/></center><!--mengidentifikasi password pada form awal-->
        </div>
        <div>
          <center ><input type="submit" value="Login" class="tombol"></center>
        </div>
      </form>

    	</div>
    </body>
  </body>
</html>
