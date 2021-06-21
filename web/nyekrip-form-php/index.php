<!DOCTYPE html>
<html>
  <head>
    <title>LOGIN</title>

	<!-- include css file here-->
   <link rel="stylesheet" href="css/style.css"/>

	<!-- include JavaScript file here-->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/metode.js"></script>

  </head>
  <body>
	<div class="container">
		<div class="main">
	      <form  method="get" action="index.php" id="form">
			<h2>Login</h2><hr/>

			<label>Username :</label>
			<input type="text" name="fnama" id="fnama" />

			<label>Password :</label>
			<input type="password" name="password" id="password" />
			<input type="submit" name="submit" id="submit" value="Submit">
		  </form>
		<?php include "proses.php";?>
		</div>
   </div>

  </body>
</html>
