<?php
$dbhost= "localhost:3310";
$dbuser= "root";
$dbpass= "";
$dbname= "historias_terror";
$conn= mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if(!$conn)
{
    die("no hay conexion: ".mysqli_connect_error());
}
$nombre = $_POST["nombre"];
$clave = $_POST["clave"];
$query = mysqli_query($conn, "SELECT * FROM usario WHERE nombre = '".$nombre."' and clave = '".$clave."'");
$nr = mysqli_num_rows($query);
if($nr == 1)
{
    header("location: ../html/blog.html");
}
else if($nr == 0)
{
    echo "acceso denegado";
}
?>