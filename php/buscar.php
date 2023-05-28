<?php
    $conn=mysqli_connect('localhost', 'root', '', 'historias_terror');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Buscar Historia</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  type="text/css" media="screen" href="../css/estilos3.css">
    <script src="main.js"></script>
</head>
<body>
    <center>
            <table class="buscador">
                <form name="buscador" method="post">
                <thead class="Cabecera">
                    <tr><td><h1>Busca Historias</h1></td></tr>
                    <tr><td><img src="../img/busqueda.jpg" alt=""></td></tr>
                </thead>
                <tr><td><h3>Buscar Historia</h3></td></tr>
                <tr><td><input type="text" name="N_historia" placeholder="Titulo"></td></tr>
                <tr><td><input type="text" name="N_publicasion" placeholder="Autor"></td></tr>
                <tr><td><input type="submit" value="Buscar" name="buscar"></td></tr>
                </form>
            </table>

        <table class="content-table">
                <thead class="cabeza">
                <tr>
                    <td><h3>Nombre Del Publicante</h3></td>
                    <td><h3>Nombre De La Historia</h3></td>
                    <td><h3>Historia</h3></td>
                </tr>
                </thead>
                <tbody class="Resultado">
                    <?php
// Conexión a la base de datos
$conn = mysqli_connect('localhost', 'root', '', 'historias_terror');

// Verificar la conexión
if (!$conn) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
}

// Función para escapar los valores de entrada
function sanitizeInput($input)
{
    global $conn;
    return mysqli_real_escape_string($conn, $input);
}

if (isset($_POST['buscar'])) {
    // Validar y sanitizar los valores de entrada
    $N_historia = isset($_POST['N_historia']) ? sanitizeInput($_POST['N_historia']) : '';
    $N_publicasion = isset($_POST['N_publicasion']) ? sanitizeInput($_POST['N_publicasion']) : '';

    if (empty($N_historia) && empty($N_publicasion)) {
        // Si los campos están vacíos
        echo "<script language='JavaScript'>
        alert('Por favor ingrese el título de la historia o el nombre del autor');
        location.assign('buscar2.php');
        </script>";
    } else {
        $sql = "SELECT * FROM historias WHERE 1=1";
        $params = array();

        if (!empty($N_historia)) {
            $sql .= " AND N_historia LIKE ?";
            $params[] = "%" . $N_historia . "%";
        }

        if (!empty($N_publicasion)) {
            $sql .= " AND N_publicasion LIKE ?";
            $params[] = "%" . $N_publicasion . "%";
        }

        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, str_repeat('s', count($params)), ...$params);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        while ($mostrar = mysqli_fetch_assoc($result)) {
            // Mostrar los resultados
            echo "<tr>";
            echo "<td>" . htmlspecialchars($mostrar['N_publicasion']) . "</td>";
            echo "<td>" . htmlspecialchars($mostrar['N_historia']) . "</td>";
            echo "<td>" . htmlspecialchars($mostrar['historia']) . "</td>";
            echo "</tr>";
        }
    }
} else {
    // Mostrar todas las historias
    $sql = "SELECT * FROM historias";
    $result = mysqli_query($conn, $sql);

    while ($mostrar = mysqli_fetch_assoc($result)) {
        // Mostrar los resultados
        echo "<tr>";
        echo "<td>" . htmlspecialchars($mostrar['N_publicasion']) . "</td>";
        echo "<td>" . htmlspecialchars($mostrar['N_historia']) . "</td>";
        echo "<td>" . htmlspecialchars($mostrar['historia']) . "</td>";
        echo "</tr>";
    }
}

// Cerrar la conexión a la base de datos
mysqli_close($conn);
?>

                </tbody>
            </table>

            <br>
            <button class="boton"><a href="../html/blog.html">Regresar</a></button>

    </center>

</body>
</html>