<?php
session_start();
if(!isset($_SESSION['Usuario'])){
    echo'
    <script>
    alert("Debes iniciar sesion");
    window.location = "index.php";
    </script> 
    ';
   
    session_destroy();
    die();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bienvenidoS</title>
</head>
<body>
    <h1> bienvenidos</h1>
    <a href="cerrar_sesion.php">Cerrar session</a>
</body>
</html>