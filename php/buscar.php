<?php
$conn=mysqli_connect('localhost:3310', 'root', '', 'historias_terror');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  type="text/css" media="screen" href="../css/estilos2.css">
    <script src="main.js"></script>
</head>
<body>
    <center>
        <table>
            <form name="buscador" method="post">
                <thead>
                    <tr><td><h1>busca historias</h1></td></tr>
                    <tr><td><img src="../img/busqueda.jpg" alt=""></td></tr>
                </thead>
                <tr><td><h3>buscar por nombre de la historal</h3></td></tr>
                <tr><td><input type="text" name="N_historia" placeholder="los acendidos" required></td></tr>
                <tr><td><input type="submit" value="buscar" name="buscar"></td></tr>
            </form>
        </table>
        <br>
        <table>
            <thead class="cabeza">
                <tr>
                    <td><h3>nombre del publicante</h3></td>
                    <td><h3>nombre de la historia</h3></td>
                    <td><h3>historia</h3></td>
                </tr>
            </thead>
            <?php
            if(isset($_POST['buscar'])){
                $N_historia=$_POST['N_historia'];
                $sql="SELECT * FROM historias WHERE N_historia='$N_historia'";
                $result=mysqli_query($conn,$sql);
                while($mostrar=mysqli_fetch_array($result))
                {
                    ?>
                    <tr>
                        <td><?php echo $mostrar['N_publicasion']?></td>
                        <td><?php echo $mostrar['N_historia']?></td>
                        <td><?php echo $mostrar['historia']?></td>
                    </tr>
                    <?php
                }
            }
            ?>
        </table>
        <br>
        <button class="boton"><a href="../html/blog.html">regresion</a></button>
    </center>
</body>
</html>