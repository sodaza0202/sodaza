<?php 

$servername = "localhost";
$username = "root";
$password = "";
$db = "fitwhey";

$conn = new mysqli($servername, $username, $password , $db);
mysqli_set_charset($conn,"utf8");

?>