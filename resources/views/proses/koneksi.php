<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "sispred"; 

$conn=mysqli_connect($server,$username,$password);
mysqli_select_db($conn,$database);

?>
