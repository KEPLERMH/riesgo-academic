<?php
include 'conexion_be.php';
$Nombre_Completo=$_POST['Nombre_Completo'];
$Correo_Electronico=$_POST['Correo_Electronico'];
$Usuario=$_POST['Usuario'];
$Password=$_POST['Password'];
$query="INSERT INTO usuarios(Nombre_Completo,Correo_Electronico,Usuario,Password)
        VALUES('$Nombre_Completo','$Correo_Electronico','$Usuario','$Password')";
       

$verificar_Correo_Electronico=mysqli_query($conexion,"SELECT * FROM usuarios WHERE Correo_Electronico='$Correo_Electronico' ");
if(mysqli_num_rows($verificar_Correo_Electronico)>0){
    echo '  
    <script>
    alert("Este correo ya se encuentra registrado");
    window.location = "./index.php";
    </script>
    
    ';
    exit();
}

$verificar_Usuario=mysqli_query($conexion,"SELECT*FROM usuarios WHERE Usuario='$Usuario' ");
if(mysqli_num_rows($verificar_Usuario)>0){
    echo '  
    <script>
    alert("Este usuario ya se encuentra registrado");
    window.location = "./index.php";
    </script>
    
    ';
    exit();
}

$ejecutar =mysqli_query($conexion,$query);
if($ejecutar){
    echo '
    <script>
     alert("Usuario almacenado exitosamente");
     window.location = "./index.php";
     </script>
    
    ';
}else{
    echo '
    <script>
    alert("intentalo de nuevo");
    window.location = "./index.php";
    </script>
    
    ';
}
mysqli_close($conexion);
?>