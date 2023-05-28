<?php
include_once('db.php');
$clave = $_POST['clave'];
$N_publicasion = $_POST['N_publicasion'];
$N_historia = $_POST['N_historia'];
$historia = $_POST['historia'];
$conn=conn();
$sql = "INSERT INTO historias (id_histroria, clave, N_publicasion, N_historia, historia)
VALUES ('', '$clave', '$N_publicasion', '$N_historia', '$historia')";
$resul = mysqli_query($conn, $sql)or trigger_error("Query Failed! SQL- Error:".mysqli_error($conn),E_USER_ERROR);
echo "$sql";
header("location: ../html/historias.html");
?>