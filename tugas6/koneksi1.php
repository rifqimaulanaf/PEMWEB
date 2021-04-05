<?php
$servername = "localhost";
$database = "mydb1";
$username = "root";
$password = "";
// Create connection
$connect = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

?>
