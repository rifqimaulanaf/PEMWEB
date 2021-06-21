<?php
if(isset($_POST['fnama']))
{
$fnama = $_POST['fnama'];

echo "<span class='success'>Dengan <b>METODE POST</b></span><br/>";
echo "Nama : ".$fnama;
}
//--------------------------------------------------------------------
if(isset($_GET['fnama']))
{
$fnama = $_GET['fnama'];
echo "Nama : ".$fnama;
}
?>
