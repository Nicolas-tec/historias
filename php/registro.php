<?php
include_once('db.php');
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$edad = $_POST['edad'];
$clave = $_POST['clave'];
$conn=conn();
$sql="INSERT INTO usario (nombre, correo, edad, clave)
VALUES ('$nombre','$correo','$edad','$clave')";
$resul = mysqli_query($conn, $sql)or trigger_error("Query Failed! SQL- Error:".mysqli_error($conn),E_USER_ERROR);
echo "$sql";
header("location: ../html/registro.html");
?>