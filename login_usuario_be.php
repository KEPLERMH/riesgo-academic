<?php
session_start();
include 'conexion_be.php';
$Correo_Electronico=$_POST['Correo_Electronico'];
$Password=$_POST['Password'];
$validar_login=mysqli_query($conexion,"SELECT*FROM usuarios WHERE Correo_Electronico='$Correo_Electronico'
and Password='$Password'");
if(mysqli_num_rows($validar_login)>0){
    $_SESSION['Usuario']=$Correo_Electronico;
    header("location: ./bienvenida.php");
    exit();
}else{
    echo'
    <script>
    alert("usuario no existe");
    window.location = "./index.php";
    </script>
    ';
    exit();
}
?>