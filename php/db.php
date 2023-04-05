<?php
function conn(){
$dbhost = "localhost:3310";
$dbuser = "root";
$dbpass = "";
$dbname = "historias_terror";
$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
return $conn;
}
?>